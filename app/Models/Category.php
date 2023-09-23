<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name','handler',
        'image'
    ];
    public function setImageAttribute($value){
        if(is_file($value)){
            $this->attributes['image'] = ImageHelper::saveImage($value,'images/category');
        } else if (!empty($value)){
            $this->attributes['image'] = $value;
        }
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}
