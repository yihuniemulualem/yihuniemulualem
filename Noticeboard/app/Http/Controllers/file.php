<?php
namespace App\Http\Controllers;
use Illuminate\Validation\Validator;
use Illuminate\Http\Request;

class file extends Controller
{
    //
    public function store(Request $request)
    {

        $name = $request->file('file')->getClientOriginalName();
        $path = $request->file('file')->store('public/files');
        $save = new File;
        $save->name = $name;
        $save->path = $path;
        return redirect('store')->with('status', 'File Has been uploaded successfully in laravel 8');
    }
}
