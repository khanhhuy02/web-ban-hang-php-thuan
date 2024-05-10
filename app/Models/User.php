<?php

namespace App\Models;

class User extends database
{
    private static $password;
    private static $email;

    public function __construct($email, $password)
    {
        self::$email = $email;
        self::$password = $password;
    }

    public static function login($email, $password)
    {
        self::$email = $email;
        self::$password = $password;

        $getUser = "SELECT * FROM users WHERE email = :email";
        $params = [
            'email' => self::$email
        ];

        $user = parent::queryOne($getUser, $params);

        if ($user && password_verify(self::$password, $user['password'])) {
            // Password khớp, đăng nhập thành công
            return $user;
        } else {
            // Password không khớp hoặc không tìm thấy người dùng
            return false;
        }
    }

    public static function creRegister($tablet, $data)
    {



        $key = implode(", ", array_keys($data)); // key (name , email, password)
        // echo "<br>";
        // print_r($data);
        // echo "<br>";
        // var_dump($key);
        // echo "<br>"

        $checkEmail = $data['email'];

        $getUser = "SELECT * FROM users WHERE email = '$checkEmail'";
        $user = parent::query($getUser);
        if (count($user) > 0) {
            echo "đã có email";
        } else {
            $item = rtrim(str_repeat('?, ', count($data)), ', '); //item (? , ?, ?)
            // var_dump($item);
            // echo "<br>";
            $values = array_values($data); //values (huy , abc@gmail.com, asssdasdasđsad)

            $setUser = "INSERT INTO $tablet ($key) VALUES ($item)";
            $result = parent::execute($setUser, $values);
            return $result;
        }



        // $setUser = "INSERT INTO $tablet ($key) SELECT $item WHERE NOT EXISTS (SELECT 1 FROM $tablet WHERE email = ?)";
        // $values = array_values($data); // Lấy giá trị của tất cả các trường (name, email, password)
        // $emailValue = $data['email']; // Lấy giá trị của trường email
        // $values[] = $emailValue; // Thêm giá trị của email vào mảng $values
        // $result = parent::execute($setUser, $values);

        // if ($result) {
        //     echo "thành công";

    }
}
