<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition()
    {
        return [
            'user_id'           => \App\Models\User::factory(), // or a specific user ID
            'order_no'          => $this->faker->unique()->numerify('DM-######'),
            'source'            => $this->faker->randomElement(['Website', 'Mobile', 'Agent']),
            'academic_level'    => $this->faker->randomElement(['O-Level', 'A-Level', 'Undergraduate', 'Master', 'PhD']),
            'subject'           => $this->faker->word,
            'writer'            => $this->faker->name,
            'topic'             => $this->faker->sentence,
            'type_of_paper'     => $this->faker->randomElement(['Essay', 'Report', 'Thesis']),
            'number_of_words'   => $this->faker->numberBetween(1000, 5000),
            'number_of_pages'   => $this->faker->numberBetween(1, 20),
            'citation_style'    => $this->faker->randomElement(['APA', 'MLA', 'Chicago']),
            'number_of_sources' => $this->faker->numberBetween(1, 10),
            'delivery_time'     => $this->faker->dateTimeBetween('now', '+2 weeks'),
            'paper_description' => $this->faker->paragraph,
            'order_status'      => $this->faker->randomElement(['pending', 'completed', 'in-progress', 'refund', 'cancelled']),
            'payment_status'    => $this->faker->randomElement(['paid', 'unpaid']),
            'draft_file'        => null, // or a path to a file if applicable
            'revision_file'     => null, // or a path to a file if applicable
            'final_file'        => null, // or a path to a file if applicable
            'ai_file'           => null, // or a path to a file if applicable
            'plagiarism_file'   => null, // or a path to a file if applicable
            'grammarly_file'    => null, // or a path to a file if applicable
            'attachment'        => null, // or a path to a file if applicable
            'coupon_code'       => $this->faker->optional()->lexify('COUPON-?????'),
            'actual_price'      => $this->faker->randomFloat(2, 50, 500),
            'discounted_price'  => $this->faker->randomFloat(2, 30, 450),
            'final_price'       => $this->faker->randomFloat(2, 20, 400),
            'user_ip'           => $this->faker->ipv4,
            'user_agent'        => $this->faker->userAgent,
            'created_at'        => now(),
            'updated_at'        => now(),
        ];
    }
}
