<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderMail extends Model
{
    use HasFactory;
    protected $fillable = [
        'email', 'order_id', 'message','tracking_no'
    ];
}
