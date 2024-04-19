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
        Schema::create('service_categories', function (Blueprint $table) {
            $table->integer('id')->autoIncrement()->unique();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->text('excerpt')->nullable();
            $table->boolean('published')->default(false);
            $table->integer('order')->default(0);
            $table->integer('parent_id')->nullable();
            $table->timestamps();
        });

        Schema::table('service_categories',function (Blueprint $table){
            $table->foreign('parent_id')->references('id')->on('service_categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_categories');
    }
};
