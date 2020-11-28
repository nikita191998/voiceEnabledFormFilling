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
       $colregistration = User::select(DB::raw("COUNT(*) as count"))
                          ->whereYear('created_at',date('Y'))
                          ->groupBY(DB::raw("Month(created_at)"))
                          ->pluck('count'); 
                          
        $months = User::select(DB::raw("Month(created_at) as month"))
                          ->whereYear('created_at',date('Y'))
                          ->groupBY(DB::raw("Month(created_at)"))
                          ->pluck('month');
        $datas = array(0,0,0,0,0,0,0,0,0,0,0,0);
        foreach($months as $index => $month)
        {
            $datas[$month] =$colregistration[$index];
        }
        return view('home',compact('datas'));
    
    
                        }
}
