<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->string('gender')->nullable();
            $table->date('birthdate');
            $table->string('address',225);
            $table->tinyInteger('status')->nullable();
            $table->unsignedBigInteger('course_id');
            $table->foreign('course_id')->references('id')->on('courses');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
