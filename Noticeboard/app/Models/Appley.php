<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appley extends Model
{
    use HasFactory;
    protected $fillable = [
        'Tendernumber',
        'TenderTitle',
        'Fullname',
        'Phone',
        'Email',
        'Netprice',
        'itemprice'
    ];
    protected $table='appleys';

}
