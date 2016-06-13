<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::check()) {
            return view('welcome');
        }else{
		$file = url('/webcam');
		$file_headers = @get_headers($file);

		if($file_headers[0] == 'HTTP/1.1 502 Bad Gateway') {
    			$exists = false;
		}
		else {
    			$exists = true;
		}
		return view('home', array('exists' => $exists));
        	 
        }
    }

}
