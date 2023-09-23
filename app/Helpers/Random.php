<?php

namespace APp\Helpers;


class Random{

    public static function from($array){
        $length = count($array)-1;
        return $array[rand(0,$length)];
    }
}