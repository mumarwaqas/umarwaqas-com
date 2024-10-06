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
        $competenceOptions = ['Philosophy,Education','History','Nursing','Healthcare','Social Work',Classic English Literature',English 101','Education'];

        return [
            'user_id' => $this->faker->numberBetween(1, 11),
            'slug' => $this->faker->slug,
            'writer_no' => $this->faker->unique()->numerify('DM-######'),
            'image' => $this->faker->imageUrl(),
            'name' => $this->faker->name,
            'about' => $this->faker->text,
            'education' => $this->faker->randomElement($educationOptions),
            'profession' => $this->faker->jobTitle,
            'status' => $this->faker->randomElement(['Active', 'Inactive']),
            'online' => $this->faker->boolean,
            'competences' => implode(', ', $this->faker->randomElements($competenceOptions, $this->faker->numberBetween(1, count($competenceOptions)))),
            'works' => $this->faker->sentences(3, true),
            'orders' => $this->faker->numberBetween(0, int2: 100),
            'review' => $this->faker->numberBetween(0, 100),
            'rating' => $this->faker->numberBetween(0, , 5),
            'success_rate' => $this->faker->randomElement(['99%', '100%']),
            'on_time_rate' => $this->faker->randomElement(['99%', '100%']),
            'delivery' => $this->faker->randomElement(['8h+', '4h+']),
            'subjects' => $this->faker->randomElement(['3+', '4+']),
            'experience' => $this->faker->numberBetween(1, 20) . ' Years',
            'reviews' => $this->faker->sentences(3, true),
        ];
    }
}
