<?php

namespace Database\Factories;

use App\Models\Writer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Writer>
 */

class WriterFactory extends Factory
{
    protected $model = Writer::class;

    public function definition()
    {
        $educationOptions = ['PhD', 'Master'];
        $competenceOptions = [
            'International Taxation Law',
            'Corporate Taxation Law',
            'Tax Policy and Administration',
            'Comparative Tax Law',
            'Estate and Gift Taxation Law'
        ];

        return [
            'user_id' => $this->faker->numberBetween(1, 11),
            'slug' => $this->faker->slug,
            'writer_no' => $this->faker->unique()->numerify('DM-######'),
            'image' => $this->faker->imageUrl(),
            'name' => $this->faker->name,
            'about' => $this->faker->text,
            'education' => $this->faker->randomElement($educationOptions),
            'experience' => $this->faker->numberBetween(1, 20) . ' Years',
            'rating' => $this->faker->randomFloat(2, 0, 5),
            'reviews' => $this->faker->numberBetween(0, 100),
            'orders' => $this->faker->numberBetween(0, 100),
            'success_rate' => $this->faker->randomFloat(2, 0, 100),
            'competences' => implode(', ', $this->faker->randomElements($competenceOptions, $this->faker->numberBetween(1, count($competenceOptions)))),
            'online' => $this->faker->boolean,
        ];
    }
}
