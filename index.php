<?php
require './vendor/autoload.php';
require('./core/init.php');

use \Chat\UserController;

$user = new UserController();






try {
    if(empty($_GET['page'])){
        throw new Exception("Page not found redirection 404 ");
    }else{
        $uri = filter_var($_GET['page'], FILTER_SANITIZE_URL);
        $url = explode("/", $uri);
        //debug($url);
        if(empty($url[0])){
            throw new Exception("URL NOT FOUND");       
        }else{
            
            switch ($url[0]){
                case 'admin':  
                        switch ($url[1]){
                            case 'login': $user->home();break;
                            case 'signup': echo 'this is signup page';break;
                            default: throw new Exception("page not found 404");
                        }              
                        break; 
                case 'user': echo 'this is page user'; break;
                default: throw new Exception("page not found 404");
            }
        }
    }
} catch (Exception $e) {
    $message = $e->getMessage();
    printf("an internal error has occured in the server: %s ", $message);
    die();
}
