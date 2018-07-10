<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\products;
use App\emails;
class functions extends Controller
{
  public function add_Product_Listing(Request $request){
    $imgs="";
      if($request->file('imgs')){
       $file =$request->file('imgs');
       $destinationPath = 'imgs';
       $file->move($destinationPath,$file->getClientOriginalName());
       $imgs=$destinationPath."/".$file->getClientOriginalName();
      }

     products::create([
      'link'=>$request->link,
      'title'=>$request->title,
      'description'=>$request->description,
      'imgs'=>$imgs
    ]);
    redirect('lg');
  }
 public function DeleteProduct(Request $request){
    products::find($request->id)->delete();
 }
 public function Lead(Request $request){
   emails::create([
    'email'=>$request->email,
  ]);
 }

}
