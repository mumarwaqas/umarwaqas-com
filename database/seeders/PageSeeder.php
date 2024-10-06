<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use League\Csv\Reader;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 10 pages
        // Page::factory()->count(10)->create();

<<<<<<< HEAD
        $csvFile = base_path('database/seeders/pages.csv');
        $csv = Reader::createFromPath($csvFile, 'r');
        $csv->setHeaderOffset(0); // use the first row as the header
        
        $csvData = $csv->getRecords(); // returns an iterable object
        
        foreach ($csvData as $row) {
=======
        // Define the path to your CSV file
        $csvFile = base_path('database/seeders/pages.csv'); // Update the path if needed
        $csvData = array_map('str_getcsv', file($csvFile));
        $header = array_shift($csvData); // Remove the header row

        foreach ($csvData as $row) {
            $data = array_combine($header, $row); // Combine header with data

            // Insert the FAQ data into the database
>>>>>>> parent of ee563be (Latest)
            Page::create([
                'user_id'          => $row['user_id'] ?? null,
                'page_title'       => $row['page_title'] ?? null,
                'title'            => $row['title'] ?? null,
                'slug'             => $row['slug'] ?? null,
                'image'            => $row['image'] ?? null,
                'content'          => $row['content'] ?? null,
                'page_type'        => $row['page_type'] ?? null,
                'meta_title'       => $row['meta_title'] ?? null,
                'meta_description' => $row['meta_description'] ?? null,
                'meta_keywords'    => $row['meta_keywords'] ?? null,
                'canonical_url'    => $row['canonical_url'] ?? null,
                'meta_robots'      => $row['meta_robots'] ?? null,
            ]);
        }
    }
}
