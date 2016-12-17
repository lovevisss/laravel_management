<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Time extends Model{
	

	protected $table = 'time';
	protected $primaryKey = 'id';
	protected $fillable = ['course_id', 'classroom','teacher','stu_num','major','week','node', 'day'];

}