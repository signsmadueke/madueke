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
    } else {
        redirect_to("devotionals");
    }

    foreach ($devotions as $description_text) {
        $page_description = str_replace("</b>", "'", $description_text['devotion_body']);
        $page_description = trim(preg_replace('/\s+/', ' ', $page_description));
        $page_description = strip_tags($page_description);
        $page_description = substr($page_description, 0, 1000) . "...";
    }

    foreach ($devotions as $image) {
        $page_image = "devotionals/" . $image['devotion_image'];
    }


    $title = $devotion_link;
    $tagline = "Prayer M. Madueke — Christian Author & Speaker";
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

                <section id="devotional-header" class="desktop">
                    <img src="assets/images/devotionals/<?= $devotion_subimage; ?>" alt="<?= $devotion_title; ?>">
                    <img class="shadow" src="assets/images/devotionals/<?= $devotion_subimage; ?>">
                </section>

                <section id="devotional-header" class="mobile">
                    <img src="assets/images/devotionals/<?= $devotion_image; ?>" alt="<?= $devotion_title; ?>">
                    <img class="shadow" src="assets/images/devotionals/<?= $devotion_image; ?>">
                </section>

                <section id="devotional-details">
                    <h1 class="devotional-name"><?= $devotion_title; ?></h1>
                    <div class="devotional-author">
                        <img src="assets/images/madueke/icon.png" alt="Prayer Madueke">
                        <p><span>by </span><?= $devotion_author; ?></p>
                    </div>
                    <p><span>Posted on </span><?= date("D, d M Y", strtotime($datePosted)); ?></p>
                </section>

                <section id="devotional-post">
                    <?= $devotion_body; ?>
                </section>

                <section id="book-promotion">
                    <div class="promotion">
                        <h1>Free Books</h1>
                        <div class="book-horizontal animate reveal">
                            <div class="book-image">
                                <div class="image">
                                    <img src="assets/images/books/book5.jpg" alt="Book Cover of Quarantined for God's Deliverance">
                                </div>
                                <div class="shadow">
                                    <img src="assets/images/books/book5.jpg" alt="Book Cover of Quarantined for God's Deliverance">
                                </div>
                            </div>
                            <div class="details">
                                <h3>Quarantined for God's Deliverance</h3>
                                <p>Plagues do not just happen without reason. When the Egyptians became steeped in evil and iniquity against the people of God, plagues were sent to humble them. Plagues are more horrifying and humiliating than shooting wars. They are a sign that something is terribly wrong. Man has deployed the revealed knowledge of God (science and technology) to wrong uses, destroying and polluting the earth, playing god with genomics and even attempting to slap its creator in the face. There is no depth of decadence that man has not plumbed in a vain attempt to normalize evil and abnormality. Plagues are a time of cleansing, cleansing the earth of pollutants and iniquity. For a child of God, it is a time to put things right in your relationship with God. This is what this book, Quarantined for Deliverance, is about. With over 75 deliverance prayer points, you will be purged to be in order to be saved. When the 10 plagues were unleashed on the Egyptians, the children of God were unaffected. God does not change. He will deliver his people. His promises never fail. Quarantined for Deliverance will help those who have gone astray retrace their steps while there's yet time. This book is for families, communities and nations to pray for deliverance from this terrible scourge.</p>
                                <a href="freebook?book=quarantined-for-god</b>s-deliverance" class="btn btn-chevron">
                                    <span>Download Now</span>
                                    <img class="svg" src="assets/images/icons/chevron-right.svg">
                                </a>
                            </div>
                        </div>

                        <div class="book-horizontal animate reveal">
                            <div class="book-image">
                                <div class="image">
                                    <img src="assets/images/books/book23.jpg" alt="Book Cover of Urgent Prayers for President Trump & World Leaders">
                                </div>
                                <div class="shadow">
                                    <img src="assets/images/books/book23.jpg" alt="Book Cover of Urgent Prayers for President Trump & World Leaders">
                                </div>
                            </div>
                            <div class="details">
                                <h3>Urgent Prayers for President Trump & World Leaders</h3>
                                <p>Unusual times require unusual leaders. The world is sitting on the brink of disaster. There is a battle of supremacy being waged between the forces of good and evil. This is the age of information and misinformation. The laws handed down to man by God are being systematically perverted by the agents of Satan. They have but one horrifying goal: bringing mankind to doom. However, God never leaves his children without hope. When necessary, God can raise the unexpected into positions of leadership. America is a nation whose democracy was founded on Godly principles and laws. In these unusual times, these principles have been under ferocious attack by forces of evil often masquerading as campaigners for various clearly unnatural rights. The goal is to reduce America and the world to Sodom and Gomorrah and thereby cause the world to be destroyed by the wrath of God.<br>God raised Donald Trump an unusual leader to bring America back from the brink. His numerous actions since assuming office leaves no one in doubt that his ascendance to the throne of America’s presidency is divine. He has rolled back the effects of so many ungodly laws and in some cases got them revoked.<br>Donald Trump is not perfect but no one except our creator is. God does not use the perfect and prepared but rather uses the available and ready at heart. <br>This collection of prayers points is dedicated to raising leaders all over the world who will work for the kingdom of God. I believe President Donald Trump of the United States of America is one of them. He deserves our prayer to serve a second term as president.<br>I cordially invite you to pray for his re-election to a second term as President of the United States of America. In addition, his government needs to employ a special prayer squad to pray daily for his re-election.</p>
                                <a href="freebook?book=urgent-prayers-for-president-trump-and-world-leaders" class="btn btn-chevron">
                                    <span>Download Now</span>
                                    <img class="svg" src="assets/images/icons/chevron-right.svg">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="promotion">
                        <h1>Best Selling Books</h1>

                        <div class="book-horizontal animate reveal">
                            <div class="book-image">
                                <div class="image">
                                    <img src="assets/images/books/book1.jpg" alt="Book Cover of 21/40 Nights of Decrees and Your Enemies Will Surrender">
                                </div>
                                <div class="shadow">
                                    <img src="assets/images/books/book1.jpg" alt="Book Cover of 21/40 Nights of Decrees and Your Enemies Will Surrender">
                                </div>
                            </div>
                            <div class="details">
                                <h3>21/40 Nights of Decrees and Your Enemies Will Surrender</h3>
                                <p>This book is a collection of powerful prayer points divided in two parts. The first part is made up of 21 prayer topics or decrees and the second, 40 decrees. It covers every conceivable problem a christian believer faces in their christian walk of faith, and gives prayer topics that provide answers to these problems.</p>
                                <a href="book?book=21/40-nights-of-decrees-and-your-enemies-will-surrender" class="btn btn-chevron">
                                    <span>Buy Now</span>
                                    <img class="svg" src="assets/images/icons/chevron-right.svg">
                                </a>
                            </div>
                        </div>

                        <div class="book-horizontal animate reveal">
                            <div class="book-image">
                                <div class="image">
                                    <img src="assets/images/books/book9.jpg" alt="Book Cover of A Jump From Evil Altar">
                                </div>
                                <div class="shadow">
                                    <img src="assets/images/books/book9.jpg" alt="Book Cover of A Jump From Evil Altar">
                                </div>
                            </div>
                            <div class="details">
                                <h3>A Jump From Evil Altar</h3>
                                <p>The Lord is with many believers today but they do not know. many people of God today are still serving under great bondage. There is much great potential deposited in many believers today but these believers are still living in sin.An altar can be built to destroy an individual, a family, a group or even a whole nation. Once your enemies know what God has spoken concerning your life, marriage, business, academics, work, files containing what God has said about them are on evil altars and need to be withdrawn.</p>
                                <a href="book?book=a-jump-from-evil-altar" class="btn btn-chevron">
                                    <span>Buy Now</span>
                                    <img class="svg" src="assets/images/icons/chevron-right.svg">
                                </a>
                            </div>
                        </div>
                        
                        <div class="book-horizontal animate reveal">
                            <div class="book-image">
                                <div class="image">
                                    <img src="assets/images/books/book6.jpg" alt="Book Cover of Prayers For Mercy">
                                </div>
                                <div class="shadow">
                                    <img src="assets/images/books/book6.jpg" alt="Book Cover of Prayers For Mercy">
                                </div>
                            </div>
                            <div class="details">
                                <h3>Prayers For Mercy</h3>
                                <p>The journey to greatness can be very difficult outside the mercy of God. Do you know about God's mercy? Mercy can be translated as kindness, loving-kindness, good, goodness, pity, and compassion. It is a deep and tender feeling of compassion. God's mercy entails His having a deep and tender feeling of compassion towards us. It is being compassionate and aroused by the sight of weakness or suffering. It means to bend or stoop in kindness or loyalty to an inferior person, to favor or bestow something to him and to be considerate often when it is not expected or deserved. In this all-new message, Prayer Madueke teaches you practical keys on how:. The prayer of Mercy can change the situation. Mercy opens heaven on our prayer; mercy prevails over the judgment of the enemies. Mercy draws the attention of God to us. Mercy makes God forgive our sins and show us kindness. Mercy opens the door for miracles. The steadfast love of the LORD never ceases; his mercies never come to an end; they are new every morning; great is your faithfulness. The mercy of God is the anchor of deliverance for humanity. Get this book to know everything you need to know about God's Mercy!</p>
                                <a href="book?book=prayers-for-mercy" class="btn btn-chevron">
                                    <span>Buy Now</span>
                                    <img class="svg" src="assets/images/icons/chevron-right.svg">
                                </a>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="devotion-comments">
                    <div id="disqus-wrapper">
                        <div id="disqus_thread"></div>
                    </div>
                    <script>
                    (function() {
                    var d = document, s = d.createElement('script');
                    s.src = 'https://madueke.disqus.com/embed.js';
                    s.setAttribute('data-timestamp', +new Date());
                    (d.head || d.body).appendChild(s);
                    })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                </section>
