<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->foreignId('category_id')->nullable()->after('id')->constrained()->nullOnDelete();
            $table->boolean('is_active')->default(true)->after('image');
            $table->boolean('is_featured')->default(false)->after('is_active');
            $table->unsignedInteger('sort_order')->default(0)->after('is_featured');
        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropColumn(['category_id', 'is_active', 'is_featured', 'sort_order']);
        });
    }
};
