<?php

namespace MVC\core;


class helpers{

    public static function redirect($path){
        header("LOCATION: http://localhost/mvc/public/".$path);
    }
}