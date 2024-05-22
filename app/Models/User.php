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

    public static function loginUser($email, $password)
    {
        self::$email = $email;
        self::$password = $password;

        $getUser = "SELECT * FROM users WHERE email = :email AND role = 0 ";
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


    public static function loginAdmin($email, $password)
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

    public static function creRegister($tablet, $data, $tablet1, $data1)
    {

        // data [
        // 'name' =>  'khanh huy',
        // "email" => "abc@gmail.com",
        // "passwork" => "123123",
        // ]
        // data1 [
        // 'users_id ' =>  'data['id']',
        // "image" => "",
        // "phone" => "",
        // "address" => "",
        // ]
        $key = implode(", ", array_keys($data)); // (name ,email,passwork)
        $key1 = implode(", ", array_keys($data1));
        $checkEmail = $data['email']; // "abc@gmail.com"

        $getUser = "SELECT * FROM users WHERE email = '$checkEmail'"; // kiểm tra có email tồn tại không 
        $user = parent::query($getUser); // truy vẫn 
        if (count($user) > 0) {
            echo "Đã có email";
            return false; // Trả về false nếu email đã tồn tại
        } else {
            $item = rtrim(str_repeat('?, ', count($data)), ', '); // str_repeat lập lại số lương giá trị cout bằng ? 
            $values = array_values($data); // lấy giá trị value 

            $setUser = "INSERT INTO $tablet ($key) VALUES ($item)"; // lất giá trị data để khởi tạo tài khoản mới 
            $result = parent::execute($setUser, $values); // truy vẫn 

            if ($result) { // khi truy vấn thành công thì vào đây 
                $getMaxId = "SELECT MAX(id) AS max_id FROM users";  // max sẽ tim cột id lớn nhất hiện tại
                $maxId = parent::query($getMaxId); // try vấn hàm đó ra 
                $userId = $maxId[0]['max_id']; // Trong đoạn mã $userId = $maxId[0]['max_id'];, 
                // $maxId là kết quả truy vấn từ câu lệnh SQL trước đó.
                // $maxId = [
                //     0 => [
                //         'max_id' => giá_trị_ID_lớn_nhất
                //     ]
                // ];

                $data1['users_id'] = $userId; // Thêm thuộc tính 'users_id' vào mảng $data1

                $item1 = rtrim(str_repeat('?, ', count($data1)), ', '); //?
                $values1 = array_values($data1); //?
                $setUserid = "INSERT INTO $tablet1 ($key1) VALUES ($item1)"; //?
                $result2 = parent::execute($setUserid, $values1); //?

                return $result2;
            }
            return false; // Trả về false nếu không tạo người dùng thành công
        }

        // $setUser = "INSERT INTO $tablet ($key) SELECT $item WHERE NOT EXISTS (SELECT 1 FROM $tablet WHERE email = ?)";
        // $values = array_values($data); // Lấy giá trị của tất cả các trường (name, email, password)
        // $emailValue = $data['email']; // Lấy giá trị của trường email
        // $values[] = $emailValue; // Thêm giá trị của email vào mảng $values
        // $result = parent::execute($setUser, $values);

        // if ($result) {
        //     echo "thành công";

    }

    // thông tin user 
    // public static function userInformations($tablet, $data)
    // {

    //     $key = implode(",", array_keys($data));
    //     $item = rtrim(str_repeat('?, ', count($data)), ', '); //item (? , ?, ?)
    //     $values = array_values($data); //values (huy , abc@gmail.com, asssdasdasđsad)
    //     $sql = "INSERT INTO $tablet ($key) VALUES ($item)";
    //     $result = parent::execute($sql, $values);
    //     return $result;
    // }

    // list users
    public static function list($Table)
    {

        $list =  "SELECT * FROM $Table";
        return  parent::query($list);
    }
    //  list user id 

    public static function showID($Table, $id)
    {

        $sql = "SELECT * FROM $Table WHERE id = :id";
        $params = ['id' => $id];
        $result = parent::queryOne($sql, $params);
        return $result;
    }

    public static function showIdOther($Table, $other, $id,)
    {

        $sql = "SELECT * FROM $Table WHERE $other =  $id";
    
        $result = parent::query($sql);
        return $result;
    }



    public static function updateIdOther($Table, $data, $other, $id)
    {
        $key = implode(" = ?,", array_keys($data)) . "= ?";
        $values = array_values($data);
        $sql = "UPDATE $Table SET  $key   WHERE `$other` = $id";
        $result = parent::execute($sql, $values);
        return $result;
    }

    public static function update($Table, $data, $id)
    {
        $key = implode(" = ?,", array_keys($data)) . "= ?";
        $values = array_values($data);
        $sql = "UPDATE $Table SET  $key   WHERE id = $id";
        $result = parent::execute($sql, $values);
        return $result;
    }
    // xoa user 
    public static function  delete($Table, $id)
    {
        $sql = "DELETE FROM $Table WHERE id = $id";
        $result = parent::execute($sql);
        return $result;
    }
}
