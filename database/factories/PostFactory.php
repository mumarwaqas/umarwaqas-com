<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Faq>
 */

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 11),
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'image' => 'post-files/Web-Designing-in-Lahore.jpg', // $this->faker->imageUrl(),
            'content' => $this->faker->paragraph(),

            // SEO Fields
            'meta_title' => $this->faker->sentence(),
            'meta_description' => $this->faker->text(150),
            'meta_keywords' => $this->faker->words(5, true),
            'canonical_url' => $this->faker->url(),
            'meta_robots' => $this->faker->randomElement(['index, follow', 'noindex, nofollow']),
            'category_id' => $this->faker->numberBetween(1, 10)
        ];
    }
}
