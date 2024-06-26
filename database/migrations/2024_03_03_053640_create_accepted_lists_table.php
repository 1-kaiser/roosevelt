<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    // 2024_03_03_053640_create_accepted_lists_table.php
    
    public function up(): void
    {
        Schema::create('accepted_lists', function (Blueprint $table) {
            $table->id();
            $table->string('pic');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('contact');
            $table->string('age');
            $table->string('birthday');
            $table->date('date');
            $table->string('course');
            $table->string('valid_id');
            $table->string('paid_attachment');
            $table->string('transmission');
            $table->string('instructor')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accepted_lists');
    }
};
