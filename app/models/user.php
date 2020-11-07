<?php

namespace MVC\models;

use MVC\core\model;

class user extends model{

    public function GetAllUsers(){
        $data =  model::db()->rows("SELECT * FROM users"); 
        return $data;
    }


    public function GetUser($email,$password){
        $data =  model::db()->row("SELECT * FROM users Where `email` = ? && `password` = ? ",[$email,$password]); 
        return $data;
    }
    public function InsertUser($name,$email,$password){
        $data = model::db()->insert('users', ['name' => $name, 'email' => $email,'password' => $password]);
        return $data;
    }
}