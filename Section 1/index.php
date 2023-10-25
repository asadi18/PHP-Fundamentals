<?php
$books = ["Datbase by korth", "Fluid by kamrul Islam", "Elementary electrical by harry"];
$greet = "Hi";
$book = "Database By Korth Readed by Asif";
$cond = false;
$secondBook  = [
    [
        'name' => "Asif khan",
        'publication' => "Bohubrihi",
        'yearPublished' => 1997,
        'url' => "https://datatables.net/"
    ],
    [
        'name' => "Samir",
        'publication' => "Lecture",
        'yearPublished' => 2022,
        'url' => "https://datatables.net/"


    ],
    [
        'name' => "Hamed",
        'publication' => "Bohubrihi",
        'yearPublished' => 2000,
        'url' => "https://datatables.net/"
    ],
    [
        'name' => "Rahim",
        'publication' => "Lecture-Andorkilla ",
        'yearPublished' => 2005,
        'url' => "https://datatables.net/",


    ],
    [
        'name' => "Asif",
        'publication' => "Bohubrihi",
        'yearPublished' => 2015,
        'url' => "https://datatables.net/"
    ],
    [
        'name' => "Samir",
        'publication' => "Lecture",
        'yearPublished' => 1905,
        'url' => "https://datatables.net/"


    ],
    [
        'name' => "Hamed",
        'publication' => "Bohubrihi",
        'yearPublished' => 2007,
        'url' => "https://datatables.net/"
    ],
    [
        'name' => "Rahim",
        'publication' => "Lecture-Andorkilla ",
        'yearPublished' => 2005,
        'url' => "https://datatables.net/",


    ],
    [
        'name' => "Hamed",
        'publication' => "Bohubrihi",
        'yearPublished' => 1915,
        'url' => "https://datatables.net/"
    ],
    [
        'name' => "Rahim",
        'publication' => "Lecture",
        'yearPublished' => 1905,
        'url' => "https://datatables.net/"


    ]
];

// function filterByName($secondBook , $name){
//     $filteredBook = [];

//     foreach($secondBook as $book){
//         if($book['name']=== $name){
//             $filteredBook[] = $book;
//         }
//     }
//     return $filteredBook;
// }


// Lambda Functions

// function filter($items, $key, $value){
//     $filtered = [];
//     foreach($items as $item){
//         if($item[$key]=== $value){
//             $filtered [] = $item;
//         }
//     }
//     return $filtered;
// }

// $filteredBooks = filter($secondBook, 'yearPublished' , 1915);


// Another way for making function more flexible 

// function filter ($items, $fn){
//     $filtered =[];
//     foreach ($items as $item){
//         if($fn($item)){
//             $filtered []= $item;
//         }

//     }
//     return $filtered;
   
// }

// $filteredBooks = filter($secondBook, function($book){
//     return $book['yearPublished'] > 1995; 
// });


// Built in Function of array filter

$filteredBooks = array_filter($secondBook, function($book){
    return $book['yearPublished'] >= 1995 && $book['yearPublished'] <= 2020 ; 
});



// var_dump($books);
//echo date("y/m/d");

include "./index.view.php";
