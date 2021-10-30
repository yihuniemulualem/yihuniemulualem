<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class postcontroller extends Controller
{
public function create(){

}
 public  function Addpost(){
return view('addpost');
 }
public function createpost(Request $request){
    $posts=new post();
$posts->title->$request->title;
$posts->body->$request->body;
$posts->save();
return back()->with('post-created','post has been created');

}
public function getpost(){
    $post=post::orderBy('id','DESC');
 return view('post',compact($post));

}
public function getbyId($id){
    $post=post::where('id',$id)->first();
    return view('singlepost',compact('post'));

}
}
