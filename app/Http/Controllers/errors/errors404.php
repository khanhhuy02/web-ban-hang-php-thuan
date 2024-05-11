<?php

namespace App\Http\Controllers\errors;

use App\Http\Controllers\Controller;

class errors404 extends Controller
{

    function index()
    {
        $titleTag = "Trang không tồn tại";
        return $this->view("fe.errors.errors", ["titleTag" => $titleTag]);
    }
}
