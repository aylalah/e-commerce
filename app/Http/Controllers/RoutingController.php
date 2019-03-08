<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class RoutingController extends Controller
{


    public function front()
    {
    $storeProd = Product::inRandomOrder()->take(12)->get();
    
        // $dat = $storeProd::orderBy('id');
        return view('/front.index')->with('data', $storeProd);
    }

    public function product_details($id)
    {
        $storeProduct = Product::find($id);
       
        return view('/front.product_details')-> with('data', $storeProduct);
    }


    public function dashboard()
    {
        return view('back.dashboard');
        // return view('back.index');
    }

    public function add_product()
    {
        return view('back.add_product');
    }
}
