<?php 

namespace App\Models;


namespace App\Models;

use App\Models\database as ModelsDatabase;
use database;
use PDO;

class Category extends ModelsDatabase{

    public static function Category($table)
    {
        $Category = "SELECT * FROM $table";
        return parent::query($Category);
      
    }

}