<?php
require_once "includes/functions/config.php";
//blockUrlHackers();

if (isset($_GET['devotion_id'])) {
    $devotionId = $_GET['devotion_id'];

    $result = where("devotions", "devotion_id", "$devotionId");
    if ($result) {
        $devotion_details = $result;
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
                            <h4 class="card-title" id="basic-layout-form">Edit Devotion</h4>
                        </div>
                        <p class="mb-0">Edit Devotion here.</p>
                    </div>
                    <div class="card-body">
                        <div class="px-3">

                            <?php
                            if (!empty($devotion_details)) {
                                foreach ($devotion_details as $devotion_detail) {
                                    extract($devotion_detail); ?>
                                    <form class="form" method="post" action="" enctype="multipart/form-data" id="edit_devotion">
                                        <input id="devotionId" type="hidden" data-id="<?= $devotion_id; ?>">
                                        <div class="form-body">
                                            <h4 class="form-section">
                                                <i class="icon-open"></i> Devotion Details</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="title">Devotion Title</label>
                                                        <input type="text" id="title" value="<?= $devotion_title; ?>" class="form-control" name="devTitle">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="subtitle">Devotion Sub-Title</label>
                                                        <input type="text" id="subtitle" value="<?= $devotion_subtitle; ?>" class="form-control" name="devSubtitle">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="author">Devotion Author</label>
                                                        <input type="text" id="author" value="<?= $devotion_author; ?>" class="form-control" name="devAuthor">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="date">Date Added</label>
                                                        <input type="text" disabled id="date" value="<?= date("Y-m-d")?>" class="form-control" name="datePosted">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Select Devotion Image</label>
                                                <input type="file" class="form-control-file" id="" name="devImage" required>
                                                <label>Current Image: <b><?= $devotion_image?></b></label>
                                            </div>

                                            <div class="form-group">
                                                <label for="body">Devotional Message</label>
                                                <textarea id="body" rows="5" class="form-control" name="devBody"><?= $devotion_body?></textarea>
                                            </div>
                                        </div>

                                        <div class="form-actions">
                                            <button type="reset" class="btn btn-primary mr-1">
                                                <i class="icon-reload"></i> Reset
                                            </button>
                                            <button type="submit" class="btn btn-success" name="submit" id="submit_btn">
                                                <i class="icon-notebook"></i> Add Devotion
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

    <script src="polling/js/edit_devotion.js"></script>
<?php require_once "includes/templates/footer.php"; ?>