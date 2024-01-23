<?php
session_start();
const BASE_PATH = __DIR__ . '/../';


require BASE_PATH.'core/functions.php';

spl_autoload_register(function ($class) {

    // core\Database
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    require base_url("{$class}.php");
});

require base_url('bootstrap.php');


$router = new \core\Router();
$routes = require base_url('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);



