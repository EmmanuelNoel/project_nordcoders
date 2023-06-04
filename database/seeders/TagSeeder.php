<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tags')->insert([
            [
                "name"=> "PHP",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "name"=> "JS",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "name"=> "Html",
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                "name"=> "Css",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "name"=> "Sass",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
