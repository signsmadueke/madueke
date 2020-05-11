<?php
    require_once "admin/includes/functions/config.php";

    $result = fetchAllDesc("books", "book_id", 0, 6);
    if ($result) {
        $books = $result;
    }

    $result2 = fetchAllDesc("freebooks", "book_id", 0, 1);
    if ($result2) {
        $freebooks = $result2;
    }


    $title = 'Books';
    $page_description = 'Books by Prayer M. Madueke, Christian Author of over 100 books on Amazon. ';
    $extraBodyClasses = 'dark';
    require_once 'inc/header.php';
?>

<div id="space"></div>

<section id="all-books">
    
    <h1 class="section-title animated reveal">Books</h1>
    
    <div id="books">
        <?php
        if (!empty($freebooks)) {
            foreach ($freebooks as $freebook) {
                extract($freebook);
                $book_titledisplay = str_replace("</b>", "'", $book_title);
                $book_description = str_replace("</b>", "'", $book_description);
                $book_link = strtolower(str_replace("'", "</b>", $book_title));
                $book_link = strtolower(str_replace(" ", "-", $book_title));
                $htmltoplaintext = strip_tags($book_description);
                ?>
                <a alt="<?= $book_titledisplay; ?>" href="freebook?book=<?= $book_link; ?>" class="book" style="background-image: url(assets/images/books/<?= $book_image; ?>); opacity: 0;">
                    <div class="line"></div>
                    <div class="book-details">
                        <h3 class="book-name" title="<?= $book_titledisplay; ?>"><?= $book_titledisplay; ?></h3>
                        <div class="book-description"><?= $htmltoplaintext; ?></div>
                        <div class="btn btn-chevron btn-view">
                            <span>View Details</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 11" fill="none" class="svg replaced-svg">
                                <path d="M5.8903 0.0830292C5.77591 -0.0276764 5.59044 -0.0276764 5.47605 0.0830292L0.0857947 5.29955C-0.0285979 5.41025 -0.0285984 5.58974 0.0857942 5.70045L5.47605 10.917C5.59044 11.0277 5.77591 11.0277 5.8903 10.917L6.91421 9.92606C7.0286 9.81536 7.0286 9.63587 6.91421 9.52516L2.75498 5.5L6.91421 1.47483C7.0286 1.36413 7.0286 1.18464 6.91421 1.07393L5.8903 0.0830292Z" fill="#444444"></path>
                            </svg>
                        </div>
                    </div>
                </a>
            <?php } } ?>


        <!--Normal bOOK-->
        <?php
        if (!empty($books)) {
            foreach ($books as $book) {
                extract($book);
                $book_title = str_replace("</b>", "'", $book_title);
                $book_description = str_replace("</b>", "'", $book_description);
                $book_link = strtolower(str_replace(" ", "-", $book_title));
                $book_link = str_replace("'", "</b>", $book_link);
                $htmltoplaintext = strip_tags($book_description);
                ?>
                <a alt="<?= $book_title; ?>" href="book?book=<?= $book_link; ?>" class="book" style="background-image: url(assets/images/books/<?= $book_image; ?>); opacity: 0;">
                    <div class="line"></div>
                    <div class="book-details">
                        <h3 class="book-name" title="<?= $book_title; ?>"><?= $book_title; ?></h3>
                        <div class="book-description"><?= $htmltoplaintext; "..." ?></div>
                        <div class="btn btn-chevron btn-view">
                            <span>View Details</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 7 11" fill="none" class="svg replaced-svg">
                                <path d="M5.8903 0.0830292C5.77591 -0.0276764 5.59044 -0.0276764 5.47605 0.0830292L0.0857947 5.29955C-0.0285979 5.41025 -0.0285984 5.58974 0.0857942 5.70045L5.47605 10.917C5.59044 11.0277 5.77591 11.0277 5.8903 10.917L6.91421 9.92606C7.0286 9.81536 7.0286 9.63587 6.91421 9.52516L2.75498 5.5L6.91421 1.47483C7.0286 1.36413 7.0286 1.18464 6.91421 1.07393L5.8903 0.0830292Z" fill="#444444"></path>
                            </svg>
                        </div>
                    </div>
                </a>
            <?php } } ?>
    </div>
</section>

<script src="inc/polling/js/all_books.js"></script>
<?php
    require_once 'inc/footer.php';
?>
