<?php
    $title = 'Books';
    $extraBodyClasses = '';
    require_once 'inc/header.php';
?>

<a href="#" class="btn btn-spaced btn-view">
    <img class="svg" src="assets/images/icons/arrow-left.svg">
    <span>Back to Books</span>
</a>

<section id="book-details">

        <img class="book-image" src="assets/images/books/book1.jpg" alt= "Book Cover of 21/40 Nights of Decrees and Your Enemies Will Surrender">

        <div class="details">
            <div class="description">
                <h1>21/40 Nights of Decrees and Your Enemies Will Surrender</h1>
                <p>This book is a collection of powerful prayer points divided in two parts. The first part is made up of 21 prayer topics or decrees and the second, 40 decrees. It covers every conceivable problem a christian believer faces in their christian walk of faith, and gives prayer topics that provide answers to these problems.</p>
            </div>

            <div class="channels">
                <p>Formats</p>
                <div class="formats">
                    <a href="#" class="format">
                        <div class="name">
                            <img src="assets/images/formats/amazon.svg">
                            <span>Paperback</span>
                        </div>
                        <h1 class="price">&#36;18.99</h1>
                    </a>

                    <a href="#" class="format">
                        <div class="name">
                            <img src="assets/images/formats/kindle.svg">
                            <span>Kindle</span>
                        </div>
                        <h1 class="price">&#36;7.99</h1>
                    </a>
                </div>
            </div>

            <div class="attributes">
                <div class="pages">
                    <img src="assets/images/icons/pages.svg">
                    <p>445<span> pages</span></p>
                </div>

                <div class="dimensions">
                    <img src="assets/images/icons/dimension.svg">
                    <p title="Width, Spine & Height">5.5 x 1.1 x 8.5<span> inches</span></p>
                </div>

                <div class="pages">
                    <p><span>ISBN: </span>978-9780720940</p>
                </div>
            </div>
        </div>

</section>

<section class="other-books">

    <div class="prev-book">
        <a href="#" class="btn btn-spaced btn-view">
            <img class="svg" src="assets/images/icons/arrow-left.svg">
            <span>Previous Book</span>
        </a>
        <div class="prev-book-details">
            <img src="assets/images/books/book3.jpg" alt="Book Cover of Prayer Retreat">
            <h1>Prayer Retreat</h1>
        </div>
    </div>

    <div class="next-book">
        <a href="#" class="btn btn-spaced btn-view">
            <span>Next Book</span>
            <img class="svg" src="assets/images/icons/arrow-right.svg">
        </a>
        <div class="next-book-details">
            <img src="assets/images/books/book4.jpg" alt="Book Cover of Breaking Evil Yokes">
            <h1>Breaking Evil Yokes</h1>
        </div>
    </div>

</section>

<?php
    require_once 'inc/footer.php';
?>
