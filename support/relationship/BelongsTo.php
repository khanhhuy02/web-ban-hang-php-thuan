<?php

namespace Support\relationship;

use App\Models\database;

class BelongsTo extends database
{

    public static function BelongsTo($table1, $table2, $RIMARY_KEY, $FOREIGN_KEY)
    {

        // $spl = "SELECT * FROM $table1 AS table1 INNER JOIN $table2 AS table2 ON table1.$FOREIGN_KEY = table2.$RIMARY_KEY";
        // $spl = "SELECT table1.id AS $table1" . "_id, table1.*, $table2" . "_id AS category_id, table2.* FROM $table1 AS table1 INNER JOIN $table2 AS table2 ON table1.$FOREIGN_KEY = table2.$RIMARY_KEY";
        // $spl = "SELECT * , table2.id AS category_id, table2.* FROM $table1 AS table1 INNER JOIN $table2 AS table2 ON table1.$FOREIGN_KEY = table2.$RIMARY_KEY";
        $spl = "SELECT table1.id, table1.categories_id, table1.name, table1.price_new, table1.price_old, table1.image,  table1.meeting_day, table2.names FROM $table1 AS table1 INNER JOIN $table2 AS table2 ON table1.$FOREIGN_KEY = table2.$RIMARY_KEY";
        return parent::query($spl);
    }
}
