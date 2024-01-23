<?php


view("notes/create.view.php", [
    'heading' => "Create Note ",
    'errors' => []

]);
     


// use core\Database;
// use core\Validator;
// require base_url('core/Validator.php'
// );
// $config = require base_url('config.php');
// $db = new Database($config['database']);
//$errors = [];
//$heading = "Create Note";

// dd(Validator::email('asad@hotmail.com'));

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // dd('Thank you, You have successflly submitted the form');
    // dd($_POST);


    // $validator = new Validator(); // No need of instace for classes if we use static on pure function

    // if (!Validator::string($_POST['body'], 1, 250)) {
    //     $errors['body'] = 'A body is Required Between 1 and 1000 Character';
    // }

    // if(strlen($_POST['body'])>250){
    //     $errors['body'] = 'The Body cannot be more than 250 characters';
    // }


//     if (empty($errors)) {

//         $db->query('INSERT INTO notes(body,user_id) values(:body, :user_id)', [
//             'body' => $_POST['body'],
//             'user_id' => 1
//         ]);
//     }
// }
