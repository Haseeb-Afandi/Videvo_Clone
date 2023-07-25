<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'author_id' => $this->faker->numberBetween(1, 100),
            'clip_type' => $this->faker->word(),
            'class' => $this->faker->word(),
            'license_type' => $this->faker->word(),
            'resolution' => $this->faker->numberBetween(320, 4000),
            'duration' => $this->faker->numberBetween(1, 200),
            'Video' => $this->faker->word(),
        ];
    }
}
