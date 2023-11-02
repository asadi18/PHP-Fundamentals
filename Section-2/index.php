<?php
require "router.php";
// require 'functions.php';

// require "db.php";

require "Database.php";
$config = require "config.php";

$db = new Database($config['database']);

$id = $_GET['id'];
$query = "select * from newtable where id = ?";
$posts = $db-> query($query, [$id])->fetch();
dd($posts);

// Never inline a query it will be ha-ck--ed easily
//$query = "select * from newtable where id = {$id}";
// dd($query);

// $posts = $db->query("select * from newtable")->fetchAll(PDO::FETCH_ASSOC);
//$posts = $db->query("select * from newtable where name = 'asad' ")->fetch();

//$posts = $db->query("select * from newtable where id = {$id}")->fetch();



//$posts = fetchAll('select * from newtable where id > 1');


// dd($posts);
// foreach ($posts as $post){
//     echo "<li>" ."The Name of the client is ".' '. $post->name ." ". "id is "." " . $post->id ." " ."and address".$post->address . "</li>";
// }

// require "router.php";

// routes();


// $header = "Dashboard";
// echo "<pre>";
// var_dump($_SERVER);
// "</pre>";

// die();




// Router Function
// $uri = $_SERVER['REQUEST_URI'];

// if ($uri === '/PHP-Fundamentals/Section%202/') {
//     require "./view/index.view.php";
// }

// require "view/index.view.php";


// echo dd($_SERVER);
