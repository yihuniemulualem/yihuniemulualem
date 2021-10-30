<?php
namespace App\Models;
//use App\User;
use App\Models\tender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
class TenderController extends Controller
{
    public function display(){
        return view('Layout.tender');
    }
    public function log(){
        return view('Layout.login');
    }
    public function register(){
        return view('Layout.register');
    }
    //////////////////
    public function registerValidation(Request $request){
        $validator=Validator::make($request->all(),[
            'username'=>'required|string|max:25',
            'phone'=>'required',
            'email'=>'required|string|max:244|unique:users',
            'password'=>'required',

        ]);
        if($validator->fails()){
            //return response(['errors'=>$validator->errors()->all()],422);
        }
        $request['password']=Hash::make($request['password']);
       // $request['remember_token']=Str::random(10);
       $user= User::create($request->toArray());
        $token =$user->createToken('laravel password Grant Client')->AccessToken;
      // $response=['token'=>$token];
       // return response($response,200);
        return view('layout.tender');
        }
       // public function tend(){
       //     return view('layout.tender');
        //}
        /////////////////////
        public function Addstudent(Request $request)
        {
            $validated= $request->validate([
                'username' => 'required|max:255',
                'phone' => 'required',
                'email' => 'required',
                'password' => 'required',

              ]);
            $student =new tender;
            $student->username=$request->username;
            $student->phone=$request->phone;
            $student->email= $request->email;
            $student->password= $request->password;
            $student->save();
            return redirect('layout.tender')->with('status', ' the inserted  Form Data Has Been inserted');


        }
}
