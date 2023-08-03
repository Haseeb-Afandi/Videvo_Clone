<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Audioa>
 */
class AudioaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => 'Title1',
            'description' => 'Test5',
            'author' => 'M.Haseeb Afandi',
            'type' => 'Sound Effects',
            'clip_type' => 'Free',
            'Category' => 'country',
            'Category2' => 'family',
            'resolution' => '1280 x 648',
            'duration' => '00:31',
            'Audio' => '169039809764c16d91a4b0d7.89661717.mp3',
            'thumbnail' => '169067690664c5aeaa316423.31392914.jpg',
        ];
    }
}
