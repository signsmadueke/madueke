<?php

require_once "../../includes/functions/config.php";
blockUrlHackers();

if (isset($_GET['book_id'])) {
    $delete_id = $_GET['book_id'];

    $result = delete("books", "book_id", $delete_id);
    if ($result === true) {
        echo "true";
    } else {
        echo "false";
    }
}

if (isset($_GET['devotion_id'])) {
    $delete_id = $_GET['devotion_id'];

    $result = delete("devotions", "devotion_id", $delete_id);
    if ($result === true) {
        echo "true";
    } else {
        echo "false";
    }
}
