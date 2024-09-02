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
        Schema::create('writers', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('slug')->unique();
            $table->string('writer_no')->unique();
            $table->string('image')->nullable();
            $table->string('name');
            $table->longText('about')->nullable();
            $table->string('education')->nullable();
            $table->string('experience')->nullable();
            $table->string('rating')->nullable();
            $table->string('reviews')->nullable();
            $table->string('orders')->nullable();
            $table->string('success_rate')->nullable();
            $table->string('competences')->nullable();
            $table->string('online')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('writers');
    }
};
