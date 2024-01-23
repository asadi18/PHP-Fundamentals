<?php
use core\App;
use core\Database;



$db = App::resolve(Database::class);
$userid = 1;

$note = $db->query('select * from notes where id = :id', ['id' => $_POST['id']])->findOrFail();

authorize($note['user_id'] === $userid);

$db->query('delete from notes where id = :id', ['id' => $_POST['id']]);
header('location:/notes');
exit();
