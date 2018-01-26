<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 16/1/18
 * Time: 16:11
 */

class Request
{
    public static function uri()
    {
        // /names?name=pepe
       return trim(
           parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'
       );
    }
}