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
            $table->string('student_email')->unique();
            $table->string('student_mobile');
            $table->enum('student_gender', ['Male', 'Female', 'Other'])->nullable();
            $table->date('student_dob')->nullable();
            $table->text('student_address')->nullable();
            $table->string('student_city')->nullable();
            $table->string('student_pincode')->nullable();
            $table->string('student_photo')->nullable();
            $table->string('student_aadhaar_no')->nullable();
            $table->string('student_guardian_name')->nullable();
            $table->string('student_guardian_contact')->nullable();
            $table->string('student_qualification')->nullable();
            $table->string('student_password');
            $table->string('student_user_role')->default('student');
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
