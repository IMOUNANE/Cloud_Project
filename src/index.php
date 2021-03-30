<?php
class Router {
    public static function homepage() {
        header("Location: /");
        exit();
    }
    public static function register() {
        header("Location: /register");
        exit();
    }
    public static function login() {
        header("Location: /login.php");
        exit();
    }
    
}