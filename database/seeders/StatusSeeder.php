<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    public function run(): void
    {
        $statuses = [
            ['name' => 'Success', 'slug' => 'success', 'group' => 'login', 'color' => 'text-green-500 bg-green-500/10 border-green-500/20'],
            ['name' => 'Failed', 'slug' => 'failed', 'group' => 'login', 'color' => 'text-orange-500 bg-orange-500/10 border-orange-500/20'],
            ['name' => 'Locked Out', 'slug' => 'locked_out', 'group' => 'login', 'color' => 'text-red-500 bg-red-500/10 border-red-500/20'],
            ['name' => 'Pending 2FA', 'slug' => 'pending_2fa', 'group' => 'login', 'color' => 'text-blue-500 bg-blue-500/10 border-blue-500/20'],
        ];

        foreach ($statuses as $status) {
            Status::updateOrCreate(['slug' => $status['slug']], $status);
        }
    }
}
