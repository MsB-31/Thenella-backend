<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\BookingConfirmationMail;
use App\Mail\BookingAdminNotificationMail;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;


class BookingController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'       => 'required|string|max:255',
            'email'      => 'required|email|max:255',
            'phone'      => 'nullable|string|max:20',
            'event_type' => 'required|in:concert,church-service,conference,wedding,other',
            'message'    => 'nullable|string|max:2000',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors'  => $validator->errors(),
            ], 422);
        }

        // Créer la réservation en base
        $booking = Booking::create($validator->validated());

        // Envoyer email de confirmation au client
        Mail::to($booking->email)->send(new BookingConfirmationMail($booking));

        // Notifier l'admin
        Mail::to(config('app.admin_email', 'contact@thenellaministries.com'))
            ->send(new BookingAdminNotificationMail($booking));

        return response()->json([
            'success' => true,
            'message' => 'Booking request received successfully.',
            'data'    => $booking,
        ], 201);
    }
}
