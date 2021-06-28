<?php
    $title = 'Donate — Prayer M. Madueke';
    $tagline = "Christian Author & Speaker";
    $page_description = 'Become a Ministry Partner, Donate to Prayer M. Madueke';
    $page_image = "madueke/prayermadueke.jpg";
    $extraBodyClasses = 'donate';
    require_once 'inc/header.php';
?>

<section id="donation-title">
    <div class="text">
        <h1>An Invitation to Become a Ministry Partner</h1>
        <p>In response to several calls from readers of my books on how to partner with this ministry, we are grateful to provide our ministry’s bank details.</p>
    </div>
</section>

<section id="sidebar-space"></section>

<section id="donation-online">
    <h2>Donate Online</h2>
    
    <div class="methods">
        <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=hello%40madueke.com&item_name=Donate+to+Prayer+Madueke+Ministries&currency_code=USD&source=url" class="method paypal" target="_blank">
            <p>Donate Internationally via</p>
            <img class="svg" src="assets/images/donate/payments/paypal.svg" alt="">
        </a>

		<a href="https://dashboard.flutterwave.com/donate/wggsovnpufgm" class="method flutterwave" target="_blank">
            <p>Donate in USD via</p>
            <img class="svg" src="assets/images/donate/payments/flutterwave.svg" alt="">
        </a>

        <a href="https://paystack.com/pay/prayermadueke" class="method paystack" target="_blank">
            <p>Donate in NGN via</p>
            <img class="svg" src="assets/images/donate/payments/paystack.svg" alt="">
        </a>
    </div>
</section>

<section id="sidebar-space"></section>

<section id="donation-offline">
    <h2>Donate Offline</h2>
    
    <div class="methods">
        <div class="method">
            <img class="svg" src="assets/images/donate/banks/boa.svg" alt="">
            <p>
				<strong>Donate in Dollars</strong><br>
            	Bank Name: Bank of America<br>
            	Account Name: Roseline C Madueke<br>
            	Account Number: 483079070578
			</p>
        </div>

        <div class="method">
            <img class="svg" src="assets/images/donate/banks/accessbank.svg" alt="">
            <p>
				<strong>Donate in Naira</strong><br>
            	Bank Name: Access Bank<br>
            	Account Name: Prayer Emancipation Missions<br>
            	Account Number: 0692638220
			</p>
        </div>
    </div>
</section>

<section id="donation-endnote">
    <p>Be assured that our continued prayers for you will be answered according to God’s word. And as you remain faithful by sowing seeds of faith, God will never forget your labors of love in Christ.</p>
</section>

<?php
    require_once 'inc/footer.php';
?>