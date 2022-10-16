<?php
define('ISITSAFETORUN', TRUE); // flag to be tested by all required pages before they run. See explanations in block text.
$mytitle = 'Book and pay for lessons'; //Text to be used by head.php as title
$seodescription = 'Book and pay for driving lessons Bromley Driving School using our secure online payment gateway';
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
                <li>New student enquiry</li>
            </ol>
            <h2 class="mt-2 d-none">Contact form for new students</h2>
        </div>
    </section>
    <!-- End Breadcrumbs -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
        <div class="container">
            <div class="section-title">
                <h3>New students contact form</h3>
                <p>Use the contact form below and we will try to respond within 1 working day or sooner</p>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <iframe src="https://totaldrive.app/a/enquiry_form_widget.php?16631655048403" frameborder="0" style="width: 100%; height: 650px;"></iframe>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="info-box mt-4"> <i class="bi bi-envelope ms-2"></i>
                        <h3>Email Us</h3>
                        <p><a href="mailto:info@bromleydrivingschool.co.uk" target="_blank"><strong>info@bromleydrivingschool.co.uk</strong></a> </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-box mt-4"> <i class="bi bi-telephone ms-2"></i>
                        <h3>Call Us</h3>
                        <p><a href="tel:447886366110" target="_blank">07886 366 110</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->
    <?php
    require 'cta.php';
    ?>
</main>
<!-- End #main -->
<?php
require 'footer.php';
?>