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
    public function definition(): array
    {
        return [
            'name' => fake()->words(2, true),
            'image' => 'http://127.0.0.1:8000/uploads/projects/MjZ4jrdf8wCjgP929obClNlYsIH2LweMsLHjLtSq.jpg',
            'description' => fake()->words(6, true),
            'link' => 'https://www.facebook.com/',
        ];
    }
}
