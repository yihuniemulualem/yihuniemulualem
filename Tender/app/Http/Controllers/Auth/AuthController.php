<?php
namespace App\Http\Controllers\Auth;
//use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth\createToken;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Tender;
use Illuminate\Support\Facades\Storage;
class AuthController extends Controller
{
    public function home(){
        return view('home');

    }
    public function login(){
        return view('login');

    }
    public function Applevel(){
        return view('Applicarion');
    }
    public function registere(){
        return view('register');
    }
    public function tender(){
        return view('Tender');
    }
    public function deploytender(){
        return view('deploytender');
    }
    public function lookuptender(){
        return view('lookuptender');
    }
    public function deployjob(){
        return view('deployjob');
    }
    public function lookupjob(){
        return view('lookupjob');
    }
    //
    public function customLogin(Request $request)
    {
        $request->validate([
            'username'=>'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('username','password','email');
        if (Auth::login($credentials)) {
            return redirect('Application');
        }
    }
    public function uploade(Request $request){
        //$request->validate([
            //'title'=>'required',
            //'Organization'=>'required',
            //'password'=>'required',
           // 'startDate'=>'required',
         //   'endDate'=>'required'
       // ]);

        $title=$request->input('title');
        $Organization=$request->input('Organization');
        $password=$request->input('password');
        $startDate=$request->input('startDate');
        $endDate=$request->input('endDate');
        $data=array('title'=>$title,"Organization"=>$Organization,"password"=>$password,"startDate"=>$startDate,"endDate"=>$endDate);
       /// DB::table('tenderdeploy')->insert($data);
      //$path=$request->file->store();
      //$path=Storage::putFile('photos', new File('/path/to/photo'));
      //$path=Storage::putFileAs('files',new File('/path/to/files'),'traing.xlse');
       // $original=$request->file('file')->getClientOriginalName();
        //$exten=$request->file('file')->getClientOriginalExtension();
        //$path->storeAs('/public',$original,$exten);
        //if($path){
         //   return back()->with('upload_success','file uploaded successfully');
       // }
        {
        return redirect('uploade');}
    }

    public function regg(Request $request){
             $request->validate([
                 'username'=>'required',
                 'phone'=>'required',
                 'email'=>'required',
                 'password'=>'required'
             ]);
                //Database insertion code starts
            $username = $request->input('username');
           $phone = $request->input('phone');
            $email = $request->input('email');
            $password=$request->input('password');

            $data=array('username'=>$username,"phone"=>$phone,"email"=>$email,
            'password'=>$password);

            DB::table('tenders')->insert($data);
               //Database insertion code end
               return redirect('Application');
      }

    public function log( Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string',
        ]);
        if ($validator->fails())
        {
            return response(['errors'=>$validator->errors()->all()], 422);
        }
        $user = Tender::where('email', $request->email)->first();
        if ($request->password==$user->password) {
          ////  if (Hash::check($request->password, $user->password)) {
          // $token = $user->createToken('Laravel Password Grant Client')->accessToken;
        //$response = ['token' => $token];
        //return response($response, 200);
               return redirect('Application');

            } else {
                $response = ["message" => "Password mismatch"];
                return response($response, 422);
            }
        }

}
