<?php
require_once '../vendor/autoload.php';
session_save_path("c:/wamp64-new/tmp");
session_start();

setcookie("_ga", "", time()-3600);
setcookie("exercice5", "", time()-3600);
setcookie("PHPSESSID", "", time()-3600);
require_once '../src/index.php';