<?php } } ?>
<section id="other-devotionals">

    <?php
        if (!empty($otherdevotionsDesc)) {
            foreach ($otherdevotionsDesc as $otherdevotion) {
                extract($otherdevotion);
                $devotion_link = strtolower(str_replace(" ", "-", $devotion_title)); ?>

                    <a href="devotional?devotion=<?= $devotion_link; ?>" class="prev-devotional">
                        <div class="btn btn-chevron">
                            <img class="svg" src="assets/images/icons/chevron-left.svg">
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
                        <div class="btn btn-chevron">
                            <span>Next Devotionals</span>
                            <img class="svg" src="assets/images/icons/chevron-right.svg">
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
                <input type="email" autocomplete="email" required value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="eg: johndoe@domain.com">
                <label for="mce-EMAIL">Email Address</label>
            </div>
            <input type="submit" value="Sign me up" name="subscribe" id="mc-embedded-subscribe" class="button">
        </div>
        <div for="mce-EMAIL" class="mce_inline_error" style="display:none;"></div>
        <div id="mce-responses" class="clear">
            <div class="response" id="mce-error-response" style="display:none"></div>
            <div class="response" id="mce-success-response" style="display:none"></div>
        </div>
        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_a1ded7fdc64b5e8e70cbf9c53_7956285b20" tabindex="-1" value=""></div>
    </form>
    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
    <script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
</section>


<?php
    require_once 'inc/footer.php';
?>