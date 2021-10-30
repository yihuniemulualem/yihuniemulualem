<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
class fileController extends Controller
{
    //<?php

    //use Session;
   public function index(){
      return view('layouts/fileupload');
   }

   public function uploadFile(Request $request){

      // Validation
      $request->validate([
        'file' => 'required|mimes:png,jpg,jpeg,csv,txt,pdf|max:2048'
      ]);

      if($request->file('file')) {
         $file = $request->file('file');
         $name = time().'_'.$file->getClientOriginalName();

         // File upload location
        // $location = 'files';
         $location = 'public/files';
         // Upload file
         $file->move($location,$name);
        // $name=$request->file('file')->getClientOriginalName();
        // $path=$request->file('file')->store('public/files');
          $fl=new File();
          $name=$request->file('file')->getClientOriginalName();
        // $fl->name=$request->name;
        $fl->name=$name;
        $fl->path=$name;
         //$fl->path=$request->name;
          //$save->$path=$request->path;
          $fl->save();
         Session::flash('message','Upload Successfully.');
        Session::flash('alert-class', 'alert-success');
      }else{
         Session::flash('message','File not uploaded.');
         Session::flash('alert-class', 'alert-danger');
      }

      return redirect()->back();
   }
   public function viewfile(){
    $users = DB::select('select name,path from files');
    return view('layouts.files',['users'=>$users]);
}

 public function getFile($filename){
    $file=Storage::disk('public/files')->get($filename);
    return (new Response($file, 200))
          ->header('Content-Type', 'image/jpeg');
}


}

