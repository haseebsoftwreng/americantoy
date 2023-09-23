<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'first_name','user_id', 'phone','email','last_name','country','city', 'street', 'amount', 'qty','subtotal','completed','method','order_no'
    ];

    public function items(){
        return $this->hasMany(Item::class);
    }
    
    public function mails(){
        return $this->hasMany(OrderMail::class);
    }

    public static function new(){
        return (new static)::where('completed',false)->get();
    }
    
    public static function completed(){
        return (new static)::where('completed',true)->get();
    }
}
