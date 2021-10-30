<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }
    public function man(Request $request )
    {
        $email=$request->input('email');
        if($email == 'yihuniemulualem220@gmail.com'){
        return view('layouts.frame');}
        else{
            return 'not valid email';
        }
    }
}
