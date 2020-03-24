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

            <hr class="dotted-line">

            <div class="formats">
                <div class="format">
                    <div class="name">
                        <img src="assets/images/formats/amazon.svg">
                        <span>Paperback</span>
                    </div>
                    <h1 class="price">&#36;18.99</h1>
                </div>

                <div class="format">
                    <div class="name">
                        <img src="assets/images/formats/kindle.svg">
                        <span>Kindle</span>
                    </div>
                    <h1 class="price">&#36;7.99</h1>
                </div>
            </div>
        </div>


</section>

<?php
    require_once 'inc/footer.php';
?>
