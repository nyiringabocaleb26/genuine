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
        Schema::create('candidates_results', function (Blueprint $table) {
            $table->string('CandidateNationalId')->primary();
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('Gender');
            $table->string('DateOfBirth');
            $table->foreignId('PostId')->constrained('positions', 'PostId')->onDelete('cascade');
            $table->date('ExamDate');
            $table->string('PhoneNumber');
            $table->integer('Marks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidates_results');
    }
};
