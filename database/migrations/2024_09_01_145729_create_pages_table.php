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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('title')->nullable();               // Name title
            $table->string('page_title')->nullable();          // Page title
            $table->string('page_description')->nullable();    // Page description
            $table->string('slug')->unique();                  // URL slug
            $table->string('image')->nullable();               // Image slug
            $table->longText('content')->nullable();           // Page content
            $table->string('page_type')->nullable();           // Page Page-Type

            // SEO Fields
            $table->string('meta_title')->nullable();          // Meta title for SEO
            $table->string('meta_description')->nullable();    // Meta description for SEO
            $table->string('meta_keywords')->nullable();       // Meta keywords for SEO
            $table->string('canonical_url')->nullable();       // Canonical URL for SEO
            $table->string('meta_robots')->nullable();         // Robots tag (index/noindex, follow/nofollow)
            
            $table->timestamps();                              // Created and updated timestamps
            $table->softDeletes();                             // Soft delete column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};