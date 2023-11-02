<?php

class Database {
    public $connection;
    public function __construct($config, $user = 'root', $pass = ''){
      


        // $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";

        $dsn = 'mysql:' . http_build_query($config, '',';');

        $this->connection = new PDO($dsn, $user , $pass , [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);

    }
    public function query($query, $parmas = []){
        $statement = $this->connection->prepare($query);
        $statement->execute($parmas);
        return $statement;
    }
}