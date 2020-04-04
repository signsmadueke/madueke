<?php

require_once "../../../admin/includes/functions/config.php";

$result = fetchAll("books", "book_id");

if ($result) {
    $books = $result;
}

?>

<?php
if (!empty($books)) {
    foreach ($books as $book) {
        extract($book);
        $book_title = str_replace("</b>", "'", $book_title);
        $book_description = str_replace("</b>", "'", $book_description);
        $book_link = strtolower(str_replace(" ", "-", $book_title));
        ?>
        <div class="book" style="background-image: url(admin/book_images/<?= $book_image; ?>)">
            <a href="book?book=<?= $book_link; ?>"><h3 class="book-name"><?= $book_title; ?></h3></a>
            <a href="book?book=<?= $book_link; ?>"><p class="book-description"><?= $book_description; ?></p></a>
            <a href="book?book=<?= $book_link; ?>" class="btn btn-spaced btn-view">
                <span>View Details</span>
                <img class="svg" src="assets/images/icons/arrow-right.svg">
            </a>
        </div>
    <?php } } ?>

<script src="inc/polling/js/all_books.js"></script>
