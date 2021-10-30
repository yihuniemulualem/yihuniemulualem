<?php

namespace App\Http\Controllers;
use App\Models\User;
use app\Http\Controllers\Notifications;
use Illuminate\Http\Request;
use App\Notifications\register;
//use App\Http\Controllers\register;
use Illuminate\Notifications\Notification;
//use Illuminate\Notifications\Notification;
class product extends Controller
{
    public function store(Request $request){
    $users=User::all();
    $user=new User;
$user->name=$request->name;
$user->email=$request->email;
$user->save();
//Notification::Send($users,new register($request->name));
Notification::send($users,new register($request->name));
return back()-> with('status','user added successfully');


    }
}
