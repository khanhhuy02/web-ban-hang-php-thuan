
<?php
session_start();

use Support\src\Route;

include_once  __DIR__ . "/routes/autoload.php";
include_once  __DIR__ . "/config/Constant.php";
include_once  __DIR__ . "/support/helpers/Redirect.php";
include_once __DIR__ . "/routes/router.php";
include_once __DIR__ . "/app/Http/Controllers/Controller.php";
// require  __DIR__ . "/../app/Http/Controllers/Controller.php";
// // require_once(__DIR__.'/../config/Constant.php');
// $controllerName =ucfirst((strtolower($_REQUEST['controller']) ?? "welcome"))."Controller";
// $actionName = $_REQUEST['action'] ?? "index";

// // use App\Http\Controllers\HomeController;
// // $home = new HomeController();

// // echo $home->index();

// require __DIR__."/../app/Http/Controllers/{$controllerName}.php";

// // var_dump($controllerObject);
// $controllerObject->$actionName();


// xử lý model

// use App\Http\Controllers\TestController;

// spl_autoload_register(function ($className) {
//     $namespace = "App\\";
//     $path = "app";
//     $className = ltrim($className, '\\');
//     $classPath = str_replace([$namespace, '\\'], ['', DIRECTORY_SEPARATOR], $className);
//     $filePath = __DIR__ . DIRECTORY_SEPARATOR . $path . DIRECTORY_SEPARATOR . $classPath . '.php';
//     $namespaceModel = str_replace('public\\', '', $filePath);

//     if (file_exists($namespaceModel)) {
//        require_once $namespaceModel;

//     }
// });


// $controllerName = ucfirst(strtolower($_REQUEST['controller'] ?? "")) . "";
// $actionName = $_REQUEST['action'] ?? "index";
// require __DIR__."/app/Http/Controllers/{$controllerName}.php";
// $controllerName = "App\\Http\\Controllers\\" . $controllerName;
// $controllerObject = new $controllerName();
// $controllerObject->$actionName();
$baseDir = ROOT_URL;
// ví dụ http://localhost/mvc/delete/pro/52
$path = substr($_SERVER['REQUEST_URI'], strlen($baseDir));
// $path  chuỗi delete/pro/52 
$arr = explode("?", $path);
// arr mảng =  [0] => delete/pro/52
$route = strtolower($arr[0]);
// route = delete/pro/52

$method = $_SERVER['REQUEST_METHOD'];
// kiểm tra là GET = http://localhost/mvc/delete/pro/52

