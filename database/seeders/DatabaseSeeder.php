<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use Carbon\Carbon;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            'name' => 'Risyad Ridwansyah',
            'email' => 'risyadridwansyah1@gmail.com',
            'password' => bcrypt('risyadganteng')
        ]);

        // Post::create([
        //     'rapat' => 'Membahas Tentang Laut',
        //     'tanggal' => Carbon::parse('2022-07-30'),
        //     'tempat' => 'Bandung',
        //     'notulen' => 'notulen',
        //     'foto' => 'foto',
        //     'vidio' => 'vidio',
        //     'link' => 'https://drive.google.com/drive/folders/1rYy-gf1rSxznwoqsHHbCWQJfpdwihG4Z?usp=sharing',
        //     'data' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex quisquam ducimus soluta pariatur nobis, sunt ipsa! Nesciunt, voluptate suscipit totam quibusdam magni amet natus vero accusantium temporibus, ullam labore. Laborum.',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex quisquam ducimus soluta pariatur nobis,',
        //     'slug' => 'membahas-tentang-laut',
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'rapat' => 'Membahas Tentang Sungai',
        //     'tanggal' => Carbon::parse('2022-07-30'),
        //     'tempat' => 'Jakarta',
        //     'notulen' => 'notulen',
        //     'foto' => 'foto',
        //     'vidio' => 'vidio',
        //     'link' => 'https://drive.google.com/drive/folders/1rYy-gf1rSxznwoqsHHbCWQJfpdwihG4Z?usp=sharing',
        //     'data' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex quisquam ducimus soluta pariatur nobis, sunt ipsa! Nesciunt, voluptate suscipit totam quibusdam magni amet natus vero accusantium temporibus, ullam labore. Laborum.',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex quisquam ducimus soluta pariatur nobis,',
        //     'slug' => 'membahas-tentang-sungai',
        //     'user_id' => 1
        // ]);
    }
}
