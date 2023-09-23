<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    //
    public function delete(){
        $products = Product::onlyTrashed()->get();
       return view('admin.product.delete')->with('products', $products);
       // return view('admin.product.delete')
   }
   public function restore(Request $request){
      // dd($request->id);
    Product::onlyTrashed()->where('id', $request['id'])->restore();
    $products = Product::all();
   return view('admin.product.products')->with('products', $products);
   }

   public function deleted(Request $request){
    $Product = Product::onlyTrashed()->where('id', $request['id'])->forceDelete();
    $products = Product::all();
    return view('admin.product.products')->with('products', $products);
   // return view('admin.product.delete')
}
}
