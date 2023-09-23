<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Wish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AjaxController extends Controller
{
    public function wishadd(Request $request){
        // return response($request);
        if(Auth::check()){
            $wish = Wish::where('user_id',Auth::user()->id)->where('product_id',$request->id)->first();
            if($wish){
                $wish->delete();
                return response('removed');
            }else{
                Wish::create([
                    'user_id' =>Auth::user()->id,
                    'product_id' =>$request->id
                ]);
                return response('true');
            }
            

        }else{
            return response('false');
        }
       
    }
}
