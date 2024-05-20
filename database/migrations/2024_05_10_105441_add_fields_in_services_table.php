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
        Schema::table('services', function (Blueprint $table) {
            $table->string('excerpt')->nullable()->after('content');
            $table->string('deadlines')->nullable()->after('excerpt');
            $table->string('price')->nullable()->after('deadlines');
            $table->string('icon')->nullable()->after('price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn(['excerpt', 'deadlines', 'price', 'icon']);
        });
    }
};
