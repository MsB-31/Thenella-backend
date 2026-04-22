<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Album;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Album::insert([
            [
                'title'          => 'Cœur Nouveau',
                'year'           => 2019,
                'description_en' => 'Breakthrough album with 10 tracks of spiritual transformation',
                'description_fr' => 'Album révélation avec 10 titres de transformation spirituelle',
                'apple_music_url'=> 'https://music.apple.com/us/album/c%C5%93ur-nouveau/1454733587',
                'is_featured'    => true,
                'sort_order'     => 1,
                'created_at'     => now(),
                'updated_at'     => now(),
            ],
            [
                'title'          => 'Une Autre Dimension',
                'year'           => 2024,
                'description_en' => 'Latest album capturing praise, worship, and testimony themes',
                'description_fr' => 'Dernier album capturant des thèmes de louange, d\'adoration et de témoignage',
                'apple_music_url'=> 'https://music.apple.com/sn/album/une-autre-dimension/1786566551',
                'is_featured'    => true,
                'sort_order'     => 2,
                'created_at'     => now(),
                'updated_at'     => now(),
            ],
            [
                'title'          => 'Je te bénirai (Live)',
                'year'           => 2024,
                'description_en' => 'Live single reflecting grateful worship and praise',
                'description_fr' => 'Single en direct reflétant une adoration et une louange reconnaissantes',
                'apple_music_url'=> 'https://music.apple.com/gb/album/je-te-b%C3%A9nirai-live-single/1755108856',
                'is_featured'    => false,
                'sort_order'     => 3,
                'created_at'     => now(),
                'updated_at'     => now(),
            ],
        ]);
    }
}
