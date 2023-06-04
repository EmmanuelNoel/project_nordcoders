<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('videos')->insert([
            [
                "title"=> "ma super vidéo",
                "url"=> "https://masupervideo.com",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "title"=> "ma super vidéo2",
                "url"=> "https://masupervideo2.com",
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
