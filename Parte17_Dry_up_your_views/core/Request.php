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
       return  trim($_SERVER['REQUEST_URI'], '/');
    }
}