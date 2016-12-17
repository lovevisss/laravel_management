<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('time', function (Blueprint $table) {
            $table->string('timeclass')->primary();
            $table->string('course_id')->unique();
            $table->string('classroom');
            $table->string('teacher');
            $table->string('stu_num');
            $table->string('major');  //班级组成
            $table->string('week');
            $table->string('node');  //第几节
            $table->string('day');
            $table->rememberToken();
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
       Schema::drop('time');
    }
}
