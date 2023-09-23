<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id','path','order'
    ];

    public function setPathAttribute($value){
        if(is_file($value)){
            $this->attributes['path'] = ImageHelper::saveImage($value,'images/products');
        } else if (!empty($value)){
            $this->attributes['path'] = $value;
        }
    }

    public function product(){
        return $this->belongsTo(Product::class,'product_id');
    }
}   
