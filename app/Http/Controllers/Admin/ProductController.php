<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AttributeValue;
use App\Models\Category;
use App\Models\Color;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.products')->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  dd($request);
        $product = Product::create([
            'handler' => str_replace(' ', '_', $request->name),
        ] + $request->all());
        
        if($request->attrs){
            foreach ($request->attrs as $key => $attr) {
                AttributeValue::create([
                    'product_id' => $product->id,
                    'attribute_id' => $key,
                    'value' => $attr
                ]);
            }

        }
        
        foreach ($request->images as $image) {
            Image::create([
                'product_id' => $product->id,
                'path' => $image
            ]);
        }
        if($request->colors){
            foreach($request->colors as $color){

                Color::create([
                    'product_id' => $product->id,
                    'color' => $color
                ]);
            }
            
        }

        alert()->success('Product Added.', 'Done');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        dd($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        // dd($product);
        return view('admin.product.edit')->with('product',$product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        // dd($request , $product);

        $attributes = AttributeValue::where('product_id', $product->id)->delete();

        if ($request->attrs){
            foreach ($request->attrs as $key => $attr) {
                AttributeValue::create([
                    'product_id' => $product->id,
                    'attribute_id' => $key,
                    'value' => $attr
                ]);
            }

        }
        
        if ($request->images) {
            foreach ($request->images as $image) {
                Image::create([
                    'product_id' => $product->id,
                    'path' => $image
                ]);
            }
        }
        $product->update($request->all());
        alert()->success('Product Updated.', 'Done');
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        alert()->success('Product Deleted.', 'Done');
        return redirect()->back();
    }  
    
    public function feature(Request $request)
    {
        $product = Product::find($request->id);
        if ($product->featured == 1) {
            $product->update([
                'featured' => 0
            ]);
        }

        elseif ($product->featured == 0) {
            $product->update([
                'featured' => 1
            ]);
        }
        $products = Product::find($request->id);

        return response()->json($products);
    }

   
  

}
