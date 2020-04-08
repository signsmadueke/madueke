<?php
    require_once "admin/includes/functions/config.php";
    $result = fetchAllDesc("books", "book_id", 0, 2);
    if ($result) {
        $books = $result;
    }

    $result2 = fetchAllDesc("freebooks", "book_id", 0, 1);
    if ($result2) {
        $freebooks = $result2;
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
<!--        Free Book-->
        <?php
            if (!empty($freebooks)) {
                foreach ($freebooks as $freebook) {
                    extract($freebook);
                    $book_link = strtolower(str_replace(" ", "-", $book_title)); ?>

                        <div class="book animated reveal" style="background-image: url(assets/images/books/<?= $book_image; ?>)">
                            <a href="book?book=<?= $book_link; ?>"><h3 class="book-name"><?= $book_title; ?></h3></a>
                            <a href="book?book=<?= $book_link; ?>"><p class="book-description"><?= $book_description; ?></p></a>
                            <a href="book?book=<?= $book_link; ?>" class="btn btn-spaced btn-view">
                                <span>View Details</span>
                                <img class="svg" src="assets/images/icons/arrow-right.svg">
                            </a>
                        </div>
        <?php } } ?>


<!--        Normal Book-->
        <?php
            if (!empty($books)) {
                foreach ($books as $book) {
                    extract($book);
                    $book_link = strtolower(str_replace(" ", "-", $book_title)); ?>

                        <div class="book animated reveal" style="background-image: url(assets/images/books/<?= $book_image; ?>)">
                            <a href="book?book=<?= $book_link; ?>"><h3 class="book-name"><?= $book_title; ?></h3></a>
                            <a href="book?book=<?= $book_link; ?>"><p class="book-description"><?= $book_description; ?></p></a>
                            <a href="book?book=<?= $book_link; ?>" class="btn btn-spaced btn-view">
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