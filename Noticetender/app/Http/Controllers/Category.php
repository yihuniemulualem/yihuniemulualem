<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class Category extends Controller
{
    public function getBycategy(){
       $user = DB::table('tender')->where('category', ' Auditing ' || 'Agriculture'||'Bank Related' ||' Building Materials' ||'Cleaning and Janitorial'
      ||'Computer and Accessories'|| ' Construction '||'Consultancy'||' Education'||'Furnishing'||'Health'|| ' Installation'||'Energy')->first();
     return  $user;
    }
    public function getEnergy(){
        $users=DB::table('tender')->where('category','Energy')->get();
        return view('layouts/viewerdetail',['users'=>$users]);
    }
   // public function getEnergykk(){
    //    $users=DB::table('tender')->where('category','Energy')->get();
      //  return view('layouts/viewerdetail',['users'=>$users]);
    //}
    public function getland(){

        $users=DB::table('tender')->where('category','land')->get();
        if($users){
        return view('layouts/viewerdetail',['users'=>$users]);}
    }
    public function getAgriculture(){
        $users=DB::table('tender')->where('category','Agriculture')->get();
        if($users!=null){
        return view('layouts/viewerdetail',['users'=>$users]);}

    }
    public function getBank(){
        $users=DB::table('tender')->where('category','bank')->get();
        return view('layouts/viewerdetail',['users'=>$users]);
    }
    public function getAccounting(){
        $users=DB::table('tender')->where('category','Accounting')->get();
        return view('layouts/viewerdetail',['users'=>$users]);
    }
}
