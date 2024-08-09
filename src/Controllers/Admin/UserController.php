<?php

namespace Admin\OopPhp\Controllers\Admin;

use Admin\OopPhp\Commons\Controller;

class UserController extends Controller
{
    public function index()
    {
        echo 'Trang nguoi dung';
    }

    public function create()
    {
        echo ' Hiển thị form thêm user';
    }
    public function store()
    {
    }
    public function edit($id)
    {
    }
    public function update($id)
    {
    }
    public function destroy($id)
    {
    }
}