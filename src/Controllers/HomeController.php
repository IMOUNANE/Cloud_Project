<?php

namespace CloudProject\Controllers;

class HomeController
{
    public function home() {
        require_once 'Views/homepage.php';
    }
    public function pricing() {
        require_once 'Views/pricing.php';
    }
    

}

?>