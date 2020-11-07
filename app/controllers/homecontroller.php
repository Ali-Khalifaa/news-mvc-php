<?php 

namespace MVC\controllers;

use MVC\core\controller;
use MVC\models\user;
use GUMP;
use MVC\core\Session;
use MVC\core\helpers;


class homecontroller extends controller{

    
    public function index(){
        $title = 'home';

        $this->view("home/index",['title'=>$title]);
    }


    public function details(){
        $title ='details';
        $this->view("home/details",['title'=>$title]);
    }
}