<?php

namespace App\Http\Controllers\fronend\home;

use App\Http\Controllers\Controller;
use App\Databases\DB;
use App\Models\Category;
use App\Models\comment;
use App\Models\Product;
use App\User;
use Support\relationship\BelongsTo;

class HomeController extends Controller
{
   public function index()
   {
      $titleTag = "Trang chủ";
      $product  = BelongsTo::BelongsToProduct("products", "categories", "id", "categories_id");
      $list  = Category::Category("categories");
      return $this->view("fe.home.home", [
         'titleTag' => $titleTag,
         'product' => $product,
         'list' => $list,

      ]);
   }
   public function evaluate()
   {

      $data = [
         "users_id" => $_POST['users_id'],
         "products_id" => $_POST['products_id'],
         "content" => $_POST['content'],
      ];
      comment::creCom('comment',$data);
      redirect("");
   }
}
