<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    public function definition(): array
    {
        return [
            'author_id' => User::query()->inRandomOrder()->first()->id,
            'title' => $this->faker->title,
            'slug' => $this->faker->slug,
            'content' => $this->faker->text,
            'image' => $this->faker->imageUrl(),
            'is_published' => $this->faker->boolean,
            'published_at' => $this->faker->dateTime,
        ];
    }
}
