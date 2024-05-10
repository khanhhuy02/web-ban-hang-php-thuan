<?php

namespace App\Http\Controllers\fronend\home;

use App\Http\Controllers\Controller;
use App\Databases\DB;
use App\Models\Category;
use App\Models\Product;
use App\User;

class HomeController extends Controller
{
   public function index()
   {
      $titleTag = "Trang chủ";
      $product  = Product::product('products',4);
      $list  = Category::Category("categories");
        return $this->view("fe.home.home", [
            'titleTag' => $titleTag,
            'product' => $product,
            'list' => $list,

        ]);
   }
}
