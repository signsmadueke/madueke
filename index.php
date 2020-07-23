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


    $title = 'Prayer M. Madueke';
    $tagline = "Christian Author of over 100 books on Amazon";
    $page_description = 'Christian Author of over 100 books on Amazon.';
    $page_image = "madueke/prayermadueke.jpg";
    $extraBodyClasses = 'dark';
    require_once 'inc/header.php';
?>


<div id="space"></div>

<section id="bestsellers">
	
    <div class="title">
        <h2>Best Selling Books</h2>
        
        <a href="books" class="btn btn-chevron btn-link">
            <span>Visit bookstore</span>
            <img class="svg" src="assets/images/icons/arrow-top-right.svg">
        </a>
    </div>
	
	<div id="books">
        <a alt="40 Prayer Giants" href="store.madueke.com/books/40-prayer-giants" class="book animated reveal" style="background-image: url(assets/images/books/40-prayer-giants.jpg)">
            <div class="line"></div>
        </a>

        <a alt="Alone With God" href="store.madueke.com/books/alone-with-God" class="book animated reveal" style="background-image: url(assets/images/books/alone-with-God.jpg)">
            <div class="line"></div>
        </a>

        <a alt="Command the Morning" href="store.madueke.com/books/command-the-morning" class="book animated reveal" style="background-image: url(assets/images/books/command-the-morning.jpg)">
            <div class="line"></div>
        </a>

        <a alt="Breaking Evil Yokes" href="store.madueke.com/books/breaking-evil-yokes" class="book animated reveal" style="background-image: url(assets/images/books/breaking-evil-yokes.jpg)">
            <div class="line"></div>
        </a>
    </div>
</section>


<?php
    require_once 'inc/footer.php';
?>