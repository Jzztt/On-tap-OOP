<?php

namespace Admin\OopPhp\Controllers\Client;

use Admin\OopPhp\Commons\Controller;

class ProductController extends Controller
{

    public function index()
    {
        echo "Trang Sản Phẩm";
    }
    public function detail($id)
    {
        echo "Chi tiết sản phẩm $id";
    }
}