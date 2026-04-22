<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
        'title', 'year', 'description_en', 'description_fr',
        'cover_image', 'apple_music_url', 'spotify_url',
        'is_featured', 'sort_order'
    ];
}
