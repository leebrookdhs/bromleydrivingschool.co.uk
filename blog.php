<?php
define('ISITSAFETORUN', TRUE); // flag to be tested by all required pages before they run. See explanations in block text.
$mytitle = 'Blog'; //Text to be used by head.php as title
$seodescription = 'The blog of Bromley Driving School that allows  you to take advantage of the skills, knowledge and experience of professional drivers';
$keyewords = '';
require 'head.php';
require 'headerNav.php';
?>

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <ol>
            <li><a href="index.php">Home</a></li>
            <li>Blog</li>
        </ol>
        <h2 class="mt-2">Bromley Driving School Blog Posts</h2>
    </div>
</section>
<!-- End Breadcrumbs -->
<!--Main layout-->
<main>
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
</main>
<!--Main layout-->

<?php
require 'footer.php';
?>