<?php
    require_once "admin/includes/functions/config.php";

    $result = fetchAllDesc("devotions", "devotion_id", 0, 6);
    if ($result) {
        $devotionals = $result;
    }


    $title = 'Devotionals';
    $page_description = 'Prayer M. Madueke, Christian Author of over 100 books on Amazon.';
    $extraBodyClasses = '';
    require_once 'inc/header.php';
?>

<div id="space"></div>
    
<section id="all-devotionals">

    <h1 class="section-title animated reveal">Devotionals</h1>
        
    <div class="devotionals" id="devotionals">
        <?php
        if (!empty($devotionals)) {
            foreach ($devotionals as $devotional) {
                extract($devotional);
                $devotion_title = str_replace("</b>", "'", $devotion_title);
                $devotion_body = str_replace("</b>", "'", $devotion_body);
                $devotion_link = strtolower(str_replace(" ", "-", $devotion_title)); ?>


                <div class="devotional" style="opacity: 0;">
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
                            <div><?= $devotion_body; ?></div>
                        </a>
                        <a href="devotional?devotion=<?= $devotion_link; ?>" class="btn btn-spaced">
                            <span>Read Devotional</span>
                            <img class="svg" src="assets/images/icons/arrow-right.svg">
                        </a>
                    </div>

                </div>
            <?php } } ?>
    </div>

</section>

<section id="devotional-subscription" class="animated reveal">
    <div class="text">
        <h1>Stay Inspired. Subscribe!</h1>
        <p>Enter your email address to receive notifications of new devotionals, prayers and prophetic declarations sent to you by email.</p>
    </div>

    <form action="https://prayermaduekestore.us15.list-manage.com/subscribe/post?u=a1ded7fdc64b5e8e70cbf9c53&amp;id=33ca07b1a7" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <div class="form-inputs">
            <div class="mc-field-group">
                <label for="mce-EMAIL">Email Address</label>
                <input type="email" autocomplete="email" required value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="eg: johndoe@domain.com">
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
    <script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
</section>

<script src="inc/polling/js/all_devotions.js"></script>
<?php
    require_once 'inc/footer.php';
?>