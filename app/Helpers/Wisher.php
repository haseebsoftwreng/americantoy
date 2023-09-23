<?php

namespace App\Helpers;

use App\Models\Notification;
use App\Models\WishList;

class Wisher{

    public static function check($product){
        $wishes = WishList::all();
        foreach($wishes as $key => $wish){
            $found = true;
            $productAttrs = $product->attributes;

            if(!($wish->location == $product->city && $wish->condition == $product->condition && $wish->type == $product->type && $wish->category_id == $product->category_id && $wish->sub_category_id == $product->sub_category_id && $wish->child_category_id == $product->child_category_id )){
                $found=false;
            }

            foreach($wish->attributes as $key => $attr){
                if($attr->originalAttribute->type == 'range'){
                    if(!($productAttrs[$key]->value >= $attr->value && $productAttrs[$key]->value <= $attr->value2)){
                        $found = false;
                        break;
                    }
                }
                elseif($attr->value != $productAttrs[$key]->value){
                    $found = false;
                    break;
                }
            }

            if($found){
                $notification = Notification::create([
                    'title' => 'Product Matched',
                    'body' => $product->name,
                    'user_id' => $wish->user->id,
                    'firebase_token' => $wish->user->firebase_token,
                    'firebase_token' => $product->image,
                ]);
                $notification->send();
            }
        }

        
    }

}


// 'user_id',
// '',
// '',
// '',
// 'name',
// 'description',
// 'price',
// 'type',
// 'country',
// 'city',
// 'address',
// 'postcode',
// 'video',
// 'buynow',
// 'bidding',
// 'exchange',
// 'condition',
// 'location',
// 'phone',
// 'latitude',
// 'longitude',
// 'status',