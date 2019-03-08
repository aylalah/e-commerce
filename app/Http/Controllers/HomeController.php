<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

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
        $storeProd = Product::inRandomOrder()->take(12)->get();
    
        // $dat = $storeProd::orderBy('id');
        // return view('/front.index')->with('data', $storeProd);
        return view('front.user_categ.all_product')->with('data', $storeProd);
    }

    public function home_categ()
    {
        $storeProd = Product::inRandomOrder()->take(12)->get();
    
        // $dat = $storeProd::orderBy('id');
        // return view('/front.index')->with('data', $storeProd);
        return view('front.user_categ.all_product')->with('data', $storeProd);
    }
}
