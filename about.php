<?php
// This file holds the page header and expects to find teh title in $mytitle
if (!defined('ISITSAFETORUN')) {
    // This provides protection against file being called directly - if it is, ISITSAFETORUN will not be defined
    die('This file does no useful work alone'); // and so this warning message will be issued
}
?>
<main id="main">
    <section id="about" class="about border">
        <div class="container">
            <h2 class="text-center display-5">About us</h2>
        </div>
        <div class="container py-2">
            <div class="row d-flex justify-content-center">
                <div class="col-12 shadow my-2 col-md-6">
                    <h3 class="d-flex display-6">Driving School for Bromley, Kent &amp; South London</h5>
                </div>
                <div class="col-12 shadow my-2 col-md-6 order-md-3 order-sm-4">
                    <p class="card-text">Bromley Driving School provides the best driving instructors to help you learn how to
                        drive. Our teaching staff are fully qualified, local experts, friendly and patient</p>
                </div>
                <div class="col-lg-3 shadow my-2 col-md-6 col-sm-6">
                    <picture>
                        <source type="image/webp" srcset="img/webp/bromley-_driving_school_lesson_lexus.webp">
                        <source type="image/jpg" srcset="img/webp/bromley-_driving_school_lesson_lexus.jpg"><img data-lazy-src="img/webp/bromley-_driving_school_lesson_lexus.jpg" alt="Student and instructor sat in a red car" class="img-fluid lazy" style="width:300px; height:auto; aspect-ratio:600/325;">
                    </picture>
                </div>
                <div class="col-lg-3 shadow my-2 col-md-6 col-sm-6">
                    <picture>
                        <source type="image/webp" srcset="img/webp/bsm-Lexus.webp">
                        <source type="image/jpg" srcset="img/webp/bsm-Lexus.jpg"><img data-lazy-src="img/webp/bsm-Lexus.jpg" alt="White Lexus car" class="img-fluid lazy" style="width:300px; height:auto; aspect-ratio:600/325;">
                    </picture>
                </div>
                <div class="col-lg-3 shadow my-2 col-md-6 col-sm-6">
                    <picture>
                        <source type="image/webp" srcset="img/webp/bsm-Lexus-dash.webp">
                        <source type="image/jpg" srcset="img/webp/bsm-Lexus-dash.jpg"><img data-lazy-src="img/webp/bsm-Lexus-dash.jpg" alt="Lexus dashboard" class="img-fluid lazy" style="width:300px; height:auto; aspect-ratio:600/325;">
                    </picture>
                </div>
                <div class="col-lg-3 shadow my-2 col-md-6 col-sm-6 col-xs-6">
                    <picture>
                        <source type="image/webp" srcset="img/webp/bromley_driving_school_learner_instructor.webp">
                        <source type="image/jpg" srcset="img/webp/bromley_driving_school_learner_instructor.jpg">
                        <img data-lazy-src="img/webp/bromley_driving_school_learner_instructor.jpg" alt="driver and instructor in a car" style="width:300px; height:auto; aspect-ratio:300/162.48;" class="img-fluid lazy">
                    </picture>
                </div>
            </div>
        </div>
    </section>
    <section id="lessontype">
        <div class="container py-4 py-xl-6">
            <div class="row ms-2 me-2">
                <h2 class="col-12 display-5 text-center">Driving Courses</h2>
                <p class="col-12 ms-3 text-center">Whether you are a novice with no experience, an experienced driver who
                    wants some refresher lessons or you want an intensive course over a short time period; we can cater to
                    your needs.</p>
            </div>
            <div class="row">
                <div class="col-12 col-xl-4 col-lg-4 col-md-6">
                    <div class="card">
                        <picture>
                            <source type="image/webp" srcset="img/webp/beginner-driving-lesson.webp">
                            <source type="image/jpg" srcset="img/webp/beginner-driving-lesson.jpg"><img src="img/webp/beginner-driving-lesson.jpg" style="width:400px;height:auto;aspect-ratio:1;" alt="diagram of a UK roundabout" loading="lazy" class="img-fluid">
                        </picture>
                        <div class="card-body p-4">
                            <h3 class="card-title">Beginner Driving <span class="text-danger fw-bolder mb-0">L</span>essons</h3>
                            <div><a class="btn btn-outline-dark" href="beginner.php" role="button" aria-label="Read more about beginner driving lessons">Learn More...</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4 col-lg-4 col-md-6">
                    <div class="card">
                        <picture>
                            <source type="image/webp" srcset="img/webp/intensive-driving-lesson.webp">
                            <source type="image/jpg" srcset="img/webp/intensive-driving-lesson.jpg"><img src="img/webp/intensive-driving-lesson.jpg" style="width:400px;height:auto;aspect-ratio:1;" alt="diagram of a UK roundabout" loading="lazy" class="img-fluid">
                        </picture>
                        <div class="card-body p-4">
                            <h3 class="card-title">Intensive Driving Courses</h3>
                            <div><a class="btn btn-outline-dark" href="passplus.php" role="button" aria-label="Read more about intensive driving lessons">Learn More...</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4 col-lg-4 col-md-6">
                    <div class="card">
                        <picture>
                            <source type="image/webp" srcset="img/webp/refresher-driving-lesson.webp">
                            <source type="image/jpg" srcset="img/webp/refresher-driving-lesson.jpg"><img src="img/webp/refresher-driving-lesson.jpg" style="width:400px;height:auto;aspect-ratio:1;" alt="diagram of a UK roundabout" loading="lazy" class="img-fluid">
                        </picture>
                        <div class="card-body p-4">
                            <h3 class="card-title">Refresher driving courses</h3>
                            <div><a class="btn btn-outline-dark" href="refresher.php" role="button" aria-label="Read more about refresher driving lessons">Learn More...</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>