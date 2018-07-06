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
      $products = products::all();
      return view('products', array('products'=>$products));
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
    $id = $request->pid;
    $product = products::where('id',$id)->first();
    return view('go',array('product'=>$product));
  }



}
