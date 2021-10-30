<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class student extends Controller
{
    public function yihunie(){
        return view('login');
    }
    public function submited(Request $req){


        return 'inserted succcesfulley';
    }
}
