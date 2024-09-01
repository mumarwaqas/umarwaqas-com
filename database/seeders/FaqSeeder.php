<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create 50 FAQs using the factory
        // Faq::factory()->count(50)->create();

        // Define the path to your CSV file
        $csvFile = base_path('database/seeders/faqs.csv'); // Update the path if needed
        $csvData = array_map('str_getcsv', file($csvFile));
        $header = array_shift($csvData); // Remove the header row

        foreach ($csvData as $row) {
            $data = array_combine($header, $row); // Combine header with data

            // Insert the FAQ data into the database
            Faq::create([
                'question' => $data['question'] ?? null,   // Question field from the CSV
                'answer'   => $data['answer'] ?? null,     // Answer field from the CSV
            ]);
        }
    }
}
