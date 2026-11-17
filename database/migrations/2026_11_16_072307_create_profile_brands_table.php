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
        Schema::create('profile_brands', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('vision')->nullable();
            $table->text('mission')->nullable();
            $table->text('core_values')->nullable();
            $table->text('alamat')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('youtube')->nullable();
            $table->string('tiktok')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('shopee')->nullable();
            $table->string('tokopedia')->nullable();
            $table->string('bukalapak')->nullable();
            $table->string('lazada')->nullable();
            $table->string('maps_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile_brands');
    }
};
