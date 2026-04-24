<?php

namespace Database\Seeders\Masters;

use App\Models\Masters\Gender;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genders = [
            [
                'name' => 'Male',
                'slug' => 'male',

            ],
            [
                'name' => 'Female',
                'slug' => 'female'
            ],
            [
                'name' => 'Other',
                'slug' => 'other'
            ]
        ];
        foreach ($genders as $gender) {
            Gender::updateOrCreate(
                ['slug' => $gender['slug']],
                $gender
            );
        }
    }
}
