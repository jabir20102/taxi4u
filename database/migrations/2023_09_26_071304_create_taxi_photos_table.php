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
        Schema::create('taxi_photos', function (Blueprint $table) {
            $table->id();
            $table->string('path');
            $table->unsignedBigInteger('taxi_id');
            $table->timestamps();

            $table->foreign('taxi_id')->references('id')->on('taxis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taxi_photos');
    }
};
