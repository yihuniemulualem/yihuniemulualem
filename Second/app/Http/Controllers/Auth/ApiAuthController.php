<?php
use App\User;
namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ApiAuthController extends Controller
{

    public function login( Request $request){
        $validator=Validator::make($request->all(),
[  'username'=>'required|string',
    'email'=>'required|String|email|max:23',
   'password'=>'required|string|min:6|confirmed',]);
   if($validator->fails()){
       return response(['errors'=>$validator->errors()->all()]);
   }
   $user=User::where('email',$request->email)->first();
   if($user){
    if(Hash::check($request->password,$user->password)){
    $token =$user->createToken('laravelpasswordClient')->accessToken;
    $response=['token'=>$token];
    return response($response,200);
       }
       else {
           $response=["message"=>"password"];
           return response($response,422);
        //$response = ["message" => "Password mismatch"];
        //return response($response, 422);
    }
} else {
    $response=["message"=>'user does no exist'];
    return response($response,422);

    //$response = ["message" =>'User does not exist'];
    //return response($response, 422);
}
}
    public function logout(Request $request){
        $token=$request->user()->token();
        //$token->revoke();
        $response=['message'=>'you have been successfully logged out'];
        return response($response,200);

    }
    public function Register(Request $request){
        $validator=Validator::make($request->all(),[
            'name'=>'required|string|max:25',
            'email'=>'required|string|max:244|unique:users',
            'password'=>'required|string|min:6|confirmed',

        ]);
        if($validator->fails()){
            return response(['errors'=>$validator->errors()->all()],422);
        }
      //  $request['password']=Hash::make($request['password']);
        //$request['remember_token']=Str::random(10);
        $user= User::create($request->toArray());
        $token =$user->createToken('laravel password Grant Client')->AccessToken;
       $response=['token'=>$token];
       return response($response,200);
        }


    }