$action = Route::$routes[$method][$route];
// $action mảng =   [0] => App\Http\Controllers\TestController Object , [1] => index
if (!$action) {
    redirect('trang-khong-ton-tai');
    exit;
}
if ($action) {
    if (count($arr) >= 2) {
        parse_str($arr[1], $query);
        $params = array_merge($_GET, $query);
    } else {
        $params = $_GET;
    }


    $matchedRoute = null; // 52
    $tempParams = []; // Biến tạm thời để lưu trữ giá trị tham số
    // echo "<pre>";
    // print_r($);
    // echo "<pre>";


    // Xử lý route với tham số
    foreach (Route::$routes[$method] as $key => $value) {
        // Route lấy mảng = 

        //   Array
        //  (
        //      [tests] => Array
        //          (
        //              [0] => App\Http\Controllers\TestController Object, 
        //              [1] => index
        //           )
        //      [delete/pro/{id}] => Array
        //          (
        //              [0] => App\Http\Controllers\TestController Object,
        //              [1] => deletetest
        //           )
        //  )


        // Chuyển đổi cú pháp route thành biểu thức chính quy
        $pattern = str_replace('/', '\/', $key);
        // b1: pattern = testsdelete\/pro\/{id}
        $pattern = preg_replace('/\{[^\}]+\}/', '([^\/]+)', $pattern);
        // b2: pattern = testsdelete\/pro\/([^\/]+)
        $pattern = '/^' . $pattern . '$/';
        // b3: pattern = /^tests$//^delete\/pro\/([^\/]+)$/ => $ có nghĩa lấy cái cuối cùng 52
        if (preg_match($pattern, $route, $matches) && count($matches) > 0) {
            // b1: pattern = /^tests$//^delete\/pro\/([^\/]+)$/
            // b2 : route = delete/pro/52
            // preg_match = 1; // 1 là true =  0 là false
            $matchedRoute = $key;
            // print_r($matches);// Array ( [0] => delete/pro/83 [1] => 52 )
            // matchedRoute =  delete/pro/{id}
            array_shift($matches); // Remove the first item (full match)
            // array_shift($matches) = 52

            $paramKeys = [];

            $x = preg_match_all('/\{([^\}]+)\}/', $key, $paramKeys);
            // preg_match_all tìm chuỗi 
            // /\{([^\}]+)\}/' => {}
            // key = delete/pro/{id}
            // $paramKeys mảng : 
            //         Array
            // (
            //     [0] => Array
            //         (
            //             [0] => {id}
            //         )

            //     [1] => Array
            //         (
            //             [0] => id
            //         )

            // )

            $paramKeys = $paramKeys[1];

            foreach ($paramKeys as $index => $paramKey) {
                $paramValue = isset($matches[$index]) ? urldecode($matches[$index]) : null;
                $tempParams[$paramKey] = $paramValue;
                // Array
                // (
                //     [id] => 57
                // )
            }
            break;
        }
    }
    $params = [];

    $params = array_merge($tempParams, $params);
    // GỘP 2 MẢNG THÀNH 1 array_merge = 
    // Array
    // (
    //     [id] => 57
    // )

    $action = Route::$routes[$method][$matchedRoute];
    //  $action là một mảng có hai phần tử
    // matchedRoute = delete/pro/{id}
    // Route =Array
    // (
    //     [tests] => Array
    //         (
    //             [0] => App\Http\Controllers\TestController Object
    //                 (
    //                 )

    //             [1] => index
    //         )

    //     [delete/pro/{id}] => Array
    //         (
    //             [0] => App\Http\Controllers\TestController Object
    //                 (
    //                 )

    //             [1] => deletetest
    //         )

    // )
    // $action: 
    // Array
    // (
    //     [0] => App\Http\Controllers\TestController Object
    //         (
    //         )

    //     [1] => deletetest
    // )
    $controllerName = $action[0];
    //  [0] => App\Http\Controllers\TestController Object
    $methodName = $action[1];
    // [1] => deletetest
    $controller = new $controllerName();
    // chúng ta tạo một đối tượng mới của controller bằng cách sử dụng tên controller đã lấy từ biến $controllerName.
    if (method_exists($controller, $methodName)) {
        $reflectionMethod = new ReflectionMethod($controller, $methodName);
        //     ReflectionMethod Object
        // (
        //     [name] => deletetest
        //     [class] => App\Http\Controllers\TestController
        // )
        $parameters = $reflectionMethod->getParameters();

        // Array
        // (
        //     [0] => ReflectionParameter Object
        //         (
        //             [name] => id
        //         )

        // )

        $arguments = [];
        foreach ($parameters as $parameter) {
            $parameterName = $parameter->getName();
            //  $parameterName = id
            if (array_key_exists($parameterName, $params)) {
                $arguments[] = $params[$parameterName];
                // $params[$parameterName] = 57 
                // $arguments[] 
                // Array
                // (
                //     [0] => 57
                // )

            } else {
                // Xử lý khi thiếu giá trị tham số hoặc đặt giá trị mặc định
                // Trong ví dụ này, chúng ta đặt giá trị mặc định là null
                $arguments[] = null;
            }
        }

        // Gọi phương thức trong controller với các đối số tương ứng
        call_user_func_array([$controller, $methodName], $arguments);
        // $controller = App\Http\Controllers\TestController Object
        // $methodName deletetest
        // $arguments / nhận mảng array
    } else {

        // Xử lý khi không tìm thấy phương thức trong controller
        die("404 Not Found");
    }

    // if ($action !== null) {
    //     call_user_func_array($action, $params);
    // } else {
    //     // Xử lý khi không tìm thấy route
    // }
} else {
}
