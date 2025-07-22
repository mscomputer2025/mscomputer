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
            $table->string('student_name');
            $table->string('student_email')->unique()->nullable();
            $table->string('student_phone')->unique();
            $table->string('student_course')->nullable();
            $table->string('student_address')->nullable();
            $table->string('student_photo')->nullable();
            $table->string('student_password'); // 🔧 Fixed typo
            $table->string('user_type')->default('student'); // ✅ Auto default value
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students'); // ✅ Added drop
    }
};
