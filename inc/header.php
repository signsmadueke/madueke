<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $title; ?>, <?php echo $tagline; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="height=device-height, width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="author" content="Prayer M. Madueke">
    <meta name="description" content="<?= $page_description; ?>">
    <meta name="keywords" content="Prayer, Madueke, Prayer M. Madueke, Prayer Madueke, Christian Author, Christian, Author, Amazon, Religion, Spirituality, christianbook, devotion, faith, olukoya, prayer, prayer madueke, prayer rain, blessing prayer, prayer book, spiritual exercises.">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">


    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo $title; ?> — Prayer M. Madueke, <?php echo $tagline; ?>">
    <meta property="og:description" content="<?php echo $page_description; ?>">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="article:publisher" content="https://www.facebook.com/prayermadueke/">
    <meta property="og:site_name" content="Prayer M. Madueke">
    <meta property="og:image" content="assets/images/<?= $page_image; ?>">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@prayermadueke">
    <meta name="twitter:description" content="<?php echo $page_description; ?>">
    <meta name="twitter:image:alt" content="<?php echo $title; ?> — Prayer M. Madueke, <?php echo $tagline; ?>">
    <meta name="twitter:creator" content="@prayermadueke">
    <meta name="twitter:title" content="<?php echo $title; ?> — Prayer M. Madueke, <?php echo $tagline; ?>">
    <meta name="twitter:image" content="assets/images/<?= $page_image; ?>">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/styles.css"/>

    <link rel="icon" href="favicon.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="favicon.png" />
    <meta name="theme-color" content="#000000">

        
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131093422-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        
        gtag('config', 'UA-131093422-2');
    </script>
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '162664412572641');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"src="https://www.facebook.com/tr?id=162664412572641&ev=PageView&noscript=1"/></noscript>
    <!-- End Facebook Pixel Code -->

</head>

<body class="container <?php echo $extraBodyClasses; ?>">
<section id="navigation">
    <div id="logo">
        <a href="/">
            <div class="logo-icon">
                <img src="assets/images/madueke/icon.png" alt="Prayer M. Madueke">
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
                <a href="/">Home</a>
            </li>
            <li class="<?php if ($title == "Books"){echo "active";} ?>">
                <a href="https://store.madueke.com">Books</a>
            </li>
            <!-- <li class="<?php if ($title == "Free Gift"){echo "active";} ?>">
                <a href="free-gift.php">Free Gift</a>
            </li> -->
            <!-- <li class="<?php if ($title == "Podcasts"){echo "active";} ?>">
                <a href="podcasts">Podcasts</a>
            </li> -->
            <!-- <li class="<?php if ($title == "Devotionals"){echo "active";} ?>">
                <a href="devotionals">Devotionals</a>
            </li> -->
            <li class="<?php if ($title == "Contact"){echo "active";} ?>">
                <a href="contact">Contact</a>
            </li>
            <li class="<?php if ($title == "Donate"){echo "active";} ?>">
                <a href="donate">Donate</a>
            </li>
        </ul>
    </nav>

    <button class="menu" type="button">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
</section>

<section id="sidebar">
    <section id="navigation">
        <div id="logo">
            <a href="/">
                <div class="logo-icon">
                    <img src="assets/images/madueke/icon.png" alt="Prayer M. Madueke">
                </div>
                <div class="logo-text">
                    <h3 class="logo-name">Prayer M. Madueke</h3>
                    <p class="logo-tagline">CHRISTIAN AUTHOR</p>
                </div>
            </a>
        </div>

        <div class="nav-space"></div>

        <button class="menu" type="button">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </section>

    <div id="sidebar-space"></div>

    <nav>
        <ul>
            <li class="<?php if ($title == "Home"){echo "active";} ?>">
                <a href="/">Home</a>
            </li>
            <li class="<?php if ($title == "Books"){echo "active";} ?>">
                <a href="https://store.madueke.com">Books</a>
            </li>
            <!-- <li class="<?php if ($title == "Free Gift"){echo "active";} ?>">
                <a href="free-gift.php">Free Gift</a>
            </li> -->
            <!-- <li class="<?php if ($title == "Podcasts"){echo "active";} ?>">
                <a href="podcasts">Podcasts</a>
            </li> -->
            <!-- <li class="<?php if ($title == "Devotionals"){echo "active";} ?>">
                <a href="devotionals">Devotionals</a>
            </li> -->
            <li class="<?php if ($title == "Contact"){echo "active";} ?>">
                <a href="contact">Contact</a>
            </li>
            <li class="<?php if ($title == "Donate"){echo "active";} ?>">
                <a href="donate">Donate</a>
            </li>
        </ul>
    </nav>
    
    <div id="social">
        <ul>
            <li>
                <a href="https://facebook.com/prayermadueke">
                    <img class="svg" src="assets/images/icons/social/facebook.svg" height="15px" alt="Facebook">
                </a>
            </li>
            <li>
                <a href="https://instagram.com/prayermadueke">
                    <img class="svg" src="assets/images/icons/social/instagram.svg" height="15px" alt="Instagram">
                </a>
            </li>
            <li>
                <a href="https://twitter.com/prayermadueke">
                    <img class="svg" src="assets/images/icons/social/twitter.svg" height="15px" alt="Twitter">
                </a>
            </li>
        </ul>
    </div>

    <div id="sidebar-space"></div>

    <p class="copyright">© 2020 Prayer M. Madueke. All rights reserved.</p>

</section>