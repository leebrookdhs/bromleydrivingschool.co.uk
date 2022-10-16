<?php
define('ISITSAFETORUN', TRUE); // flag to be tested by all required pages before they run. See explanations in block text.
$mytitle = 'Book and pay for lessons'; //Text to be used by head.php as title
$seodescription = 'Book and pay for driving lessons Bromley Driving School using our secure online payment gateway';
$keyewords = '';
require 'head.php';
require 'headerNav.php';
?>
<main id="main">

    <section class="about">
        <div class="container py-2">
            <div class="row">
                <div class="col-12">
                    <div class="info-box mt-4">
                        <h3>Existing student booking<?php echo file_get_contents("img/svg/calendar3.svg"); ?></h3>
                        <p>Please, use this form if you are an existing student registered with Bromley Driving School. If you are
                            a new student please, use the <a href="new-student.php" class="btn btn-outline-dark w-auto">New student
                                booking form</a></p>
                    </div>
                    <iframe src="https://www.totaldrive.app/a/booking.php?166370741884031" style="width: 100%; height: 650px;"></iframe>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="info-box mt-4">
                        <h3>Pay up front for your driving lessons<?php echo file_get_contents("img/svg/currency-pound.svg"); ?></i></h3>
                        <p>Get discounts for booking 5 or 10 hour blocks</p>
                    </div>
                    <iframe src="https://www.totaldrive.app/a/pay_widget.php?166316550484031" style="width: 100%; height: 550px;"></iframe>"

                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->


    <!-- ======= CTA Banner Section ======= -->
    <section class="py-4 py-xl-5">
        <div class="bg-image" style="height: 250px; background-image: url(img/webp/bromley_driving_school_driving_cta_copy.webp);background-position: center;background-size: cover;">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-md-10 text-center text-md-start d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center">
                        <div>
                            <h2 class="text-uppercase fw-bold text-white"><strong>Start Learning to drive
                                    today</strong></h2>
                            <p class="my-3"><strong><span class="text-white large fw-bold">Give us a call to schedule your
                                        first driving lesson</span></strong><br />
                                <br />
                            </p>
                            <div class="row">
                                <div class="d-flex px-2 py-2 text-white">
                                    <p class="mb-0"> <strong><i class="bi bi-telephone small text-white pe-1"> </i> Phone: </strong> <a class="text-white" href="tel:447886366110"><strong>07886366110</strong></a> </p>
                                </div>
                                <div class="d-flex px-2 py-2 text-white">
                                    <p class="mb-0"> <strong><i class="bi bi-envelope small text-white pe-1"> </i> Email: </strong> <a class="text-white" href="mailto:info@bromleydrivingschool.co.uk"><strong>info@bromleydrivingschool.co.uk</strong></a>
                                    </p>
                                </div>
                            </div>
                        </div>
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