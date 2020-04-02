<?php
    require_once "admin/includes/functions/config.php";

    if (isset($_GET['dqi'])) {
        $devotionId = $_GET['dqi'];

        $result = where("devotions", "devotion_id", $devotionId);
        if ($result) {
            $devotions = $result;
        }

        $response = getOtherBooksAsc("devotions", "devotion_id", $devotionId, "devotion_id", 1);
        if ($response) {
            $otherdevotions = $response;
        }

        $response2 = getOtherBooksDesc("devotions", "devotion_id", $devotionId, "devotion_id", 1);
        if ($response2) {
            $otherdevotionsDesc = $response2;
        }
    }


    $title = 'Devotionals';
    $extraBodyClasses = '';
    require_once 'inc/header.php';
?>

<?php
    if (!empty($devotions)) {
        foreach ($devotions as $devotion) {
            extract($devotion);

            $devotion_title = str_replace("</b>", "'", $devotion_title);
            $devotion_subtitle = str_replace("</b>", "'", $devotion_subtitle);
            $devotion_body = str_replace("</b>", "'", $devotion_body); ?>

                <section id="devotional-header">
                    <img src="admin/devotion_images/<?= $devotion_image; ?>" alt="Devotion Image">
                    <img class="shadow" src="assets/images/devotionals/devotional1-lg.jpg" alt="">
                </section>

                <section id="devotional-details">
                    <h1 class="devotional-name"><?= $devotion_title; ?></h1>
                    <div class="devotional-author">
                        <img src="assets/images/madueke/icon.png" alt="Prayer Madueke">
                        <p><span>by </span><?= $devotion_author; ?></p>
                    </div>
                    <p><span>Posted on </span><?= $datePosted; ?></p>
                </section>

                <section id="devotional-post">
                    <h3><?= $devotion_subtitle; ?></h3>
                    <p><?= $devotion_body; ?></p>
                </section>
<?php } } ?>
<section id="other-devotionals">

    <?php
        if (!empty($otherdevotionsDesc)) {
            foreach ($otherdevotionsDesc as $otherdevotion) {
                extract($otherdevotion); ?>
                    <a href="devotional?dqi=<?= $devotion_id; ?>" class="prev-devotional">
                        <div class="btn btn-spaced">
                            <img class="svg" src="assets/images/icons/arrow-left.svg">
                            <span>Previous Devotionals</span>
                        </div>
                        <div class="prev-devotional-details">
                            <img src="assets/images/devotionals/devotional1.jpg" alt="">
                            <div class="name">
                                <h3>Speaking things into Existence</h3>
                                <div class="date">
                                    <p><span>Posted on </span>Monday, March 31, 2020</p>
                                </div>
                            </div>
                        </div>
                    </a>
    <?php } } ?>
    <div></div>


    <?php
        if (!empty($otherdevotions)) {
            foreach ($otherdevotions as $otherdevotionA) {
                extract($otherdevotionA); ?>
                    <a href="devotional?dqi=<?= $devotion_id; ?>" class="next-devotional">
                        <div class="btn btn-spaced">
                            <span>Next Devotionals</span>
                            <img class="svg" src="assets/images/icons/arrow-right.svg">
                        </div>
                        <div class="next-devotional-details">
                            <div class="name">
                                <h3>Speaking things into Existence</h3>
                                <p><span>Posted on </span>Monday, March 31, 2020</p>
                            </div>
                            <img src="assets/images/devotionals/devotional1.jpg" alt="">
                        </div>
                    </a>
    <?php } } ?>
</section>

<section id="devotional-subscription">
    <div class="text">
        <h1>Stay Inspired. Subscribe!</h1>
        <p>Enter your email address to receive notifications of new devotionals, prayers and prophetic declarations sent to you by email.</p>
    </div>
    <form action="#">
        <input type="email" required name="email" id="email" placeholder="Email Address">
        <input type="submit" value="Sign me up">
    </form>
</section>


<?php
    require_once 'inc/footer.php';
?>