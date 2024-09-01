<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('customer_no')->unique();    // Customer number
            $table->string('image')->nullable();        // Image URL or path
            $table->string('designation')->nullable();  // Designation Name
            $table->string('name')->nullable();         // Customer name
            $table->longText('about')->nullable();      // About information
            $table->string('rating')->nullable();       // Rating with two decimal points
            $table->string('review')->nullable();       // Review text
            $table->string('date')->nullable();         // Date field
            $table->softDeletes();                      // Deleted timestamps
            $table->timestamps();                       // Created and updated timestamps        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
