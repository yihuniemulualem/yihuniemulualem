<?php
 namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class yihunie extends Controller
{
 public function index(){
 return view('user'); }
 public function getallPOsts(){
    $response=Http::get('https://jsonplaceholder.typicode.com/posts');

       return $response->json();

     }
     public function all(Request $req){
         return $req->url();
         return $req->path()();
         return $req->path();

     }
}
