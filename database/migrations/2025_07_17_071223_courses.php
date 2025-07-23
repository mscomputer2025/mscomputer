<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
{
    Schema::create('courses', function (Blueprint $table) {
        $table->id();
         $table->string('course_id')->unique();
        $table->string('course_title');
        $table->string('course_image');
        $table->string('course_duration');
        $table->text('course_description');
        $table->json('course_curriculum'); 
        $table->float('course_rating')->default(0);
        $table->integer('course_reviews')->default(0);
        $table->timestamps();
    });
}


    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
