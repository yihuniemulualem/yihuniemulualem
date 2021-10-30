<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploade extends Controller
{
    //
    public function uploade(Request $request){
        return  $request->file('file')->store('Images/images');
    }
}
