<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

class LoginActivityFactory extends Factory
{
    public function definition(): array
    {
        // Random status uthao
        $status = Status::inRandomOrder()->first() ?? Status::factory()->create();

        // Agar status failed ya locked hai, toh failure reason daalo, warna null
        $isFailed = in_array($status->slug, ['failed', 'locked_out']);
        $reasons = ['Invalid Password', 'Account Suspended', 'Rate Limited (Too many attempts)'];

        return [
            // 90% chance hai ki user logged in hoga, 10% chance hacker (null) hoga
            'user_id' => $this->faker->boolean(90) ? User::inRandomOrder()->first()->id ?? User::factory() : null,
            'status_id' => $status->id,
            'ip_address' => $this->faker->ipv4(),
            'user_agent' => $this->faker->userAgent(),
            'os' => $this->faker->randomElement(['Windows', 'macOS', 'iOS', 'Android', 'Linux']),
            'browser' => $this->faker->randomElement(['Chrome', 'Safari', 'Firefox', 'Edge']),
            'device_type' => $this->faker->randomElement(['Desktop', 'Mobile', 'Tablet']),
            'failure_reason' => $isFailed ? $this->faker->randomElement($reasons) : null,
            'city' => $this->faker->city(),
            'country' => $this->faker->country(),
            // Pichle 30 dino ka koi random time
            'created_at' => $this->faker->dateTimeBetween('-30 days', 'now'),
            'updated_at' => now(),
        ];
    }
}
