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
        Schema::create('takelibarybooks', function (Blueprint $table) {
            $table->increments('take_id');
            $table->string('take_book_stu_id');
            $table->string('take_book_stu_name');
            
            $table->string('take_book_stu_roll');
            $table->string('take_book_stu_department');
            $table->string('take_book_id');
            $table->string('take_book_date');
            $table->string('return_book_date');
            $table->string('take_book_status');
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
        Schema::dropIfExists('takelibarybooks');
    }
};
