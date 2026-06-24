<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('course_class_id')->constrained()->onDelete('cascade');
            $table->string('status')->default('enrolled'); // enrolled, dropped, completed
            $table->timestamps();
            
            // Prevent a student from enrolling in the same class twice
            $table->unique(['student_id', 'course_class_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('enrollments');
    }
};
