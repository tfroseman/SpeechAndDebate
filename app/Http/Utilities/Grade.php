<?php

namespace App\Http\Utilities;

class Grade
{
    protected static $grades = [7,8,9,10,11,12];

    public static function all()
    {
        return static::$grades;
    }
}