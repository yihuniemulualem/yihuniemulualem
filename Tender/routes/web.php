<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

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
Route::get('/home',[AuthController::class,'home']);
Route::get('/login',[AuthController::class,'login']);
Route::get('/register',[AuthController::class,'registere']);
Route::get('/insert',[AuthController::class,'regg']);
Route::get('/lo',[AuthController::class,'log']);
Route::get('Application',[AuthController::class,'Applevel']);
Route::get('/looo',[AuthController::class,'customLogin']);
Route::get('/tender',[AuthController::class,'tender']);
Route::get('/deploytender',[AuthController::class,'deploytender']);
Route::get('/lookuptender',[AuthController::class,'lookuptender']);
Route::get('/deployjob',[AuthController::class,'deployjob']);
Route::get('/lookupjob',[AuthController::class,'lookupjob']);
Route::get('/uploade',[AuthController::class,'uploade']);

