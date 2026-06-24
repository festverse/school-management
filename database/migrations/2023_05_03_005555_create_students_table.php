<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('studentImage');
            $table->string('fName');
            $table->string('mName')->nullable();
            $table->string('lName');
            $table->string('studentId');
            $table->string('email');
            $table->string('pNumber');
            $table->string('course');
            $table->integer('age');
            $table->string('gender');
            $table->string('brgy');
            $table->string('city');
            $table->string('province');
            $table->string('enrolled');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }
}
