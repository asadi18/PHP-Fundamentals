<?php 
require "functions.php";

function routesfn(){
    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
    // echo $uri;
    // die();

    //associative array
    $routes = [
        '/' => ["./view/index.view.php", "Dashboard"],
        '/about' => ["./view/about.view.php", "About US"],
        '/contact' => ["./view/contact.view.php", "Contact Us"],
    ];

    if (array_key_exists($uri, $routes)){
        $route = $routes[$uri];
        $file = $route[0];
        $header = $route[1];
        require $file;
    }
    else{
        http_response_code(404);
        echo "SORRY NOT FOUND !";
        die();
    }
}

// Call the function
routesfn();



 