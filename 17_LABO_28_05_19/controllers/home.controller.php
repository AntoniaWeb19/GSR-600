<?php

class HomeController{

    public function __CONSTRUCT(){
    }

    public function Index(){
        require_once 'views/header.php';
        require_once 'views/home/home.php';
        require_once 'views/footer.php';
    }
}
