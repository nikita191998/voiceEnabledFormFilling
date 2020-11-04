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
    public function getform($type){
        
        switch ($type) {
            case 'colRegistration':
                return view('Forms.colRegistration');
            case 'examForm':
                return view('forms.examForm'); 
                # code...
                break;
            
            default:
            return redirect('/404');
                # code...
                break;
        }
    }
}

