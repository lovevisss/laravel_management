<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/all', function(){
	return 'this is all';
});

Route::get('/git', function(){
	Excel::load(public_path('course.xls'), function($reader){
		$results = $reader->get();
		$a_re = $results->first()->toArray();
		foreach ($a_re as $key => $value) {
			echo "id:".$value['id']."name:".$value['name'];
		}
		return $results;
	});
});

Route::get('/test', function() {
    return 'need to install laravel excel';
});
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/addcourse', 'CourseController@create_course');
Route::get('/addtime', 'TimeController@create_time');