<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\products;

class functions extends Controller
{
  public function add_Product_Listing(Request $request){

     products::create([
      'link'=>$request->link,
      'title'=>$request->title,
      'description'=>$request->description,
      'imgs'=>""
    ]);
    redirect('lg');
  }

}
