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

            Sample::create([
                // User and Slug Information
                'user_id' => $data['user_id'] ?? null,                  // User ID (optional, might be null)
                'slug'    => Str::slug($data['title']) ?? null,         // Automatically generate slug from title
            
                // Basic Information
                'title'       => $data['title'] ?? null,                // Title of the content
                'content'     => $data['content'] ?? null,              // Content description
            
                // Academic Information
                'academic_level'   => $data['academic_level'] ?? null,  // Academic level (e.g., High School, College)
                'type_of_paper'    => $data['type_of_paper'] ?? null,   // Type of paper (e.g., Essay, Thesis)
                'citation_style'   => $data['citation_style'] ?? null,  // Citation style (e.g., APA, MLA)
                'number_of_words'  => $data['number_of_words'] ?? null, // Number of words in the paper
                'number_of_pages'  => $data['number_of_pages'] ?? null, // Number of pages
            
                // Image Information
                'image' => $data['image'],                              // Image (assuming it's required)
            
                // SEO Information
                'meta_title'       => $data['meta_title'] ?? null,          // Meta title for SEO
                'meta_description' => $data['meta_description'] ?? null,    // Meta description for SEO
                'meta_keywords'    => $data['meta_keywords'] ?? null,       // Meta keywords for SEO
                'canonical_url'    => $data['canonical_url'] ?? null,       // Canonical URL to avoid duplicate content
                'meta_robots'      => $data['meta_robots'] ?? null          // Meta robots (indexing preferences)
            ]);
        }

    }
}
