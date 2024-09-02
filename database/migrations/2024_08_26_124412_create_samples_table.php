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
        Schema::create('samples', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('user_id');        // User ID
            $table->string('slug')->unique(); // Slug of the sample
            $table->string('title'); // Title of the sample
            $table->string('academic_level'); // Academic level
            $table->string('type_of_paper'); // Type of paper
            $table->string('citation_style'); // Citation style
            $table->unsignedInteger('number_of_words'); // Number of words
            $table->unsignedInteger('number_of_pages'); // Number of pages
            $table->string('image'); // URL of the image
            $table->softDeletes();
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('samples');
    }
};

