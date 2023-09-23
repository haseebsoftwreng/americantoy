<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','handler','type','category_id',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function options(){
        return $this->hasMany(Option::class);
    }

    public function selectedValue($product){
        return AttributeValue::where('attribute_id', $this->id)->where('product_id', $product->id)->first();
    }
}
