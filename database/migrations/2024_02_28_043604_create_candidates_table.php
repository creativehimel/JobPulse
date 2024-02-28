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
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('unique_id');
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->unsignedInteger('marital_status_id')->nullable();
            $table->string('nationality')->nullable();
            $table->string('national_id_card')->nullable();
            $table->integer('experience')->nullable();
            $table->unsignedInteger('career_level_id')->nullable();
            $table->unsignedInteger('industry_id')->nullable();
            $table->unsignedInteger('functional_area_id')->nullable();
            $table->double('current_salary')->nullable();
            $table->double('expected_salary')->nullable();
            $table->string('salary_currency')->nullable();
            $table->text('address')->nullable();
            $table->boolean('immediate_available')->default(1);

            $table->foreign('user_id')->references('id')->on('users')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreign('marital_status_id')->references('id')->on('marital_statuses')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreign('career_level_id')->references('id')->on('career_levels')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreign('industry_id')->references('id')->on('industries')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreign('functional_area_id')->references('id')->on('functional_areas')->restrictOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidates');
    }
};
