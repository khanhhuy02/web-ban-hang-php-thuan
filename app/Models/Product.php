<?php

namespace App\Models;

use App\Models\database as ModelsDatabase;
use database;
use PDO;

class Product extends ModelsDatabase
{
    public static function product($table,$number)
    {
        $product = "SELECT * FROM $table LIMIT $number";
        return parent::query($product);
    }

}
