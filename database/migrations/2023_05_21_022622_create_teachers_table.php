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
            $table->string('name');
            $table->boolean('gender')->default(0);
            $table->date('birthdate');
            $table->string('address',225);
            $table->tinyInteger('status');
            $table->integer('salary');
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
