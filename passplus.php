<?php
define('ISITSAFETORUN', TRUE); // flag to be tested by all required pages before they run. See explanations in block text.
$mytitle = 'Pass Plus'; //Text to be used by head.php as title
$seodescription = 'The Pass Plus scheme is an accredited course for newly qualified drivers run by Bromley Driving School that can bring down the cost of your car insurance';
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
                <li>Pass Plus driving lessons</li>
            </ol>
            <h2 class="mt-2"><span class="text-success fw-bolder mb-0">P</span>ass <span class="text-success fw-bolder mb-0">P</span>lus - Get ahead of other recently passed drivers</h2>
        </div>
    </section>
    <!-- End Breadcrumbs -->
</main>
<!-- End #main -->
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-6 text-start order-sm-2 order-md-1 my-2 p-2">
            <h3 class="fw-bold  mb-3">Do you want cheaper car insurance?</h3>
            <p class="mb-4">Car insurance for newly qualified drivers can be extremely costly. Pass
                Plus may help you reduce your premiums... The reason insurance can be so expensive
                is that as a newly qualified driver with around 40-80 hours of driving experience
                you are still statistically an inexperienced driver. It doesn't matter how good you
                are or think you are; the insurance companies charge more as the odds are higher you
                will have an accident. One in five new drivers has a crash within six months of passing their test (source: DVSA).</p>
            <p class="mb-4">There are insurers on the market who will give you a discount on your
                premium if you have undertaken a Pass Plus course.</p>
        </div>
        <div class="col-12 col-sm-12 col-md-6 order-sm-first order-md-2 my-2 p-2">
            <picture>
                <source type="image/webp" srcset="img/webp/passplus.webp">
                <source type="image/jpg" srcset="img/webp/passplus.jpg">
                <img src="img/webp/passplus.jpg" alt="Pass plus p-plate" class="img-fluid d-flex align-items-center justify-content-center" style="width:500px;height:auto;aspect-ratio:500/329">
            </picture>
        </div>
        <div class="col-md-6 text-start order-sm-3">
            <h3 class="fw-bold mb-3">What do you learn with <span class="text-success fw-bolder mb-0">P</span>ass <span class="text-success fw-bolder mb-0">P</span>lus?</h3>
            <p class="mb-4">Our Pass Plus course is a 6 hour intensive in-car tuitition, that
                includes the following essential skills:</p>
            <ul>
                <li>Motorway driving</li>
                <ul>
                    <li>Safe speeds</li>
                    <li>Breakdowns</li>
                    <li>Tiredness</li>
                    <li>Following signs</li>
                </ul>
                <li>Safe driving on rural roads</li>
                <ul>
                    <li>Blind bend</li>
                    <li>Livestock in the road</li>
                    <li>Slow moving farm vehicles</li>
                </ul>
                <li>Dual carriageway driving</li>
                <ul>
                    <li>Slip roads - joining and leaving the dual carriageway</li>
                    <li>overtaking</li>
                    <li>Lane discipline</li>
                    <li>Safe distancing</li>
                </ul>
                <li>Coping with adverse weather conditions</li>
                <ul>
                    <li>Rain, Snow, Fog, Bright sunshine</li>
                    <li>Stopping distances</li>
                </ul>
                <li>Night time driving</li>
                <ul>
                    <li>Adjusting headlamps</li>
                    <li>Getting dazlled</li>
                    <li>Judging speed and distance in the dark</li>
                </ul>
                <li>Driving in the inner city</li>
                <ul>
                    <li>Complex Junctions</li>
                    <li>Navigating underpasses</li>
                    <li>Tram, Bus and Cycle lanes</li>
                </ul>
            </ul>
        </div>
        <div class="col-md-6 order-sm-4">
            <picture>
                <source type="image/webp" srcset="img/webp/passplus_sign.webp">
                <source type="image/jpg" srcset="img/webp/passplus_sign.jpg">
                <img data-lazy-src="img/webp/passplus_sign.jpg" alt="Pass plus motorway sign" class="img-fluid d-flex align-items-center justify-content-center lazy" style="width: 336px;height:auto;aspect-ratio:336/450;">
            </picture>
            <div class="col-sm-12 col-md-6 col-lg-6 order-sm-5 order-md-5">
                <div class="info-box mt-4"> <i class="bx bx-envelope ms-2"></i>
                    <h3>Email Us</h3>
                    <p><a href="mailto:info@bromleydrivingschool.co.uk" target="_blank"><strong>info@bromleydrivingschool.co.uk</strong></a> </p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 order-sm-last order-md-last">
                <div class="info-box mt-4"> <i class="bx bx-phone-call ms-2"></i>
                    <h3>Call Us</h3>
                    <p><a href="tel:447886366110" target="_blank">07886 366 110</a></p>
                </div>
            </div>
        </div>
    </div>

    <?php
    require 'footer.php';
    ?>