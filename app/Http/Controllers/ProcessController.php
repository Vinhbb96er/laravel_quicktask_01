<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class ProcessController extends Controller 
{
    public function changeLanguage($lang) 
    {
        Session::put('webLanguage', $lang);
        
        return redirect()->back();
    }
}
