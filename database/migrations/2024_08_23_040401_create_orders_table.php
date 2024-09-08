<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('order_no');
            $table->string('source')->nullable();
            $table->string('academic_level', 255)->nullable();
            $table->string('subject', 255)->nullable();
            $table->string('writer', 255)->nullable();
            $table->string('topic', 1000)->nullable();
            $table->string('type_of_paper', 255)->nullable();
            $table->string('number_of_words', 255)->nullable();
            $table->string('number_of_pages', 255)->nullable();
            $table->string('citation_style', 255)->nullable();
            $table->string('number_of_sources', 255)->nullable();
            $table->string('delivery_time', 255)->nullable();
            $table->longText('paper_description')->nullable();
            $table->string('order_status', 255)->nullable();
            $table->string('payment_status', 255)->nullable();
            $table->string('draft_file', 500)->nullable();
            $table->string('revision_file', 500)->nullable();
            $table->string('final_file', 500)->nullable();
            $table->string('ai_file', 500)->nullable();
            $table->string('plagiarism_file', 500)->nullable();
            $table->string('grammarly_file', 500)->nullable();
            $table->string('attachment', 255)->nullable();
            $table->string('coupon_code')->nullable();
            $table->string('actual_price', 255)->nullable();
            $table->string('discounted_price', 255)->nullable();
            $table->string('final_price', 255)->nullable();
            $table->string('user_ip')->nullable();
            $table->string('user_agent')->nullable();
            $table->softDeletes();
            $table->timestamps();

            // Optionally, add a foreign key constraint if the users table exists
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
