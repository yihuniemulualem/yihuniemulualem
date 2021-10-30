<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'role' => ['required', 'string', 'min:2'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role' => $data['role'],
            'password' => Hash::make($data['password']),

        ]);
    }
    public function registeruser(Request $request){
        $validated= $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'role' => 'required',
            'password' => 'required',

      ]);

      //   if($validated){
             $user = new User();
           $user->name=$request->name;
           $user->email=$request->email;
           $user->role=$request->role;
           $user->password=$request->password;

           $user->save();
           $name=$request->input('name');
           $email=$request->input('email');
           $password=$request->input('password');
           $userrole=$request->input('role');
          // $userrole=DB::select('select role from users where email= ?', [$email]);
         if($userrole == 'deployer'){
            return view('layouts/deployerframe');
        }
       if($userrole=='viewer'){
       return view("layouts/viewerframe");

       }
       if($userrole=='admin'){
           return view('layouts/adminframe');
       }
           else{
               return 'not valid user';
         }

    }
}
