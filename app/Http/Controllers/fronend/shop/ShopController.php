<?php 
namespace App\Http\Controllers\fronend\shop;

use App\Http\Controllers\Controller;

class ShopController extends Controller {

    public function detail() {
        $titleTag = "Trang chi tiết";
        
        return $this->view("fe.shop.product-detail",["titleTag" => $titleTag]);
    }


}