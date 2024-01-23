<?php
use core\App;
use core\Database;
// $config = require base_url('config.php');
// $db = new Database($config['database']);

$db = App::resolve(Database::class);


//$heading = 'You will see your Notes Here';

$notes=$db->query('select * from notes where user_id =1')->get();


view("notes/index.view.php",[
'heading'=> "Your Notes will be appear here ",
'notes'=>$notes]);