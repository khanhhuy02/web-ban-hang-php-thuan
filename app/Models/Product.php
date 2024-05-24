<?php

namespace App\Models;

use App\Models\database as ModelsDatabase;
use database;
use PDO;
use App\Models\Category;
use support\relationship\BelongsTo;


class Product extends ModelsDatabase
{

    public static function update($table, $data, $id)
    {
        // "UPDATE users SET name=?, surname=?, sex=? WHERE id=?";
        $key = implode(" = ?,", array_keys($data)) . ' = ?'; // key (name , email, password)  
        $values = array_values($data); //values (huy , abc@gmail.com, asssdasdasđsad)
        $spl = "UPDATE $table SET $key where id = ?";
        $values[] = $id;
        $result = parent::execute($spl, $values);
        return $result;
    }





    protected $table = 'products';

    // public function __construct()
    // {
    //     $this->table = 'products';
    // }

    public static function list($table)
    {
        $product = "SELECT * FROM $table";
        return parent::query($product);
    }

    // public static function product($table)
    // {
    //     $product = "SELECT * FROM $table";
    //     return parent::query($product);
    // }
    //  mối quan hệ 
    // public static function relationship($table1 ,$table2,$RIMARY_KEY, $FOREIGN_KEY) {
    //     $product = "SELECT * FROM $table1 AS table1 INNER JOIN $table2 AS table2 ON table1.$FOREIGN_KEY = table2.$RIMARY_KEY";
    //     return parent::query($product);
    // }

    public static function product()
    {
        $product = new Product();
        $Category = new Category();

        $list = BelongsTo::BelongsTo($product->table, $Category->table, "id", "categories_id");
        return $list;
    }

    public static function create($table, $data)
    {
        $key = implode(", ", array_keys($data));
        $item = rtrim(str_repeat('?, ', count($data)), ', ');

        $values = array_values($data);
        $spl = "INSERT INTO $table ($key) VALUES ($item)";
        $result = parent::execute($spl, $values);
        return $result;
    }




    public static function deletePro($table, $id)
    {
        $sql = "DELETE FROM $table WHERE id = :id";
        $params = ['id' => $id];
        $result = parent::execute($sql, $params);
        return $result;
    }
    public static function showID($table, $id)
    {
        // $sql = "SELECT * FROM $table WHERE id = :id LIMIT 1";
        // $params = ['id' => $id];
        // $result = parent::execute($sql, $params);
        // return $result;



        $sql = "SELECT * FROM $table WHERE id = :id LIMIT 1";
        $params = ['id' => $id];
        $result = parent::queryOne($sql, $params);
        return $result;

        // $sql = "SELECT * FROM $table WHERE id = $id";
        // $result = parent::queryOne($sql);

        // return $result;
    }

    public static function filterPro($tablet, $ids)
    {
        $ids = implode(',', $ids);
        $sql = "SELECT * FROM $tablet WHERE id IN ($ids)";
        $result = parent::query($sql);
        return $result;
    }
}
