<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;


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
  public function go(Request $request){
    $pid = $request->pid;
    return view('go',array('pid'=>$pid));
  }



}
