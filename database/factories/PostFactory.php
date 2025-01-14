<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(10),
            'description' => fake('fa_IR')->paragraph(),
            'content' => fake()->paragraph(10),
            'status' => fake()->randomElement(['publish' , 'save']),
            'published_at' => fake()->dateTimeBetween('-1 years'),
            'user_id' => User::factory()->create()
        ];
    }
}
