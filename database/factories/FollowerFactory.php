<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Follower>
 */
class FollowerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userId = User::inRandomOrder()->first()?->id;
        $followerId = User::inRandomOrder()->first()?->id;

        while($userId === $followerId){

            $followerId = User::inRandomOrder()->first()?->id;
        }
        return [
            'user_id' => $userId,
            'follower_id' =>$followerId,
            'status' =>$this->faker->randomElement(['pending','accepted','blocked']),
            'is_favorite' => $this->faker->boolean(20),
            'notifications_enabled'=>$this->faker->boolean(20),
            'muted'=>$this->faker->boolean(10),
            'remarks'=>$this->faker->optional()->sentence(),
            'blocked_at'=>null,
            'unfollowed_at'=>null
        ];
    }
}
