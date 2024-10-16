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
        Schema::create('cars_details', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('yearofconstruction');
            $table->string('fuel');
            $table->string('transmission');
            $table->string('bodywork');
            $table->string('price');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars_details');
    }
};
