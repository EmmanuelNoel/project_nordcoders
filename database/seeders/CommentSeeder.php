<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('comments')->insert([
            [
                "title"=> "premier commentaire",
                "content" =>"contenu1",
                'commentable_id' => 10,
                'commentable_type' => "App\Models\Post",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "title"=> "deuxième commentaire",
                "content" =>"contenu2",
                'commentable_id' => 10,
                'commentable_type' => "App\Models\Post",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "title"=> "troisième commentaire",
                "content" =>"contenu3",
                'commentable_id' => 10,
                'commentable_type' => "App\Models\Video",
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
