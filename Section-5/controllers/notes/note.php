<?php
use core\App;
use core\Database;



$db = App::resolve(Database::class);




$userId = 1;

$note = $db->query('select * from notes where id = :id', ['id' => $_GET['id']])->findOrFail();

    authorize($note['user_id'] === $userId);

view("notes/note.view.php", [
    'heading' => "Note ",
    'note' => $note
]);
  
