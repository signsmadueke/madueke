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
    $tagline = "Christian Author & Speaker";
    $page_description = 'A leading christian author, speaker, and expert on spiritual warfare and deliverance. His 100+ books cover every area of successful christian living.';
    $page_image = "madueke/prayermadueke.jpg";
    $extraBodyClasses = 'dark';
    require_once 'inc/header.php';
?>


<div id="space"></div>

<section id="bestsellers">
	
    <div class="title">
        <h2>Best Selling Books</h2>
        
        <a href="https://store.madueke.com" class="btn btn-chevron btn-link">
            <span>Visit bookstore</span>
            <img class="svg" src="assets/images/icons/arrow-top-right.svg">
        </a>
    </div>
	
	<div id="books">
        <a alt="21/40 Nights of Decrees and Your Enemies Will Surrender" href="https://store.madueke.com/books/21-40-nights-of-decrees-and-your-enemies-will-surrender" class="book animated reveal" style="background-image: url(assets/images/books/home/21-40-nights-of-decrees-and-your-enemies-will-surrender.jpg)">
            <div class="line"></div>
        </a>

        <a alt="35-special-dangerous-decrees" href="https://store.madueke.com/books/35-special-dangerous-decrees" class="book animated reveal" style="background-image: url(assets/images/books/home/35-special-dangerous-decrees.jpg)">
            <div class="line"></div>
        </a>

        <a alt="Monitoring Spirits" href="https://store.madueke.com/books/monitoring-spirits" class="book animated reveal" style="background-image: url(assets/images/books/home/monitoring-spirits.jpg)">
            <div class="line"></div>
        </a>

        <a alt="Breaking Evil Yokes" href="https://store.madueke.com/books/evil-summon" class="book animated reveal" style="background-image: url(assets/images/books/home/evil-summon.jpg)">
            <div class="line"></div>
        </a>
    </div>
</section>


<?php
    require_once 'inc/footer.php';
?>