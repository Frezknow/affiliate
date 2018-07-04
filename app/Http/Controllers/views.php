<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\products;
use Illuminate\Support\Facades\DB;
class views extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    public function what(){
      return view('what');
    }
    public function products(){
      return view('products');
    }
    public function marketing(){
      return view('marketing');
    }
    public function about(){
      return view('about');
    }
    public function lg(){
      return view('lg');
    }
  public function go(Request $request){
    $pid = $request->pid;
    $products = products::all();
    $all = "";
    foreach($products as $p){
      $all.=$p->link."$!$";
    }
    return view('go',array('pid'=>$pid,'products'=>$all));
  }



}
