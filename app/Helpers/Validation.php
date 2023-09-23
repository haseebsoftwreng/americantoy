<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Validator;

class Validation{

    public static function registration($request,$class){
        return Validator::make($request->all(), $class::registerRules());

    }


}