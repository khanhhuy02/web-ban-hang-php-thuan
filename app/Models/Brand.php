<?php

namespace App\Models;


namespace App\Models;

use App\Models\database as ModelsDatabase;
use database;
use PDO;

class Brand extends ModelsDatabase
{

    public $table = "brands";
    // function __construct($table)
    // {
    //     $this->table = $table;
    // }
    public static function Brand()
    {
        $Brand = new Brand();
        $brands = "SELECT * FROM  $Brand->table";
        return parent::query($brands);
    }

    public static function filterBra($tablet, $id)
    {
        $sql = "SELECT * FROM $tablet WHERE categories_id = ?";
        $param = [$id];
        $result = parent::query($sql, $param);
        return $result;
    }
}
