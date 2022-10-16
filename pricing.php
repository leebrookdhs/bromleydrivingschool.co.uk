<?php
define('ISITSAFETORUN', TRUE); // flag to be tested by all required pages before they run. See explanations in block text.
$mytitle = 'Lesson pricing<'; //Text to be used by head.php as title
$seodescription = 'Competitive pricing structure for learner drivers, newly qualified drivers and drivers wishing to refresh their skills';
$keyewords = '';
require 'head.php';
require 'headerNav.php';
?>
<main id="main">
    <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <ol>
            <li><a href="index.php">Home</a></li>
            <li>Lesson pricing</li>
        </ol>
        <h2 class="mb-0"><span class="text-danger fw-bolder display-6 mb-0">L</span>esson <span class="text-success fw-bolder display-6 mb-0">P</span>ricing</h2>
    </div>
    </section>
    <!-- End Breadcrumbs -->
    <!-- Pricing Section -->
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
    <!-- End Pricing Section -->
    <?php
    require 'cta.php';
    ?>
</main>
<!-- End #main -->
<?php
require 'footer.php';
?>