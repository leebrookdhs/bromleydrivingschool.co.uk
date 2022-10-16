<?php
define('ISITSAFETORUN', TRUE); // flag to be tested by all required pages before they run. See explanations in block text.
$mytitle = 'Frequently Asked Questions'; //Text to be used by head.php as title
$seodescription = 'FAQs or Frequently Asked Questions relating to Bromley Driving School, insights, information and safety';
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
                <li>FAQs</li>
            </ol>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Why Us Section ======= -->
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
    </section>
    <!-- End Frequently Asked Questions Section -->
    <?php
    require 'cta.php';
    ?>
</main>
<!-- End #main -->

<?php
require 'footer.php';
?>