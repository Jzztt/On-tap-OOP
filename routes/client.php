<?php

// Website có một số trang :  Trang chủ, Trang Gioi thieu, Trang San Pham, Trang chi tiet San Pham, Liên Hệ

// Để Định nghĩa được, tạo Controller

// Tạo các function tương ứng để xứ lý

// Định nghĩa đường dẫn đến controller

// HTTP method: get, post, put, patch, delete, option, head

use Admin\OopPhp\Controllers\Client\AboutController;
use Admin\OopPhp\Controllers\Client\ContactController;
use Admin\OopPhp\Controllers\Client\HomeController;
use Admin\OopPhp\Controllers\Client\ProductController;

$router->get('/', HomeController::class . '@index');
$router->get('/about', AboutController::class . '@index');
$router->get('/contact', ContactController::class . '@index');
$router->post('/contact', ContactController::class . '@store');
$router->get('/products', ProductController::class . '@index');
$router->get('/product/{id}', ProductController::class . '@detail');