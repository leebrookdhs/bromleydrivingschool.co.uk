<?php
define('ISITSAFETORUN', TRUE); // flag to be tested by all required pages before they run. See explanations in block text.
$mytitle = 'Contact us'; //Text to be used by head.php as title
$seodescription = 'If you need to contact Bromley Driving School, this page has all the contact details; forms, telephone numbers and email addresses';
$keyewords = '';
require 'head.php';
require 'headerNav.php';
?>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol class="mt-5">
                <li><a href="index.php">Home</a></li>
                <li>Contact us</li>
            </ol>
            <h2 class="mt-2">Contact us</h2>
        </div>
    </section>
    <!-- End Breadcrumbs -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
        <div class="container">
            <div class="section-title">
                <h3>Get in contact with us by phone, email or the contact form below</h3>
                <p>We will try to respond within 1 working day or sooner</p>
            </div>
            <div class="row">
                <div class="col-auto w-100">
                    <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56311.35254693105!2d-0.023570844269562755!3d51.40978483128086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8aa6f52fc16dd%3A0x8e82c700ee6b9fee!2sBromley%20South!5e0!3m2!1sen!2suk!4v1657332954157!5m2!1sen!2suk" width="100%" height="450" style="border:0;" allowfullscreen="yes" loading="lazy" referrerpolicy="no-referrer-when-downgrade"> </iframe>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <section class="portfolio-block contact">
                        <div class="container">

                            <div class="col">
                                <h2>General Enquiries</h2>
                                <form class="d-flex" data-bss-recipient="9e28f5eec3ad9721215e108748530387" data-bss-subject="Contact form">
                                    <div class="row d-flex" style="width: 100%;padding-bottom: 12px;">
                                        <div class="col-sm-12 col-md-6">
                                            <label class="form-label text-muted small" for="name_cont">Name</label>
                                            <div class="input-group"><span class="fw-bold input-group-text">
                                            <?php echo file_get_contents("img/svg/person.svg"); ?>
                                                </span>
                                                <input class="form-control" type="text" id="name_cont" name="name_cont" placeholder="Your name *" autocomplete="on" required="">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <label class="form-label muted small" for="email_cont">Email</label>
                                            <div class="input-group"><span class="fw-bold input-group-text">
                                            <?php echo file_get_contents("img/svg/envelope.svg"); ?>
                                                </span>
                                                <input class="form-control" type="text" id="email_cont" name="email_cont" placeholder="example@domain.com" autocomplete="on" required="" inputmode="email">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <label class="form-label text-muted small" for="subject_cont">Subject</label>
                                            <div class="input-group"><span class="fw-bold input-group-text">
                                            <?php echo file_get_contents("img/svg/question-lg.svg"); ?>
                                                </span>
                                                <input class="form-control" type="text" id="subject_cont" name="subject_cont" placeholder="Subject *" autocomplete="on" required="" minlength="6">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <label class="form-label text-muted small" for="phone_cont">Phone</label>
                                            <div class="input-group"><span class="fw-bold input-group-text">
                                            <?php echo file_get_contents("img/svg/telephone.svg"); ?>
                                                </span>
                                                <input class="form-control" type="text" id="phone_cont" name="phone_cont" placeholder="01234 567 890" autocomplete="on" required="">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label class="form-label text-muted small" for="service_cont">Area of interest</label>
                                            <div class="input-group"><span class="fw-bold input-group-text">
                                            <?php echo file_get_contents("img/svg/gear.svg"); ?>
                                                </span>
                                                <select class="form-select" id="service_cont" name="service_cont" required="" value="Choose a service">
                                                    <optgroup label="Choose your area of interest">
                                                        <option value="12">Beginner/Learner Driver Lessons</option>
                                                        <option value="13">Intensive Driving Lessons</option>
                                                        <option value="14">Pass Plus Lessons</option>
                                                        <option value="15">Refresher course</option>
                                                        <option disabled="disabled">----------------------------</option>
                                                        <option value="16">Automatic transmission</option>
                                                        <option value="17">Manual transmission</option>
                                                        <option disabled="disabled">----------------------------</option>
                                                        <option value="18">Instructor/Franchise</option>
                                                        <option disabled="disabled">----------------------------</option>
                                                        <option value="19">Policies: T&Cs, Privacy or Cookies</option>
                                                        <option disabled="disabled">----------------------------</option>
                                                        <option value="20">Other</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label text-muted small" for="message_cont">Message</label>
                                            <div class="input-group"><span class="fw-bold input-group-text">
                                            <?php echo file_get_contents("img/svg/pencil.svg"); ?>
                                                </span>
                                                <textarea class="form-control" id="message_cont" name="message_cont" placeholder="Type your message here..." rows="5" required="" minlength="10" maxlength="500"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <p class="fw-normal text-danger" style="--bs-body-color: var(--bs-red);--bs-body-font-size: 0.9rem;">* These fields are required</p>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check form-switch" id="terms" style="margin-top: 5px;margin-bottom: 5px;">
                                                <input class="form-check-input" type="checkbox" id="formCheck-1" name="terms" required="" value="1">
                                                <label class="form-check-label" for="terms">Please, accept our <a href="terms.html">terms of service</a> and <a href="privacy.html">privacy policy</a></label>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center m-auto">
                                            <button class="btn btn-success fw-bold" type="submit" style="margin-top: 5px;margin-bottom: 5px;margin-right: auto;margin-left: auto;">Send message&nbsp;
                                            <?php echo file_get_contents("img/svg/send.svg"); ?>
                                                &nbsp;</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="info-box mt-4"> 
                        <h3><?php echo file_get_contents("img/svg/envelope.svg"); ?> Email Us</h3>
                        <p><a href="mailto:info@bromleydrivingschool.co.uk" target="_blank"><strong>info@bromleydrivingschool.co.uk</strong></a> </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-box mt-4"> 
                        <h3><?php echo file_get_contents("img/svg/telephone.svg"); ?> Call Us</h3>
                        <p><a href="tel:447886366110" target="_blank">07886 366 110</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->

    <?php
    include 'cta.php'
    ?>
</main>
<!-- End #main -->

<?php
require 'footer.php';
?>