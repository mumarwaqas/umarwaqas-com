<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Generate 50 customers with fake data
        // Customer::factory()->count(50)->create();

        // Define the path to your CSV file
        $csvFile = base_path('database/seeders/customers.csv'); // Update the path if needed
        $csvData = array_map('str_getcsv', file($csvFile));
        $header = array_shift($csvData); // Remove the header row

        foreach ($csvData as $row) {
            $data = array_combine($header, $row); // Combine header with data

            // Create customer using data from CSV
            Customer::create([
                'user_id'      => $data['user_id'],
                'customer_no'  => $data['customer_no'],  // Assuming CSV has this column
                'image'        => $data['image'],        // Path to the image in CSV
                'name'         => $data['name'],         // Customer name in CSV
                'review'       => $data['review'],       // Review information
                'about'        => $data['about'],        // About information
                'text'         => $data['text'],         // Text information
                'rating'       => $data['rating'],       // Rating in CSV
                'no_of_review' => $data['no_of_review'], // Review number
                'date'         => $data['date'],         // Date
            ]);
        }
    }
}
