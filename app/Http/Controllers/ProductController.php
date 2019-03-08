<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $storeProd = Product::all();
    
        // $dat = $storeProd::orderBy('id');
        return view('/back.product')->with('data', $storeProd);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeProduct = new Product;
        $storeProduct -> name = $request -> input('name');
        // $storeProduct -> slug = $request -> input('slug');
        $storeProduct -> details = $request -> input('details');
        $storeProduct -> price = $request -> input('price');
        $storeProduct -> description = $request -> input('description');
        $storeProduct -> category_id = $request -> input('category');
        $storeProduct -> status = $request -> input('status');

        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/upload/product');
            $image->move($destinationPath, $name);
            $storeProduct->slug = $name;
        }

                $storeProduct->save();
                if($storeProduct->save()){
                    return redirect('/view_product')->with('success', 'Saved Successfully');
                }



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $storeProduct = Product::find($id);
        return view('back/edit_product')-> with('data', $storeProduct);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $storeProduct = Product::find($id);
        $this->validate($request,[
            'name' =>'required',
            'price' => 'required',
            'details' => 'required'
        ]);

        $storeProduct -> name = $request -> input('name');
        $storeProduct -> details = $request -> input('details');
        $storeProduct -> price = $request -> input('price');
        $storeProduct -> description = $request -> input('description');
        $storeProduct -> category_id = $request -> input('category');
        $storeProduct -> status = $request -> input('status');

        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/upload/product');
            $image->move($destinationPath, $name);
            $storeProduct->slug = $name;
        }

        $storeProduct->save();
        return redirect('/view_product');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $storeProduct = Product::find($id);
       $storeProduct->delete();
       return redirect('/view_product');

    }
}
