<?php

use App\Http\Controllers\backend\home\HomeController as AdminHomeController;
use App\Http\Controllers\backend\login\LoginController;
use App\Http\Controllers\backend\product\productController;
use App\Http\Controllers\errors\errors404;
use App\Http\Controllers\fronend\home\HomeController;
use App\Http\Controllers\fronend\shop\ShopController;
use Support\Middleware\authCheckuser;
use Support\src\Route;

$authCheck = new authCheckuser();

// Kiểm tra xem request đến từ trang admin hay không
if ($authCheck->isLoggedIn() && $authCheck->isAdmin()) {
    // admin
    Route::get("admin", [new AdminHomeController, 'index']);
    Route::get("admin/list/product", [new productController, 'index']);
    Route::get("admin/create/product", [new productController, 'create']);
}else{
}
// login của admin 
Route::get("admin/dang-nhap", [new LoginController, 'index']);
Route::post("admin/dang-nhap", [new LoginController, 'login']);
Route::get("trang-khong-ton-tai", [new errors404, 'index']);

// login của user
Route::get("dang-ky", [new LoginController, 'register']);
Route::post("dang-ky", [new LoginController, 'creRegister']);


// user
Route::get("", [new HomeController, 'index']);
Route::get("chitiet/sanpham", [new ShopController, 'detail']);
