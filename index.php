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
    $page_description = 'Christian Author of over 100 books on Amazon.';
    $page_image = "madueke/prayermadueke.jpg";
    $extraBodyClasses = 'dark';
    require_once 'inc/header.php';
?>


<div id="space"></div>

<section id="bestsellers">
	
    <div class="title">
        <h2>Recent Books</h2>
        
        <a href="books" class="btn btn-chevron btn-view">
            <span>All Books</span>
            <img class="svg" src="assets/images/icons/chevron-right.svg">
        </a>
    </div>
	
	<div id="books">
<!--        Free Book-->
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
                    <a href="freebook?book=<?= $book_link; ?>" class="book animated reveal" style="background-image: url(assets/images/books/<?= $book_image; ?>)">
                        <div class="line"></div>
                        <div class="book-details">
                            <h3 class="book-name" title="<?= $book_titledisplay; ?>"><?= $book_titledisplay; ?></h3>
                            <div class="book-description"><?= $htmltoplaintext; ?></div>
                            <div class="btn btn-chevron btn-view">
                                <span>View Details</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="11" viewBox="0 0 7 11" fill="none" class="svg replaced-svg">
                                    <path d="M1.52395 10.917C1.40956 11.0277 1.22409 11.0277 1.1097 10.917L0.0857946 9.92607C-0.028598 9.81536 -0.028598 9.63587 0.0857946 9.52517L4.24502 5.5L0.0857946 1.47484C-0.0285979 1.36413 -0.0285983 1.18464 0.0857941 1.07394L1.1097 0.0830293C1.22409 -0.0276765 1.40956 -0.0276764 1.52395 0.0830293L6.91421 5.29955C7.0286 5.41026 7.0286 5.58975 6.91421 5.70045L1.52395 10.917Z" fill="#444444"></path>
                                </svg>
                            </div>
                        </div>
                    </a>
        <?php } } ?>


<!--        Normal Book-->
        <?php
            if (!empty($books)) {
                foreach ($books as $book) {
                    extract($book);
                    $book_titledisplay = str_replace("</b>", "'", $book_title);
                    $book_description = str_replace("</b>", "'", $book_description);
                    $book_link = strtolower(str_replace(" ", "-", $book_title));
                    $book_link = str_replace("'", "</b>", $book_link);
                    $htmltoplaintext = strip_tags($book_description);
                    ?>
                    <a alt="<?= $book_titledisplay; ?>" href="book?book=<?= $book_link; ?>" class="book animated reveal" style="background-image: url(assets/images/books/<?= $book_image; ?>)">
                        <div class="line"></div>
                        <div class="book-details">
                            <h3 class="book-name" title="<?= $book_titledisplay; ?>"><?= $book_titledisplay; ?></h3>
                            <div class="book-description"><?= $htmltoplaintext; "..." ?></div>
                            <div class="btn btn-chevron btn-view">
                                <span>View Details</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="11" viewBox="0 0 7 11" fill="none" class="svg replaced-svg">
                                    <path d="M1.52395 10.917C1.40956 11.0277 1.22409 11.0277 1.1097 10.917L0.0857946 9.92607C-0.028598 9.81536 -0.028598 9.63587 0.0857946 9.52517L4.24502 5.5L0.0857946 1.47484C-0.0285979 1.36413 -0.0285983 1.18464 0.0857941 1.07394L1.1097 0.0830293C1.22409 -0.0276765 1.40956 -0.0276764 1.52395 0.0830293L6.91421 5.29955C7.0286 5.41026 7.0286 5.58975 6.91421 5.70045L1.52395 10.917Z" fill="#444444"></path>
                                </svg>
                            </div>
                        </div>
                    </a>
        <?php } } ?>
    </div>
</section>


<?php
    require_once 'inc/footer.php';
?>