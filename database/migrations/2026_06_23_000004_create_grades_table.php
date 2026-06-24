<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('enrollment_id')->constrained()->onDelete('cascade');
            $table->decimal('grade', 5, 2)->nullable();
            $table->text('remarks')->nullable();
            $table->timestamps();
            
            // One grade per enrollment
            $table->unique('enrollment_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('grades');
    }
};
