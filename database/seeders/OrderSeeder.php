<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OrderSeeder extends Seeder
{
    public function run()
    {
        $path = base_path('database/seeders/orders.csv'); 

        // Open the CSV file
        if (($handle = fopen($path, 'r')) !== false) {
            // Get the headers
            $headers = fgetcsv($handle, 1000, ',');

            $rowNumber = 1; // To keep track of the row number

            while (($data = fgetcsv($handle, 1000, ',')) !== false) {
                $rowNumber++;

                // Trim whitespace and sanitize data
                $data = array_map('trim', $data);

                // Ensure the number of headers matches the number of columns in the data row
                if (count($headers) !== count($data)) {
                    // Log the error with details
                    $this->command->error("Row $rowNumber: Data does not match header count. Skipping row. Data: " . implode(', ', $data));
                    continue; // Skip this row
                }

                // Map headers to data
                $order = array_combine($headers, $data);

                // Basic validation of required fields
                if (empty($order['fullname']) || empty($order['email'])) {
                    $this->command->error("Row $rowNumber: Required fields are missing. Skipping row.");
                    continue;
                }

                // Insert logic here
                $userData = [
                    'name'    => $order['fullname'],
                    'email'   => $order['email'],
                    'password'=> Hash::make('12345678'), // Default password
                ];

                $user = DB::table('users')->where('email', $order['email'])->first();

                if (!$user) {
                    $userId = DB::table('users')->insertGetId($userData);
                } else {
                    $userId = $user->id;
                }

                $profileData = [
                    'user_id'    => $userId,
                    'phone'      => $order['phone'],
                    'email'      => $order['alternate_email'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ];

                DB::table('profiles')->insert($profileData);

                $orderData = [
                    'user_id'           => $userId,
                    'order_no'          => $order['serial_num'],
                    'academic_level'    => $order['academic_level'],
                    'subject'           => $order['subject_area'],
                    'writer'            => $order['writer'],
                    'topic'             => $order['topic'],
                    'type_of_paper'     => $order['paper_type'],
                    'number_of_words'   => $order['word_count'],
                    'number_of_pages'   => $order['number_of_pages'],
                    'citation_style'    => $order['citation_style'],
                    'number_of_sources' => $order['sources_count'],
                    'delivery_time'     => $order['delievry_time'],
                    'paper_description' => $order['paper_description'],
                    'order_status'      => $order['order_status'],
                    'payment_status'    => $order['payment_status'],
                    'draft_file'        => $order['draft_file'],
                    'revision_file'     => $order['revision_file'],
                    'final_file'        => $order['final_file'],
                    'ai_file'           => $order['ai_file'],
                    'plagiarism_file'   => $order['plagiarism_file'],
                    'grammarly_file'    => $order['grammarly_file'],
                    'attachment'        => $order['attachment'],
                    'coupon_code'       => $order['coupon_code'],
                    'actual_price'      => $order['actual_price'],
                    'discounted_price'  => $order['discounted_price'],
                    'final_price'       => $order['final_price'],
                    'user_ip'           => $order['user_ip'],
                    'user_agent'        => $order['user_agent'],
                    'created_at'        => now(),
                    'updated_at'        => now(),
                ];

                DB::table('orders')->insert($orderData);
            }

            fclose($handle);
        }

        $this->command->info('Order data seeded from CSV file.');
    }
}
