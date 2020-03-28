<?php
    $title = 'Home';
    $extraBodyClasses = 'dark';
    require_once 'inc/header.php';
?>


<div id="space"></div>

<section id="bestsellers">
	
    <div class="title">
        <h1>Best Sellers</h1>
        
        <a href="books.php" class="btn btn-spaced btn-view">
            <span>More Books</span>
            <img class="svg" src="assets/images/icons/arrow-right.svg">
        </a>
    </div>
	
	<div id="books">
        <div class="book" style="background-image: url(assets/images/books/book1.jpg)">
            <a href="book.php"><h3 class="book-name">35 Special Dangerous Decrees</h3></a>
            <a href="book.php"><p class="book-description">35 Special Dangerous Decrees is a collection of targeted prayers addressing 35 most important areas of the Christian life.</p></a>
            <a href="book.php" class="btn btn-spaced btn-view">
                <span>View Details</span>
                <img class="svg" src="assets/images/icons/arrow-right.svg">
            </a>
        </div>

        <div class="book" style="background-image: url(assets/images/books/book2.jpg)">
            <a href="book.php"><h3 class="book-name">35 Special Dangerous Decrees</h3></a>
            <a href="book.php"><p class="book-description">35 Special Dangerous Decrees is a collection of targeted prayers addressing 35 most important areas of the Christian life.</p></a>
            <a href="book.php" class="btn btn-spaced btn-view">
                <span>View Details</span>
                <img class="svg" src="assets/images/icons/arrow-right.svg">
            </a>
        </div>

        <div class="book" style="background-image: url(assets/images/books/book3.jpg)">
            <a href="book.php"><h3 class="book-name">35 Special Dangerous Decrees</h3></a>
            <a href="book.php"><p class="book-description">35 Special Dangerous Decrees is a collection of targeted prayers addressing 35 most important areas of the Christian life.</p></a>
            <a href="book.php" class="btn btn-spaced btn-view">
                <span>View Details</span>
                <img class="svg" src="assets/images/icons/arrow-right.svg">
            </a>
        </div>
    </div>
</section>


<?php
    require_once 'inc/footer.php';
?>