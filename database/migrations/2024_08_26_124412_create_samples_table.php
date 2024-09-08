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
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('slug')->unique(); // Slug of the sample
            $table->string('title')->nullable(); // Title of the sample
            $table->longText('content')->nullable(); // Title of the content
            $table->string('academic_level')->nullable(); // Academic level
            $table->string('type_of_paper')->nullable(); // Type of paper
            $table->string('citation_style')->nullable(); // Citation style
            $table->unsignedInteger('number_of_words')->nullable(); // Number of words
            $table->unsignedInteger('number_of_pages')->nullable(); // Number of pages
            $table->string('image'); // URL of the image

            // SEO Fields
            $table->string('meta_title')->nullable();          // Meta title for SEO
            $table->string('meta_description')->nullable();    // Meta description for SEO
            $table->string('meta_keywords')->nullable();       // Meta keywords for SEO
            $table->string('canonical_url')->nullable();       // Canonical URL for SEO
            $table->string('meta_robots')->nullable();         // Robots tag (index/noindex, follow/nofollow)
            
            $table->timestamps();                      // Created and updated timestamps
            $table->softDeletes();                    // Soft delete column
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

