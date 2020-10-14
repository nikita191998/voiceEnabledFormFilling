<?php

namespace App\Http\Controllers;
// use Input;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function __contruct(){
        $this->middleware('web');
    }
    public function handle(Request $request){
        $request=$request['password'];
      return view('dashboard',['ty'=>$request]);
    }
}
