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
        Schema::create('denied_lists', function (Blueprint $table) {
            $table->id();
            $table->string('pic');
            $table->string('name');
            $table->string('email');
            $table->string('contact');
            $table->date('date');
            $table->string('course');
            $table->string('paid_attachment');
            $table->string('transmission');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('denied_lists');
    }
};
