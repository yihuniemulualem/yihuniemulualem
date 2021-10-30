<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/users',function(){
    return 'hi user';
});
Route::get('/gonder',function(){
    return 'gonder university';
});
Route::get('/mulualem/{name}',function($name){
    return 'name of my father is that'.$name;
});
Route::get('/products/{id}',function($id){
    return 'my mothe age  is '.$id;
});
Route::match(['get', 'post'], '/students', function ( request $req) {
return 'requested method is'.$req->method();

});
Route::any('/posts', function (request $req) {
    return 'the method from the any route is that'.$req->method();

});



