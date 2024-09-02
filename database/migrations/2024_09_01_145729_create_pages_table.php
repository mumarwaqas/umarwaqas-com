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
            $table->string('user_id');                 // User ID
            $table->string('title');                   // Page title
            $table->string('slug')->unique();          // URL slug
            $table->text('content')->nullable();       // Page content
            $table->string('image')->nullable();       // Page image            

            // SEO Fields
            $table->string('meta_title')->nullable();          // Meta title for SEO
            $table->text('meta_description')->nullable();      // Meta description for SEO
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
        Schema::dropIfExists('pages');
    }
};
