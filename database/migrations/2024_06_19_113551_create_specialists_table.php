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
        Schema::create('specialists', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('h1_title');
            $table->string('image')->nullable();
            $table->string('image_mob')->nullable();
            $table->text('education')->nullable();
            $table->text('additional_education')->nullable();
            $table->string('operations')->nullable();
            $table->string('experience')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specialists');
    }
};
