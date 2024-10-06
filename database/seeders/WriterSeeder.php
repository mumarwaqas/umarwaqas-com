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
            
            Writer::create([
                'user_id' => $data['user_id'],
                'slug' => Str::slug($data['name']),
                'writer_no' => $data['writer_no'],
                'name' => $data['name'],
                'image' => $data['image'],
                'about' => $data['about'],
                'education' => $data['education'],
                'profession' => $data['profession'],
                'status' => $data['status'],
                'online' => $data['online'],
                'competences' => $data['competences'],
                'works'=> $data['works'],
                'orders' => $data['orders'],
                'review' => $data['review'],
                'rating' => $data['rating'],
                'success_rate' => $data['success_rate'],
                'on_time_rate' => $data['on_time_rate'],
                'delivery' => $data['delivery'],
                'subjects' => $data['subjects'],
                'experience' => $data['experience'],
                'reviews' => $data['reviews'],
            ]);
        }
    }

}
