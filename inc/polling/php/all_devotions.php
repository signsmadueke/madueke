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


        <div class="devotional animated reveal">
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
                <a href="devotional?devotion=<?= $devotion_link; ?>" class="btn btn-chevron">
                    <span>Read Devotional</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="7" height="11" viewBox="0 0 7 11" fill="none" class="svg replaced-svg">
                        <path d="M1.52395 10.917C1.40956 11.0277 1.22409 11.0277 1.1097 10.917L0.0857946 9.92607C-0.028598 9.81536 -0.028598 9.63587 0.0857946 9.52517L4.24502 5.5L0.0857946 1.47484C-0.0285979 1.36413 -0.0285983 1.18464 0.0857941 1.07394L1.1097 0.0830293C1.22409 -0.0276765 1.40956 -0.0276764 1.52395 0.0830293L6.91421 5.29955C7.0286 5.41026 7.0286 5.58975 6.91421 5.70045L1.52395 10.917Z" fill="#444444"></path>
                    </svg>
                </a>
            </div>

        </div>
    <?php } } ?>

<script src="inc/polling/js/all_devotions.js"></script>
