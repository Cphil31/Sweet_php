<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sweet;

class sweetController extends Controller
{

	public function welcome(){
		return 'home';
	}
	public function index(){
		$sucrerie=Sweet::all();
		return view('/home',['sucrerie'=>$sucrerie]);
	}


}
