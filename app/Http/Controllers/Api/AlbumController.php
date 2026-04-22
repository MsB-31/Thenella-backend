<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Album;

class AlbumController extends Controller
{
    public function index()
    {
        $albums = Album::orderBy('sort_order')->orderByDesc('year')->get()
            ->map(function ($album) {
                return [
                    'id'            => $album->id,
                    'title'         => $album->title,
                    'year'          => $album->year,
                    'description_en'=> $album->description_en,
                    'description_fr'=> $album->description_fr,
                    'cover_image'   => $album->cover_image
                                        ? asset('storage/' . $album->cover_image)
                                        : null,
                    'apple_music_url' => $album->apple_music_url,
                    'spotify_url'   => $album->spotify_url,
                    'is_featured'   => $album->is_featured,
                ];
            });

        return response()->json(['success' => true, 'data' => $albums]);
    }
}
