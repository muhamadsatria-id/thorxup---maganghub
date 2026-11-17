<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('carousels', function (Blueprint $table) {
            $table->string('subtitle')->nullable()->after('title');
            $table->string('cta_label')->nullable()->after('description');
            $table->string('cta_url')->nullable()->after('cta_label');
            $table->boolean('is_active')->default(true)->after('image');
            $table->unsignedInteger('sort_order')->default(0)->after('is_active');
        });
    }

    public function down(): void
    {
        Schema::table('carousels', function (Blueprint $table) {
            $table->dropColumn(['subtitle', 'cta_label', 'cta_url', 'is_active', 'sort_order']);
        });
    }
};
