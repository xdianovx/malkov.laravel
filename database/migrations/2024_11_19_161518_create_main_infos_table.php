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
        Schema::create('main_infos', function (Blueprint $table) {
            $table->id();
            $table->string('telegram')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('vkontakte')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('working_days')->nullable();
            $table->string('text_footer')->nullable();
            $table->string('og_site_title')->nullable();
            $table->string('og_site_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main_infos');
    }
};
