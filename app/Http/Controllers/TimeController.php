<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Time;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;
class TimeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
   

    public function create_time()
    {
       Excel::load(public_path('time.xls'), function($reader){
        $results = $reader->get();
        $a_re = $results->first()->toArray();
        foreach ($a_re as $key => $value) {
            // if(Course::find($value['id']) == null)
            // {
            //     Course::create(['course_id' => $value['id'],
            //                     'name' => $value['name'],
            //                     'course_type' => (string)$value['type'],
            //                     'credits' => $value['credit'],
            //                     'department' => $value['department']
            //        ] );
             
            // }
            $arr = explode(";", (string)$value['time']);
            foreach ($arr as $item) {
               echo $item;
               echo "<br>";
            }
        }

        echo "done"; 
        return $results;
        });
    }



}
