<?php
namespace App\Core;
class Request 
{
    public static function uri()
    {
        //addBrand?brand_name=hue

        // return trim($_SERVER['REQUEST_URI'], '/');
        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}

