<?php

namespace App\Http\Controllers;
use Log;
class BotController extends Controller
{
    public function handle($form)
    {
        switch ($form) {
            case 'colRegistration':
                $path=storage_path()."/vff.bat";
                shell_exec($path);
                break;
            case 'examForm':
                $path=storage_path()."/nikita.bat";
                shell_exec($path);
                break; 
            
            default:
                # code...
                break;
        }
    }
    
}