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
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('h1_title');
            $table->string('slug');
            $table->string('slider_active');
            $table->date('due_time')->nullable();
            $table->string('image')->nullable();
            $table->string('image_mob')->nullable();
            $table->text('description_header')->nullable();
            $table->text('description')->nullable();
            $table->text('content')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stocks');
    }
};
