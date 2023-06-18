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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('gender')->nullable();
            $table->string('email');
            $table->date('birthdate');
            $table->string('desciption', 255);
            $table->string('address',225);
            $table->tinyInteger('status');
            $table->integer('case');
            $table->foreignId('classroom_id')->constrained();
            $table->foreignId('course_id')->constrained();;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher');
    }
};
