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
            redirect('');
        }else{
            redirect('dang-nhap');
        }
        // if($login){

        //     redirect('');
        // }
    }
    public function  crelogin()
    {

        $password = $_POST['password'];
        $options = [
            'memory_cost' => 1024,
            'time_cost' => 2,
            'threads' => 2
        ];
        $hashedPassword = password_hash($password, PASSWORD_ARGON2I, $options);
        $data = [
            "name" => $_POST['name'],
            "email" => $_POST['email'],
            "password" =>  $hashedPassword,
        ];

        User::creRegister("users", $data);

        redirect('dang-nhap');
    }
}
