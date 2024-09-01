<?php

namespace Database\Factories;

use App\Models\Page;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page>
 */
class PageFactory extends Factory
{
    protected $model = Page::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'content' => $this->faker->paragraph(),
            'meta_title' => $this->faker->sentence(),
            'meta_description' => $this->faker->text(150),
            'meta_keywords' => $this->faker->words(5, true),
            'canonical_url' => $this->faker->url(),
            'meta_robots' => $this->faker->randomElement(['index, follow', 'noindex, nofollow']),
        ];
    }
}
