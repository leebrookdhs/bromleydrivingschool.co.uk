<?php
define('ISITSAFETORUN', TRUE); // flag to be tested by all required pages before they run. See explanations in block text.
$mytitle = 'Cookie Policy'; //Text to be used by head.php as title
$seodescription = 'The cookie policy of Bromley Driving School';
$keyewords = '';
require 'head.php';
require 'headerNav.php';
?>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs p-0">
        <div class="container">
            <ol>
                <li><a href="index.php">Home</a></li>
                <li>Cookie policy</li>
            </ol>
            <h2>Cookie Policy for Bromley Driving School</h2>
        </div>
    </section>
    <!-- End Breadcrumbs -->
    <!-- cookie Section -->
    <section id="cookie" class="pt-0">
        <div class="container py-0">
            <div class="col-md-8">
                <h2>Cookie policy</h2>
                <p>This is the Cookie Policy for Bromley Driving School, accessible from
                    https://bromleydrivingschool.co.uk</p>
                <p><strong>What Are Cookies</strong></p>
                <p>As is common practice with almost all professional websites this site uses cookies, which are tiny files that are downloaded to your computer, to improve your experience. This page describes what information they gather, how we use it and why we sometimes need to store these cookies. We will also share how you can prevent these cookies from being stored however this may downgrade or 'break' certain elements of the sites functionality.</p>
                <p><strong>How We Use Cookies</strong></p>
                <p>We use cookies for a variety of reasons detailed below. Unfortunately in most cases there are
                    no industry standard options for disabling cookies without completely disabling the
                    functionality and features they add to this site. It is recommended that you leave on all
                    cookies if you are not sure whether you need them or not in case they are used to provide a
                    service that you use.</p>
                <p><strong>Disabling Cookies</strong></p>
                <p>You can prevent the setting of cookies by adjusting the settings on your browser (see your
                    browser Help for how to do this). Be aware that disabling cookies will affect the
                    functionality of this and many other websites that you visit. Disabling cookies will usually
                    result in also disabling certain functionality and features of the this site. Therefore it
                    is recommended that you do not disable cookies. This Cookies Policy was created with the
                    help of the <a href="https://www.cookiepolicygenerator.com/cookie-policy-generator/">Cookies
                        Policy Generator</a>.</p>
                <p><strong>The Cookies We Set</strong></p>
                <ul>
                    <li>
                        <p>Email newsletters related cookies</p>
                        <p>This site offers newsletter or email subscription services and cookies may be used to
                            remember if you are already registered and whether to show certain notifications
                            which might only be valid to subscribed/unsubscribed users.</p>
                    </li>
                    <li>
                        <p>Orders processing related cookies</p>
                        <p>This site offers e-commerce or payment facilities and some cookies are essential to
                            ensure that your order is remembered between pages so that we can process it
                            properly.</p>
                    </li>
                    <li>
                        <p>Forms related cookies</p>
                        <p>When you submit data to through a form such as those found on contact pages or
                            comment forms cookies may be set to remember your user details for future
                            correspondence.</p>
                    </li>
                </ul>
                <p><strong>Third Party Cookies</strong></p>
                <p>In some special cases we also use cookies provided by trusted third parties. The following
                    section details which third party cookies you might encounter through this site.</p>
                <ul>
                    <li>
                        <p>This site uses Google Analytics which is one of the most widespread and trusted
                            analytics solution on the web for helping us to understand how you use the site and
                            ways that we can improve your experience. These cookies may track things such as how
                            long you spend on the site and the pages that you visit so we can continue to
                            produce engaging content.</p>
                        <p>For more information on Google Analytics cookies, see the official Google Analytics
                            page.</p>
                    </li>
                    <li>
                        <p>We also use social media buttons and/or plugins on this site that allow you to
                            connect with your social network in various ways. For these to work the following
                            social media sites including; Facebook, Instagram, Pinterest and Twitter will set
                            cookies through our site which may be used
                            to enhance your profile on their site or contribute to the data they hold for
                            various purposes outlined in their respective privacy policies.</p>
                    </li>
                </ul>
                <p><strong>More Information</strong></p>
                <p>Hopefully that has clarified things for you and as was previously mentioned if there is
                    something that you aren't sure whether you need or not it's usually safer to leave cookies
                    enabled in case it does interact with one of the features you use on our site.</p>
                <p>For more general information on cookies, please read <a href="https://www.cookiepolicygenerator.com/sample-cookies-policy/">the Cookies Policy
                        article</a>.</p>
                <p>However if you are still looking for more information then you can contact us through one of
                    our preferred contact methods:</p>
                <ul class="list-unstyled">
                    <li class="my-2"><?php echo file_get_contents("img/svg/envelope.svg"); ?> Email: <a href="mailto:info@bromleydrivingschool.co.uk">info@bromleydrivingschool.co.uk</a> </li>
                    <li class="my-2"><?php echo file_get_contents("img/svg/pencil-square.svg"); ?> By using our <a href="contact.php">contact form</a> to send us a message about our cookies policy</li>
                    <li class="my-2"><?php echo file_get_contents("img/svg/telephone.svg"); ?> Phone: <a href="tel:447886366110">07886 366 110</a></li>
                </ul>
            </div>
        </div>
    </section>
</main>
<!-- End #main -->

<?php
require 'footer.php';
?>