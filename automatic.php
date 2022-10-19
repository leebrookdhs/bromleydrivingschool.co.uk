<?php
define('ISITSAFETORUN', TRUE); // flag to be tested by all required pages before they run. See explanations in block text.
$mytitle = 'Automatic Driving Lessons'; //Text to be used by head.php as title
$seodescription = 'Bromley Driving School deliver driving lessons in Bromley, Kent and SE London for learner drivers that want or need to learn to drive in an automatic car';
$keyewords = '';
require 'head.php';
require 'headerNav.php';
?> 
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="index.php">Home</a></li>
                <li>Automatic driving lessons</li>
            </ol>
            <h2 class="mt-2">Automatic Driving <span class="fw-bolder text-danger mb-0">L</span>essons</h2>
        </div>
    </section>
    <!-- End Breadcrumbs -->
    <section class="py-4 py-xl-5">
        <div class="container">
            <div class="overflow-hidden">
                <div class="row g-0">
                    <div class="col-md-6">
                        <div class="p-4 p-md-5">
                            <h2 class="fw-bold  mb-3"><span class="fw-bolder text-danger mb-0">L</span>earn to drive in an automatic</h2>
                            <p class="mb-4">We currently only have instructors with Automatic cars and cannot offer <a href="manual.php">manual</a> Lessons at the moment</p>
                            <p class="mb-4">Not everyone wants to learn to drive a manual transmission car. Learning to drive in an automatic car is an option at Bromley Driving School. Some people find it easier as there is no clutch pedal. Especially true on congested inner-city routes. Whatever the reasons, we will teach you all there is to know about driving an automatic car and how to pass your test. You should be aware that if you pass your test in an automatic car, you are not entitled to drive a manual car and would need to take another test to be able to drive this class of car</p>
                            <div class="my-3 mt-4"> <?php echo file_get_contents("img/svg/telephone-fill.svg"); ?>
                                <p>Call Us on <a href="tel:447886366110" target="_blank">07886 366 110</a> - or - <a class="btn btn-outline-dark btn-lg link-light" role="button" href="booking.php">Book online</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 order-first order-md-last">
                        <picture>
                            <source type="image/webp" srcset="img/webp/automatic_gear.webp">
                            <source type="image/jpg" srcset="img/webp/automatic_gear.jpg">
                            <img src="img/webp/automatic_gear.jpg" alt="Automatic gear stick" class="img-fluid d-flex align-items-center justify-content-center" style="width:600px;height: auto;aspect-ratio: 600/600;">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- End #main -->
<?php
require 'footer.php';
?>