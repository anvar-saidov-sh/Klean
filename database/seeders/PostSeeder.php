<?php

namespace Database\Seeders;

use App\Models\Post as ModelsPost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        ModelsPost::create([
            'user_id' => 1,
            'title' => '$request->title',
            'short_content' => '$request->short_content',
            'content' => '$request->content',
            'photo' => null,

        ]);
        ModelsPost::create([
            'user_id' => 1,
            'title' => '$request->title1',
            'short_content' => '$request->short_content2',
            'content' => '$request->content3',
            'photo' => null,

        ]);
    }
}
