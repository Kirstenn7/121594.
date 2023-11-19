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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->integer('s_id')->unique();
            $table->boolean('school')->nullable();
            $table->boolean('gender')->nullable();
            $table->integer('age')->nullable();
            $table->boolean('address')->nullable();
            $table->boolean('famsize')->nullable();
            $table->boolean('Pstatus')->nullable();
            $table->integer('Medu')->nullable();
            $table->integer('Fedu')->nullable();
            $table->string('Mjob')->nullable();
            $table->string('Fjob')->nullable();
            $table->string('reason')->nullable();
            $table->string('guardian')->nullable();
            $table->integer('traveltime')->nullable();
            $table->integer('studytime')->nullable();
            $table->integer('failures')->nullable();
            $table->boolean('schoolsup')->nullable();
            $table->boolean('famsup')->nullable();
            $table->boolean('paid')->nullable();
            $table->boolean('activities')->nullable();
            $table->boolean('nursery')->nullable();
            $table->boolean('higher')->nullable();
            $table->boolean('internet')->nullable();
            $table->integer('famrel')->nullable();
            $table->integer('freetime')->nullable();
            $table->integer('health')->nullable();
            $table->integer('absences')->nullable();
            $table->boolean('passed')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
