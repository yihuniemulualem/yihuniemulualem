<?php

use App\Http\Controllers\FormValidation;
use App\Models\postControl;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\done;
use App\Http\Controllers\schoolcontroller;
use App\Http\Controllers\formcontroller;
use App\Http\Controllers\TenderController;

Route::get('/', function () {
    return view('welcome');});
Route::get('/post',[postcontroles::class,'index']);
Route::post('/register',[FormValidation::class,'index'])->name('form.index');
Route::post('/result',[FormValidation::class,'registerSubmit'])->name('auth.registersubmit');
Route::get('/trying',[done::class,'viewSample'])->name('post.view');
Route::get('/submit',[done::class,'submit'])->name('done.submit');
Route::get('/show',[done::class,'postAll'])->name('done.postAll');
Route::get('/multiform',[formcontroller::class,'index'])->name('formcontroller.index');
Route::get('/show',[done::class,'goes']);
Route::get('/school',[schoolcontroller::class,'login']);
Route::get('/home',[schoolcontroller::class,'home'])->name('schoolcontroller.home');
//Route::get('register',[schoolcontroller::class,'register'])->name('schoolcontroller.register');
Route::get('/student',[schoolcontroller::class,'student'])->name('schoolcontroller.student');
Route::get('/insert',[schoolcontroller::class,'Addstudent'])->name('schoolcontroller.Addstudent');
Route::get('/tender',[TenderController::class,'display']);
Route::get('/login',[TenderController::class,'log']);
Route::get('/register1', [TenderController::class,'register']);
Route::get('/register',[TenderController::class,'registerValidation'])->name('reg');
Route::get('/tend',[TenderController::class,'tend']);
//Route::get('/submit',[TenderController::class,'Addstudent'])->name('reg');

