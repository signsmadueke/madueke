
<?php require_once "includes/templates/header.php"; ?>

<body data-col="2-columns" class=" 2-columns ">
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="wrapper">


    <?php require_once "includes/templates/sidebar.php"; ?>


    <?php require_once "includes/templates/topbar.php"; ?>

    <div class="main-panel">
        <div class="main-content">
            <section id="hover-effects" class="card">
                <div class="card-body">
                    <div class="card-block my-gallery" itemscope="" itemtype="http://schema.org/ImageGallery">

                        <div class="grid-hover">
                            <h5 class="text-bold-400 text-uppercase">Books</h5>
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <figure class="effect-winston">
                                        <img src="../assets/images/books/book3.jpg" width="100%" alt="img06">
                                        <figcaption>
                                            <p>
                                                <a href="#"><i class="fa fa-fw fa-edit"></i></a>
<!--                                                <a href="#"><i class="fa fa-fw fa-comments-o"></i></a>-->
                                                <a href="#"><i class="fa fa-fw fa-trash-o"></i></a>
                                            </p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>

<?php require_once "includes/templates/footer.php"; ?>