<?php
require_once "admin/includes/functions/config.php";
if (isset($_GET['book'])) {
    $bookName = $_GET['book'];
    $book_link = ucwords(str_replace("-", " ", $bookName));
    // $book_link = str_replace("</b>", "'", $book_link);

    $result = whereQuote("freebooks", "book_title", "$book_link");
    if ($result) {
        $books = $result;
    }

    $response = getOtherBooksAsc("books", "book_title", $book_link, "book_id", 1);
    if ($response) {
        $otherbooks = $response;
    }

    $response2 = getOtherBooksDesc("books", "book_title", $book_link, "book_id", 1);
    if ($response2) {
        $otherbooksDesc = $response2;
    }
} else {
    redirect_to("books");
}

$title = $book_link;
$page_description = 'Prayer M. Madueke, Christian Author of over 100 books on Amazon.';
$extraBodyClasses = '';
require_once 'inc/header.php';
?>

<a href="books" class="btn btn-chevron">
    <img class="svg" src="assets/images/icons/chevron-left.svg">
    <span>All Books</span>
</a>

<section id="book-details">
    <?php
    if (!empty($books)) {
        foreach ($books as $book) {
            extract($book);
            $book_title = str_replace("</b>", "'", $book_title);
            $book_description = str_replace("</b>", "'", $book_description); ?>

            <div class="book-image animate reveal">
                <div class="image">
                    <img src="assets/images/books/<?= $book_image; ?>" alt= "Book Cover of <?= $book_title; ?>">
                </div>
                <div class="shadow">
                    <img src="assets/images/books/<?= $book_image; ?>">
                </div>
            </div>
            <!-- <img class="book-image animate reveal" src="assets/images/books/<?= $book_image; ?>" alt= "Book Cover of <?= $book_title; ?>"> -->

            <div class="details">
                <h1 class="book-title animate reveal"><?= $book_title; ?></h1>

                <div class="channels animate reveal">
                    <h6 class="title">Free Download</h6>
                    <div class="formats">
                        <a href="javascript:void(0)" id="download-btn" class="w-icon button">
                            <img class="svg" src="assets/images/icons/download.svg">
                            <span>Download PDF</span>
                        </a>
                    </div>
                </div>

                <div class="channels animate reveal">
                    <h6 class="title">Other Formats</h6>

                    <div class="formats">
                        <div class="format">
                            <h1 class="price">&#36;<?= $book_paperback_price; ?></h1>
                            
                            <p class="name">Paperback</p>

                            <a href="https://www.amazon.com/dp/<?= $book_paperback_asin; ?>" class="buy-btn" >
                            <img class="svg" src="assets/images/formats/amazon.svg">
                        </a>
                        </div>
                    </div>
                </div>

                <div class="description animate reveal">
                    <h6 class="title">Book Description</h6>
                    <div class="text"><?= $book_description; ?></div>
                    <a class="expand-description btn btn-chevron" href="javascript:void(0)"><span class="read-more">Read More</span><span class="read-less">Read Less</span> <img class="svg" src="assets/images/icons/chevron-left.svg"></a>
                </div>

                <div class="attributes animate reveal">
                    <h6 class="title">Book Details</h6>

                    <div class="book-attributes">
                        <div class="pages">
                            <img src="assets/images/icons/pages.svg">
                            <p><?= $total_book_page; ?><span> pages</span></p>
                        </div>

                        <div class="pages">
                            <p><span>ISBN: </span><?= $book_isbn; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php } } ?>
</section>

<section id="other-books" class="animate reveal">

    <?php
    if (isset($otherbooks)) {
        foreach ($otherbooks as $otherbook) {
            extract($otherbook);
            $book_link = strtolower(str_replace(" ", "-", $book_title)); ?>


            <a href="book?book=<?= $book_link; ?>" class="prev-book">
                <div class="btn btn-chevron">
                    <img class="svg" src="assets/images/icons/chevron-left.svg">
                    <span>Previous Book</span>
                </div>
                <div class="prev-book-details">
                    <img src="assets/images/books/<?= $book_image; ?>" alt="Book Cover of <?= $book_title; ?>">
                    <div class="name">
                        <h3><?= $book_title; ?></h3>
                        <div><?= $book_description; ?></div>
                    </div>
                </div>
            </a>
        <?php } } ?>
    <div></div>

    <?php
    if (isset($otherbooksDesc)) {
        foreach ($otherbooksDesc as $otherbookDesc) {
            extract($otherbookDesc);
            $book_link = strtolower(str_replace(" ", "-", $book_title));
             ?>

            <a href="book?book=<?= $book_link; ?>" class="next-book">
                <div class="btn btn-chevron">
                    <span>Next Book</span>
                    <img class="svg" src="assets/images/icons/chevron-right.svg">
                </div>

                <div class="next-book-details">
                    <div class="name">
                        <h3><?= $book_title; ?></h3>
                        <div><?= $book_description; ?></div>
                    </div>
                    <img src="assets/images/books/<?= $book_image; ?>" alt="Book Cover of <?= $book_title; ?>">
                </div>
            </a>
        <?php } } ?>
</section>

<section id="download-book-modal" class="modal">
    <div class="modal-body">
        <button title="Close" class="close button"><img class="svg" src="assets/images/icons/x.svg"></button>
        <div class="form modal-content">
            <div class="form-use">
                <h1>Download Quarantined for God’s Deliverance</h1>
            </div>

            <form action="https://prayermaduekestore.us15.list-manage.com/subscribe/post?u=a1ded7fdc64b5e8e70cbf9c53&amp;id=33ca07b1a7" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div class="form-inputs">
                    <div class="name">
                        <div class="mc-field-group">
                            <input type="text" required value="" name="FNAME" class="" id="mce-FNAME" placeholder="eg: John">
                            <label for="mce-FNAME">First Name</label>
                        </div>
                        <div class="mc-field-group">
                            <input type="text" required value="" name="LNAME" class="" id="mce-LNAME" placeholder="eg: Doe">
                            <label for="mce-LNAME">Last Name</label>
                        </div>
                    </div>

                    <div class="mc-field-group">
                        <input type="email" required value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="eg: johndoe@domain.com">
                        <label for="mce-EMAIL">Email Address</label>
                    </div>
                </div>

                <div class="form-bottom">
                    <input type="submit" value="Download Now" name="subscribe" id="mc-embedded-subscribe" class="button">

                    <div id="mce-responses" class="clear">
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>

                    <div style="position: absolute; left: -5000px;" aria-hidden="true">
                        <input type="text" name="b_a1ded7fdc64b5e8e70cbf9c53_7956285b20" tabindex="-1" value="">
                    </div>
                </div>
            </form>

            <p class="disclaimer">We're committed to your privacy. We use the information you provide to us to contact you about our relevant content, devotionals, and new book releases. You may unsubscribe from these communications at any time.</p>
            <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
            <script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
        </div>
    </div>

</section>

<?php
require_once 'inc/footer.php';
?>
