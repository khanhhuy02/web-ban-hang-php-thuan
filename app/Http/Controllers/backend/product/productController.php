<?php

namespace App\Http\Controllers\backend\product;

use App\Http\Controllers\Controller;

class productController extends Controller
{

    public function index()
    {
        $titleTag = "Danh sách sản phẩm";

        return $this->view("be.product.listProduct",['titleTag'=>$titleTag]);
    }
    public function create()
    {
        $titleTag = "Danh sách sản phẩm";

        return $this->view("be.product.addProduct",['titleTag'=>$titleTag]);
    }
}
