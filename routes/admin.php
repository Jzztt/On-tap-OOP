<?php


// CRUD Bao gồm : Hiện Thị Danh sách, thêm, sửa, xóa
// User:

// 1.Hiện Thị Danh sách
// GET -> UserController -> index -> Trang Danh sách

// 2. Hiển thị form thêm user
// GET  -> UserController -> create -> Hiển thị form thêm user

// 3. Thêm user
// POST -> UserController -> store -> Luu user với CSDL

// 4. Hiển thị form sửa user
// GET (id)  -> UserController -> edit -> Hiện thị form sửa user

// 5. Sửa user
// PUT (id)   -> UserController -> update -> Sửa user với CSDL

// 6. Xóa user
// DELETE (id)  -> UserController -> destroy -> Xóa user trong CSDL

use Admin\OopPhp\Controllers\Admin\UserController;

$router->mount('/admin', function () use ($router) {
    $router->mount('/users', function () use ($router) {
        $router->get('/', UserController::class . '@index');
        $router->get('/create', UserController::class . '@create');
        $router->post('/store', UserController::class . '@store');
        $router->get('/{id}/edit', UserController::class . '@edit');
        $router->put('/{id}', UserController::class . '@update');
        $router->delete('/{id}', UserController::class . '@destroy');
    });
});