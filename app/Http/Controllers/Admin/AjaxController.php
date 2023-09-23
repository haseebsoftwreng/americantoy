<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function fetchAttribute(Request $request){

        $attributes = Attribute::where('category_id',$request->id)->get();        
        return response($attributes);

    }
}
