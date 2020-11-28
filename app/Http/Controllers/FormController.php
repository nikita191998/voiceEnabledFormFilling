<?php

namespace App\Http\Controllers;

// use Input;
use Auth;
use Illuminate\Http\Request;
use DB;
use Mail;
use \App\Mail\testmail;
use \App\Models\colRegistration;
use Illuminate\Support\Facades\Date;

class FormController extends Controller
{
    public function __contruct()
    {
        $this->middleware('web');
    }
    public function handle($type,Request $request)
    {
        $data = $request;
        switch ($type) {
            case 'colreg':
                colRegistration::create([
                    'user_id' => Auth::id(),
                    "name" => $data->name,
                    "father_name" => $data->fname,
                    "mother_name" => $data->mname,
                    "DOB" => $data->DOB,
                    "stream" => $data->stream,
                    "Phone_no" => $data->phone_no,
                    "gender" => $data->gender,
                    "Category" => $data->category,
                    "address" => $data->address,
                    "state" => $data->state,
                    "pincode" => $data->pincode,
                ]);
                break;
            case "exam_reg":
                DB::table('exam_registration')->insert([
                    'user_id' => Auth::id(),
                    "name" => $data->name,
                    "father_name" => $data->fname,
                    "mother_name" => $data->mname,
                    "DOB" => $data->DOB,
                    "stream" => $data->stream,
                    "subject" => $data->subject,
                    "semester" => $data->semester,
                    "created_at"=>Date::now(),
                    "updated_at"=>Date::now()
                ]);
                break;
            case 'col_reg_mba':
                DB::table('col_reg_mba')->insert([
                    'user_id' => Auth::id(),
                    "name" => $data->name,
                    "father_name" => $data->fname,
                    "mother_name" => $data->mname,
                    "DOB" => $data->DOB,
                    "created_at"=>Date::now(),
                    "updated_at"=>Date::now()
                ]);
                break;
            default:
                # code...
                break;
        }
        
        // $this->sendEmail(Auth::user()->email);
        return view('success');
    }
    public function getform($type)
    {

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
    public function sendEmail($mailto)
    {
        $details = [
            'title' => 'Form Submission',
            'body' => 'Your form has been submitted Successfully.',

        ];
        // Mail::to($mailto)->send(new testmail($details));
        return 'success';
    }
}
