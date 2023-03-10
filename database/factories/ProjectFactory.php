<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->unique()->words(2, true),
            'description' => fake()->boolean()
            ? fake()->paragraph()
            : '',
            // tolgo il fake perchè c'è unìimmagine di default nella migrazione
            // 'main_image' => fake()->unique()->imageUrl(640, 480, 'animals', true),
            'release_date' => fake()->date(),
            'repo_link' => fake()->unique()->url(),
        ];
    }
}