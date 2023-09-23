<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $fillable =[
        'image','title','text','product_id'
    ];

    public function setImageAttribute($value){
        if(is_file($value)){
            $this->attributes['image'] = ImageHelper::saveImage($value,'images/slider');
        } else if (!empty($value)){
            $this->attributes['image'] = $value;
        }
    }

    public function product(){
        return $this->belongsTo(Product::class,'product_id');
    }
}
