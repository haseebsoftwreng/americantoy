<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory ,SoftDeletes;

    protected $fillable = [
        'name','price','stock','description','category_id','rating','order','oldprice','handler','link','color','featured'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function images(){
        return $this->hasMany(Image::class)->orderBy('order','desc');
    }

    public function attributes(){
        return $this->hasMany(AttributeValue::class); 
    }

    public function reviews(){
        return $this->hasMany(Review::class); 
    }

    public function colors(){
        return $this->hasMany(Color::class); 
    }
}
