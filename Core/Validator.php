<?php

namespace Core;

class Validator
{
    public static function string($value, $min = 1, $max = PHP_INT_MAX)
    {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) < $max;
    }
    public static function email($value)
    {
        //Validator::email('joe@email.com)
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}
