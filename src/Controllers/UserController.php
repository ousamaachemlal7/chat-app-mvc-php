<?php

namespace Chat;

use \Models\User;
use \Provider\Renderer;


class UserController{

    private $user;

    public function __construct(){

        $this->user = new User();
    }

    public function index(){
       // $allusers = $this->user->getAllusers();
        //debug($allusers);
        //$email = $this->user->getEmail(1);
        //debug($email);
        
    }
    public function home(){
        Renderer::render("admin","login");
    }
}