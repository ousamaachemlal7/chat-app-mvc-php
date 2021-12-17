<?php

namespace Provider;

class Request{
    public static function route($route,$typeUser){
        return BASE_URI. $typeUser.'/' . $route;
    }
    public static function post($key){

        return isset($_POST[$key]) && !empty($_POST[$key]) ? true :false;
    }
    public static function setPost($key){

        return $_POST[$key];
    }
}