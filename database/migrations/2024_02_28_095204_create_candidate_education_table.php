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
        Schema::create('candidate_education', function (Blueprint $table) {
            $table->id();
            $table->string('roll')->nullable();
            $table->string('registration')->nullable();
            $table->string('institute_name')->nullable();
            $table->string('subject')->nullable();
            $table->string('result')->nullable();
            $table->string('passing_year')->nullable();
            $table->string('duration')->nullable();

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('result_type_id')->nullable();
            $table->unsignedBigInteger('degree_level_id')->nullable();
            $table->unsignedBigInteger('degree_type_id')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreign('result_type_id')->references('id')->on('result_types')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreign('degree_level_id')->references('id')->on('degree_levels')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreign('degree_type_id')->references('id')->on('degree_types')->restrictOnDelete()->cascadeOnUpdate();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidate_education');
    }
};
