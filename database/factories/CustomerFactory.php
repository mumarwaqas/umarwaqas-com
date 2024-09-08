<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'      => $this->faker->numberBetween(1, 11),
            'customer_no'  => $this->faker->unique()->numerify('DM-######'),   // Generate a unique customer number
            'image'        => $this->faker->imageUrl(640, 480, 'people'),      // Generate a random image URL
            'name'         => $this->faker->name,                              // Generate a random name
            'review'       => $this->faker->paragraph,                         // Generate a random "review" text
            'about'        => $this->faker->paragraph,                         // Generate a random "about" text
            'text'         => $this->faker->sentence,                          // Generate a random "text" text
            'rating'       => $this->faker->randomFloat(2, 0, 5),              // Random rating between 0 and 5
            'no_of_review' => $this->faker->numberBetween(250, 500),           // Generate a random review sentence
            'date'         => $this->faker->date(),                            // Generate a random date
        ];
    }
}
