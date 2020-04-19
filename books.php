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
    $page_description = 'Prayer M. Madueke, Christian Author of over 100 books on Amazon.';
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
                    <div class="book-details">
                        <h3 class="book-name" title="<?= $book_titledisplay; ?>"><?= $book_titledisplay; ?></h3>
                        <div class="book-description"><?= $htmltoplaintext; ?></div>
                        <div class="btn btn-spaced btn-view">
                            <span>View Details</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 12" fill="none" class="svg replaced-svg">
                                <path d="M18.7659 5.50584L13.6747 0.414673C13.3623 0.102254 12.8558 0.102254 12.5433 0.414673C12.2309 0.727093 12.2309 1.23362 12.5433 1.54604L16.2688 5.27153H0.200195V6.87153H16.2688L12.5433 10.597C12.2309 10.9094 12.2309 11.416 12.5433 11.7284C12.8558 12.0408 13.3623 12.0408 13.6747 11.7284L18.7659 6.63721C19.0783 6.32479 19.0783 5.81826 18.7659 5.50584Z" fill="#444444"></path>
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
                    <div class="book-details">
                        <h3 class="book-name" title="<?= $book_title; ?>"><?= $book_title; ?></h3>
                        <div class="book-description"><?= $htmltoplaintext; "..." ?></div>
                        <div class="btn btn-spaced btn-view">
                            <span>View Details</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 12" fill="none" class="svg replaced-svg">
                                <path d="M18.7659 5.50584L13.6747 0.414673C13.3623 0.102254 12.8558 0.102254 12.5433 0.414673C12.2309 0.727093 12.2309 1.23362 12.5433 1.54604L16.2688 5.27153H0.200195V6.87153H16.2688L12.5433 10.597C12.2309 10.9094 12.2309 11.416 12.5433 11.7284C12.8558 12.0408 13.3623 12.0408 13.6747 11.7284L18.7659 6.63721C19.0783 6.32479 19.0783 5.81826 18.7659 5.50584Z" fill="#444444"></path>
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
