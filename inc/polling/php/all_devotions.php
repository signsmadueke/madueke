<?php

require_once "../../../admin/includes/functions/config.php";

$result = fetchAll("devotions", "devotion_id");

if ($result) {
    $devotionals = $result;
}

?>

<?php
if (!empty($devotionals)) {
    foreach ($devotionals as $devotional) {
        extract($devotional);
        $devotion_title = str_replace("</b>", "'", $devotion_title);
        $devotion_body = str_replace("</b>", "'", $devotion_body);
        $devotion_link = strtolower(str_replace(" ", "-", $devotion_title));
        $devotion_link = str_replace("'", "</b>", $devotion_link);
        $htmltoplaintext = strip_tags($devotion_body);
        ?>


        <div class="devotional animate reveal">
            <a href="devotional?devotion=<?= $devotion_link; ?>" class="image">
                <img src="assets/images/devotionals/<?= $devotion_image; ?>" alt="">
                <img class="shadow" src="assets/images/devotionals/<?= $devotion_image; ?>" alt="">
            </a>

            <div class="details">
                <a href="devotional?devotion=<?= $devotion_link; ?>">
                    <h3><?= $devotion_title; ?></h3>
                </a>
                <div class="devotional-author">
                    <img src="assets/images/madueke/icon.png" alt="Prayer Madueke">
                    <p><span>by </span><?= $devotion_author; ?></p>
                </div>
                <div class="devotional-date">
                    <p><span>Posted on </span><?= $datePosted; ?></p>
                </div>
                <a href="devotional?devotion=<?= $devotion_link; ?>" class="description">
                    <div><?= $htmltoplaintext; ?></div>
                </a>
                <a href="devotional?devotion=<?= $devotion_link; ?>" class="btn btn-spaced">
                    <span>Read Devotional</span>
                    <img class="svg" src="assets/images/icons/arrow-right.svg">
                </a>
            </div>

        </div>
    <?php } } ?>

<script src="inc/polling/js/all_devotions.js"></script>
