<?php
ini_set('display_errors', 'Off');
session_start();
// $_SESSION['logged_in'] = true;
use Support\src\Route;

include  __DIR__ . "/routes/autoload.php";
include  __DIR__ . "/config/Constant.php";
include __DIR__ . "/support/helpers/Redirect.php";
include __DIR__ . "/routes/router.php";
require_once __DIR__ . "/app/Http/Controllers/Controller.php";
include __DIR__ . "/support/relationship/BelongsTo.php";

$baseDir = ROOT_URL;
$path = substr($_SERVER['REQUEST_URI'], strlen($baseDir));
$arr = explode("?", $path);
$route = strtolower(trim($arr[0], '/'));

$method = $_SERVER['REQUEST_METHOD'];

$action = Route::$routes[$method][$route];

if (count($arr) >= 2) {
    parse_str($arr[1], $query);
    $params = array_merge($_GET, $query);
} else {
    $params = $_GET;
}

$matchedRoute = null;
$tempParams = [];
$routeMatched = false;

foreach (Route::$routes[$method] as $key => $value) {
    $pattern = str_replace('/', '\/', $key);
    $pattern = preg_replace('/\{[^\}]+\}/', '([^\/]+)', $pattern);
    $pattern = '/^' . $pattern . '$/';
    if (preg_match($pattern, $route, $matches) && count($matches) > 0) {
        $matchedRoute = $key;
        array_shift($matches);
        $paramKeys = [];
        $x = preg_match_all('/\{([^\}]+)\}/', $key, $paramKeys);
        $paramKeys = $paramKeys[1];
        foreach ($paramKeys as $index => $paramKey) {
            $paramValue = isset($matches[$index]) ? urldecode($matches[$index]) : null;
            $tempParams[$paramKey] = $paramValue;
        }
        $routeParams = $value;
        $routeMatched = true; // Đặt biến routeMatched thành true khi có route khớp
        break;
    }
}

$params = array_merge($tempParams, $params);

if ($routeMatched) {
    $controllerName = $routeParams[0];
    $methodName = $routeParams[1];
    $controller = new $controllerName();
    if (method_exists($controller, $methodName)) {
        $reflectionMethod = new ReflectionMethod($controller, $methodName);
        $parameters = $reflectionMethod->getParameters();
        $arguments = [];
        foreach ($parameters as $parameter) {
            $parameterName = $parameter->getName();
            $arguments[] = $params[$parameterName] ?? null;
        }
        call_user_func_array([$controller, $methodName], $arguments);
    }
} 
else {
    redirect("trang-khong-ton-tai");
}
?>


