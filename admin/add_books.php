<?php
    require_once "includes/functions/config.php";
    blockUrlHackers();

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
                            <h4 class="card-title" id="basic-layout-form">Add Book</h4>
                        </div>
                        <p class="mb-0">Books added here are strictly Prayer Madueke's Books.</p>
                    </div>
                    <div class="card-body">
                        <div class="px-3">

                            <form class="form" method="post" action="" enctype="multipart/form-data" id="book_form">
                                <div class="form-body">
                                    <h4 class="form-section">
                                        <i class="icon-book-open"></i> Book Details</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="title">Book Title</label>
                                                <input type="text" id="title" class="form-control" name="bookTitle">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="author">Book Author</label>
                                                <input type="text" id="author" class="form-control" value="Prayer M. Madueke" name="bookAuthor">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="pages">Total Book Page</label>
                                                <input type="number" id="pages" class="form-control" name="bookPages">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="isbn">Book Isbn</label>
                                                <input type="text" id="isbn" class="form-control" name="bookIsbn">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="kindle">Book Kindle Price</label>
                                                <input type="number" id="kindle" class="form-control" name="bookKindlePrice">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="paperback">Book Paperback Price</label>
                                                <input type="number" id="paperback" class="form-control" name="bookPaperbackPrice">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="date">Date Added</label>
                                                <input type="text" disabled id="date" value="<?= date("Y-m-d")?>" class="form-control" name="dateAdded">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Select Book Image</label>
                                        <input type="file" class="form-control-file" id="" name="bookImage" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="projectinput8">Book Description</label>
                                        <textarea id="" rows="5" class="form-control" name="bookDescription"></textarea>
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <button type="reset" class="btn btn-primary mr-1">
                                        <i class="icon-reload"></i> Reset
                                    </button>
                                    <button type="submit" class="btn btn-success" name="submit" id="submit_btn">
                                        <i class="icon-notebook"></i> Add Book
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

<script src="polling/js/add_book.js"></script>
<?php require_once "includes/templates/footer.php"; ?>