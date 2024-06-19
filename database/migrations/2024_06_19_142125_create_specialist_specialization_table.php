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
        Schema::create('specialist_specialization', function (Blueprint $table) {
            $table->id();
            $table->integer('specialist_id')->unsigned();
            $table->foreign('specialist_id')->references('id')->on('specialists')->onDelete('cascade');
            $table->integer('specialization_id')->unsigned();
            $table->foreign('specialization_id')->references('id')->on('specializations')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specialist_specialization');
    }
};
