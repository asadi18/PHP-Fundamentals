<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'NOTE';
//dd($_GET['id']);
$userId = 1;

$note=$db->query('select * from notes where id = :id', ['id'=> $_GET['id']])->findOrFail();

// if(!$note){
//     abort();
// }

authorize($note['user_id']===$userId);

// if($note['user_id']!==$userId){
//   abort(Response::FORBIDDEN);
// }

require "views/note.view.php";