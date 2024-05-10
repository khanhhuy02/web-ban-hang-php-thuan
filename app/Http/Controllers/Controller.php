<?php

namespace App\Http\Controllers;

class Controller
{
    const VIEW_FOLDER_NAME = __DIR__ . '/../../../resources/views';
    const LAYOUT = __DIR__ . '/../../../resources/views/fe/layout.php';
    const LAYOUTAdmin = __DIR__ . '/../../../resources/views/be/layout.php';

    /**
     * Descrtiption : 
     *  + path name:folder.file.name
     *  + lấy từ sau folder views 
     */
    protected function view($ViewPast, array $data = [])
    {

        foreach ($data as $key => $value) {

            $$key = $value;
        }
        $ViewPast = self::VIEW_FOLDER_NAME . '/' . str_replace(".", '/', $ViewPast) . ".php";

        if (strpos($_SERVER['REQUEST_URI'], 'admin') !== false) {
            include_once self::LAYOUTAdmin;
        } else {
            include_once self::LAYOUT;
        }
    }
}
