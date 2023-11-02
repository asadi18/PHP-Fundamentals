<?php
$dsn = "mysql:host=localhost;port=3306;dbname=testapp;user=root;charset=utf8mb4";
$pdo = new PDO($dsn);





function fetchAll($value)
{
    global $pdo;
    $statement = $pdo->prepare("{$value}");
    $statement->execute();

    return  $statement->fetchAll(PDO::FETCH_OBJ);
    
}
