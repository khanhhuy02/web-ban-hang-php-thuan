<?php

use App\Http\Controllers\backend\home\HomeController as AdminHomeController;
use App\Http\Controllers\backend\login\LoginController;
use App\Http\Controllers\backend\product\productController;
use App\Http\Controllers\backend\user\usersController;
use App\Http\Controllers\errors\errors404;
use App\Http\Controllers\fronend\home\HomeController;
use App\Http\Controllers\fronend\login\LoginUresController;
use App\Http\Controllers\fronend\shop\ShopController;
use App\Http\Controllers\fronend\users\usersController as UsersUsersController;
use Support\Middleware\authCheckuser;
use Support\src\Route;

$authCheck = new authCheckuser();
// Kiểm tra xem request đến từ trang admin hay không
if ($authCheck->isLoggedIn() && $authCheck->isAdmin()) {
    // admin
    Route::get(administrators, [new AdminHomeController, 'index']);
    // product Admin 
    Route::get(administrators . "/list/product", [new productController, 'index']); // list product
    Route::get(administrators . "/create/product", [new productController, 'ShowCre']); // xem khởi tao product 
    Route::post(administrators . "/create/product", [new productController, 'create']); // khởi tạo produt
    Route::get(administrators . "/eidt/products/{id}", [new productController, 'showEdi']); // xem edit product
    Route::put(administrators . "/edit/product/{id}", [new productController, 'proEdi']); // chỉnh sủa product 
    Route::delete(administrators . "/list/products/{id}", [new productController, 'deletePros']); // xóa produt
    // product ajax + javasript thuần
    Route::get("admin/create/product/{id}/{param}", [new productController, 'ShowCreSub']); //  javasript thuần

    // user Admin 
    Route::get(administrators . "/list/user", [new usersController, "index"]); // list user
    Route::get(administrators . "/edit/user/{id}", [new usersController, "showEdi"]); // xem edit user
    Route::put(administrators . "/edit/user/{id}", [new usersController, "userEdi"]); //  chỉnh sủa user
    Route::delete(administrators . "/delete/user/{id}", [new usersController, 'deleteUse']); // xóa user
  
    //  admin profile 
    Route::get(administrators . "/profile/user", [new usersController, "profile"]); // list user
    Route::get(administrators . "/profile/edit/user/{id}", [new usersController, "showProf"]); // list user
    Route::post(administrators . "/profile/edit/user/{id}", [new usersController, "editProf"]); // list user

} else {
    // redirect("admin/dang-nhap");
}


// login của user
// Route::get("dang-ky", [new LoginController, 'register']);
// Route::post("dang-ky", [new LoginController, 'creRegister']);
// trang chủ 
Route::get("{cate}/{name}", [new ShopController, 'detail']);// 
Route::get("gio-hang", [new ShopController, 'cart']);
Route::post("them-gio-hang", [new ShopController, 'addCart']);
Route::post("gio-hang/{idProduct}", [new ShopController, 'deleteCart']);


Route::post("danh-gia", [new HomeController, 'evaluate']);

Route::get("", [new HomeController, 'index']);
// chi tiết sản phẩm

// Route::get("/{cate}/{name}", [new HomeController, 'detail']);




// login của admin 
Route::get(administrators ."/dang-nhap", [new LoginController, 'index']);
Route::post(administrators ."/dang-nhap", [new LoginController, 'login']);
Route::get(administrators . "/logout", [new LoginController, 'logout']);
Route::get("trang-khong-ton-tai", [new errors404, 'index']);


Route::get("dang-nhap", [new LoginUresController, 'index']);
Route::post("dang-nhap", [new LoginUresController, 'login']);
Route::post("dang-ky", [new LoginUresController, 'crelogin']);
Route::get("logout", [new LoginUresController, 'logout']);

// user profile 
Route::get("tai-khoan-cua-toi", [new UsersUsersController, 'index']);
Route::get("profile/edit/my-account/{id}", [new UsersUsersController, "showProfUser"]); // list user
Route::post("profile/edit/my-account/{id}", [new UsersUsersController, "editProfUser"]); // list user

