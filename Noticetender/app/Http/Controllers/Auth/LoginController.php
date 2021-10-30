<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
//use GuzzleHttp\Psr7\Request;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
 use App\Http\Controllers\Auth\Log;

use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function userPostLogin(Request $request) {


        $userCredentials = $request->only('email', 'password');

        // check user using auth function
        if (Auth::attempt($userCredentials)) {
            return redirect()->intended('layouts/viewerframe');
        }

        else {
            return back()->with('error', 'Whoops! invalid username or password.');
        }
    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function loggin(Request $request){
        //$person =new User();
            $email=$request->email;
            $passwod=$request->password;
            $user= DB::select('select email from users where password = ?', [$request->password]);
 if($user){
     return view("layouts/viewerframe");
}
 else{

        return redirect('login')->with('success', 'Whoops! invalid username or password.');

 }

    }
    public function viewWinnerlogin(Request $request){
        if($request->email =='yihuniemulualem220@gmail.com' && $request->password=='yihuniemulualem'){
            return redirect("http://localhost:8000/appley");
        }
        else{
            echo "".date('y-m-d');
        }

    }
    public function logout(Request $request) {
        $request->session()->flush();
        Auth::logout();

       return redirect('/login');

    }
    public function updatepassword(Request $request){
        $email=$request->email;
        $user= DB::select('select pasword from users where email = ?', [$request->email]);
       if($user){
        return redirect('login')->with('success', $user);
       }

    }


}
