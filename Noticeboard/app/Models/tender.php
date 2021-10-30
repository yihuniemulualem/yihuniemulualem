<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tender extends Model
{
    use HasFactory;
    protected $fillable = [
        'number',
        'title',
        'owner',
        'startdate',
        'enddate',
        'price',
        'pricetotal',
        'detail'
    ];
    protected $table='Tender';
    public static function getuserData($id=0){

        if($id==0){
          $value=DB::table('users')->orderBy('id', 'asc')->get();
        }else{
          $value=DB::table('users')->where('id', $id)->first();
        }
        return $value;
      }

      public static function insertData($data){
        $value=DB::table('users')->where('username', $data['username'])->get();
        if($value->count() == 0){
          DB::table('users')->insert($data);
          return 1;
         }else{
           return 0;
         }

      }

      public static function updateData($id,$data){
        DB::table('users')
          ->where('id', $id)
          ->update($data);
      }

      public static function deleteData($id){
        DB::table('tenderrs')->where('id', '=', $id)->delete();
      }

}
