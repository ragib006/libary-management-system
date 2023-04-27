<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addstudents', function (Blueprint $table) {
           $table->increments('student_id');
            $table->string('student_name');
            $table->string('student_email');
            $table->string('student_department');
            $table->string('student_phone_number');
            $table->string('student_roll');
            $table->string('student_address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addstudents');
    }
};
