<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;
use App\emails;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = products::all();
        $leads = emails::all();
        return view('home',array('products'=>$products,'leads'=>$leads));
    }
}
