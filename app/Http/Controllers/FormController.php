<?php

namespace App\Http\Controllers;
// use Input;
use \App\Models\colRegistration;
use Illuminate\Http\Request;
use Auth;
class FormController extends Controller
{
    public function __contruct(){
        $this->middleware('web');
    }
    public function handle(Request $request){
       $data= $request;
        colRegistration::create([
            'user_id'=>Auth::id(),
            "name"=>$data->name,
            "father_name"=>$data->fname,
            "mother_name"=>$data->mname,
            "DOB"=>$data->DOB,
            "stream"=>$data->stream,
            "Phone_no"=>$data->phone_no,
            "gender"=>$data->gender,
            "Category"=>$data->category,
            "address"=>$data->address,
            "state"=>$data->state,
            "pincode"=>$data->pincode
        ]);
        return view('success');
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

