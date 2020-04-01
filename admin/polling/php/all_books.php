<?php

require_once "../../includes/functions/config.php";

$result = fetchAll("books", "book_id", 0, 9);

if ($result) {
    $books = $result;
}

?>

<?php
    if (!empty($books)) {
        foreach ($books as $book) {
            extract($book); ?>

            <section id="hover-effects" class="card">
                <div class="card-body">
                    <div class="card-block my-gallery" itemscope="" itemtype="http://schema.org/ImageGallery">
                        <div class="grid-hover">
                            <h5 class="text-bold-400 text-uppercase">Books</h5>
                            <div class="row">

                                <?php
                                if (!empty($books)) {
                                    foreach ($books as $book) {
                                        extract($book); ?>
                                        <div class="col-md-6 col-lg-4">
                                            <figure class="effect-winston">
                                                <img src="book_images/<?= $book_image; ?>" width="100%" alt="img06">
                                                <figcaption>
                                                    <p>
                                                        <a href="#"><i class="fa fa-fw fa-edit"></i></a>
                                                        <!--                                                <a href="#"><i class="fa fa-fw fa-comments-o"></i></a>-->
                                                        <a href="#"><i class="fa fa-fw fa-trash-o"></i></a>
                                                    </p>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    <?php } } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

<?php } } ?>