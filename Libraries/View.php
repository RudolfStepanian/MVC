<?php

class View{
    public function __construct(){
    }

    public function render($name, $noInclude = false){
        if ($noInclude){
            require 'view/'. $name. '.php';
        } else {
            require 'view/header.php';
            require 'view/'. $name. '.php';
            require 'view/footer.php';
        }
    }
}