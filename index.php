<?php
    require_once "admin/includes/functions/config.php";
    $result = fetchAllDesc("books", "book_id", 0, 3);
    if ($result) {
        $books = $result;
    }


    $title = 'Home';
    $extraBodyClasses = 'dark';
    require_once 'inc/header.php';
?>


<div id="space"></div>

<section id="bestsellers">
	
    <div class="title">
        <h1>Recent Books</h1>
        
        <a href="books" class="btn btn-spaced btn-view">
            <span>More Books</span>
            <img class="svg" src="assets/images/icons/arrow-right.svg">
        </a>
    </div>
	
	<div id="books">
        <?php
            if (!empty($books)) {
                foreach ($books as $book) {
                    extract($book); ?>
                        <div class="book" style="background-image: url(assets/images/books/<?= $book_image; ?>)">
                            <a href="book"><h3 class="book-name"><?= $book_title; ?></h3></a>
                            <a href="book"><p class="book-description"><?= $book_description; ?></p></a>
                            <a href="book" class="btn btn-spaced btn-view">
                                <span>View Details</span>
                                <img class="svg" src="assets/images/icons/arrow-right.svg">
                            </a>
                        </div>
        <?php } } ?>
    </div>
</section>


<?php
    require_once 'inc/footer.php';
?>