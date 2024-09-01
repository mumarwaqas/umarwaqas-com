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
                'customer_no' => $data['customer_no'] ?? null, // Assuming CSV has this column
                'image'       => $data['image'] ?? null,       // Path to the image in CSV
                'designation' => $data['designation'] ?? null, // Customer designation
                'name'        => $data['name'] ?? null,        // Customer name in CSV
                'about'       => $data['about'] ?? null,       // About information
                'rating'      => $data['rating'] ?? null,      // Rating in CSV
                'review'      => $data['review'] ?? null,      // Review text
                'date'        => $data['date'] ?? null,        // Date
            ]);
        }
    }
}
