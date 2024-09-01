<?php

namespace Database\Seeders;

use App\Models\Sample;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample::factory()->count(50)->create();

        $csvFile = base_path('database/seeders/samples.csv'); // Update the path if needed
        $csvData = array_map('str_getcsv', file($csvFile));
        $header = array_shift($csvData); // Remove header row

        foreach ($csvData as $row) {
            $data = array_combine($header, $row);

            // Insert data into the Sample table
            Sample::create([
                'slug'            => Str::slug($data['title']), // Generate a URL-friendly slug from the title
                'title'           => $data['title'] ?? null,   // Set the title, default to null if not present
                'academic_level'  => $data['academic_level'] ?? null, // Set the academic level, default to null if not present
                'type_of_paper'   => $data['type_of_paper'] ?? null, // Set the type of paper, default to null if not present
                'citation_style'  => $data['citation_style'] ?? null, // Set the citation style, default to null if not present
                'number_of_words' => $data['number_of_words'] ?? null, // Set the number of words, default to null if not present
                'number_of_pages' => $data['number_of_pages'] ?? null, // Set the number of pages, default to null if not present
                'image'           => $data['image'] ?? null, // Set the image URL, default to null if not present
            ]);
        }

    }
}
