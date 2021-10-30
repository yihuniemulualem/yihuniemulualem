<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usermodel extends Model
{
    use HasFactory;
    protected $table="phones";
    public function user(){
        return $this->belongsTo('App\models\phone');
    }
}
