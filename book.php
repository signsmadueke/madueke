<?php
    require_once "admin/includes/functions/config.php";
    if (isset($_GET['book'])) {
        $bookName = $_GET['book'];
        $book_link = ucwords(str_replace("-", " ", $bookName));

        $result = whereQuote("books", "book_title", "$book_link");
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
    $extraBodyClasses = '';
    require_once 'inc/header.php';
?>

<a href="books" class="btn btn-spaced">
    <img class="svg" src="assets/images/icons/arrow-left.svg">
    <span>Back to Books</span>
</a>

<section id="book-details">
        <?php
            if (!empty($books)) {
                foreach ($books as $book) {
                    extract($book);
                    $book_title = str_replace("</b>", "'", $book_title);
                    $book_description = str_replace("</b>", "'", $book_description); ?>

                        <img class="book-image animate reveal" src="admin/book_images/<?= $book_image; ?>" alt= "Book Cover of <?= $book_title; ?>">

                        <div class="details animate reveal">
                            <div class="description">
                                <h1><?= $book_title; ?></h1>
                                <p><?= $book_description; ?></p>
                            </div>
                            
                            <div class="channels animate reveal">
                                <p>Formats</p>
                                <div class="formats">
                                    <a href="#" id="download-btn" class="w-icon button">
                                        <img class="svg" src="assets/images/icons/download.svg">
                                        <span>Download PDF</span>
                                    </a>
                                </div>
                            </div>

                            <div class="channels accordion animate reveal ">
                                <p>Other formats</p>
                                <div class="formats">
                                    <a href="https://www.amazon.com/dp/9780720944" class="format">
                                        <div class="name">
                                            <span>Paperback</span>
                                        </div>
                                        <h1 class="price">&#36;<?= $book_paperback_price; ?></h1>
                                    </a>

                                    <a href="https://www.amazon.com/dp/B0716DJZRN" class="format">
                                        <div class="name">
                                            <span>Ebook</span>
                                        </div>
                                        <h1 class="price">&#36;<?= $book_kindle_price; ?></h1>
                                    </a>
                                </div>
                            </div>

                            <div class="attributes animate reveal">
                                <div class="pages">
                                    <img src="assets/images/icons/pages.svg">
                                    <p><?= $total_book_page; ?><span> pages</span></p>
                                </div>

                                <div class="dimensions">
                                    <img src="assets/images/icons/dimension.svg">
                                    <p title="Width, Spine & Height"><?= $book_measurement; ?><span> inches</span></p>
                                </div>

                                <div class="pages">
                                    <p><span>ISBN: </span><?= $book_isbn; ?></p>
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
                        <div class="btn btn-spaced">
                            <img class="svg" src="assets/images/icons/arrow-left.svg">
                            <span>Previous Book</span>
                        </div>
                        <div class="prev-book-details">
                            <img src="assets/images/books/<?= $book_image; ?>" alt="Book Cover of Prayer Retreat">
                            <h3><?= $book_title; ?></h3>
                        </div>
                    </a>
    <?php } } ?>
    <div></div>

    <?php
        if (isset($otherbooksDesc)) {
            foreach ($otherbooksDesc as $otherbookDesc) {
                extract($otherbookDesc);
                $book_link = strtolower(str_replace(" ", "-", $book_title)); ?>

                    <a href="book?book=<?= $book_link; ?>" class="next-book">
                        <div class="btn btn-spaced">
                            <span>Next Book</span>
                            <img class="svg" src="assets/images/icons/arrow-right.svg">
                        </div>
                        <div class="next-book-details">
                            <h3><?= $book_title; ?></h3>
                            <img src="assets/images/books/<?= $book_image; ?>" alt="Book Cover of Breaking Evil Yokes">
                        </div>
                    </a>
    <?php } } ?>
</section>

<section id="download-book-modal" class="modal hide">
    <div class="modal-body">
        <button class="close button"><img class="svg" src="assets/images/icons/x.svg"></button>
        <div class="form modal-content">
            <div class="form-use">
                <h1>Download Quarantined for God’s Deliverance</h1>
            </div>
            
            <form action="https://prayermaduekestore.us15.list-manage.com/subscribe/post?u=a1ded7fdc64b5e8e70cbf9c53&amp;id=33ca07b1a7" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div class="form-inputs">
                    <div class="name">
                        <div class="mc-field-group">
                            <label for="mce-FNAME">First Name</label>
                            <input type="text" required value="" name="FNAME" class="" id="mce-FNAME" placeholder="eg: John">
                        </div>
                        <div class="mc-field-group">
                            <label for="mce-LNAME">Last Name</label>
                            <input type="text" required value="" name="LNAME" class="" id="mce-LNAME" placeholder="eg: Doe">
                        </div>
                    </div>
                    
                    <div class="mc-field-group">
                        <label for="mce-EMAIL">Email Address</label>
                        <input type="email" required value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="eg: johndoe@domain.com">
                    </div>
                </div>

                <div class="form-bottom">
                    <input type="submit" value="Download Now" data-loading-text="Working..." name="subscribe" id="mc-embedded-subscribe" class="button">
                    
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
