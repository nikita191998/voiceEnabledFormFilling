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
                return view('Forms.examForm');
            case 'addmba':
                return view('Forms.addmba');
            case 'mtech':
                return view('Forms.mtech');
            case 'exammba':
                return view('Forms.exammba');
            case 'exammtech':
                return view('Forms.exammtech');         
                # code...
                break;
            
            default:
            return redirect('/404');
                # code...
                break;
        }
    }
}

