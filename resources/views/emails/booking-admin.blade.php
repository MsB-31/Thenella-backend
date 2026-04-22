@component('mail::message')
# New Booking Request

**Name:** {{ $booking->name }}
**Email:** {{ $booking->email }}
**Phone:** {{ $booking->phone ?? 'Not provided' }}
**Event Type:** {{ $booking->event_type }}
**Message:** {{ $booking->message ?? 'No message' }}

@component('mail::button', ['url' => config('app.url') . '/admin/bookings/' . $booking->id])
View in Admin Panel
@endcomponent

THENELLA Ministries Admin
@endcomponent

{{-- <x-mail::message>
# Introduction

The body of your message.

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message> --}}
