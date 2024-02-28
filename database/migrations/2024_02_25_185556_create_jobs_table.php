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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('job_title');
            $table->string('slug');
            $table->text('description');
            $table->double('salary_from');
            $table->double('salary_to');
            $table->integer('position');
            $table->date('job_expiry_date');
            $table->boolean('hide_salary')->default(0)->comment('0 = inactive; 1 = active');
            $table->boolean('is_freelance')->default(0)->comment('0 = inactive; 1 = active');
            $table->boolean('status')->default(0)->comment('0 = drafted; 1 = published; 2 = closed');
            $table->boolean('is_featured')->default(0)->comment('0 = inactive; 1 = active');
            $table->boolean('is_suspended')->default(0)->comment('0 = suspended; 1 = active');
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('job_category_id');
            $table->unsignedBigInteger('salary_currency_id');
            $table->unsignedBigInteger('salary_period_id');
            $table->unsignedBigInteger('job_experiance_id');
            $table->unsignedBigInteger('career_level_id');
            $table->unsignedBigInteger('language_level_id');
            $table->unsignedBigInteger('marital_status_id');
            $table->unsignedBigInteger('degree_type_id');
            $table->unsignedBigInteger('job_type_id');
            $table->unsignedBigInteger('job_shift_id');
            $table->unsignedBigInteger('functional_area_id');
            $table->unsignedBigInteger('gender_id');
            $table->foreign('country_id')->references('id')->on('countries')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreign('city_id')->references('id')->on('cities')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreign('company_id')->references('id')->on('companies')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreign('job_category_id')->references('id')->on('job_categories')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreign('salary_currency_id')->references('id')->on('salary_currencies')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreign('salary_period_id')->references('id')->on('salary_periods')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreign('job_experiance_id')->references('id')->on('job_experiences')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreign('career_level_id')->references('id')->on('career_levels')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreign('language_level_id')->references('id')->on('language_levels')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreign('marital_status_id')->references('id')->on('marital_statuses')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreign('degree_type_id')->references('id')->on('degree_types')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreign('job_type_id')->references('id')->on('job_types')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreign('job_shift_id')->references('id')->on('job_shifts')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreign('functional_area_id')->references('id')->on('functional_areas')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreign('gender_id')->references('id')->on('genders')->restrictOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
