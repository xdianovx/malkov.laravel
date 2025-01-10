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
        Schema::create('show_reels', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('file');
            $table->string('file_mob')->nullable();
            $table->string('is_cover');
            $table->foreignId('page_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('show_reels');
    }
};
