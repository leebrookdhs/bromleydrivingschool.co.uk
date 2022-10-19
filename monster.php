<?php
define('ISITSAFETORUN', TRUE); // flag to be tested by all required pages before they run. See explanations in block text.
$mytitle = 'Beginner Driving Lesson'; //Text to be used by head.php as title
$seodescription = 'The instructors at Bromley Driving School are qualified and experienced and will work with learner drivers to your learning style to ensure you pass your driving test';
$keyewords = '';
require 'head.php';
require 'headerNav.php';
require 'hero.php';
require 'about.php';
require 'cta.php';
?>

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
<div class="container">
    <!--Section: Content-->
    <section id="blogs" class="text-center">
        <h4 class="mb-5"><strong>Latest posts</strong></h4>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <div>
                        <picture>
                            <source type="image/webp" srcset="img/webp/bromley_driving_school_red_audi.webp">
                            <source type="image/jpg" srcset="img/webp/bromley_driving_school_red_audi.jpg">
                            <img src="img/webp/bromley_driving_school_red_audi.jpg" alt="Red Audi Car" class="img-fluid ">
                        </picture>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Is It Harder to Learn to Drive in Your Thirties?</h5>
                        <p class="card-text date small">June 18, 2022</p>
                        <p class="card-text small">Author: <a href="#bromleydrivingschool">Bromley Driving School</a></p>
                        <p class="card-text"> For most people turning seventeen means one thing; learning to drive. For not for everyone and there
                            are many people who, for one reason or another, do not feel that urge. They hit their twenties and
                            still never get around to learning to drive. Then they reach their thirties and the irritation with
                            public transport reaches fever pitch or the person they relied on to drive for them cannot do it
                            anymore. So they start looking for a driving instructor. But is it harder to learn to drive in your
                            thirties?. </p>
                        <a href="harder-learn-drive-thirties.html" class="btn btn-outline-dark mt-auto">Read more...</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <div>
                        <picture>
                            <source type="image/webp" srcset="img/webp/bsm-audi-driver500.webp">
                            <source type="image/jpg" srcset="img/webp/bsm-audi-driver500.jpg">
                            <img src="img/webp/bsm-audi-driver500.jpg" alt="Person driving an Audi Car" class="img-fluid ">
                        </picture>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Top hazards for new drivers</h5>
                        <p class="date">Published: February 7, 2021</p>
                        <p class="card-text">Author: <a href="#BromleyDrivingSchool">Bromley Driving School</a> </p>
                        <p class="card-text"> As a new driver, one of the hardest things to deal with is the number of hazards on the road. With
                            more vehicles, pedestrians, cyclist and other distractions, you need to be very aware as you drive.
                            So what principles can you remember to help you be as safe as possible on the road and be aware of
                            those hazards? </p>
                        <a href="top-hazards-new-drivers.html" class="btn btn-outline-dark mt-auto">Read more...</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <div>
                        <picture>
                            <source type="image/webp" srcset="img/webp/bromley_driving_school_Lplates.webp">
                            <source type="image/jpg" srcset="img/webp/bromley_driving_school_Lplates.jpg">
                            <img src="img/webp/bromley_driving_school_Lplates.jpg" alt="Person sat in car with L-plates" class="img-fluid">
                        </picture>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Thinking of Learning to Drive? Here are some things to know before you start</h5>
                        <p class="date">Published: February 7, 2021</p>
                        <p class="card-text">Author: <a href="#BromleyDrivingSchool">Bromley Driving School</a> </p>
                        <p class="card-text"> Learning to drive is probably one of the most useful and important skills most of us learn in life. Millions of people take to the streets with their driving instructors each year, building up their experience so that they can finally pass their test and take to the roads on their own. It involves a good deal of time, effort and money to learn to drive, however, and finding a good instructor is often half the battle. </p>
                        <a href="thinking-learning-drive.html" class="btn btn-outline-dark mt-auto">Read more...</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
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
    <section id="why-us" class="why-us section-bg">
        <div class="container-fluid">
            <h2 class="text-center">Frequently Asked Questions -&nbsp; FAQs</h2>
            <div class="container">
                <div class="card card1">
                    <div class="card-body">
                        <h3 class="card-title">How often should I have my driving lessons?</h3>
                        <p class="card-text">Most pupils will have one Driving Lesson a week, but that&#39;s not essential.They
                            can be tailored to whatever suits you best</p>
                    </div>
                </div>
                <div class="card card1">
                    <div class="card-body">
                        <h3 class="card-title">Where do I book my theory test?</h3>
                        <p class="card-text">You can go on <a href="https://www.gov.uk/book-theory-test">https://www.gov.uk/book-theory-test</a> and search for a
                            time, date and test centre to suit you</p>
                    </div>
                </div>
                <div class="card card1">
                    <div class="card-body">
                        <h3 class="card-title">How many driving
                            lessons will I need?</h3>
                        <p class="card-text">Every pupil is different, so the amount of driving lessons
                            you will need before passing will vary. There is no possible way to predict a specific amount of
                            lessons, however as a guideline, DVSA statistics say the average pupil takes 47
                            hours professional driving lessons, and 20 hours private lessons</p>
                    </div>
                </div>
                <div class="card card1">
                    <div class="card-body">
                        <h3 class="card-title">What about Covid-19?</h3>
                        <p class="card-text">The DVSA have lifted all Covid-19 restrictions relating to driving theory and
                            practical tests in England. Face coverings are a personal choice; we do recommend that face coverings
                            are used during your lessons. If you develop any symptoms we urge you to rearrange any lessons or tests </p>
                    </div>
                </div>
                <div class="card card1">
                    <div class="card-body">
                        <h3 class="card-title">What is Pass Plus?</h3>
                        <p class="card-text">Pass Plus is a course of driving lessons you take after you have passed your
                            practical test. If you pass this test some insurers will give you a discount on your insurance premium. <a href="passplus.php"><br>
                                [Read more...]</a></p>
                    </div>
                </div>
                <div class="card card1">
                    <div class="card-body">
                        <h3 class="card-title">How do I become a franchised driving instructor?</h3>
                        <p class="card-text">If you are a qualified and experienced ADI looking to join our franchise, we want
                            to hear from you. Send your details using the form below or call <a href="tel:447886366110">07886 366
                                110</a> or <a href="mailto:info@bromleydrivingschool.co.uk">email</a> us</p>
                    </div>
                </div>
                <div class="card card1">
                    <div class="card-body">
                        <h3 class="card-title">Do you teach people of all ages?</h3>
                        <p class="card-text">Driving is not just for the young so why not talk to us
                            about our lessons to
                            get you on the road. Our highly trained instructors are patient and here
                            to help you pass
                            your driving test and give you the freedom you deserve. So, why not pick
                            up the phone and
                            give us a call to find out how we can help you?</p>
                    </div>
                </div>
                <div class="card card1">
                    <div class="card-body">
                        <h3 class="card-title">Do
                            I need to pass
                            my theory test before I book the
                            practical test?</h3>
                        <p class="card-text">In order to book your practical driving test, you will need
                            to have passed
                            your driving theory test. However you can begin your driving lessons
                            prior to passing your
                            theory test</p>
                    </div>
                </div>
                <div class="card card1">
                    <div class="card-body">
                        <h3 class="card-title">Where will I be picked up from?</h3>
                        <p class="card-text">The majority of our driving instructors will pick pupils up
                            from their home.
                            Please note that alternate addresses like work, or college can be
                            arranged with advanced
                            notice</p>
                    </div>
                </div>
                <div class="card card1">
                    <div class="card-body">
                        <h3 class="card-title">Are your instructors all fully qualified?</h3>
                        <p class="card-text">All of our instructors are ADI (approved driving instructors) and follow the code
                            of conduct set out on the <a href="https://www.gov.uk/government/publications/driving-instructor-code-of-practice">gov.uk
                                website</a></p>
                    </div>
                </div>
                <div class="card card1">
                    <div class="card-body">
                        <h3 class="card-title">What can I do to prepare?</h3>
                        <p class="card-text">Know the code! <a href="https://www.gov.uk/guidance/the-highway-code">The
                                Highway Code</a> governs how all road users should behave including pedestrians, scooter
                            users, cyclists, horse riders, drivers, and motorcyclists. It's a criminal offence to break these
                            rules. You will be tested on it in both the theory test and practical test. It's a good idea to study
                            "The Official DVSA Guide to Driving - the essential skills"; it can be found online or in most
                            bookshops</p>
                    </div>
                </div>
            </div>
        </div>
        <section id="testimonials" class="testimonials section-bg">
            <div class="container">
                <div class="section-title">
                    <h2>Feedback &amp; Testimonials</h2>
                    <p>Here is some of the feedback and experiences from our ex-pupils and alumni. Please, feel free to add your own experience, if we have taught you previously.</p>
                </div>
                <div class="carousel slide" data-bs-ride="carousel" data-bs-interval="10000" id="carousel-t">
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <div class="col-9 text-center mx-auto testimonial-content">
                                <h2 class="display-6">Self confidence boost</h2>
                                <p title="5-Star review"><?php echo file_get_contents("img/svg/5-gold-star.svg"); ?></p>
                                <p class="text-center"><em><?php echo file_get_contents("img/svg/quote.svg"); ?> Bromley School of Motoring really helped build my confidence behind the wheel and with driving in general, and they got me a first time pass! Highly recommended"</em><br>
                                </p>
                                <p class=" signature fw-bold">Harold Green</p>
                                <p class="text-center date">June 18, 2022<br>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-9 offset-xl-1 text-center mx-auto testimonial-content">
                                <h2 class="display-6">Excellent service</h2>
                                <p title="5-Star review"><?php echo file_get_contents("img/svg/5-gold-star.svg"); ?></p>
                                <p class="text-center"><em><?php echo file_get_contents("img/svg/quote.svg"); ?> Excellent service at Bromley School of Motoring. Good coaching and support provided to learners"</em><br>
                                </p>
                                <p class=" signature fw-bold">Kehinde Macauley</p>
                                <p class="text-center date">June 18, 2022<br>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-9 offset-xl-1 text-center mx-auto testimonial-content">
                                <h2 class="display-6">An excellent and patient instructor</h2>
                                <p title="5-Star review"><?php echo file_get_contents("img/svg/5-gold-star.svg"); ?></p>
                                <p class="text-center"><em><?php echo file_get_contents("img/svg/quote.svg"); ?> Isiah is a fantastic driving instructor and very patient too. I needed some refresher lessons as my overseas licence was not valid in the UK and after years of driving I needed to learn how to pass my test again and lose some of my bad habits. I can't recommend him highly enough"</em><br>
                                </p>
                                <p class=" signature fw-bold">Dima P</p>
                                <p class="text-center date">July 8, 2022</p>
                            </div>
                        </div>
                        <div class="carousel-item active">
                            <div class="col-9 offset-xl-1 text-center mx-auto testimonial-content">
                                <h2 class="display-6">Passing my test</h2>
                                <p title="5-Star review"><?php echo file_get_contents("img/svg/5-gold-star.svg"); ?></p>
                                <p class="text-center"><em><?php echo file_get_contents("img/svg/quote.svg"); ?> What a guy this guy is. Not only he made me pass on my first go he also never stopped believing in me. He never came late to my lessons bare in mind this was all during covid times as well. I am so glad 😀..."</em><br>
                                </p>
                                <p class=" signature fw-bold">Gurkan</p>
                                <p class="text-center date">June 18, 2022</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-9 offset-xl-1 text-center mx-auto testimonial-content">
                                <h2 class="display-6">Best driving school</h2>
                                <p title="5-Star review"><?php echo file_get_contents("img/svg/5-gold-star.svg"); ?></p>
                                <p class="text-center"><em><?php echo file_get_contents("img/svg/quote.svg"); ?> believe this is the best driving instructor ever. I passed the first time due to his support and his teachings. I would highly recommend him to everyone! I am so happy."</em></p>
                                <p class=" signature fw-bold">Enkay</p>
                                <p class="text-center date">January 16, 2021</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-9 offset-xl-1 text-center mx-auto testimonial-content">
                                <h2 class="display-6">Passed Test</h2>
                                <p title="5-Star review"><?php echo file_get_contents("img/svg/5-gold-star.svg"); ?></p>
                                <p class="text-center"><em><?php echo file_get_contents("img/svg/quote.svg"); ?> passed my driving test in Bromley on Thrusday 15/09/2022. I was really impressed that I got a good Instructor and helped me through my driving test. Thank you.</em></p>
                                <p class=" signature fw-bold">Dao Phatanchee</p>
                                <p class="text-center date">20/09/2022</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a class="carousel-control-prev" href="#carousel-t" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" style="color:#000"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-t" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" fill="#000"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carousel-t" data-bs-slide-to="0" class=""></li>
                        <li data-bs-target="#carousel-t" data-bs-slide-to="1" class=""></li>
                        <li data-bs-target="#carousel-t" data-bs-slide-to="2" class=""></li>
                        <li data-bs-target="#carousel-t" data-bs-slide-to="3" class="active" aria-current="true"></li>
                        <li data-bs-target="#carousel-t" data-bs-slide-to="4" class=""></li>
                        <li data-bs-target="#carousel-t" data-bs-slide-to="5" class=""></li>
                    </ol>
                </div>
                <!--End testimonial item -->

            </div>

            <div class="rt-container">
                <div class="col-rt-12">
                    <div class="Scriptcontent">
                        <div class="feedback">
                            <h2>Submit a review</h2>
                            <form data-bss-recipient="9e28f5eec3ad9721215e108748530387" data-bss-subject="A new review from the website">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend"></div>
                                </div>
                                <div>
                                    <label class="form-label shadow-sm pe-5" for="star-rating" style="margin: 0;padding: 0;padding-bottom: 10px;padding-right: 0px;padding-left: 0;height: 35px;margin-right: auto;margin-left: auto;margin-top: auto;margin-bottom: auto;font-weight: bold;font-style: italic;position: relative;display: inline-block;transform: translateX(4px) translateY(-8px);transition: ease-in-out;">Please,
                                        rate your experience with us.</label>
                                    <span class="star-rating">
                                        <input type="radio" id="star-rating" name="rating1" value="1" />
                                        <i></i>
                                        <input type="radio" name="rating1" value="2" />
                                        <i></i>
                                        <input type="radio" name="rating1" value="3" />
                                        <i></i>
                                        <input type="radio" name="rating1" value="4" />
                                        <i></i>
                                        <input type="radio" name="rating1" value="5" />
                                        <i></i></span>
                                    <div class="input-group input-group-sm"></div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-group">
                                        <label for="reviewerName" class="form-label text-muted small" style="margin: 0px 0px 4px;">Full
                                            name *</label>
                                        <input id="reviewerName" type="text" name="name" class="form-control" placeholder="Please enter your full name *" required="required" minlength="3" style="border-radius: 8px;" data-error="Your full name is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="mb-3" style="border-radius: 8px;">
                                    <div class="form-group">
                                        <label for="reviewTitle" class="form-label text-muted small" style="margin: 0px 0px 4px;">Give
                                            your review a title *</label>
                                        <input id="reviewTitle" type="text" name="reviewTitle" class="form-control" placeholder="Title of your review *" required="required" minlength="3" style="border-radius: 8px;" data-error="A review title is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="mb-3" style="box-shadow: 0px 0px;">
                                    <div class="form-group">
                                        <label for="emailReviewer" class="form-label text-muted small">Email *</label>
                                        <input id="emailReviewer" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <p class="form-label text-muted small ms-3">We will never share your contact details with other
                                    organisations</p>
                                <div class="mb-3 my-3">
                                    <label class="form-label" for="review" style="box-shadow: 0px 0px;">Review:</label>
                                    <textarea id="review" class="shadow form-control item" placeholder="Tell us honestly about what we do well and not so well." required minlength="10" maxlength="500" rows="7" style="border-style: solid;border-radius: 16px;"></textarea>
                                </div>
                                <div class="mb-3">
                                    <div class="form-check form-switch form-check-inline custom-control custom-switch">
                                        <input id="customSwitch1" class="form-check-input custom-control-input" type="checkbox" name="terms_privacy" value="0" required />
                                        <label id="terms_privacy" class="form-check-label custom-control-label"><strong><span style="color: rgb(33, 37, 41);">I
                                                    guarantee this is a genuine review based on my
                                                    own personal
                                                    experience.</span></strong><br />
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-success btn-lg d-block mx-auto" type="submit">Submit
                                        review</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Testimonials Section -->

        <!--Section gallery passed students-->
        <section id="gallery_pass" class="testimonials section-bg">
            <div class="container">

                <h2>Gallery of Successful Practical Test students</h2>
                <p>Check out the smiles on every students face who have just passed their practical driving test</p>
                <div class="row text-center">

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                        <picture>
                            <source type="image/webp" srcset="img/webp/passtest01.webp">
                            <source type="image/jpg" srcset="img/jpeg/passtest01.jpg">
                            <img src="img/jpeg/passtest01.jpg" alt="Student and instructor after passing practical driving test" class="img-fluid d-block shadow my-3 mx-3 p-3" style="width:250px; height:auto; aspect-ratio:500/500; max-width:250px" loading="lazy">
                        </picture>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                        <picture>
                            <source type="image/webp" srcset="img/webp/passtest02.webp">
                            <source type="image/jpg" srcset="img/jpeg/passtest02.jpg">
                            <img src="img/jpeg/passtest02.jpg" alt="Student after passing practical driving test" class="img-fluid d-block shadow my-3 mx-3 p-3" style="width:250px; height:auto; aspect-ratio:500/500; max-width:250px" loading="lazy">
                        </picture>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                        <picture>
                            <source type="image/webp" srcset="img/webp/passtest03.webp">
                            <source type="image/jpg" srcset="img/jpeg/passtest03.jpg">
                            <img src="img/jpeg/passtest03.jpg" alt="Student after passing practical driving test" class="img-fluid d-block shadow my-3 mx-3 p-3" style="width:250px; height:auto; aspect-ratio:500/500; max-width:250px" loading="lazy">
                        </picture>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                        <picture>
                            <source type="image/webp" srcset="img/webp/passtest04.webp">
                            <source type="image/jpg" srcset="img/jpeg/passtest04.jpg">
                            <img src="img/jpeg/passtest04.jpg" alt="Student after passing practical driving test" class="img-fluid d-block shadow my-3 mx-3 p-3" style="width:250px; height:auto; aspect-ratio:500/500; max-width:250px" loading="lazy">
                        </picture>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                        <picture>
                            <source type="image/webp" srcset="img/webp/passtest05.webp">
                            <source type="image/jpg" srcset="img/jpeg/passtest05.jpg">
                            <img src="img/jpeg/passtest05.jpg" alt="Student after passing practical driving test with teacher" class="img-fluid d-block shadow my-3 mx-3 p-3" style="width:250px; height:auto; aspect-ratio:350/367; max-width:250px" loading="lazy">
                        </picture>
                    </div>

                </div>
            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <h2 class="fw-bold mb-3">Join our
                        <picture>
                            <source type="image/webp" srcset="img/franchise_banner.webp">
                            <source type="image/jpg" srcset="img/franchise_banner.jpg">
                            <img src="img/franchise_banner.jpg" alt="franchise Banner" style="width: 200px; " loading="lazy">
                        </picture>
                    </h2>
                    <p class="mb-4">If you are a qualified and experienced ADI looking to join our
                        franchise, we want to hear from you. Send your details using the form below or call
                        us on <a href="tel:447886366110" target="_blank">07886 366 110</a>. We will give you a call to discuss
                        opportunities and options.</p>
                </div>
                <div class="flex-grow w-100 mt-2">
                    <form data-bss-recipient="9e28f5eec3ad9721215e108748530387" data-bss-subject="Franchise enquiry">
                        <fieldset>
                            <legend>Learn more about our franchise</legend>
                            <div class="container">
                                <div class="row d-flex my-2" style="width: 100%;height: auto;margin-top: 5px;margin-bottom: 4px;padding: 5px;">
                                    <div class="col-md-4">
                                        <label class="form-label visually-hidden invisible" for="name">Full name</label>
                                        <div class="input-group input-group-sm"><span class="input-group-text">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person bi bi-person">
                                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                                                </svg>
                                            </span>
                                            <input class="form-control" type="text" placeholder="Full name" name="name" autocomplete="on" required="" minlength="3" maxlength="25" style="font-size: 1rem;font-family: raleway, open-sans;">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label visually-hidden invisible" for="email">email address</label>
                                        <div class="input-group input-group-sm"><span class="input-group-text">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope">
                                                    <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"></path>
                                                </svg>
                                            </span>
                                            <input class="form-control" type="text" name="email" placeholder="example@domain.com" autofocus="" autocomplete="on" inputmode="email" required="" style="font-size: 1rem;font-family: raleway, open-sans;">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label visually-hidden invisible" for="phone">Telephone number</label>
                                        <div class="input-group input-group-sm"><span class="input-group-text">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-telephone">
                                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"></path>
                                                </svg>
                                            </span>
                                            <input class="form-control" type="tel" name="phone" placeholder="01234 567 890" autocomplete="on" required="" inputmode="tel" style="font-size: 1rem;font-family: raleway, open-sans;">
                                        </div>
                                    </div>
                                    <div class="col-12 text-muted">
                                        <p class="text-muted mt-2" style="font-size: .8rem;">Your contact details will not be shared with any other organisations</p>
                                    </div>
                                </div>
                                <div class="row d-flex my-2" style="width: 100%;height: auto;margin-top: 5px;margin-bottom: 4px;padding: 5px;">
                                    <div class="col" style="width: 100%;">
                                        <div class="form-check" style="font-size: 0.8rem;">
                                            <input class="form-check-input" type="checkbox" id="formCheck-1">
                                            <label class="form-check-label text-muted" for="formCheck-1" style="font-size: 0.8rem;">Please, review and accept our T&amp;Cs and privacy policy</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <button class="btn btn-success btn-sent" type="submit">Send details&nbsp;
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-send">
                                                <path fill-rule="evenodd" d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="d-flex align-items-center justify-content-center">
        <picture>
            <source type="image/webp" srcset="img/webp/bromley_driving_school_red_audi.webp">
            <source type="image/jpg" srcset="img/webp/bromley_driving_school_red_audi.jpg">
            <img src="img/webp/bromley_driving_school_red_audi.jpg" alt="Red Audi car" class="img-fluid">
        </picture>
    </div>
    <section class="py-4 py-xl-5">
        <div class="container">
            <div class="overflow-hidden">
                <div class="row g-0">
                    <div class="col-md-10">
                        <div class="p-4 p-md-5">
                            <h2 class="fw-bold  mb-3">The pros and cons of learning to drive in your 30s</h2>
                            <p class="mb-4">For most people turning seventeen means one thing; learning to drive. For not for
                                everyone and there are many people who, for one reason or another, do not feel that urge. They hit
                                their twenties and still never get around to learning to drive. Then they reach their thirties and
                                the irritation with public transport reaches fever pitch or the person they relied on to drive for
                                them cannot do it anymore. So they start looking for a driving instructor. But is it harder to learn
                                to drive in your thirties?</p>
                            <h3>The positives</h3>
                            <p class="mb-4">For many people, starting to learn to drive in their thirties may seem unimaginably
                                hard when they have driven since they were eighteen. But there are some clear advantages that older
                                learner drivers have that the younger ones do not.</p>
                            <p class="mb-4">For starters, you have years of accumulated road knowledge, whether you thought you
                                were paying attention or not. Drivers have a habit of telling non-drivers what another driver did
                                wrong, why they were in the wrong lane or what that wacky signpost really means. And you do take
                                information in. This means when you come to put it into practice, it can be surprising how much road
                                etiquette and knowledge you have already amassed. As opposed to a seventeen-year-old who was likely
                                playing with their smartphone most of the time while driving and has no idea!</p>
                            <p class="mb-4">Insurance is cheaper as a learner in your thirties and this often means you can be
                                added to someones policy to get practice without needed to remortgage the house as you do when you
                                are in your teens. More practise is always good away from your driving lessons and obviously, costs
                                less too.</p>
                            <h3>Awareness and confidence</h3>
                            <p class="mb-4">Awareness of consequences and self-confidence are two areas that can go either way for
                                thirties learner drivers. Because you realise that you could kill someone through your driving, hit
                                a kid on a bike or crash into some pedestrians, you have a natural caution that kids often lack.
                                This can be a good thing or a bad thing, depending on your personality.</p>
                            <p class="mb-4">The same applies to self-confidence. Teens think they are indestructible and often
                                drive like that. Older drivers know they are not and this can make them more cautious but again,
                                this can be a good thing. As long as it does not become a paralysing caution that causes them to
                                doubt themselves.</p>
                            <h3>The negatives</h3>
                            <p class="mb-4">Both the above can become negatives in some situations. As we get older we have more
                                worries and things happening with our lives than can make learning to drive more stressful. This, in
                                turn, can make the process more difficult.</p>
                            <p class="mb-4">Adjusting the being the one who needs to be watchful all the time rather than a
                                passenger gazing out of the wind can also take some adjustment for older learner drivers. This means
                                learning to focus on potential hazards can take a bit more work!</p>
                            <p class="date">Published: June 18, 2022</p>
                            <p class="card-text">Author: <a href="#BromleyDrivingSchool">Bromley Driving School</a></p>
                            <div class="card">
                                <div class="header">
                                    <h3>0 comments</h3>
                                    <p class="small"></p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="header">
                                    <h3>Leave a reply</h3>
                                    <p class="small">Your email address will not be published. Required fields are marked*</p>
                                </div>
                                <div class="body">
                                    <div class="comment-form">
                                        <form class="row clearfix">
                                            <div class="col-sm-6">
                                                <div class="form-group"><input class="form-control" type="text" placeholder="Your Name*" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group"><input class="form-control" type="text" placeholder="Email Address*" /></div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group"><textarea class="form-control no-resize" rows="4" placeholder="Please leave your comments about this post...*"></textarea></div><button class="btn btn-outline-dark" type="submit">SUBMIT</button>
                                            </div>
                                        </form>
                                    </div>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 text-start order-sm-2 order-md-1 my-2 p-2">
                <h3 class="fw-bold  mb-3">Can't wait to go solo behind the wheel?</h3>
                <p class="mt-3">Here at Bromley Driving School, we offer learner drivers in London the option to
                    have
                    intensive driving lessons. Intensive driving lessons throughout London
                    can benefit first-time drivers who are starting from scratch or learner drivers who are
                    preparing
                    for a driving test. The intensive crash driving courses that Bromley Driving School offer can be
                    the
                    right answer for all of your driving needs.The intensive driving courses that Bromley Driving
                    School
                    offer can, of course, be tailored to meet the needs of individuals, whether you are looking for
                    a
                    2
                    hour class on a daily basis or consecutive days of back to back driving lessons, we can offer a
                    crash driving course solution in London to suit you.If you are based in London and the
                    surrounding
                    areas and would like to discuss your options for intensive driving courses in contact Bromley
                    Driving School today, one of our customer care executives will be more than happy to answer any
                    questions you may have.</p>
                <h5>What is an Intensive Driving Course?</h5>
                <p>Intensive driving course in London may also be referred to as a 'crash driving course'. At
                    Bromley
                    Driving School, whether you call the course an intensive driving course or crash driving course,
                    you
                    can count on us to help you pass your test after all this is the ultimate aim of the driving
                    lessons.An intensive driving course is basically
                    driving lessons crammed into a short period of time enabling you to pass your test in a shorter
                    timeframe than general driving lessons. If you are based in London and in a hurry to pass your
                    driving test, an intensive driving course from Bromley Driving School could help you get on the
                    road
                    faster.When it comes to crash course driving lessons with Bromley Driving School, you will have
                    one-to-one tuition with one of our qualified driving instructors, the number of hours spent
                    learning
                    to drive will equate to the same as general driving lessons, the lessons will just be closer
                    together.If you would like to discuss the possibility of taking an intensive driving course with
                    Bromley Driving School and the surrounding areas of London, be sure to make us your first port
                    of
                    call.</p>
                <h5>How <span class="text-danger fw-bolder mb-0">L</span>ong Does an Intensive Driving Course Take?</h5>
                <p>There is no set time limit when it comes to intensive driving courses with Bromley Driving
                    School,
                    as our driving course in London are tailored to suit the needs of individuals. A learner driver
                    who
                    wants a crash course before their test will need fewer hours, than a driver with no
                    experience.If
                    you are looking for an intensive driving course in London , but not sure on how much training
                    you
                    will require, a member of our dedicated team will be able to offer you some advice, for all of
                    your
                    questions speak to Bromley Driving School today.</p>
                <h5>Why Choose Bromley Driving School for Intensive Driving Courses</h5>
                <p>Bromley Driving School provides excellent intensive driving course to learner drivers
                    throughout
                    London nd the surrounding areas, if you are looking for a local driving school to help you get
                    on
                    the road in a shorter period of time, then look no further. All of our driving instructors are
                    fully
                    qualified and ensure that the highest standard of teaching is given to learner drivers of all
                    abilities. Some of the reasons we believe you should use Bromley Driving School for an intensive
                    driving course in London are:Local driving schoolFully qualified and friendly instructors, Fully
                    insured, Excellent pass rate</p>
                <h5>Contact us for Intensive Driving Courses <span class="text-danger fw-bolder mb-0">L</span>ondon</h5>
                <p>As a local and professional driving school, Bromley Driving School should be your first port of
                    call. Whatever your driving ability is at the moment we have a team of qualified and experienced
                    driving instructors who can assist and help all learner drivers to pass their test. To book your
                    intensive driving course in London or to ask any questions, contact a member of our customer
                    care
                    team today.</p>
            </div>
            <div class="col-12 col-sm-12 col-md-6 order-sm-first order-md-2 my-2 p-2">
                <picture>
                    <source type="image/webp" srcset="img/webp/passplus.webp">
                    <source type="image/jpg" srcset="img/webp/passplus.jpg">
                    <img src="img/webp/passplus.jpg" alt="Pass plus p-plate" class="img-fluid d-flex align-items-center justify-content-center" loading="lazy">
                </picture>
            </div>

            <div class="col-md-6 order-sm-4">
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
    <section class="py-4 py-xl-5">
        <div class="container">
            <div class="overflow-hidden">
                <div class="row g-0">
                    <div class="row p-4 p-md-5"><img src="/img/logos/flat-driving-app.png" alt="Banner with details of Learner app" class="img-fluid" style="width:600px; height:auto;aspect-ratio:5.7;min-width:400px"></div>
                    <div class="col-md-6">
                        <div class="p-4 p-md-5">
                            <h3 class="fw-bold w-100 mb-3">Learning to drive: The Pupil and Parent App</h3>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/LGWvnk7jIfQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h5>Get the learner app:</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-auto"><a href="https://play.google.com/store/apps/details?id=com.totaldrive.com.totaldrive" target="_blank"><img class="p-2" src="/img/logos/googleplay.webp" width="200px" height="72px" alt="Get it on Google Play" loading="auto" /></a></div>
                        <div class="col-auto"><a href="https://itunes.apple.com/gb/app/total-drive/id1446269375#?platform=iphone" target="_blank"><img class="p-2" src="/img/logos/applestore.webp" width="200" height="72px" alt="Download on the App Store" loading="auto" /></a></div>
                    </div>
                </div>
            </div>
        </div>
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
                                <img src="img/webp/provisional.jpg" alt="Part of a UK provisional driving licence" class="img-fluid d-flex align-items-center justify-content-center" style="width:500px;height:auto;aspect-ratio:500/500">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-4 py-xl-5">
            <div class="container">
                <div class="overflow-hidden">
                    <div class="row g-0">
                        <div class="col-md-6">
                            <div class="p-4 p-md-5">
                                <h2 class="fw-bold  mb-3"><span class="fw-bolder text-danger mb-0">L</span>earn to drive in a manual</h2>
                                <p class="mb-4">We currently don't have instructors with Manual cars and can therefore only offer <a href="automatic.php">automatic</a> Lessons</p>
                                <p class="mb-4">If you learn to drive and pass your test in a manual car your manual licence entitles you to drive both manual and automatic cars. Which does not apply in reverse, if you pass in an automatic; you would need to take another test to allow you to drive a manual car. You will therefore have greater choice of cars to drive when buying a car or renting a car. Manual transmission cars also tend to be cheaper than automatics of the same make and model as the mechanisms are simpler and cheaper.</p>
                                <p class="mb-4">You therefore need to weigh up your options and decide if you wish to learn in a manual or automatic. </p>
                                <div class="my-3 mt-4"> <?php echo file_get_contents("img/svg/telephone-fill.svg"); ?>
                                    <p>Call Us on <a href="tel:447886366110" target="_blank">07886 366 110</a> - or - <a class="btn btn-outline-dark btn-lg link-light" role="button" href="booking.php">Book online</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 order-first order-md-last">
                            <picture>
                                <source type="image/webp" srcset="img/webp/manual_gear_stick.webp">
                                <source type="image/jpg" srcset="img/webp/manual_gear_stick.jpg">
                                <img src="img/webp/manual_gear_stick.jpg" alt="Manual gear stick" class="img-fluid d-flex align-items-center justify-content-center">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="info-box mt-4"> <i class="bi bi-envelope ms-2"></i>
            <h3>Email Us</h3>
            <p><a href="mailto:info@bromleydrivingschool.co.uk" target="_blank"><strong>info@bromleydrivingschool.co.uk</strong></a> </p>
        </div>
        <div class="col-md-6">
            <div class="info-box mt-4"> <i class="bi bi-telephone ms-2"></i>
                <h3>Call Us</h3>
                <p><a href="tel:447886366110" target="_blank">07886 366 110</a></p>
            </div>
        </div>
    </section>
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
    </div>
    <section id="pricing">
        <div class="container py-4 py-xl-5">
            <div class="row mb-5">
                <div class="col-md-12 mx-auto">
                    <h3>Very Competitive <span class="text-success fw-bolder mb-0">P</span>rices</h3>
                    <p class="mb-4">One of the best driving schools in London, Bromley Driving School is fully qualified with
                        the DVSA (Driving Vehicle Standards Agency) providing professional tuition in a patient and friendly
                        manner. If you are looking for quality driving instruction then look no further than Bromley Driving
                        School. Learner's are taught in a Lexus CH200 automatic car. All lessons are given on a one to one basis
                        using the latest techniques.</p>
                    <p class="mb-4">Bromley Driving School is the right choice for experienced drivers looking for a refresher
                        course, or for
                        brand new drivers wanting to pass first time.</p>
                    <p class="mb-4">We know the local area like the back of our hand. We know the routes the examiners like to
                        go on your
                        practical tests. We can get you ready for your test.</p>
                    <p class="mb-4">We do not charge any additional credit or debit card fees when you use our <span class="bi bi-shield-lock"></span> secure online payment gateway from <a href="https://stripe.com/gb" target="_blank" referrerpolicy="no-referrer">Stripe</a>.</p>
                </div>
            </div>
            <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
                <div class="col">
                    <div class="card border-danger border-2 h-100">
                        <div class="card-body d-flex flex-column justify-content-between p-4">
                            <div>
                                <h6 class="text-uppercase text-muted"><span class="text-success fw-bolder mb-0 display-6">P</span>re-test <span class="text-danger fw-bolder mb-0 display-6">L</span>essons</h6>
                                <p><strong>£38</strong> <span class="text-muted small">Per hour</span></p>
                                <p><strong>£185</strong><span class="text-muted small"> Buy 5 hours tuition and save £5</span></p>
                                <p><strong>£360</strong><span class="text-muted small"> Buy 10 hours tuition and save £20</span></p>
                                <hr />
                                <ul>
                                    <li>Highway Code</li>
                                    <li>Cockpit Drill</li>
                                    <li>Vehicle Safety Checks</li>
                                    <li>Controls and Instruments </li>
                                    <li>Moving Away and Stopping </li>
                                    <li>Safe Road Positioning</li>
                                    <li>Use of Mirrors</li>
                                    <li>Signalling</li>
                                    <li>Anticipation and Planning </li>
                                    <li>Use of Speed</li>
                                    <li>Other Traffic</li>
                                    <li>Junctions</li>
                                    <li>Roundabouts</li>
                                    <li>Pedestrian Crossings</li>
                                    <li>Dual Carriageways</li>
                                    <li>The Manoeuvres</li>
                                    <li>Emergency Stop</li>
                                    <li>Weather Conditions</li>
                                </ul>
                            </div>
                            <a href="beginner.php" aria-label="Read more about the driving test">[Read more...]</a> <a href="booking.php" class="btn btn-outline-dark d-block" type="button">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-danger border-2 h-100">
                        <div class="card-body d-flex flex-column justify-content-between p-4">
                            <div>
                                <h6 class="text-uppercase text-muted"><span class="text-success fw-bolder mb-0 display-6">P</span>ass <span class="text-success fw-bolder mb-0 display-6">P</span>lus course</h6>
                                <p><strong>£450</strong> </p>
                                <p><span class="text-muted small">For 6 hours intensive tuition</span></p>
                                <p><span class="text-muted small">2 &times; 3 hour blocks</span></p>
                                <hr />
                                <p></p>
                                <ul>
                                    <li>Motorway driving</li>
                                    <li>Safe driving on rural roads</li>
                                    <li>Dual carriageway driving</li>
                                    <li>Coping with adverse weather conditions</li>
                                    <li>Night time driving</li>
                                    <li>Driving in the inner city</li>
                                </ul>
                                <p>With a Pass Plus qualification, you can get a discount from many insurance companies</p>
                                <a href="passplus.php" aria-label="Read more about Pass Plus course">[Read more...]</a>
                            </div>
                            <a href="booking.php" class="btn btn-outline-dark d-block" type="button">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-danger border-2 h-100">
                        <div class="card-body d-flex flex-column justify-content-between p-4">
                            <div>
                                <h6 class="text-uppercase text-muted">Refresher <span class="text-danger fw-bolder mb-0 display-6">L</span>essons</h6>
                                <p><strong>£50</strong> <span class="text-muted small">Per hour</span></p>
                                <p><strong>£245</strong><span class="text-muted small"> Buy 5 hours tuition and save £5</span></p>
                                <p><strong>£480</strong><span class="text-muted small"> Buy 10 hours tuition and save £20</span></p>
                                <hr />
                                <p>Who are refresher lessons for? Young or old, experienced or novice, nervous or over-confident... The answer is anyone and everyone who has driven and passed their test.</p>
                                <p>It's never too early or late to pick up new skills and learn new things in life or behind the wheel of a car. Our instructors are some of the most experienced driving profesionals with lots of knowledge to share.</p>
                                <p>What you get out of these lessons is up to you as each course will be 100% focussed on you and your needs</p>
                                <p>Give us a call now on <a href="tel:447886366110" target="_blank">07886 366 110</a> to have a chat about what you want and need. The lessons can help with lost confidence after an accident or a long time out from behind the wheel. They can cover complex driving scenarios not covered in your learner lessons. The make up of the lessons can roughly follow the elements you would learn in the Pass Plus lessons.</p>
                                <a href="refresher.html" aria-label="Read more about refresher driving courses">[Read more...]</a>
                            </div>
                            <a href="booking.html" class="btn btn-outline-dark d-block" type="button">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 d-inline-block">
                    <h3><strong>Areas Covered</strong></h3>
                </div>
                <div class="col-md-8 d-inline-block">
                    <div>
                        <ul>
                            <li>Bromley Postcodes: BR1, BR2, BR3, BR4, BR5, BR6, BR7, BR8</li>
                            <li>Beckenham, Bromley, Chiselhurst, Swanley, Keston, West Wickham, Orpington</li>
                            <li>Croydon Postcodes: CR0, CR2, CR4, CR7, CR8</li>
                            <li>Mitcham, Thornton Heath, Croydon, South Croydon, Purley, Kenley</li>
                            <li>SE/SW London Postcodes: SW16, SE27, SE19, SE26, SE20, SE25</li>
                            <li>Streatham, West Norwood, Crystal Palace, Sydenham, Penge, South Norwood</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="privacy">
    <div class="container py-0">
        <div class="col-md-8">
            <h2>Privacy Policy</h2>
            <p>At Bromley Driving School, accessible from <a href="https://bromleydrivingschool.co.uk">Bromley Driving School website</a> (https://bromleydrivingschool.co.uk) one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by Bromley Driving School and how we use it.</p>
            <p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</p>
            <p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in Bromley Driving School. This policy is not applicable to any information collected offline or via channels other than this website. Our Privacy Policy was created with the help of the <a href="https://www.cookiepolicygenerator.com/privacy-policy-generator/">Privacy Policy Generator</a>.</p>
            <h3>Consent</h3>
            <p>By using our website, you hereby consent to our Privacy Policy and agree to its terms.</p>
            <h3>Information we collect</h3>
            <p>The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.</p>
            <p>If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.</p>
            <p>When you register for an Account, we may ask for your contact information, including items such as name, company name, address, email address, and telephone number.</p>
            <h3>How we use your information</h3>
            <p>We use the information we collect in various ways, including to:</p>
            <ul>
                <li>Provide, operate, and maintain our website</li>
                <li>Improve, personalize, and expand our website</li>
                <li>Understand and analyze how you use our website</li>
                <li>Develop new products, services, features, and functionality</li>
                <li>Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the website, and for marketing and promotional purposes</li>
                <li>Send you emails</li>
                <li>Find and prevent fraud</li>
            </ul>
            <h3>Log Files</h3>
            <p>Bromley Driving School follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services' analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users' movement on the website, and gathering demographic information.</p>
            <h3>Cookies and Web Beacons</h3>
            <p>Like any other website, Bromley Driving School uses 'cookies'. These cookies are used to store information including visitors' preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users' experience by customizing our web page content based on visitors' browser type and/or other information.</p>
            <p>For more general information on cookies, please read <a href="https://www.cookiepolicygenerator.com/sample-cookies-policy/">the Cookies Policy article</a>.</p>
            <h3>Advertising Partners Privacy Policies</h3>
            <p>You may consult this list to find the Privacy Policy for each of the advertising partners of Bromley Driving School.</p>
            <p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on Bromley Driving School, which are sent directly to users' browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>
            <p>Note that Bromley Driving School has no access to or control over these cookies that are used by third-party advertisers.</p>
            <h3>Third Party Privacy Policies</h3>
            <p>Bromley Driving School's Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options. </p>
            <p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers' respective websites.</p>
            <h3>CCPA Privacy Rights (Do Not Sell My Personal Information)</h3>
            <p>Under the CCPA, among other rights, California consumers have the right to:</p>
            <p>Request that a business that collects a consumer's personal data disclose the categories and specific pieces of personal data that a business has collected about consumers.</p>
            <p>Request that a business delete any personal data about the consumer that a business has collected.</p>
            <p>Request that a business that sells a consumer's personal data, not sell the consumer's personal data.</p>
            <p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>
            <h3>GDPR Data Protection Rights</h3>
            <p>We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following:</p>
            <p>The right to access - You have the right to request copies of your personal data. We may charge you a small fee for this service.</p>
            <p>The right to rectification - You have the right to request that we correct any information you believe is inaccurate. You also have the right to request that we complete the information you believe is incomplete.</p>
            <p>The right to erasure - You have the right to request that we erase your personal data, under certain conditions.</p>
            <p>The right to restrict processing - You have the right to request that we restrict the processing of your personal data, under certain conditions.</p>
            <p>The right to object to processing - You have the right to object to our processing of your personal data, under certain conditions.</p>
            <p>The right to data portability - You have the right to request that we transfer the data that we have collected to another organization, or directly to you, under certain conditions.</p>
            <p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>
            <h3>Children's Information</h3>
            <p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>
            <p>Bromley Driving School does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>
            <ul class="list-unstyled">
                <li class="my-2"><?php echo file_get_contents("img/svg/envelope.svg"); ?> Email: <a href="mailto:info@bromleydrivingschool.co.uk">info@bromleydrivingschool.co.uk</a> </li>
                <li class="my-2"><?php echo file_get_contents("img/svg/pencil-square.svg"); ?> By using our <a href="contact.php">contact form</a> to send us a message about our privacy policy</li>
                <li class="my-2"><?php echo file_get_contents("img/svg/telephone.svg"); ?> Phone: <a href="tel:447886366110">07886 366 110</a></li>
            </ul>
        </div>
    </div>
</section>
<section class="about">
    <div class="container py-2">
        <div class="row">
            <p class="mt-3">No one will accept that they are the bad driver but sometimes a gentle reminder or
                brush up of the basic skills can do wonders to double your confidence. Keeping this in mind, it
                surely makes a great sense to join the refresher driving course. Doing so will definitely be a
                sensible way to get back into good driving habits and be a safe driver on the road. As the
                traffic
                is turning busier and busier day by day, the task of driving safely on the road is also getting
                more
                and more complex. It calls for a greater level of skills and concentration. Even the people, who
                used to master the vehicle on the road once, can find themselves slipping into the lazy driving
                habits over time and this slipshod habit may soon turn into dangerous driving habits. So, going
                for
                the refresher driving lessons can be an added advantage for such people.</p>
            <h5>Who Should Go For Refresher Driving Lessons?</h5>
            <p>For nervous drivers, refresher driving lessons can build up the confidence by showing how to
                deal
                with various driving situations safely and confidently and this all is conducted in a calm
                controlled atmosphere. Drivers who lack in confidence in certain situations such as driving at
                night, driving at poor weather conditions, city centre driving etc. Those who have not driven in
                a
                long while or may have not driven at all. Those who may have developed bad driving habits over
                time.
                No matter in which category of people you come or what your reasons are for learning the
                refresher
                driving lessons. We at Bromley Driving School are here to help you out with all your needs of
                mastering the motor on the road anywhere, anytime.</p>
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
                <a href="#">07866 366 110</a>
            </div>
        </div>
    </div>
</section>

<?php
require 'footer.php';

    ?>