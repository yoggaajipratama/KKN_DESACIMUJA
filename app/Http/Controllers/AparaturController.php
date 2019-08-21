<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AparaturController extends Controller
{
    public function index(){
    	return view('/dataInput/inputdata');
    }
    public function inputdata(Request $request){

    }
}
