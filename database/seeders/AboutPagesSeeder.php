<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutPagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_about')->insert([
            'user_id'=> 7,
            'title' => 'About Me',
                'description' => 'I am Adarsh, a passionate computer science student and developer.',
                'image' => 'about/adash.jpg',
                'created_at' => now(),
                'updated_at' => now(),

        ]);
    }
}
