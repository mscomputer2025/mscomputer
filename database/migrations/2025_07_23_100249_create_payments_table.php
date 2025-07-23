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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade');
            $table->foreignId('course_id')->constrained('courses')->onDelete('cascade');
            $table->decimal('payment_amount_paid', 8, 2);
            $table->decimal('payment_total_fee', 8, 2)->nullable();
            $table->decimal('payment_remaining_balance', 8, 2)->nullable();
            $table->enum('payment_mode', ['Cash', 'UPI', 'Card', 'Cheque', 'Bank Transfer'])->default('Cash');
            $table->string('transaction_id')->nullable();
            $table->integer('installment_number')->nullable();
            $table->date('payment_date')->default(now());
            $table->text('note')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
