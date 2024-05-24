<?php

namespace App\Models;

class comment extends database
{

    public static function creCom($table, $data) {
        
        $key = implode(", ", array_keys($data));
        $item = rtrim(str_repeat('?, ', count($data)), ', ');

        $values = array_values($data);
        $spl = "INSERT INTO $table ($key) VALUES ($item)";
        $result = parent::execute($spl, $values);
        return $result;
    }
    public static function showId($table, $id){
        $sql = "SELECT * FROM $table WHERE id =  $id" ;
        return parent::query($sql);
    }
}
