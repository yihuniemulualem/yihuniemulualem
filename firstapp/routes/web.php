<?php
use App\PaymentGateWay\paymentServiceProvider;
use App\Http\Controllers\ControlSession;
use App\Http\Controllers\fluent;
use App\Http\Controllers\yihunie;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\media;
use App\Http\Controllers\postcontroller;
use App\Http\Controllers\student;
use App\PaymentGateWay\payment;

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
Route::get('/',[media::class,'index'])->name('media.index');

Route::get('/aleka',[yihunie::class,'index'])->name('yihunie.index');
Route::get('/who',[yihunie::class,'getallPOsts'])->name('yihunie.getallPOsts');

Route::get('/noone',function(){
    return view('user');
});
Route::get('/abe',function(){
    return view('user');
});
Route::get('/fluent',[fluent::class,'index'])->name('fluent.index');
Route::get('/login',[student::class,'all'])->name('student.all');
Route::get('/logged',[student::class,'yihunie'])->name('student.yihunie');
Route::get('/submited',[student::class,'submited'])->name('student.submited');
Route::get('/getsession',[ControlSession::class,'getSession'])->name('controlSesiion.getSession');
Route::get('/payment',function(){
    return payment::process();
});
Route::get('/create',[postcontroller::class,'createpost'])->name('createpost');
Route::get('/addpost',[postcontroller::class,'addpost'])->name('post');
Route::get('/getallposts',[postcontroller::class,'getpost'])->name('get');
