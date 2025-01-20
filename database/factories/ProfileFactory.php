<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
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
            'slogan' => '職業訓練機関つくばインドネシア',
            'history' => fake()->text(500),
            'vision' => fake()->text(500),
            'mission' => fake()->text(500),
            'email' => 'tsukubaindonesia@gmail.com',
            'instagram' => fake()->url(),
            'whatsapp' => fake()->url(),
            'tiktok' => fake()->url(),
            'address' => fake()->text(),
            'map' => fake()->url(),
            'logo' => fake()->mimeType()
        ];
    }
}
