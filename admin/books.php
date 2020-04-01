<?php
    require_once "includes/functions/config.php";
    //blockUrlHackers();

    $result = fetchAll("books", "book_id", 0, 9);

    if ($result) {
        $books = $result;
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

            <div id="all_books">

            </div>

        </div>
    </div>
<script src="polling/js/all_books.js"></script>
<?php require_once "includes/templates/footer.php"; ?>