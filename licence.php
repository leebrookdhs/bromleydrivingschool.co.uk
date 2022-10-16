<?php
define('ISITSAFETORUN', TRUE); // flag to be tested by all required pages before they run. See explanations in block text.
$mytitle = ' Provisional Licence'; //Text to be used by head.php as title
$seodescription = 'Helpful advice and resources from Bromley Driving School on applying for your UK Provisional driving licence';
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
                <li>Provisional Licence</li>
            </ol>
            <h2 class="mt-2">Applying for your <span class="text-success fw-bolder mb-0 display-6">P</span>rovisional <span class="text-danger fw-bolder mb-0 display-6">L</span>icence</h2>
        </div>
    </section>
    <!-- End Breadcrumbs -->
    <section>
        <div class="container">
            <div class="overflow-hidden">
                <div class="row g-0">
                    <div class=" col-sm-12 col-md-10 col-lg-6 col-xl-6">
                        <div class="p-2">
                            <h2 class="fw-bold  mb-3">Before you start to <span class="text-danger fw-bolder mb-0 display-6">L</span>earn to drive</h2>
                            <p class="mb-4">It is a legal requirement that you apply for a provisional licence before you can start learning to drive.</p>
                            <p class="mb-4">You can easily apply for your provisional licence online at <a href="https://www.gov.uk/apply-first-provisional-driving-licence">gov.uk</a> or by completing a D1 application form that you can find at your local <a href="https://www.postoffice.co.uk/branch-finder">Post Office.</a></p>
                            <h3>What you need to apply for a <span class="text-success fw-bolder mb-0 display-6">P</span>rovisional <span class="text-danger fw-bolder mb-0 display-6">L</span>icence.</h3>
                            <ul>
                                <li>Have valid prooof of identity</li>
                                <li>Be resident in the UK</li>
                                <li>Have three years of address history</li>
                                <li>Have your 17<sup>th</sup> birthday within 3 months. You have to wait until your birthday to start learning.</li>
                                <li>Be able to read a UK numberplate from 20 meters</li>
                                <li>Be able to pay a fee of £34.00</li>
                            </ul>
                            <p>Once you have completed your application the DVLA will normally send your licence to you in 2-3 weeks</p>
                            <p>Your driving instructor will need to see your licence before you start driving along with a <a href="https://www.gov.uk/view-driving-licence"> DVSA</a> code that verifies your entitlement to drive. To get this you will need the following before visiting the site:</p>
                            <ul>
                                <li>Your driving licence</li>
                                <li>Your national insurance number</li>
                                <li>Your home postcode</li>
                            </ul>
                            <div class="my-3 mt-4"> <?php echo file_get_contents("img/svg/telephone-fill.svg"); ?>
                                <p>Call Us on <a href="tel:447886366110" target="_blank">07886 366 110</a> - or - <a class="btn btn-outline-dark btn-lg link-light" role="button" href="booking.php">Book online</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-10 col-lg-6 col-xl-6 order-sm-first order-md-first order-lg-last">
                        <picture>
                            <source type="image/webp" srcset="img/webp/provisional.webp">
                            <source type="image/jpg" srcset="img/webp/provisional.jpg">
                            <img src="img/webp/provisional.jpg" alt="Part of a UK provisional driving licence" class="img-fluid d-flex align-items-center justify-content-center">
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