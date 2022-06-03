<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\Artist;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Artist::create([
            'artist_name' => 'NCT DREAM',
            'slug' => 'nct-dream'
        ]);

        Artist::create([
            'artist_name' => 'ENHYPEN',
            'slug' => 'enhypen'
        ]);

        Album::create([
            'artist_id' => 1,
            'album_name' => 'Hot Sauce',
            'album_img' => 'hotsauce.jpg',
            'slug' => 'album-hot-sauce',
            'album_desc' => 'NCT DREAM 1st Full Album'
        ]);

        Album::create([
            'artist_id' => 1,
            'album_name' => 'Hello Future',
            'album_img' => 'hotsauce1.jpg',
            'slug' => 'album-hello-future',
            'album_desc' => 'NCT DREAM 1st Repackage Album'
        ]);

        Album::create([
            'artist_id' => 2,
            'album_name' => 'Border: Day One',
            'album_img' => 'hotsauce2.jpg',
            'slug' => 'album-border-day-one',
            'album_desc' => 'ENHYPEN 1st Mini Album'
        ]);
    }
}
