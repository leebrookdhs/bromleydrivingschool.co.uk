<?php
define('ISITSAFETORUN', TRUE); // flag to be tested by all required pages before they run. See explanations in block text.
$mytitle = 'Beginner Driving Lesson'; //Text to be used by head.php as title
$seodescription = 'The instructors at Bromley Driving School are qualified and experienced and will work with learner drivers to your learning style to ensure you pass your driving test';
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
                <li>Beginner pre-test driving lessons</li>
            </ol>
            <h2 class="mb-0"><span class="text-danger fw-bolder display-6 mb-0">L</span>earn to drive &amp; <span class="text-success fw-bolder display-6 mb-0">P</span>ass your test
            </h2>
        </div>
    </section>
    <!-- End #main -->
    <section class="about">
        <div class="container py-2">
            <div class="row">
                <p>One of the first questions all beginner drivers have to consider
                    when it comes to pursuing their license is wether they would like to learn 'Manual'
                    driving.</p>
                <p>This can differ based on the individuals. Manual Driving is not
                    everyones first choice; whether that is due to personal health reasons or simply preferring the
                    simplicity of a manual.</p>
                <p>Regardless of the matter, Bromley Driving School can be the best choice for you. We can ensure
                    you
                    professional driving lessons,
                    all catered to suit each individual students needs in the perfect student learning car for the
                    perfect preparation for your test with our highly experiences professional, carefully handpicked
                    driving instructors.Why Manual Driving lessons?</p>
                <ul>
                    <li>Driving an automatic car is a more straightforward approach to driving as you will not have
                        to
                        deal with clutches.</li>
                    <li>You may prefer an automatic transmission when driving on congested city roads with
                        busy traffic.</li>
                    <li>If you have difficulties managing the gears in a manual car; taking automatic driving
                        lessons
                        can be
                        your faster route to obtaining your licence. Here at Bromley Driving School, we offer noth
                        manual
                        and automatic transmission car
                        driving lessons. Get world-class driving lessons here and be a more confident driver.</li>
                </ul>
            </div>
            <div class="row d-flex">
                <div class="d-flex text-start flex-column my-2 p-2">
                    <h3 class="fw-bold text-center mb-1">Driving Test Success</h3>
                    <p class="mb-1">The following link <a href="https://driving-test-success.com/index.html" referrerpolicy="no-referrer-when-downgrade" target="_blank">driving-test-success.com</a>
                        is a completely free website to help you pass your driving test.</p>
                    <p class="mb-1">It includes invaluable help, tips and guidance to all aspects of the Theory and
                        Practical driving tests.</p>
                </div>
                <div class="col-4">
                    <picture class="d-flex justify-content-start">
                        <source type="image/webp" srcset="img/webp/lessons-for-learners.webp">
                        <source type="image/jpg" srcset="img/webp/lessons-for-learners.jpg">
                        <img src="img/webp/lessons-for-learners.jpg" alt="Learner driver sat in car with l-plates" class="img-fluid shadow" style="width:600px;height:auto; aspect-ratio: 600/400;" loading="lazy">
                    </picture>
                </div>
                <div class="col-6 mx-2">
                    <h3 class="fw-bold mb-1">The tests</h3>
                    <ul>
                        <li>Practical driving test</li>
                        <li>Driving theory test</li>
                        <li>Hazard perception test</li>
                        <li>Show me, tell me test</li>
                    </ul>
                    <p class="mb-1">See more on the DVSA website <a href="https://driving-test-success.com/dsa-driving-test-syllabus.htm" aria-label="Read more about the driving test syllabus" referrerpolicy="no-referrer-when-downgrade" target="_blank">[Read more...]</a></p>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="mt-4"> <i class="bx bx-envelope"></i>
                        <h3>Email Us</h3>
                        <a href="mailto:info@bromleydrivingschool.co.uk">info@bromleydrivingschool.co.uk</a>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="mt-4"> <i class="bx bx-phone-call"></i>
                        <h3>Call Us</h3>
                        <a href="tel:447866366110">07866 366 110</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
require 'footer.php';
?>