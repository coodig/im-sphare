<?php

namespace Database\Seeders\Masters;

use App\Models\PrivacyLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrivacyLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $privacyLevels = [
            [
                'name' => 'Public',
                'slug' => 'public',
                'color' => 'bg-green-500'
            ],
            [
                'name' => 'Private',
                'slug' => 'private',
                'color' => 'bg-red-500'
            ],
            [
                'name' => 'Followers-only',
                'slug' => 'followers-only',
                'color' => 'bg-blue-500'

            ]
        ];

        foreach ($privacyLevels as $level) {
            PrivacyLevel::updateOrCreate(
                [
                    'slug' => $level['slug']
                ],
                $level
            );
        }
    }
}
