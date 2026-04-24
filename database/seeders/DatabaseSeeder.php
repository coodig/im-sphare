<?php

namespace Database\Seeders;

use App\Models\Follower;
use App\Models\LoginActivity;
use App\Models\Masters\Role;
use App\Models\User;
use Database\Seeders\Masters\CountrySeeder;
use Database\Seeders\Masters\GenderSeeder;
use Database\Seeders\Masters\RoleSeeder;
use Database\Seeders\Masters\StateSeeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([

            // CountrySeeder::class
            // RoleSeeder::class
            // PrivacyLevelsSeeder::class
            // GenderSeeder::class
            StateSeeder::class
        ]);
    }
}
