<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Videoa>
 */
class VideoaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => 'Title10',
            'description' => 'Test5',
            'author' => 'M.Haseeb Afandi',
            'type' => '4K & HD Footage',
            'clip_type' => 'Free',
            'Category' => 'Holiday',
            'Category2' => 'family',
            'resolution' => '1280 x 648',
            'duration' => '00:31',
            'Video' => '169067690664c5aeaa2ee5c6.35162817.mp4',
            'thumbnail' => '169067690664c5aeaa316423.31392914.jpg',
        ];
    }
}
