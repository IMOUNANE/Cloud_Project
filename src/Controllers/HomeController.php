<?php

namespace CloudProject\Controllers;

class HomeController
{
    protected $view;

    public function __construct( $view) {
        $this->view = $view;
    }


    public function home($request, $response, $args) {
      // your code here
      // use $this->view to render the HTML
      return $response;
    }

}

?>
