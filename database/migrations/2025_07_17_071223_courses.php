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
            $table->string('student_name');
            $table->string('student_email')->unique()->nullable();
            $table->string('student_phone')->unique();
            $table->unsignedBigInteger('course_id')->nullable(); // Foreign key to courses table
            $table->string('student_address')->nullable();
            $table->string('student_photo')->nullable();
            $table->string('student_password');
            $table->string('user_type')->default('student');
            $table->timestamps();

            // Foreign Key Constraint
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
