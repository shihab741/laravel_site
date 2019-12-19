<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
    	// return "Hello World!";
    	// return view('welcome');

    	// $data = [
    	// 	'0' => [
    	// 		'name' => 'Shihab Uddin Ahmed',
    	// 		'city' => 'Dhaka',
    	// 		'country' => 'Bangladesh'
    	// 	],
    	// 	[
    	// 		'name' => 'jackass',
    	// 		'city' => 'Pabna',
    	// 		'country' => 'Bangla'
    	// 	]
    	// ];


    	// return view('demo');

    	// Method one to send data to view
    	// return view('demo', compact('data'));

    	// Method two to send data to view (most popular method)
    	// return view('demo', ['data' => $data]);

    	// Method three to send data to view
    	// return view('demo')->with('data', $data);
      
        return view('frontEnd.home.homeContent');
    }
}
