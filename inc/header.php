<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="keywords" content="Prayer, Madueke, Prayer Madueke,  Christian Author, Christian, Author, Amazon, Religion, Spirituality.">
    <meta name="description" content="Prayer Madueke, Christian Author of over 100 books on Amazon.">

    <!-- Open Graph -->
    <meta property="og:title" content="Prayer Madueke">
    <meta property="og:type" content="website">
    <meta property="og:url" content="index.php">
    <meta property="og:image" content="assets/images/madueke/prayermadueke.jpg">
    <meta property="og:description" content="Prayer Madueke, Christian Author of over 100 books on Amazon">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@prayermadueke">
    <meta name="twitter:creator" content="@prayermadueke">
    <meta name="twitter:title" content="Prayer Madueke">
    <meta name="twitter:image" content="assets/images/madueke/prayermadueke.jpg">
    <meta name="twitter:description" content="Prayer Madueke, Christian Author of over 100 books on Amazon">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/styles.css"/>
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

    <link rel="icon" href="favicon.png">
    <meta name="theme-color" content="#222222">
    <title><?php echo $title; ?> — Prayer Madueke, Christian Author of over 100 books on Amazon</title>
</head>

<body class="container <?php echo $extraBodyClasses; ?>">
<section id="navigation">
    <div id="logo">
        <a href="index.php">
            <div class="logo-icon">
                <img src="assets/images/madueke/icon.png" alt="Prayer Madueke">
            </div>
            <div class="logo-text">
                <h3 class="logo-name">Prayer M. Madueke</h3>
                <p class="logo-tagline">CHRISTIAN AUTHOR</p>
            </div>
        </a>
    </div>

    <div class="nav-space"></div>

    <nav>
        <ul>
            <li class="<?php if ($title == "Home"){echo "active";} ?>">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="<?php if ($title == "Books"){echo "active";} ?>">
                <a class="nav-link" href="books.php">Books</a>
            </li>
            <li class="<?php if ($title == "About"){echo "active";} ?>">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="<?php if ($title == "Contact"){echo "active";} ?>">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
        </ul>
    </nav>

    <button class="menu collapsed" type="button">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
</section>
<section id="sidebar">

    <div id="sidebar-space"></div>

    <nav>
        <ul>
            <li class="<?php if ($title == "Home"){echo "active";} ?>">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="<?php if ($title == "Books"){echo "active";} ?>">
                <a class="nav-link" href="books.php">Books</a>
            </li>
            <li class="<?php if ($title == "About"){echo "active";} ?>">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="<?php if ($title == "Contact"){echo "active";} ?>">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
        </ul>
    </nav>
    
    <div id="social">
        <ul>
            <li>
                <a href="https://facebook.com/prayermadueke">
                    <img class="svg" src="assets/images/icons/facebook.svg" height="15px" alt="Facebook">
                </a>
            </li>
            <li>
                <a href="https://instagram.com/prayermadueke">
                    <img class="svg" src="assets/images/icons/instagram.svg" height="15px" alt="Instagram">
                </a>
            </li>
            <li>
                <a href="https://twitter.com/prayermadueke">
                    <img class="svg" src="assets/images/icons/twitter.svg" height="15px" alt="Twitter">
                </a>
            </li>
            <li>
                <a href="https://amazon.com/author/prayermadueke">
                    <img class="svg" src="assets/images/icons/amazon.svg" height="15px" alt="Amazon">
                </a>
            </li>
        </ul>
    </div>

    <div id="sidebar-space"></div>

    <p class="copyright">© 2020 Prayer Madueke. All rights reserved.</p>

</section>