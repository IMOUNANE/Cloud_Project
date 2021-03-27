<?php
require_once __DIR__ . '/../vendor/autoload.php';

use CloudProject\Controllers\DotEnv;

(new DotEnv(__DIR__ . '/.env'))->load();

echo getenv('APP_ENV');
// dev
echo getenv('DATABASE_DNS');
// mysql:host=localhost;dbname=test;