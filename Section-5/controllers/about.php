<?php

$heading = $_SESSION['name'];

view("about.view.php",[
'heading' => "About" ." ". $heading]);