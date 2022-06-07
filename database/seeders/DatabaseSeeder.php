<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Image;
use App\Models\Label;
use App\Models\Staff;
use App\Models\Talent;
use App\Models\Trainee;
use App\Models\User;
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

        User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => encrypt('ayangneysa')
        ]);
        
        // User::create([
        //     'name' => 'Neysa Nisrina',
        //     'email' => 'neysa.nisrina@gmail.com',
        //     'password' => encrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Laily Rachmah',
        //     'email' => 'lailyrhmh11@gmail.com',
        //     'password' => encrypt('password')
        // ]);

        Talent::create([
            'label_id' => '2',
            'talent_name' => 'NCT DREAM',
            'slug' => 'nct-dream'
        ]);

        Talent::create([
            'label_id' => '1',
            'talent_name' => 'ENHYPEN',
            'slug' => 'enhypen'
        ]);

        Trainee::create([
            'label_id' => '1',
            'trainee_name' => 'Stefaney',
            'slug' => 'stefaney'
        ]);

        
        Trainee::create([
            'label_id' => '2',
            'trainee_name' => 'Hilley',
            'slug' => 'hilley'
        ]);

        Staff::create([
            'label_id' => '2',
            'staff_name' => 'Milan',
            'slug' => 'milan',
            'division' => 'CEO'
        ]);

        Staff::create([
            'label_id' => '1',
            'staff_name' => 'Alea',
            'slug' => 'alea',
            'division' => 'CEO'
        ]);

        Staff::create([
            'label_id' => '1',
            'staff_name' => 'Ralea',
            'slug' => 'ralea',
            'division' => 'CO-Director'
        ]);

        Label::create([
            'label_name' => 'Belift+',
            'branch' => 'Music',
        ]);

        Label::create([
            'label_name' => 'SM Ent',
            'branch' => 'Music, Actor, Models',
        ]);

        Album::create([
            'id' => 1,
            'talent_id' => 1,
            'title' => 'Hot Sauce',
            // 'artist' => 'Sauce',
            'slug' => 'album-hot-sauce',
            'description' => 'NCT DREAM 1st Full Album'
        ]);

        // Album::create([
        //     'talent_id' => 1,
        //     'album_name' => 'Hello Future',
        //     'slug' => 'album-hello-future',
        //     'album_desc' => 'NCT DREAM 1st Repackage Album'
        // ]);

        // Album::create([
        //     'talent_id' => 2,
        //     'album_name' => 'Border: Day One',
        //     'slug' => 'album-border-day-one',
        //     'album_desc' => 'ENHYPEN 1st Mini Album'
        // ]);

        Image::create([
            'album_id' => 1,
            'img' => 'hotsauce.jpg',
        ]);

        Image::create([
            'album_id' => 2,
            'img' => 'hotsauce1.jpg',
        ]);

        Image::create([
            'album_id' => 1,
            'img' => 'hotsauce2.jpg',
        ]);
    }
}
