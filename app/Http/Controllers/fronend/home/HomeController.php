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
   public function index($page)
   {
    

      $item_per_page = 8;
      // $page = 1;
      $offset  = ($page - 1) * $item_per_page;
      $totalProduct = Product::totalProduct("products");
      $totalPages = ceil($totalProduct / $item_per_page);
      if (!($page === null)) {
         $titleTag = "Trang chủ";
         $product  = BelongsTo::BelongsToProduct("products", "categories", "id", "categories_id",  $item_per_page, $offset);
         $list  = Category::Category("categories");

         // header('Content-Type: application/json');
         // echo json_decode($product);
         return $this->view("fe.home.home", [
            'titleTag' => $titleTag,
            'product' => $product,
            'list' => $list,
            'totalPages' => $totalPages,

         ]);
      } else {
         $titleTag = "Trang chủ";
         $product  = BelongsTo::BelongsToProduct("products", "categories", "id", "categories_id",  $item_per_page, 0);
         $list  = Category::Category("categories");
         return $this->view("fe.home.home", [
            'titleTag' => $titleTag,
            'product' => $product,
            'list' => $list,
            'totalPages' => $totalPages,


         ]);
      }
   }


   // public function homeProduct()
   // {
   //    $product  = BelongsTo::BelongsToProduct("products", "categories", "id", "categories_id", 0, 8);
   //    // $product_item = array();

   //    // foreach ($product as $item) {
   //    //    $product_item = $item;
   //    // }
   //    header('Content-Type: application/json');

   //    print_r($product);
   //    echo json_decode($product);
   // }
   public function evaluate()
   {

      $data = [
         "users_id" => $_POST['users_id'],
         "products_id" => $_POST['products_id'],
         "content" => $_POST['content'],
      ];
      comment::creCom('comment', $data);
      redirect("");
   }


   
}
