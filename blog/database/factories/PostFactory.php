<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            'title' => fake()->name(),
            'slug' => Str::slug(fake()->name()),
            'content' => fake()->text(),
            'category_id' => Category::find(rand(1,9), ['id'])->id,
            'description' => fake()->text(),
            'posted' => rand(0, 1) ? 'yes' : 'not'
        ];
    }
}
