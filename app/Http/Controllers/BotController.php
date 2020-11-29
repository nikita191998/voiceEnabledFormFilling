<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BotController extends Controller
{
 public function handle($form)
 
{
    switch ($form) {
        case 'colRegistration':
            shell_exec("‪‪C:\Users\nikhi\OneDrive\Desktop\voiceFilling.bat");
            break;
        
        default:
            # code...
            break;
    }
}
}
