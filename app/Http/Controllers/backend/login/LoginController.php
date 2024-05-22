<?php

namespace App\Http\Controllers\backend\login;

use App\Http\Controllers\Controller;
use App\Models\User;

class LoginController extends Controller
{

    public function index()
    {
        $titleTag = "Đăng nhập";

        return $this->view("be.login.AdminLogin", ['titleTag' => $titleTag]);
    }

    public function login($email, $password)
    {
        $email = trim(strip_tags($_POST['email']));
        $password = trim(strip_tags($_POST['password']));
        $login = User::loginAdmin($email, $password);
        if ($login['role'] === 1) {
            $_SESSION['role'] = $login['role'];
            $_SESSION['name'] = $login['name'];
            $_SESSION['id'] = $login['id'];

            redirect('admin');
        } else if ($login['role'] === 0) {
            $_SESSION['role'] = $login['role'];
            redirect('');
        } else {
            redirect('admin/dang-nhap');
        }
        // if($login){

        //     redirect('');
        // }
    }

    // đăng ký user
    public function register()
    {
        $titleTag = "Đăng nhập";
        return $this->view("fe.login.AdminRegister", ['titleTag' => $titleTag]);
    }
    // post đăng ký 
    public function creRegister($errors = null)
    {

        // $errors = array();
        // if ($_SERVER['REQUEST_METHOD'] === "POST") {
        //     if (empty(trim($_POST['name']))) {
        //         $errors['fullname']['required'] = "Họ và tên không được để trống";
        //     } else {
        //         if (strlen(($_POST['name'])) <= 5) {
        //             $errors['fullname']['required'] = "Họ và tên không dưới 5 ký tự ";
        //         }
        //     }
        //     if (empty(trim($_POST['email']))) {
        //         $errors['email']['required'] = "email không được để trống";
        //     } else {
        //         if (!filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL)) {
        //             $errors['email']['invaild'] = "Email không hợp lệ ";
        //         }
        //     }

        //     if (empty(trim($_POST['password']))) {
        //         $errors['password']['required'] = "không được để trống";
        //     } else {
        //         if (strlen(($_POST['password'])) <= 5) {
        //             $errors['password']['invaild'] = "mật khẩu quá ngắn ";
        //         }
        //     }

        // } 

        // $password = $_POST['password'];
        // $options = [
        //     'memory_cost' => 1024,
        //     'time_cost' => 2,
        //     'threads' => 2
        // ];
        // $hashedPassword = password_hash($password, PASSWORD_ARGON2I, $options);
        // $data = [
        //     "name" => $_POST['name'],
        //     "email" => $_POST['email'],
        //     "password" =>  $hashedPassword,
        // ];

        // User::creRegister("users", $data);
    }

    public function logout()
    {
        // logout.php
        session_start();

        // Xóa tất cả các biến session
        session_unset();

        // Hủy phiên làm việc
        session_destroy();

        // Chuyển hướng người dùng về trang đăng nhập hoặc trang chủ
        redirect('dang-nhap');
        exit();
    }
}
