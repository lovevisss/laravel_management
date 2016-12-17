<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassroomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('class_room', function (Blueprint $table) {
            $table->string('class_name')->unique()->primary();   //J1-405
            $table->string('building');    //教学楼  J1
            $table->string('floor');       //4
            $table->string('cpacity');  //容量
            $table->string('computer');
            $table->string('projector');  //投影机
            $table->string('sounder');  //功放
            $table->string('wireless');  //无线话筒
            $table->string('wired');  //有限话筒
            $table->binary('log');   //维修记录
            $table->string('comment'); //备注

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
        Schema::drop('class_room');
    }
}
