<?php
    require_once "admin/includes/functions/config.php";

    if (isset($_GET['devotion'])) {
        $devotionTitle = $_GET['devotion'];
        $devotion_link = ucwords(str_replace("-", " ", $devotionTitle));

        $result = whereQuote("devotions", "devotion_title", "$devotion_link");
        if ($result) {
            $devotions = $result;
        } else {
            echo "false";
            var_dump($result);
        }

        $response = getOtherBooksAsc("devotions", "devotion_title", $devotion_link, "devotion_id", 1);
        if ($response) {
            $otherdevotions = $response;
        }

        $response2 = getOtherBooksDesc("devotions", "devotion_title", $devotion_link, "devotion_id", 1);
        if ($response2) {
            $otherdevotionsDesc = $response2;
        }
    }


    $title = $devotion_link;
    $page_description = 'Prayer M. Madueke, Christian Author of over 100 books on Amazon.';
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
                    <img src="assets/images/devotionals/<?= $devotion_subimage; ?>" alt="<?= $devotion_title; ?>">
                    <img class="shadow" src="assets/images/devotionals/<?= $devotion_subimage; ?>">
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
                    <div><?= $devotion_body; ?></div>
                </section>
<?php } } ?>
<section id="other-devotionals">

    <?php
        if (!empty($otherdevotionsDesc)) {
            foreach ($otherdevotionsDesc as $otherdevotion) {
                extract($otherdevotion);
                $devotion_link = strtolower(str_replace(" ", "-", $devotion_title)); ?>

                    <a href="devotional?devotion=<?= $devotion_link; ?>" class="prev-devotional">
                        <div class="btn btn-spaced">
                            <img class="svg" src="assets/images/icons/arrow-left.svg">
                            <span>Previous Devotionals</span>
                        </div>
                        <div class="prev-devotional-details">
                            <img src="assets/images/devotionals/<?= $devotion_image?>" alt="">
                            <div class="name">
                                <h3><?= $devotion_title; ?></h3>
                                <div class="date">
                                    <p><span>Posted on </span><?= $datePosted; ?></p>
                                </div>
                            </div>
                        </div>
                    </a>
    <?php } } ?>
    <div></div>


    <?php
        if (!empty($otherdevotions)) {
            foreach ($otherdevotions as $otherdevotionA) {
                extract($otherdevotionA);
                $devotion_link = strtolower(str_replace(" ", "-", $devotion_title)); ?>

                    <a href="devotional?devotion=<?= $devotion_link; ?>" class="next-devotional">
                        <div class="btn btn-spaced">
                            <span>Next Devotionals</span>
                            <img class="svg" src="assets/images/icons/arrow-right.svg">
                        </div>
                        <div class="next-devotional-details">
                            <div class="name">
                                <h3><?= $devotion_title; ?></h3>
                                <p><span>Posted on </span><?= $datePosted; ?></p>
                            </div>
                            <img src="assets/images/devotionals/<?= $devotion_image?>" alt="">
                        </div>
                    </a>
    <?php } } ?>
</section>

<section id="devotional-subscription">
    <div class="text">
        <h1>Stay Inspired. Subscribe!</h1>
        <p>Enter your email address to receive notifications of new devotionals, prayers and prophetic declarations sent to you by email.</p>
    </div>
    <form action="https://prayermaduekestore.us15.list-manage.com/subscribe/post?u=a1ded7fdc64b5e8e70cbf9c53&amp;id=7956285b20" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <div class="form-inputs">
            <div class="mc-field-group">
                <label for="mce-EMAIL">Email Address</label>
                <input type="email" required value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="eg: johndoe@domain.com">
            </div>
            <input type="submit" value="Sign me up" name="subscribe" id="mc-embedded-subscribe" class="button">
        </div>
        <div for="mce-EMAIL" class="mce_inline_error" style="display: block;"></div>
        <div id="mce-responses" class="clear">
            <div class="response" id="mce-error-response" style="display:none"></div>
            <div class="response" id="mce-success-response" style="display:none"></div>
        </div>
        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_a1ded7fdc64b5e8e70cbf9c53_7956285b20" tabindex="-1" value=""></div>
    </form>
    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
    <script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[7]='MMERGE7';ftypes[7]='text';fnames[8]='MMERGE8';ftypes[8]='text';fnames[9]='MMERGE9';ftypes[9]='text';fnames[10]='MMERGE10';ftypes[10]='text';fnames[11]='MMERGE11';ftypes[11]='text';fnames[12]='MMERGE12';ftypes[12]='number';fnames[13]='MMERGE13';ftypes[13]='number';fnames[14]='MMERGE14';ftypes[14]='text';fnames[15]='MMERGE15';ftypes[15]='text';fnames[16]='MMERGE16';ftypes[16]='number';fnames[17]='MMERGE17';ftypes[17]='number';fnames[18]='MMERGE18';ftypes[18]='text';fnames[19]='MMERGE19';ftypes[19]='text';fnames[3]='MMERGE3';ftypes[3]='number';fnames[4]='MMERGE4';ftypes[4]='number';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
</section>


<?php
    require_once 'inc/footer.php';
?>