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
    <meta property="og:image" content="assets/images/prayermadueke.jpg">
    <meta property="og:description" content="Prayer Madueke, Christian Author of over 100 books on Amazon">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@prayermadueke">
    <meta name="twitter:creator" content="@prayermadueke">
    <meta name="twitter:title" content="Prayer Madueke">
    <meta name="twitter:image" content="assets/images/prayermadueke.jpg">
    <meta name="twitter:description" content="Prayer Madueke, Christian Author of over 100 books on Amazon">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/fonts.css"/>
    <link rel="stylesheet" href="assets/css/bootstrap.weber.css"/>
    <link rel="stylesheet" href="assets/css/fx.css"/>
    <link rel="stylesheet" href="assets/css/custom.css"/>
    <link rel="stylesheet" href="assets/css/index.css"/>

    <link rel="icon" href="favicon.png">
    <meta name="theme-color" content="#000000">
    <title><?php echo $title; ?> — Prayer Madueke, Christian Author of over 100 books on Amazon</title>
</head>

<body class="light-page">
    <div id="wrap">
        <nav id="nav" class="lg navbar navbar-expand-lg padding-x2 show absolute-top hidden-sm hidden-md">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <div id="Logo">
                            <a href="/">
                                <img src="assets/images/logo.svg" height="60px" alt="Prayer Madueke">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-auto navbar-collapse main-menu-collapse mr-auto text-center collapsed">

                    </div>
                    <div class="col-auto navbar-collapse main-menu-collapse collapsed">
                        <ul class="navbar-nav" style="color: white; z-index: 10;">
                            <li class="nav-item <?php if ($title == "Home"){echo "active";} ?>">
                                <a class="nav-link" href="/">Home</a>
                            </li>
                            <li class="nav-item <?php if ($title == "Books"){echo "active";} ?>">
                                <a class="nav-link" href="books.php">Books</a>
                            </li>
                            <li class="nav-item <?php if ($title == "About"){echo "active";} ?>">
                                <a class="nav-link" href="#">About</a>
                            </li>
                            <li class="nav-item <?php if ($title == "Contact"){echo "active";} ?>">
                                <a class="nav-link" href="contact.php">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="bg-wrap">
                <div class="bg"></div>
            </div>
        </nav>
        <nav id="nav" class="sm navbar navbar-expand-lg show hidden-lg hidden-xl pt-30 fixed-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-auto" style="z-index: 0;">
                        <div id="Logo">
                            <a href="index.php">
                                <img src="assets/images/favicon.svg" height="60px" alt="Prayer Madueke">
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-auto hidden-lg ml-auto pr-15 pl-15" style="z-index: 2;">
                        <button class="navbar-toggler padding collapsed" type="button">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="col-auto navbar-collapse main-menu-collapse collapse" style="z-index: 1;">
                        <div class="col-auto mt-0 no-gutters pt-30">
                            <div id="Logo">
                                <a href="index.php">
                                    <img src="assets/images/logo.svg" height="50px" alt="Prayer Madueke">
                                </a>
                            </div>
                        </div>
                        <ul class="navbar-nav mt-50 mb-30" style="color: white;">
                            <li class="nav-item">
                                <a class="nav-link" href="/ ">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="books.php">Books</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact</a>
                            </li>
                        </ul>
                        <ul class="socials" style="color: white;">
                            <a class="sicon" href="https://facebook.com/prayermadueke"><img src="assets/images/icons/facebook.svg" height="20px" alt="Facebook"></a>
                            <a class="sicon" href="https://instagram.com/prayermadueke"><img src="assets/images/icons/instagram.svg" height="20px" alt="Instagram"></a>
                            <a class="sicon" href="https://twitter.com/prayermadueke"><img src="assets/images/icons/twitter.svg" height="20px" alt="Twitter"></a>
                            <a class="sicon" href="https://amazon.com/author/prayermadueke"><img src="assets/images/icons/amazon.svg" height="20px" alt="Amazon"></a>
                        </ul>
                        <div class="absolute-bottom">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <p class="pt-30" style="color: white;font-family: 'CircularStd';">2019 Prayer Madueke. All rights reserved.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-wrap">
                                <div class="bg"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-wrap">
                <div class="bg" style="background: linear-gradient(180deg,rgba(0, 0, 0, 0.5) 20%,rgb(0, 0, 0, 0) 100%);"></div>
            </div>
        </nav>