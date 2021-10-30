<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControlSession extends Controller
{
public function create(){

}
public function getSession( Request $request){
if($request->session()->has('name')){
    echo 'the well kown number occured in this channel';
    echo $request->session()->get('yihunie');
}
else{
    echo 'no data has been found';
}
}
public function store(Request $request){
    $request->session()->put('name','yihunie');
    echo 'data has been insertednsuccessfulley';
}
public function deleteSession(Request $request){
    $request->session()->forget('yihunie');
    echo 'deleted successfully';
}
}
