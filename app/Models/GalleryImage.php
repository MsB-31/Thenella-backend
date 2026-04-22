<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    protected $fillable = [
        'image_path', 'caption_en', 'caption_fr', 'sort_order', 'is_active'
    ];
}
