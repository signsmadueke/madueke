<?php
require_once "includes/functions/config.php";
//blockUrlHackers();

if (isset($_GET['book_id'])) {
    $bookId = $_GET['book_id'];

    $result = where("books", "book_id", "$bookId");
    if ($result) {
        $book_details = $result;
    }
}

?>


<?php require_once "includes/templates/header.php"; ?>

    <body data-col="2-columns" class=" 2-columns ">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="wrapper">


<?php require_once "includes/templates/sidebar.php"; ?>


<?php require_once "includes/templates/topbar.php"; ?>

    <div class="main-panel">
        <div class="main-content">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title-wrap bar-success">
                            <h4 class="card-title" id="basic-layout-form">Edit Book</h4>
                        </div>
                        <p class="mb-0">Edit Book here.</p>
                    </div>
                    <div class="card-body">
                        <div class="px-3">

                            <?php
                                if (!empty($book_details)) {
                                    foreach ($book_details as $book_detail) {
                                        extract($book_detail); ?>
                                            <form class="form" method="post" action="" enctype="multipart/form-data" id="edit_book">
                                                <input id="bookId" type="hidden" data-id="<?= $book_id; ?>">
                                                <div class="form-body">
                                                    <h4 class="form-section">
                                                        <i class="icon-note"></i> Edit Book</h4>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="title">Book Title</label>
                                                                <input type="text" id="title" value="<?= $book_title; ?>" class="form-control" name="bookTitle">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="author">Book Author</label>
                                                                <input type="text" id="author" class="form-control" value="Prayer Madueke" name="bookAuthor">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="pages">Total Book Page</label>
                                                                <input type="number" id="pages" value="<?= $total_book_page; ?>" class="form-control" name="bookPages">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="isbn">Book Isbn</label>
                                                                <input type="text" id="isbn" value="<?= $book_isbn; ?>" class="form-control" name="bookIsbn">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="kindle">Book Kindle Price</label>
                                                                <input type="number" id="kindle" value="<?= $book_kindle_price; ?>" class="form-control" name="bookKindlePrice">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="paperback">Book Paperback Price</label>
                                                                <input type="number" id="paperback" value="<?= $book_paperback_price; ?>" class="form-control" name="bookPaperbackPrice">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="measurement">Book Measurement</label>
                                                                <input type="number" id="measurement" value="<?= $book_measurement; ?>" class="form-control" name="bookMeasurement">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="date">Date Uploaded</label>
                                                                <input type="text" disabled id="date" value="<?= $date_added; ?>" class="form-control" name="dateAdded">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Select Book Image</label>
                                                        <input type="file" class="form-control-file" id="" name="bookImage" required>
                                                        <label>Current Image: <b><i><?= $book_image; ?></i></b></label>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="projectinput8">Book Description</label>
                                                        <textarea id="" rows="5" class="form-control" name="bookDescription"><?= $book_description; ?></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-actions">
                                                    <button type="reset" class="btn btn-primary mr-1">
                                                        <i class="icon-reload"></i> Reset
                                                    </button>
                                                    <button type="submit" class="btn btn-success" name="submit" id="submit_btn">
                                                        <i class="icon-note"></i> Edit Book
                                                    </button>
                                                </div>
                                            </form>
                            <?php } } ?>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="polling/js/edit_book.js"></script>
<?php require_once "includes/templates/footer.php"; ?>