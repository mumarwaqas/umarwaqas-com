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
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('customer_no')->unique();    // Customer number
            $table->string('image')->nullable();        // Image URL or path
            $table->string('name')->nullable();         // Customer name
            $table->longText('review')->nullable();     // Review text
            $table->longText('text')->nullable();       // Review text
            $table->longText('about')->nullable();      // About information
            $table->string('no_of_review')->nullable(); // Review text
            $table->string('rating')->nullable();       // Rating with two decimal points
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
