<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GalleryImage;


class GalleryController extends Controller
{
    public function index()
    {
        $images = GalleryImage::where('is_active', true)
            ->orderBy('sort_order')
            ->get()
            ->map(function ($img) {
                return [
                    'id'         => $img->id,
                    'url'        => asset('storage/' . $img->image_path),
                    'caption_en' => $img->caption_en,
                    'caption_fr' => $img->caption_fr,
                ];
            });

        return response()->json(['success' => true, 'data' => $images]);
    }
}
