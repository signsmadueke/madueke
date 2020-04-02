<?php

require_once "../../includes/functions/config.php";
blockUrlHackers();

$result = fetchAll("books", "book_id", 0, 9);

if ($result) {
    $books = $result;
}

?>

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

                                                        <a href="edit_book?book_id=<?= $book_id; ?>"><i class="fa fa-fw fa-edit"></i></a>
                                                        <a class="text-danger" data-id="<?= $book_id; ?>" onclick="delete_book(this)"><i class="fa fa-fw fa-trash-o"></i></a>
                                                    </p>
                                                </figcaption>
                                            </figure>
                                            <h5 class="text-center text-light rounded p-1" style="width: 95%; background: linear-gradient(to right, darkred, #0e0d11);"><b><?= $book_title; ?></b></h5>
                                        </div>

                                    <?php } } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

<script src="polling/js/all_books.js"></script>
