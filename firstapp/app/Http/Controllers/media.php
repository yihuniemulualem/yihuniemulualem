<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class media extends Controller
{
    public function index(){
        $fruits=array('mano','apple','banana','potato');
        return view('welcome',compact('$fruits'));
    }
    //
}
