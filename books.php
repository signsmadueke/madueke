<?php
    require_once "admin/includes/functions/config.php";

    $result = fetchAllDesc("books", "book_id", 0, 6);
    if ($result) {
        $books = $result;
    }


    $title = 'Books';
    $extraBodyClasses = 'dark';
    require_once 'inc/header.php';
?>

<div id="space"></div>

<section id="all-books">
    
    <h1 class="section-title">Books</h1>
    
    <div id="books">

    </div>
</section>

<script src="inc/polling/js/all_books.js"></script>
<?php
    require_once 'inc/footer.php';
?>
