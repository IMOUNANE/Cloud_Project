<?php

namespace CloudProject\Controllers;

class HomeController
{
    
    public function home() {
        require_once 'Views/homepage.php';
    }

    public function backOffice() {
        require_once 'Views/backoffice.php';
    }

}

?>
