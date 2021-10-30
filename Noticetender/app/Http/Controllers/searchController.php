<?php

namespace App\Http\Controllers;
//use App\Http\Controllers\Request;
use App\Models\Appley;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\tender;
use App\Models\File;
use lluminate\Support\Collection;
use Illuminate\Database\Eloquent\Collection\delete;

class searchController extends Controller
{
    public function index()
    {
        return view('layouts/search');
    }
    public function Win(Request $request){
        //$search_text=$_GET['search'];
        $text=$request->search;
     //   $date=$_GET['date'];
        if(date('y-m-d') >= tender::where('number','LIKE','%'.$text.'%')->get()){
            $winnerss = DB::select('select Tendernumber,TenderTitle,Fullname,phone,email,Netprice,itemprice from appleys');
            return view('layouts.ViewWinner',['winners'=>$winnerss]);
        }
        else{
            return redirect()->back()
            ->with('warnning', 'please enter the correct date or the tender date is not reached');
        }
      //  $winnerss = DB::select('select Tendernumber,TenderTitle,Fullname,phone,email,Netprice,itemprice from appleys');
        //return view('layouts.ViewWinner',['winners'=>$winnerss]);
    }
    public function searchbyCatagory($Catagory){
        $users=DB::table('tender')->where('Catagory',$Catagory)->get();
        return view('layouts/viewerdetail',['users'=>$users]);
    }
    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */
    public function fetchappleyersonitem($number){
        // $winners = DBwinners::table('appleystotender')->select('*')->first();
         //$users=DB::table('appleystotender')->select('*')->where('Tendernumber', $number)->get();
         //return view('layouts.ViewWinner'.compact('users'));
         $users=DB::table('itemappley')->where('number', $number)->get();
         return view('layouts/viewitemwinner',['users'=>$users]);
     }
     /////
    public function fetchappleyers($number){
       // $winners = DBwinners::table('appleystotender')->select('*')->first();
        //$users=DB::table('appleystotender')->select('*')->where('Tendernumber', $number)->get();
        //return view('layouts.ViewWinner'.compact('users'));
        $winners=DB::table('appleystotender')->where('Tendernumber', $number)->get();
        return view('layouts/ViewWinner',['winners'=>$winners]);
    }
    public function autocomplete(Request $request)
    {
       $search_text=$_GET['search'];
       $client = DB::table('tender')->select('*')->where('title ='.$search_text)->first();
      // $tenders=tender::where('title','LIKE','%'.$search_text.'%')->get();
       return view('layouts.ViewTender'.compact('client'));
    }
    public function winner(Request $request)
    {
       $search_text=$_GET['search'];
      // $winners=tender::where('closeddate','LIKE','%'.$search_text.'%')->get();
      if( $winners=tender::where('closeddate','LIKE','%'.$search_text.'%')->get()){
        return view('layouts.ViewWinner'.compact('winners'));
      }
      else{
          return back();
      }


    }
    public function seedtail(Request $request){
        $users = DB::select('select number,title,organization from tender');
        return view('layouts.view',['users'=>$users]);
    }
  //return view('layouts.ViewTender',compact('tenders'));
  public function search(Request $request)
    {
        $search_text=$_GET['search'];
        $title=DB::select('select number,title from tender where title= ?', [$search_text]);
        return view('layouts.view',['users'=>$title]);
    }
    public function searched(){
        $search_text=$_GET['search'];
        $title=DB::select('select number,title from tender where title= ?', [$search_text]);
        return view('layouts.view',['users'=>$title]);
    }
    public function Appleyedtenders(){
        $search_text=$_GET['search'];
        $title=DB::select('select Tendernumber,TenderTitle from appleystotender where title= ?', [$search_text]);
        return view('layouts/viewwinnerbytitle',['users'=>$title]);
    }
}


