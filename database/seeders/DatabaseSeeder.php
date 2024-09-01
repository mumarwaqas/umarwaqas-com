<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ThemeOptionSeeder::class); // php artisan db:seed --class=ThemeOptionSeed
        $this->call(PageSeeder::class); // php artisan db:seed --class=PageSeeder
        $this->call(WriterSeeder::class); // php artisan make:seeder WriterSeeder
        $this->call(SampleSeeder::class); // php artisan db:seed --class=SampleSeeder
        $this->call(CustomerSeeder::class); // php artisan db:seed --class=CustomerSeeder
        $this->call(FaqSeeder::class); // php artisan db:seed --class=FaqSeeder
        
        \App\Models\User::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // In a seeder, route, or controller method

        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'info@allfreelancers.co.uk',
            'email_verified_at' => now(), // This sets the email as verified
            'password' => Hash::make('12345678'), // Use Hash::make to securely hash the password
        ]);

    }
}
