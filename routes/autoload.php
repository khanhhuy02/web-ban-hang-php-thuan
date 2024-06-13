<?php

/**
 * App\Models\Product
 * Models\Product
 * D:\file-khanh-huy\lap trinh PHP 1\học lại php\mvc\public\app\Models\Product.php
 * D:\file-khanh-huy\lap trinh PHP 1\học lại php\mvc\app\Models\Product.php
 */

// spl_autoload_register(function ($class) {
//     // $class = App\Http\Controller\HomeController
//     $namespace = "App\\";
//     $path = "app";
//     echo $class;
//     echo "<br>";
//     $class = str_replace('App\\','', $class); // $class = Http\Controller\HomeController
//     $file  = __DIR__ . DIRECTORY_SEPARATOR . $path;
//     echo $file;
//     echo "<br>";
//     $file = $file . DIRECTORY_SEPARATOR . str_replace("\\", DIRECTORY_SEPARATOR, $class) . '.php'; // /Http/Controller/HomeController
//     echo $file;

//     if (file_exists($file)) {
//         include $file;
//     }
// });

spl_autoload_register(function ($className) {
    $namespace = "App\\";
    $path = "app";
    $className = ltrim($className, '\\');
    $classPath = str_replace([$namespace, '\\'], ['', DIRECTORY_SEPARATOR], $className);
    $filePath = __DIR__ . DIRECTORY_SEPARATOR . $path . DIRECTORY_SEPARATOR . $classPath . '.php';

    $namespaceModel = str_replace('public\\', '', $filePath);

    if (file_exists($namespaceModel)) {
        require_once $namespaceModel;
       
    }
    $nameControllers = str_replace("routes", "", $namespaceModel);
    if (file_exists($nameControllers)) {
        require_once $nameControllers;

    }
    $nameRoute = str_replace("\\app\\", "", $nameControllers);
    if (file_exists($nameRoute)) {
        require_once $nameRoute;
  
    }

});

