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
        Schema::create('service_projects', function (Blueprint $table) {
            $table->id();
            $table->char('title', 255);
            $table->text('description')->nullable();
            $table->text('link')->nullable();
            $table->text('from')->nullable();
            $table->text('to')->nullable();
            $table->boolean('published')->default(false);
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_projects');
    }
};
