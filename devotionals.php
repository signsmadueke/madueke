<?php
    require_once "admin/includes/functions/config.php";

    $result = fetchAllDesc("devotions", "devotion_id", 0, 6);
    if ($result) {
        $devotionals = $result;
    }


    $title = 'Devotionals';
    $extraBodyClasses = '';
    require_once 'inc/header.php';
?>

<section id="devotional-title">
    <div class="text">
        <h1>Devotionals</h1>
        <p>Enter your email address to receive notifications of new devotionals, prayers and prophetic declarations sent to you by email.</p>
    </div>
    <form action="#">
        <input type="email" required name="email" id="email" placeholder="Email Address">
        <input type="submit" value="Sign me up">
    </form>
</section>

<section id="all-devotionals">

    <div class="devotionals" id="devotionals">

    </div>

</section>

<script src="inc/polling/js/all_devotions.js"></script>
<?php
    require_once 'inc/footer.php';
?>