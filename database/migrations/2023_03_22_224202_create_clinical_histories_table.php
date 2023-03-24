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
        Schema::create('clinical_histories', function (Blueprint $table) {
            $table->id();
            $table->text('allergies')->nullable();
            $table->text('chronic_diseases')->nullable();
            $table->text('previous_treatments')->nullable();
            $table->text('previous_diagnosis')->nullable();
            $table->text('medical_tests')->nullable();
            $table->text('test_results')->nullable();
            $table->text('recommended_treatments')->nullable();
            $table->text('monitoring_plans')->nullable();
            $table->unsignedBigInteger('pet_id');
            $table->timestamps();

            $table->foreign('pet_id')->references('id')->on('pets')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clinical_histories');
    }
};
