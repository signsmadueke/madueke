<?php
require_once "admin/includes/functions/config.php";
if (isset($_GET['book'])) {
    $bookName = $_GET['book'];
    $book_link = str_replace("-", " ", $bookName);
    echo $book_link;

    $result = whereBook("books", "book_title", "$book_link");
    if ($result) {
        echo "true";
    } else {
        echo "falseHH";
    }
}
