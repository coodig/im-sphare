<?php

namespace Database\Seeders;

use App\Models\PrivacyLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrivacyLevelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PrivacyLevel::insert([
            ['id' => 1, 'name' => 'public', 'label' => 'Public'],
            ['id' => 2, 'name' => 'private', 'label' => 'Private'],
            ['id' => 3, 'name' => 'friends_only', 'label' => 'Friends Only'],
            ['id' => 4, 'name' => 'selected_users', 'label' => 'Selected Users'],
        ]);
    }
}
