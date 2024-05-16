<?php

namespace App\Models;


namespace App\Models;

use App\Models\database as ModelsDatabase;
use database;
use PDO;

class Category extends ModelsDatabase
{

    public $table = "categories";
    // function __construct($table)
    // {
    //     $this->table = $table;
    // }
    public static function Category()
    {
        $Category = new Category();
       
        $Category = "SELECT * FROM  $Category->table";
        return parent::query($Category);
    }
}
