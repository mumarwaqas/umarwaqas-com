<?php

namespace Database\Seeders;

use App\Models\Writer;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Writer::factory()->count(50)->create();

        $csvFile = base_path('database/seeders/writers.csv'); // Update the path if needed
        $csvData = array_map('str_getcsv', file($csvFile));
        $header = array_shift($csvData); // Remove header row
        
        foreach ($csvData as $row) {
            $data = array_combine($header, $row);
            
            // Create a new Writer record in the database
            Writer::create([
                'user_id' => $data['user_id'] ?? null,                    // User ID
                'slug' => Str::slug($data['name']),                       // Generate a slug from the name
                'writer_no' => $data['writer_no'] ?? null,                // Writer number from the CSV, or null if not provided
                'name' => $data['name'] ?? null,                          // Writer's name
                'image' => $data['image'] ?? null,                        // URL of the writer's image
                'about' => $data['about'] ?? null,                        // About section for the writer
                'education' => $data['education'] ?? null,                // Education details of the writer
                'experience' => $data['experience'] ?? null,              // Experience details of the writer
                'rating' => $data['rating'] ?? null,                      // Rating of the writer
                'reviews' => $data['reviews'] ?? null,                    // Reviews for the writer
                'orders' => $data['orders'] ?? null,                      // Orders associated with the writer
                'success_rate' => $data['success_rate'] ?? null,          // Success rate of the writer
                'competences' => $data['competences'] ?? null,            // Competences of the writer
                'online' => $data['online'] ?? null,                      // Online status of the writer
            ]);

        }
    }

}
