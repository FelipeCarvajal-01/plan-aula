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
        Schema::create('classroom_plan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_course');
            $table->unsignedBigInteger('id_profile_competition_ra');
            $table->unsignedBigInteger('id_general_objective');
            $table->unsignedBigInteger('id_specific_objective');
            $table->unsignedBigInteger('id_general_reference');
            $table->unsignedBigInteger('id_institutional_reference');
            $table->unsignedBigInteger('id_evaluations');
            $table->unsignedBigInteger('id_update_histories');
            $table->unsignedBigInteger('id_status');
            $table->timestamps();

            //LLaves foraneas
            $table->foreign('id_course')->references('id')->on('courses');
            $table->foreign('id_profile_competition_ra')->references('id')->on('profiles_competencies_ra');
            $table->foreign('id_general_objective')->references('id')->on('general_objective');
            $table->foreign('id_specific_objective')->references('id')->on('specific_objectives');
            $table->foreign('id_general_reference')->references('id')->on('general_references');
            $table->foreign('id_institutional_reference')->references('id')->on('institutional_references');
            $table->foreign('id_evaluations')->references('id')->on('evaluations');
            $table->foreign('id_update_histories')->references('id')->on('update_histories');
            $table->foreign('id_status')->references('id')->on('revision');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classroom_plan');
    }
};