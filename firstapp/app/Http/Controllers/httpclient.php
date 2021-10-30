<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class httpclient extends Controller
{
    public function getallPOsts(){
   $response=Http::get('https://jsonplaceholder.typicode.com/posts');

      return $response->json();


    }

}
