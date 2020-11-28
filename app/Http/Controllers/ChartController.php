<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\colRegistration;
use Illuminate\Support\Facades\DB;
use App\Models\User;
class ChartController extends Controller
{
    public function index()
    {
        $mba_col=DB::table('col_reg_mba')->get()->count();
        $be_col = colRegistration::all()->count();
        $be_exam=DB::table('exam_registration')->get()->count();
        $user=User::all()->count();

        return view('home',compact('mba_col','be_col','be_exam','user'));
    }
}
