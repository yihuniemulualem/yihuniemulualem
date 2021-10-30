<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Appley;
use Illuminate\Support\Facades\DB;
use App\Models\tender;
use App\Models\ItemApp;
use App\Models\AppleytoTender;
use App\Models\AccountDeployer;
use App\Models\item;
use App\Models\File;
use App\Models\itemdeploy;
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
      $item=new itemdeploy();
      $item->Tendernumber=$request->Tendernumber;
      $item->Quality=$request->quality;
      $item->Size=$request->size;
      $item->Quantity=$request->quantity;
      $item->itemname=$request->itemname;
      $item->save();
      return redirect()->back()
      ->with('success', 'inserted  successfully!');
    }
    public function compete(Request $request){
        $item=new ItemApp();
        $item->number=$request->Tendernumber;
        $item->fullname=$request->Fullname;
        $item->phone=$request->phone;
        $item->email=$request->email;
        $item->Quality=$request->Quality;
        $item->Size=$request->Size;
        $item->Size=$request->Size;
        $item->Quantity=$request->Quantity;
        $item->itemname=$request->itemname;
        $item->price=$request->price;
        $item->save();
      return redirect('tocompete');
    }
    public function destroy($number) {
       DB::delete('delete from tender where number = ?',[$number]);
       return redirect()->back()
       ->with('success', 'delete  successfully!');

     }
    public function edit(Request $request) {
                 $tenderer = new Appley();
                 $Tendernumber = $request->input('Tendernumber');
                 $TenderTitle = $request->input('TenderTitle');
        DB::update('update tender set title = ? where number = ?',[$TenderTitle,$Tendernumber]);
        return redirect()->back()
        ->with('success', 'update  successfully!');
     }

     public function Applytotender(Request $request)
        {
            $validated= $request->validate([
                 'Tendernumber' => 'required|max:255',
                 'TenderTitle' => 'required',
                 'Fullname' => 'required',
                'phone' => 'required',
                 'email' => 'required',
            'Netprice' => 'required'
           ]);

           //   if($validated){Transaction
                  //$tenderer = new Appley();AppleytoTender
                  $tenderer= new AppleytoTender();
                $tenderer->Tendernumber=$request->Tendernumber;
                $tenderer->TenderTitle=$request->TenderTitle;
                $tenderer->Transaction=$request->Transaction;
                $tenderer->organization=$request->organization;
                $tenderer->Fullname=$request->Fullname;
                $tenderer->phone=$request->phone;
                $tenderer->email=$request->email;
                $tenderer->Netprice=$request->Netprice;
              //  $tenderer->itemprice=$request->itemprice;
                $tenderer->save();
              return redirect('toappley');

             //  }


        }
    ////
    public function update($number){
        $users = DB::select('select number from tender where number = ?', [$number]);
        return view('layouts.tenderupdate',['users'=>$users]);
    }
    public function viewItem($number){
        $users = DB::select('select Tendernumber,Quality,Size,itemname from itemdeploys  where Tendernumber = ?',[$number]);
        return view('layouts/viewItem',['users'=>$users]);
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
    public function catagory(){
        $users = DB::select('select title from tender');
        return view('layouts/content',['users'=>$users]);
    }
    public function logout(){
        return back();
    }

    public function freeTender(){
        $users=DB::table('tender')->where('tendertype','free')->get();
        return view('layouts/viewerdetail',['users'=>$users]);
    }

    public function detailviewer($number){
        //$users = DB::select('select number,title,organization from tenderrs');
        $users=DB::table('tender')->where('number', $number)->get();
       //$users = DB::select('select number,title,Organization,opendate,closeddate from tender where $number=number');
    // $users=DB::table('tender')->where('number', $number)->get();
     return view('layouts/viewerdetail',['users'=>$users]);
    }
    public function bytitle(){
        $users = DB::select('select number,title from tender');
        return view('layouts/viewerbytitle',['users'=>$users]);
    }
    public function winnerbytitle(){
        $users = DB::select('select Tendernumber,TenderTitle from appleystotender');
        return view('layouts/viewwinnerbytitle',['users'=>$users]);
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
        { $tender = new tender();
            //try
            $tender->deployerid=$request->deployerid;
            $tender->category=$request->category;
            $tender->tendertype=$request->tendertype;
            $tender->number=$request->number;
            $tender->title=$request->title;
            $tender->Organization= $request->Organization;
            $tender->opendate= $request->opendate;
            $tender->closeddate= $request->closeddate;
            $tender->price= $request->price;
            $tender->pricetotal= $request->pricetotal;
            $tender->detail= $request->detail;
            if($request->opendate >= $request->closeddate ){
                $tender->save();
                return redirect()->back()
               ->with('success', 'deployed successfully!');
            }
           else{
            return redirect()->back()
            ->with('warning', 'the date is not properly setted!');
           }

        }
        public function Account(Request $request){
            $person =new AccountDeployer();
            $person->deployerid=$request->deployerid;
            $person->companyName=$request->companyName;

            $person->Address=$request->Address;
            $person->Email=$request->Email;
            $person->OfficeTel=$request->OfficeTel;

            $person->username=$request->username;
            $person->password=$request->password;
            $person->save();
            return redirect('http://localhost:8000/todeploytender');
        }
        public function logintodeploy(Request $request){

            $name=$request->username;
            $person=$request->password;
            $users = DB::select('select username from accountstender where password = ?', [$person]);

            if($users){
                return redirect('http://localhost:8000/todeploytender');
            }
            else{
            echo 'not valid account';
            }
        }
}
