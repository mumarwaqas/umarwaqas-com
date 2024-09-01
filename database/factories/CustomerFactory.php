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
            'customer_no' => $this->faker->unique()->numerify('DM-######'),   // Generate a unique customer number
            'image'       => $this->faker->imageUrl(640, 480, 'people'),      // Generate a random image URL
            'designation' => $this->faker->jobTitle,                          // Generate a random designation
            'name'        => $this->faker->name,                              // Generate a random name
            'about'       => $this->faker->paragraph,                         // Generate a random "about" text
            'rating'      => $this->faker->randomFloat(2, 0, 5),              // Random rating between 0 and 5
            'review'      => $this->faker->sentence,                          // Generate a random review sentence
            'date'        => $this->faker->date(),                            // Generate a random date
        ];
    }
}
