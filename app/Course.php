<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Course extends Model{
	public static function getAll(){
		return 'device name is sean';
	}

	protected $table = 'courses';
	protected $primaryKey = 'course_id';
	protected $fillable = ['course_id', 'name','course_type','credits','department'];


	// public function author()
	// {
	// 	return $this->belongsTo('App\User','seller');
	// }

	// public function comments()
	// {
	// 	return $this->hasMany('App\Comment','itemid');
	// }
}