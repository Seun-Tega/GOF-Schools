<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class NewsEventFactory extends Factory
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
            'type' => $this->faker->randomElement(['news', 'events']),
            'location' => $this->faker->randomElement(['nigeria', 'cote']),
            'event_date' => $this->faker->date(),
            'event_time' => $this->faker->time(),
            'event_venue' => $this->faker->city(),
            'news_content' => $this->faker->paragraph(3, true),
            'photo' => $this->faker->image(storage_path('app/public/uploads'), 640, 480, null, false),

        ];
    }
}
