<?php

namespace MVC\controllers;

use MVC\core\controller;
use MVC\core\Session;
use MVC\core\helpers;

class adminpostcontroller extends controller{
    public function __construct()
    {
        Session::Start();
        $user_data = Session::Get('user');
        
        if(empty($user_data)){
            echo 'class not access';
            die;
        }
    }
    public function index(){
        $this->view('back/index',['title' => 'admin']);
    }
    public function logout(){
        session::stop();
        helpers::redirect('user/login');
        
    }
}