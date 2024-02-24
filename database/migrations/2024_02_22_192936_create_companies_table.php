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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('ceo')->nullable();
            $table->integer('no_of_offices')->nullable();
            $table->integer('established_in')->nullable();
            $table->text('details')->nullable();
            $table->string('unique_id')->nullable();
            $table->unsignedBigInteger('recruiter_id');
            $table->unsignedBigInteger('industry_id');
            $table->unsignedBigInteger('ownership_type_id');
            $table->unsignedBigInteger('company_size_id');
            $table->string('website')->nullable();
            $table->string('location')->nullable();
            $table->boolean('is_featured')->default(0)->comment('0 = inactive; 1 = active');
            $table->boolean('is_active')->default(1)->comment('0 = inactive; 1 = active');
            $table->string('fax')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('google_plus_url')->nullable();
            $table->string('pinterest_url')->nullable();
            $table->foreign('recruiter_id')->references('id')->on('recruiters')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreign('industry_id')->references('id')->on('industries')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreign('ownership_type_id')->references('id')->on('ownership_types')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreign('company_size_id')->references('id')->on('company_sizes')->restrictOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
