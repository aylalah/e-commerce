<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Product;

class CartController extends Controller
{
    public function cart(Request $request)
    {
      $id=$request->id;
     
      $cart=new Product;
      $productID=$cart::where('id',$id)->first();
      Cart::add([
          'id'=>$id,
          'name'=>$productID->name,
          'price'=>$productID->price,
         'qty'=>$request->qty

      ]);
        return redirect('/cart_show');

    }
    public function cartshow()
    {
     $cartproduct=Cart::Content();
    //  dd(($cartproduct));
      return view('front.cart')->with('cartproduct',$cartproduct);
    }

    public function update_cart(Request $request)
    {
        //dd($request->all());
     Cart::update($request->rowId, $request->qty);
     
     return redirect('/cart_show');
    } 
   
    public function  deletecart($rowId)
    {
        //dd($request->all());
     Cart::remove($rowId);
     
     return redirect('/cart_show');
    }
}
