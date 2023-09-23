<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function fetch_product(Request $request)
    {
        $product = Product::find($request->id);
        $product->images;
        return response(['product' => $product]);
    }
}
