<?php

use Admin\OopPhp\Commons\Helper;

session_start();

require 'vendor/autoload.php';


Dotenv\Dotenv::createImmutable(__DIR__)->load();


require_once  __DIR__ . '/routes/index.php';
