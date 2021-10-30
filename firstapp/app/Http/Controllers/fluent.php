<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class fluent extends Controller
{
public function index(){
  echo '<h1> fluent Stirngs<h1>';
  $slice=Str::of('well come to the ')->after('well');
 echo $slice;
 $string=Str::of('hello')->append('well');
 echo $string;
 $string2=Str::of('software Enginnering')->lower();
  echo $string2;
  $string3=Str::of('laravel')->replace('8.0','5.0');
  $converted=Str::of('this is atitle')->title();
$slag=Str::of('laravel 8 framework')->slug('.');
echo $slag;
$sub=Str::of('well come tp .aravel')->substr(8);
echo $sub;'<br>';
$yihu=Str::of('/laravel8/')->trim('/');
 echo $yihu;
}
}
