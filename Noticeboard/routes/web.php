<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TenderController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\file;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\searchController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/toframe',[HomeController::class, 'man'])->name('frame');
Route::get('/home',[HomeController::class, 'index'] );
Route::get('/todeploytender',[HomeController::class, 'form'] );
Route::post('/home',[HomeController::class, 'form'])->name('deploy');
Route::get('/appleystotender/{number}',[TenderController::class,'Appley'])->name('appley');
Route::get('/delete/{number}',[TenderController::class,'destroy'])->name('delete');
Route::get('/toappley',[TenderController::class,'Applytotender'])->name('toappley');
Route::get('winner', [searchController::class, 'appleys']);
Route::get('/ViewWinnner',[searchController::class,'winner']);
Route::get('/appley',[searchController::class,'Win']);
Route::get('/search',[searchController::class,'search']);
Route::get('/searchedview',[searchController::class,'searched']);
Route::get('autocomplete', [searchController::class, 'autocomplete'])->name('autocomplete');
Route::get('/toitemview/{number}',[TenderController::class,'viewItem']);
Route::get('/toedit/{number}',[TenderController::class,'edit']);
/////
Route::get('/tomainpage',[LoginController::class,'loggin']);
Route::get('/toregister',[RegisterController::class,'registeruser']);
Route::get('/toframe',function(Request $request){
    $role=$request->input('role');
    $email=$request->input('email');
    if($role == 'deployer'){
    return view('layouts/frame');
}
if($role == 'viewer'){
    return view('layouts/frame');
}
if($role == 'Admin'){
    return view('layouts/frame');
}
    else{
        return view('layouts/frame');
    }
});
/////////
Route::get('/register',function(Request $request){
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
 //return view('layouts/deployerframe');
});
/////////
Route::get('/tologin',function(Request $request){

    $email=$request->input('email');
    $role=$request->input('role');
    $userrole = DB::select('select role from users where email= ?', [$email]);
 if($$userrole == 'deployer'){
    return view('layouts/deployerframe');
}
if($$userrole == 'viewer'){
return view("layouts/viewerframe");

}
if($userrole== 'admin'){
    return view('layouts/adminframe');
}
    else{
        return 'not valid user';
    }
});
Route::get('/login',function(){
    return view('auth/login');
});
Route::get('/register',function(){
    return view("auth/register");});
 // return view("layouts/frame");
Route::get('/toviewepage',function(){
    return view("layouts/contentenviewer");
});
Route::get('/toadminpage',function(){
    return view("layouts/admincontent");
});
Route::get('/todeployerpage',function(){
    return view("layouts/deployercontent");
});
Route::get('/toview',function(){
    return view("layouts/ViewTender");
});

Route::get('/toitem',function(){
    return view("layouts/itemdeploy");
});
Route::get('/head',function(){
    return view("layouts.header");
});
Route::get('/upload',[TenderController::class,'storee']);
Route::get('/topage',function(){
    return view("layouts/content");
});
Route::get('/todeploytender',function(){
    return view("layouts/TenderDeploy");
});
Route::get('/tovacancy',function(){
    return view("layouts/Vacancydeploy");
});
Route::get('/Appley',function(){
    return view("layouts/Appley");
});
Route::get('/tofooter',function(){
    return view("layouts/footer");
});
Route::get('/tocompete',function(){
    return view("layouts/itemAppley");
});
Route::get('/toupdate',function(){
    return view("layouts/tenderupdate");
});
Route::get('/viewsome',function(){
    return view("layouts/View");
});

Route::get('/toItemdeploy',[TenderController::class,'deploytoItem']);
Route::get('/view',[TenderController::class,'view']);
Route::get('/detailview/{number}',[TenderController::class,'detail']);
Route::get('/insert',[TenderController::class,'Addtender']);
Route::get('/Appleytoitem',[TenderController::class,'appleytoitem']);
Route::get('/compute',[TenderController::class,'compete']);
Route::get('/tooupdate',[TenderController::class,'update']);
Route::get('/store',[file::class,'store']);
