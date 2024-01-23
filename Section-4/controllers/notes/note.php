<?php
use core\App;
use core\Database;

// $config = require base_url('config.php');
//  $db = new Database($config['database']);

$db = App::resolve(Database::class);


//$heading = 'NOTE';
//dd($_GET['id']);

$userId = 1;

$note = $db->query('select * from notes where id = :id', ['id' => $_GET['id']])->findOrFail();

    authorize($note['user_id'] === $userId);

view("notes/note.view.php", [
    'heading' => "Note ",
    'note' => $note
]);
  
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $note = $db->query('select * from notes where id = :id', ['id' => $_GET['id']])->findOrFail();

    // if(!$note){
    //     abort();
    // }


    // if($note['user_id']!==$userId){
    //   abort(Response::FORBIDDEN);
    // }

//     $db->query('delete from notes where id = :id', ['id' => $_GET['id']]);
// header('location:/notes');
// } else {
//     $note = $db->query('select * from notes where id = :id', ['id' => $_GET['id']])->findOrFail();

    // if(!$note){
    //     abort();
    // }

    // authorize($note['user_id'] === $userId);

    // if($note['user_id']!==$userId){
    //   abort(Response::FORBIDDEN);
    // }
// }
