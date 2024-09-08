<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Faq>
 */

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 10),
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'image' => 'category-files/post-1-1725434851.webp', // $this->faker->imageUrl(),
            'description' => $this->faker->paragraph(),
            // SEO Fields
            'meta_title' => $this->faker->sentence(),
            'meta_description' => $this->faker->text(150),
            'meta_keywords' => $this->faker->words(5, true),
            'canonical_url' => $this->faker->url(),
            'meta_robots' => $this->faker->randomElement(['index, follow', 'noindex, nofollow']),
        ];
    }
}
