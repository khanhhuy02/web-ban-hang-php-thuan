<?php

namespace App\Models;

use Exception;
use PDO;
use PDOException;

class database
{
    protected static $conn = null;

    public function __construct()
    {
        try {
            $str = "mysql:host=" . DB_HOST . "; dbname=" . DB_NAME . ";charset=utf8";
            self::$conn = new PDO($str, DB_USER, DB_PASS);
        } catch (PDOException $e) {
            die("Lỗi kết nối db: " . $e->getMessage());
        }
    }
    private static function connect()
    {
        if (self::$conn === null) {
            new self();
        }
    }

    // Hàm thực hiện truy vấn SELECT
    public static function query($sql, $param = [])
    {
        self::connect();
        try {
            $stmt = self::$conn->prepare($sql);
            $stmt->execute($param);
            return $stmt->fetchAll();
        } catch (Exception $e) {
            die("Lỗi truy vấn data:" . $e->getMessage() . "<br>" . $sql);
        }
    }
    // Hàm thực hiện truy vấn 1 hàng 
    public static function queryOne($sql, $params)
    {
        self::connect();
        try {
            $stmt = self::$conn->prepare($sql);
            $stmt->execute($params);
            return $stmt->fetch();
        } catch (Exception $e) {
            die("Lỗi lấy record: " . $e->getMessage() . "<br>" . $sql);
        }
    }

    // Hàm thực hiện truy vấn INSERT, UPDATE, DELETE
    public static function execute($sql, $params = [])
    {
        self::connect();

        try {
            $stmt = self::$conn->prepare($sql);  //    $stmt = $pdo->prepare('SELECT id, name FROM users WHERE id=?');
            $stmt->execute($params); // $params = [id = id , name = name, img = img]
            $rowCount = $stmt->rowCount(); // truy vấn
            return $rowCount;
        } catch (PDOException $e) {
            die("Lỗi truy vấn: " . $e->getMessage());
        } finally {
            $conn = null;
        }
    }

    //  lấy theo id
    public static function getLastInsertId($sql, $params = [])
    {
        self::connect();

        try {
            $stmt = self::$conn->prepare($sql);
            $stmt->execute($params);
            $lastInsertId = self::$conn->lastInsertId();
            return $lastInsertId;
        } catch (PDOException $e) {
            die("Lỗi truy vấn: " . $e->getMessage());
        } finally {
            $conn = null;
        }
    }

    public static function totalProduct($sql)
    {
        self::connect();
        try {
            $stmt = self::$conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
           return  $totalCount = $result['total'];
        } catch (PDOException $e) {
            die("Lỗi truy vấn: " . $e->getMessage());
        }
    }
}
