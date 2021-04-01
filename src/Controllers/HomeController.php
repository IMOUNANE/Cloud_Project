<?php

namespace CloudProject\Controllers;

class HomeController
{
    public function __construct(){

    }
    public function home() {
        require_once "..\src\Views\homepage.php"; 
    }

}

?>
