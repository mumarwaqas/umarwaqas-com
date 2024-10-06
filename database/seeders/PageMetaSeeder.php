<?php

namespace Database\Seeders;

use App\Models\PageMeta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageMetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 10 pages
        // PageMeta::factory()->count(10)->create();

        // Define the path to your CSV file
        $csvFile = base_path('database/seeders/page_meta.csv'); // Update the path if needed
        // Read the CSV data
        $csvData = array_map('str_getcsv', file($csvFile));
        $header = array_shift($csvData); // Remove the header row

        foreach ($csvData as $row) {
            // Skip rows where the number of values doesn't match the header count
            if (count($header) !== count($row)) {
                // Optionally log or output skipped rows for debugging
                continue; 
            }
            
            // Combine header and row values
            $data = array_combine($header, $row);

            // Insert the page data into the database
            PageMeta::create([
                'page_id'    => $data['page_id'] ?? null,    // Page ID Type field from the CSV
                'meta_key'   => $data['meta_key'] ?? null,   // Meta Key field from the CSV
                'meta_value' => $data['meta_value'] ?? null, // Meta Value field from the CSV
            ]);
        }
    }
}