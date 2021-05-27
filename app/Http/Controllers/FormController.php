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
            case 'colRegistration':
                $aadhar='';
                if ($request->file('aadhar') != "") {
                    $file = $request->file('aadhar');
                    $fileSize =  filesize($file);
                    $fileSizeKb = ($fileSize/1000000);
                    if($fileSizeKb >= 10){
                        return redirect()->back();
                    }
                    $aadhar = 'doc2-' . md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
                    $file->move('document/', $aadhar);
                    $aadhar =  'document/' . $aadhar;
                }
                $tenth='';
                if ($request->file('tenth') != "") {
                    $file = $request->file('tenth');
                    $fileSize =  filesize($file);
                    $fileSizeKb = ($fileSize/1000000);
                    if($fileSizeKb >= 10){
                        return redirect()->back();
                    }
                    $tenth = 'doc2-' . md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
                    $file->move('document/', $tenth);
                    $tenth =  'document/' . $tenth;
                }
                $twelfth='';
                if ($request->file('twelfth') != "") {
                    $file = $request->file('twelfth');
                    $fileSize =  filesize($file);
                    $fileSizeKb = ($fileSize/1000000);
                    if($fileSizeKb >= 10){
                        return redirect()->back();
                    }
                    $twelfth = 'doc2-' . md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
                    $file->move('document/', $twelfth);
                    $twelfth =  'document/' . $twelfth;
                }
                $pic='';
                if ($request->file('pic') != "") {
                    $file = $request->file('pic');
                    $fileSize =  filesize($file);
                    $fileSizeKb = ($fileSize/1000000);
                    if($fileSizeKb >= 10){
                        return redirect()->back();
                    }
                    $pic = 'doc2-' . md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
                    $file->move('document/', $pic);
                    $pic =  'document/' . $pic;
                }
                
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
                    "aadhar"=>$aadhar,
                    "tenth"=>$tenth,
                    "twelfth"=>$twelfth,
                    "pic"=>$pic
                ]);
                break;
            case "exam_reg":
                $photo='';
                if ($request->file('photo') != "") {
                    $file = $request->file('photo');
                    $fileSize =  filesize($file);
                    $fileSizeKb = ($fileSize/1000000);
                    if($fileSizeKb >= 10){
                        return redirect()->back();
                    }
                    $photo = 'doc2-' . md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
                    $file->move('document/', $photo);
                    $photo =  'document/' . $photo;
                }
                
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
                    "updated_at"=>Date::now(),
                    "photo"=>$photo
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
        
        $this->sendEmail(Auth::user()->email);
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
        Mail::to($mailto)->send(new testmail($details));
        return 'success';
    }
}
