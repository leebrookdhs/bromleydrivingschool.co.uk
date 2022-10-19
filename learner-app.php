<?php
define('ISITSAFETORUN', TRUE); // flag to be tested by all required pages before they run. See explanations in block text.
$mytitle = 'Learner App'; //Text to be used by head.php as title
$seodescription = 'Keep track of your lessons, bookings, payments, availability and much more with the Learner App from Bromley Driving School';
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
                <li>Learner App</li>
            </ol>
            <h2 class="mt-2">Learner App for everything</h2>
        </div>
    </section>
    <!-- End Breadcrumbs -->
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
        </div>
        </div>
    </section>
</main>
<!-- End #main -->
<?php
require 'footer.php';
?>