<?php

namespace App\Http\Controllers\fronend\login;

use App\Http\Controllers\Controller;
use App\Models\User;

class LoginUresController extends Controller
{

    public function index()
    {

        $titleTag = "Đăng nhập";


        return $this->view("fe.login.login", ['titleTag' =>  $titleTag]);
    }
    public function login($email, $password)
    {
        $email = trim(strip_tags($_POST['email']));
        $password = trim(strip_tags($_POST['password']));
        $login = User::loginUser($email, $password);
        if ($login['role'] === 0) {
            $_SESSION['role'] = $login['role'];
            $_SESSION['name'] = $login['name'];
            $_SESSION['user_id']= $login['id'];
            redirect('');
        } else {
            redirect('dang-nhap');
        }
        // if($login){

        //     redirect('');
        // }
    }
    public function crelogin()
    {

        $password = $_POST['password'];
        $options = [
            'memory_cost' => 1024,
            'time_cost' => 2,
            'threads' => 2
        ];
        $hashedPassword = password_hash($password, PASSWORD_ARGON2I, $options);
        $data1 = [
            "id" => $_POST['id'],
            "name" => $_POST['name'],
            "email" => $_POST['email'],
            "password" =>  $hashedPassword,
        ];

        $data_informations = [
            "users_id" => $data1["id"],
            "image" =>  "",
            "phone" => null,
            "address" =>  "",

        ];
        User::creRegister("users", $data1, 'user_informations', $data_informations);
        // Sửa: không cần truy cập thuộc tính 'id' của $success

        // var_dump($data_informations);
        // exit;
        redirect('dang-nhap');
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
