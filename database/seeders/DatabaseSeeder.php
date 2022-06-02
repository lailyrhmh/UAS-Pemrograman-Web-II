<?php

namespace Database\Seeders;

use App\Models\Album;
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

        Album::create([
            'album_name' => 'Hot Sauce',
            'slug' => 'album-hot-sauce',
            'album_desc' => 'NCT DREAM 1st Full Album'
        ]);

        Album::create([
            'album_name' => 'Hello Future',
            'slug' => 'album-hello-future',
            'album_desc' => 'NCT DREAM 1st Repackage Album'
        ]);
    }
}
