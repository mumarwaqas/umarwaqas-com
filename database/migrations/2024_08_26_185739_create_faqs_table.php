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
        Schema::create('faqs', function (Blueprint $table) {
            $table->id();                 // Primary key
            $table->unsignedBigInteger('user_id')->nullable();
            $table->longText('question')->nullable();   // FAQ question
            $table->longText('answer')->nullable();     // FAQ answer
            $table->softDeletes();
            $table->timestamps();         // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faqs');
    }
};
