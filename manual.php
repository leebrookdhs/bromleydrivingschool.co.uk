<?php
define('ISITSAFETORUN', TRUE); // flag to be tested by all required pages before they run. See explanations in block text.
$mytitle = 'Manual Driving Lessons'; //Text to be used by head.php as title
$seodescription = 'Bromley Driving School deliver driving lessons in Bromley, Kent and SE London for learner drivers that want or need to learn to drive in a manual car';
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
        <li>Manual driving lessons</li>
      </ol>
      <h2 class="mt-2">Manual Driving <span class="fw-bolder text-danger mb-0">L</span>essons</h2>
    </div>
  </section>
  <!-- End Breadcrumbs -->
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
              <img src="img/webp/manual_gear_stick.jpg" alt="Manual gear stick" class="img-fluid d-flex align-items-center justify-content-center"> </picture>
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