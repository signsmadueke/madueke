<?php
require_once "admin/includes/functions/config.php";
if (isset($_GET['book'])) {
    $bookName = $_GET['book'];
    $book_link = ucwords(str_replace("-", " ", $bookName));
    $book_link = str_replace("</b>", "'", $book_link);

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
$page_description = 'Prayer M. Madueke, Christian Author of over 100 books on Amazon.';
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

            <img class="book-image animate reveal" src="assets/images/books/<?= $book_image; ?>" alt= "Book Cover of <?= $book_title; ?>">

            <div class="details animate reveal">
                <div class="description">
                    <h1><?= $book_title; ?></h1>
                    <div><?= $book_description; ?></div>
                </div>

                <div class="channels animate reveal">
                    <p>Formats</p>
                    <div class="formats">
                        <a href="https://www.amazon.com/dp/<?= $book_kindle_asin; ?>" class="format">
                            <div class="name">
                                <span>Paperback</span>
                            </div>
                            <h1 class="price">&#36;<?= $book_paperback_price; ?></h1>
                        </a>

                        <a href="https://www.amazon.com/dp/<?= $book_paperback_asin; ?>" class="format">
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

                    <!-- <div class="dimensions">
                        <img src="assets/images/icons/dimension.svg">
                        <p title="Width, Spine & Height"><?= $book_measurement; ?><span> inches</span></p>
                    </div> -->

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
                    <img src="assets/images/books/<?= $book_image; ?>" alt="Book Cover of <?= $book_title; ?>">
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
                    <img src="assets/images/books/<?= $book_image; ?>" alt="Book Cover of <?= $book_title; ?>">
                </div>
            </a>
        <?php } } ?>
</section>

<?php
require_once 'inc/footer.php';
?>
