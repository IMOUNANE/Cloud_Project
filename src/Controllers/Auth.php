<?php

use CloudProject\Controllers\DotEnv;

//namespace CloudProject\Controllers;

(new DotEnv(__DIR__ . '/.env'))->load();

echo getenv('APP_ENV');
// dev
echo getenv('DATABASE_DNS');
// mysql:host=localhost;dbname=test;
?>