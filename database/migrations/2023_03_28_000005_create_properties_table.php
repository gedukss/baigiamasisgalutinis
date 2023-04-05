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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('location', 100);
            $table->text('description')->nullable();
            $table->year('year')->nullable();
            $table->integer('size')->nullable();
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->integer('price')->nullable();
            $table->foreignId('city_id')->constrained();
            $table->foreignId('type_id')->constrained();
            $table->foreignId('agent_id')->constrained();
            $table->string('image', 1000)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
