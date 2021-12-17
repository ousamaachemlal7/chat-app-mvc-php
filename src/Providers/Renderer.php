<?php

namespace Provider;

class Renderer {
    public static function render($dir,$file,$data=[]){
        $path = $_SERVER['DOCUMENT_ROOT'].'/MVC/views/'.$dir.'/';
        //debug($path);
        if(file_exists($path.$file.'.php')){
            include $path.$file.'.php';
        }else{
            return false;
        }
    }

    public static function renderAssets($dir,$file,$subDir){
        $path = $_SERVER['DOCUMENT_ROOT'].'/MVC/'.$dir."/$subDir/";
        $extensions = array('.css','.js');
        if(file_exists($path.$file.$extensions[0])){
            require_once($path.$file.$extensions[0]) ;
        }else if(file_exists($path.$file.$extensions[1])){
            require_once($path.$file.$extensions[1]) ;
        }else{
            return false;
        }
    }
}