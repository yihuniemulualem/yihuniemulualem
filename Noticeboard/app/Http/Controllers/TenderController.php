<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Appley;
use Illuminate\Support\Facades\DB;
use App\Models\tender;
use App\Models\item;
use App\Models\File;
use RealRashid\SweetAlert\Facades\Alert;
use lluminate\Support\Collection;
use Illuminate\Database\Eloquent\Collection\delete;
class TenderController extends Controller
{
    //
    public function Register(Request $request){
        if($request->password != $request->password_confirmation){
            return ('not identical password');
        }
    }
    public function deploytoItem(Request $request){

      $item=new item();
      $item->number=$request->number;
      $item->organization=$request->organization;
      $item->item=$request->item;
      $item->save();
    return redirect('toItemappley');
    }
    public function compete(Request $request){
        $item=new item();
        $item->number=$request->number;
        $item->organization=$request->organization;
        $item->fullname=$request->fullname;
        $item->phone=$request->phone;
        $item->email=$request->email;
        $item->price=$request->price;
        $item->item=$request->item;
        $item->save();
      return redirect('tocompete');
    }
    public function destroy($number) {
       DB::delete('delete from tender where number = ?',[$number]);
       // return $number;

     }
    public function edit(Request $request) {
                 $tenderer = new Appley();
                 $Tendernumber = $request->input('Tendernumber');
                 $TenderTitle = $request->input('TenderTitle');
        DB::update('update tender set title = ? where number = ?',[$TenderTitle,$Tendernumber]);
        //return $Tendernumber;
     }

     public function Applytotender(Request $request)
        {
            $validated= $request->validate([
                 'Tendernumber' => 'required|max:255',
                 'TenderTitle' => 'required',
                 'Fullname' => 'required',
                'phone' => 'required',
                 'email' => 'required',
            'Netprice' => 'required',
            'itemprice' => 'required'
           ]);

           //   if($validated){
                  $tenderer = new Appley();
                $tenderer->Tendernumber=$request->Tendernumber;
                $tenderer->TenderTitle=$request->TenderTitle;
                $tenderer->Fullname=$request->Fullname;
                $tenderer->phone=$request->phone;
                $tenderer->email=$request->email;
                $tenderer->Netprice=$request->Netprice;
                $tenderer->itemprice=$request->itemprice;
                $tenderer->save();
              return redirect('toappley');

             //  }


        }
    ////
    public function update($number){
        $users = DB::select('select number from tender where number = ?', [$number]);
        return view('layouts.tenderupdate',['users'=>$users]);
    }
    public function viewItem(){
        $users = DB::select('select number,organization,item from items');
        return view('layouts.viewitem',['users'=>$users]);
    }
    public function Appley($number){
        $num=DB::select('select number from tender where number = ?', [$number]);
      //  $users=DB::table('tenderrs')->where('number', $number)->get();
        return view('layouts.Appley',['users'=>$num]);
    }

    public function form(){
        return view('layouts.TenderDeploy');
    }
    public function view(Request $request){
        $users = DB::select('select number,title,organization from tender');
        return view('layouts.View',['users'=>$users]);

    }

public function detail($number){
    //$users = DB::select('select number,title,organization from tenderrs');
 //   $users = DB::select('select number,title,Organization,opendate,closeddate from tenderrs where number=$number');
 $users=DB::table('tender')->where('number', $number)->get();
 return view('layouts/detail',['users'=>$users]);

//return view('layouts.ViewTender',compact('tenders'));
}
    public function upload( Request $request){
        $request->file->store('public');
        return 'file has been uploadded in it';
    }
    public function storee(Request $request){
       $validatData=$request->validate(['file'=>'required|mimes:pdf,xlx,csv,|max:2048',]);
       if( $validatData){
       $name=$request->file('file')->getClientOriginalName();
       $path=$request->file('file')->store('public/uploads');
       $save=new File;
       $save->name=$name;
       $save->path=$path;
       return 'file has been uploadded ';
       }
       else{
           return 'file not uploaded';
       }

    }
        public function Addtender(Request $request)
        {
            try {
           $tender = new tender();
            $tender->number=$request->number;
            $tender->title=$request->title;
            $tender->Organization= $request->Organization;
            $tender->opendate= $request->opendate;
            $tender->closeddate= $request->closeddate;
            $tender->price= $request->price;
            $tender->pricetotal= $request->pricetotal;
            $tender->detail= $request->detail;
            $tender->save();
            return redirect()->back()
           ->with('success', 'deployed successfully!');
            }
           // return redirect('todeploytender');

            catch (\Exception $e){
                return redirect()->back()
                    ->with('error', 'Error during the creation!');
            }


        }
}
