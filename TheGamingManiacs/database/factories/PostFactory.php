<?php

namespace Database\Factories;
use App\Models\Post;
use App\Models\Category;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    protected $model = Post::class;

    public function definition()
    {
        $category = Category::inRandomOrder()->first();

        return [
            'title' => $this->faker->sentence,
            'meta_description' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'body' => $this->faker->paragraph,
            'image' => $this->faker->imageUrl(),
            'category_id' => $category->id,
        ];
    }
}
