<?php

namespace CloudProject\Controllers;

class HomeController
{
    public $repo;
    public function __construct($repo){
        $this->repo = $repo;
    }
    public function home() {
        require_once 'Views/homepage.php';
    }

    

}

?>