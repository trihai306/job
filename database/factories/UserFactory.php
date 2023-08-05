<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'code' => fake()->unique()->numberBetween(100000, 999999),
            'phone' => fake()->unique()->phoneNumber(),
            'avatar' => fake()->imageUrl(640, 480, 'people', true),
            'money' => fake()->numberBetween(100000, 999999),
            'freezing_money' => fake()->numberBetween(100000, 999999),
            'level_id' => fake()->numberBetween(1, 10),
            'status' => fake()->numberBetween(0, 1),
            'bank_name' => fake()->name(),
            'bank_account' => fake()->bankAccountNumber(),
            'bank_id' => fake()->numberBetween(100000, 999999),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
