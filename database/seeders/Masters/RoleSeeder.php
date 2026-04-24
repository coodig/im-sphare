<?php

namespace Database\Seeders\Masters;

use App\Models\Masters\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name' => 'Super Admin', 'slug' => 'super-admin', 'level' => 100],
            ['name' => 'Admin', 'slug' => 'admin', 'level' => 50],
            ['name' => 'User', 'slug' => 'user', 'level' => 1],
        ];

        foreach ($roles as $role) {
            Role::updateOrCreate(['slug' => $role['slug']], $role);
        }
    }
}
