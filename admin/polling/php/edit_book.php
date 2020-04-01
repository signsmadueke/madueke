<?php

require_once "../../includes/functions/config.php";

if (isset($_GET['book_id'])) {
    $book_id = $_GET['book_id'];

    $result = editBook($_POST, $book_id);

    if ($result === true) {
        echo "true";
    } else {
        $errors = $result;
        echo json_encode($errors);
    }
}
