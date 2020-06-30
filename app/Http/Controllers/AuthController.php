<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function register(){
    	return view('register');
    }

    public function welcome(Request $request){
    	$First = $request["First"];
    	$Last = $request["Last"];
    	return view ('welcome', ['First'=> $First], ['Last'=>$Last]);
    }
}
