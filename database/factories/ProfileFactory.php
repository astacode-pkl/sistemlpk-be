<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'lpk tsukuba indonesia',
            'email' => 'tsukubaindonesia@gmail.com',
            'instagram' => fake()->url(),
            'whatsapp' => fake()->url(),
            'tiktok' => fake()->url(),
            'address' => fake()->text(),
            'map' => fake()->url(),
            'logo' => fake()->file()
        ];
    }
}
