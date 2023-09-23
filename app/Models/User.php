<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function registerRules()
    {
        return [
            'name'=>'max:255|required',
            'email'=>'email|required|unique:users',
            'password' => 'min:6|required',
        ];
    }
    
    public static function loginRules()
    {
        return [
            'email'=>'email|required',
            'password' => 'required'
        ];
    }

    public function setImageAttribute($value){
        if(is_file($value)){
            $this->attributes['image'] = ImageHelper::saveImage($value,'images/profile');
        } else if (!empty($value)){
            $this->attributes['image'] = $value;
        }
    }
    
    public function getImageAttribute($value){
        return asset($value);
    }

    public function setPasswordAttribute($value){
        if(!empty($value)){
            $this->attributes['password'] = Hash::make($value);
        }
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }
    
    public function wishes(){
        return $this->hasMany(Wish::class);
    }
}
