<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
//use GuzzleHttp\Psr7\Request;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
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
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function loggin(Request $request){
        $email=$request->input('email');
      // $pass=$request->input('password');
       $user = new User();
       //$user->email=$request->email;
      $role= DB::table('users')->where('email', $email)->pluck('role');
        if($role == 'deployer')
        {
           return view('layouts/deployerframe');
         }
     else if($role == 'viewer')
     {
      return view("layouts/viewerframe");
      }
     else if($role == 'admin')
     {
          return view('layouts/adminframe');
      }

    }
}
