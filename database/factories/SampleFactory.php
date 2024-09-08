<?php

namespace Database\Factories;

use App\Models\Sample;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sample>
 */

class SampleFactory extends Factory
{

    protected $model = Sample::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 11),
            'slug' => $this->faker->slug,
            'title' => $this->faker->sentence,
            'content' => $this->faker->text(1000),
            'academic_level' => $this->faker->randomElement(['Undergraduate', 'Graduate', 'PhD']),
            'type_of_paper' => $this->faker->randomElement(['Essay', 'Research Paper', 'Case Study', 'Report']),
            'citation_style' => $this->faker->randomElement(['APA', 'MLA', 'Chicago', 'Harvard']),
            'number_of_words' => $this->faker->numberBetween(500, 5000),
            'number_of_pages' => $this->faker->numberBetween(1, 20),
            'image' => $this->faker->imageUrl(),

            'meta_title' => $this->faker->sentence(),
            'meta_description' => $this->faker->text(150),
            'meta_keywords' => $this->faker->words(5, true),
            'canonical_url' => $this->faker->url(),
            'meta_robots' => $this->faker->randomElement(['index, follow', 'noindex, nofollow']),
        ];
    }
}




