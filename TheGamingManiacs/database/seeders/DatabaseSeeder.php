<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
use Faker\Factory;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         // Create categories
         $categories = [
            ['name' => 'Hot', 'slug' => 'hot'],
            ['name' => 'Feature', 'slug' => 'feature'],
            ['name' => 'Trending', 'slug' => 'trending'],
            ['name' => 'Strategy', 'slug' => 'strategy'],
            ['name' => 'Review', 'slug' => 'review'],
        ];
        foreach ($categories as $category) {
            Category::create($category);
        }

        // Create posts
        $faker = Factory::create();
        $numPosts = 50;
        for ($i = 0; $i < $numPosts; $i++) {
            $title = $faker->sentence;
            $slug = Str::slug($title, '-');
            $metaDescription = $faker->sentence;
            $body = $faker->paragraphs(5, true);
            $image = $faker->imageUrl();
            $categories = Category::inRandomOrder()->limit(rand(2, 3))->get();

            $post = new Post([
                'title' => $title,
                'slug' => $slug,
                'meta_description' => $metaDescription,
                'body' => $body,
                'image' => $image
            ]);
            $post->save();
            $post->categories()->sync($categories);
        }
    }
}
