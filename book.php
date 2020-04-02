<?php
    require_once "admin/includes/functions/config.php";
    if (isset($_GET['bqi'])) {
        $bookId = $_GET['bqi'];

        $result = where("books", "book_id", $bookId);
        if ($result) {
            $books = $result;
        }

        $response = getOtherBooksAsc("books", "book_id", $bookId, "book_id", 1);
        if ($response) {
            $otherbooks = $response;
        }

        $response2 = getOtherBooksDesc("books", "book_id", $bookId, "book_id", 1);
        if ($response2) {
            $otherbooksDesc = $response2;
        }
    }

    $title = '21/40 Nights of Decrees and Your Enemies Will Surrender';
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
                    $book_description = str_replace("</b>", "'", $book_description) ?>

                        <img class="book-image" src="admin/book_images/<?= $book_image; ?>" alt= "Book Cover of <?= $book_title; ?>">

                        <div class="details">
                            <div class="description">
                                <h1><?= $book_title; ?></h1>
                                <p><?= $book_description; ?></p>
                            </div>

                            <div class="channels">
                                <p>Formats</p>
                                <div class="formats">
                                    <a href="https://www.amazon.com/dp/9780720944" class="format">
                                        <div class="name">
                                            <img src="assets/images/formats/amazon.svg">
                                            <span>Paperback</span>
                                        </div>
                                        <h1 class="price">&#36;<?= $book_paperback_price; ?></h1>
                                    </a>

                                    <a href="https://www.amazon.com/dp/B0716DJZRN" class="format">
                                        <div class="name">
                                            <img src="assets/images/formats/kindle.svg">
                                            <span>Kindle</span>
                                        </div>
                                        <h1 class="price">&#36;<?= $book_kindle_price; ?></h1>
                                    </a>
                                </div>
                            </div>

                            <div class="attributes">
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

<section id="other-books">

    <?php
        if (isset($otherbooks)) {
            foreach ($otherbooks as $otherbook) {
                extract($otherbook); ?>
                    <a href="book?bqi=<?= $book_id; ?>" class="prev-book">
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
                extract($otherbookDesc); ?>
                    <a href="book?bqi=<?= $book_id; ?>" class="next-book">
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

<?php
    require_once 'inc/footer.php';
?>
