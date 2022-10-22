<?php
// This file holds the page header and expects to find teh title in $mytitle
if (!defined('ISITSAFETORUN')) {
    // This provides protection against file being called directly - if it is, ISITSAFETORUN will not be defined
    die('This file does no useful work alone'); // and so this warning message will be issued
}
?>
<!-- ======= CTA Banner Section ======= -->
<section class="py-4 py-xl-5">
    <!-- <div id="cta" class="bg-image" style="height: 250px; background-image: url(img/webp/bromley_driving_school_driving_cta_copy.webp);background-position: center;background-size: cover;"> -->
    <div id="cta">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-10 text-start d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center">
                    <div>
                        <h2 class="text-uppercase fw-bold text-white"><strong>Start <?php echo file_get_contents("img/svg/l-plate.svg"); ?>earning to drive
                                today</strong></h2>
                        <p class="my-3"><strong><span class="text-white large fw-bold">Give us a call to schedule your
                                    first driving lesson</span></strong><br />
                            <br />
                        </p>
                        <div class="row">
                            <div class="d-flex px-2 py-2 text-white">
                                <p class="mb-0"> <strong><?php echo file_get_contents("img/svg/telephone.svg"); ?> Phone: </strong> <a class="text-white" href="tel:447886366110"><strong>07886366110</strong></a> </p>
                            </div>
                            <div class="d-flex px-2 py-2 text-white">
                                <p class="mb-0"> <strong><?php echo file_get_contents("img/svg/envelope.svg"); ?> Email: </strong> <a class="text-white" href="mailto:info@bromleydrivingschool.co.uk"><strong>info@bromleydrivingschool.co.uk</strong></a> </p>
                            </div>
                        </div>
                    </div>
                    <img src="img/png/car.png" alt="cartoon car" class="img-fluid float-right" style="width:175px;height:auto;aspect-ratio:175/238">
                </div>
            </div>
        </div>
    </div>
</section>
</main>