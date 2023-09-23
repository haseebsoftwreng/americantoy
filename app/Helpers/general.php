<?php

use App\Models\Favourite;
use App\Models\Wish;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

function getWishUrl(){
    $str1 = url('wishlist');
    $str2 = substr(Request::getRequestUri(), 14);
    return $str1.$str2;
}


function getClassActive($p_id){
    if(Auth::check()){
        $check = Wish::where('product_id',$p_id)->where('user_id',Auth::user()->id)->first();
        if($check){
            return "js-addedwish-b2";

        }
    }else{
        
    }
}
function detailgetClassActive($p_id){
    if(Auth::check()){
        $check = Wish::where('product_id',$p_id)->where('user_id',Auth::user()->id)->first();
        if($check){
            return "js-addedwish-detail";

        }
    }else{
        
    }
}

function countwish(){
    if(Auth::check()){
        $check = Wish::where('user_id',Auth::user()->id)->count();
        return $check;
    }else{
       return 0;
    }
}