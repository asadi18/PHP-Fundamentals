<?php
function dd($value){
    
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
    
}

// dd($_SERVER); // to see the server data
// echo $_SERVER['REQUEST_URI'];

function urlIs($value){
    return $_SERVER['REQUEST_URI'] === $value;
}