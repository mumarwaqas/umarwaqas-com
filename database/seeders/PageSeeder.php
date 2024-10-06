<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
<<<<<<< HEAD
>>>>>>> parent of ee563be (Latest)
=======
>>>>>>> parent of ee563be (Latest)
=======
        // Define the path to your CSV file
        $csvFile = base_path('database/seeders/pages.csv'); // Update the path if needed
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
>>>>>>> parent of fc9fe7c (Latest)
            Page::create([
                'user_id'          => $data['user_id'] ?? null,
                'page_title'       => $data['page_title'] ?? null,          // Page Title field from the CSV
                'title'            => $data['title'] ?? null,               // Title field from the CSV
                'slug'             => $data['slug'] ?? null,                // Slug field from the CSV
                'image'            => $data['image'] ?? null,               // Image field from the CSV
                'content'          => $data['content'] ?? null,             // Content field from the CSV
                'page_type'        => $data['page_type'] ?? null,           // Page Type field from the CSV
                'meta_title'       => $data['meta_title'] ?? null,          // Meta title field from the CSV
                'meta_description' => $data['meta_description'] ?? null,    // Meta description field from the CSV
                'meta_keywords'    => $data['meta_keywords'] ?? null,       // Meta keywords field from the CSV
                'canonical_url'    => $data['canonical_url'] ?? null,       // Canonical URL field from the CSV
                'meta_robots'      => $data['meta_robots'] ?? null,         // Meta robots field from the CSV
            ]);
        }
    }
}