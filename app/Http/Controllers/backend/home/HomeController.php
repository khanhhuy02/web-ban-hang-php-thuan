<?php

namespace App\Http\Controllers\backend\home;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function index()
    {
        $titleTag = "Trang chủ";

        return $this->view("be.home.adminHome",['titleTag'=>$titleTag]);
    }
}
