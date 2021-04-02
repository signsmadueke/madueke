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
    $tagline = "Prayer M. Madueke, Christian Author of over 100 books on Amazon";
    $page_description = 'Books by Prayer M. Madueke, Christian Author of over 100 books on Amazon. ';
    $page_image = "madueke/prayermadueke.jpg";
    $extraBodyClasses = '';
    require_once 'inc/header.php';
?>

<div id="space"></div>

<section id="all-books">
    
    <h1 class="section-title animated reveal">Books</h1>

    <form class="search form-inline animated reveal">
        <button class="btn" type="submit">
            <img class="svg" src="assets/images/icons/search.svg">
        </button>
        <div class="form-control">
            <input type="search"required value="" name="search" id="search" placeholder="Search Books">
            <label for="search">Search Books</label>
        </div>
        <button class="btn" type="reset">
            <img class="svg" src="assets/images/icons/close.svg">
        </button>
    </form>
    
    <div id="books">
        <?php
            if (!empty($freebooks)) {
                foreach ($freebooks as $freebook) {
                    extract($freebook);
                    $book_titledisplay = str_replace("</b>", "'", $book_title);
                    $book_link = strtolower(str_replace("'", "</b>", $book_title));
                    $book_link = strtolower(str_replace(" ", "-", $book_title));
                    ?>
                    <div class="buk animate reveal">
                        <a alt="<?= $book_titledisplay; ?>" href="freebook?book=<?= $book_link; ?>" class="book-image">
                            <div class="image">
                                <img src="assets/images/books/<?= $book_image; ?>" alt= "Book Cover of <?= $book_title; ?>">
                            </div>
                            <div class="shadow">
                                <img src="assets/images/books/<?= $book_image; ?>">
                            </div>
                        </a>
                        <div class="book-details">
                            <a alt="<?= $book_titledisplay; ?>" href="freebook?book=<?= $book_link; ?>" >
                                <h3 class="book-name" title="<?= $book_titledisplay; ?>"><?= $book_titledisplay; ?></h3>
                            </a>
                            <a alt="<?= $book_titledisplay; ?>" href="freebook?book=<?= $book_link; ?>" class="btn btn-chevron btn-view">
                                <span>View Details</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="11" viewBox="0 0 7 11" fill="none" class="svg replaced-svg">
                                    <path d="M1.52395 10.917C1.40956 11.0277 1.22409 11.0277 1.1097 10.917L0.0857946 9.92607C-0.028598 9.81536 -0.028598 9.63587 0.0857946 9.52517L4.24502 5.5L0.0857946 1.47484C-0.0285979 1.36413 -0.0285983 1.18464 0.0857941 1.07394L1.1097 0.0830293C1.22409 -0.0276765 1.40956 -0.0276764 1.52395 0.0830293L6.91421 5.29955C7.0286 5.41026 7.0286 5.58975 6.91421 5.70045L1.52395 10.917Z" fill="#444444"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                <?php } } ?>


            <!--Normal Book-->
            <?php
            if (!empty($books)) {
                foreach ($books as $book) {
                    extract($book);
                    $book_titledisplay = str_replace("</b>", "'", $book_title);
                    $book_link = strtolower(str_replace("'", "</b>", $book_title));
                    $book_link = strtolower(str_replace(" ", "-", $book_title));
                    ?>
                    <div class="buk animate reveal">
                        <a alt="<?= $book_titledisplay; ?>" href="book?book=<?= $book_link; ?>" class="book-image">
                            <div class="image">
                                <img src="assets/images/books/<?= $book_image; ?>" alt= "Book Cover of <?= $book_title; ?>">
                            </div>
                            <div class="shadow">
                                <img src="assets/images/books/<?= $book_image; ?>">
                            </div>
                        </a>
                        <div class="book-details">
                            <a alt="<?= $book_titledisplay; ?>" href="book?book=<?= $book_link; ?>" >
                                <h3 class="book-name" title="<?= $book_titledisplay; ?>"><?= $book_titledisplay; ?></h3>
                            </a>
                            <a alt="<?= $book_titledisplay; ?>" href="book?book=<?= $book_link; ?>" class="btn btn-chevron btn-view">
                                <span>View Details</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="11" viewBox="0 0 7 11" fill="none" class="svg replaced-svg">
                                    <path d="M1.52395 10.917C1.40956 11.0277 1.22409 11.0277 1.1097 10.917L0.0857946 9.92607C-0.028598 9.81536 -0.028598 9.63587 0.0857946 9.52517L4.24502 5.5L0.0857946 1.47484C-0.0285979 1.36413 -0.0285983 1.18464 0.0857941 1.07394L1.1097 0.0830293C1.22409 -0.0276765 1.40956 -0.0276764 1.52395 0.0830293L6.91421 5.29955C7.0286 5.41026 7.0286 5.58975 6.91421 5.70045L1.52395 10.917Z" fill="#444444"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                <?php } } ?>
    </div>
</section>

<section id="devotional-subscription" class="animated reveal">
    <div class="text">
        <h1>Stay Inspired. Subscribe!</h1>
        <p>Enter your email address to receive notifications of new devotionals, prayers and prophetic declarations sent to you by email.</p>
    </div>

    <form action="https://prayermaduekestore.us15.list-manage.com/subscribe/post?u=a1ded7fdc64b5e8e70cbf9c53&amp;id=7956285b20" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <div class="form-inputs">
            <div class="mc-field-group">
                <input type="email" autocomplete="email" required value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="eg: johndoe@domain.com">
                <label for="mce-EMAIL">Email Address</label>
            </div>
            <input type="submit" value="Sign me up" name="subscribe" id="mc-embedded-subscribe" class="button">
        </div>
        <div for="mce-EMAIL" class="mce_inline_error" style="display:none;"></div>
        <div id="mce-responses" class="clear">
            <div class="response" id="mce-error-response" style="display:none"></div>
            <div class="response" id="mce-success-response" style="display:none"></div>
        </div>
        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_a1ded7fdc64b5e8e70cbf9c53_7956285b20" tabindex="-1" value=""></div>
    </form>
    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
    <script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
</section>

<script src="inc/polling/js/all_books.js"></script>
<script src="inc/polling/js/search.js"></script>

<?php
    require_once 'inc/footer.php';
?>
