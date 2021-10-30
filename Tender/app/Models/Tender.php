<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthAuthenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

//class Tender extends Model
class Tender extends Authenticatable
{
    use HasFactory;
 //   protected $fillable = [
    //    'username',
      //  'phone',
        //'email',//
        //'password'
  //  ];
  protected $fillable=['name','email','password'];
    protected $table='tenders';
}
