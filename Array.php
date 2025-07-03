<?php
// regular array
$booksRegular = ["Book 1", "Book 2", "Book 3"];

// associative array
$booksAssociative = [
    [
        "title" => "Book 1",
        "page" => 100
    ],
    [
        "title" => "Book 2",
        "page" => 200
    ],
    [
        "title" => "Book 3",
        "page" => 300
    ]
];

foreach ($booksAssociative as $book) {
    echo $book['title']." berhalaman ". $book['page'] ."\n";
}