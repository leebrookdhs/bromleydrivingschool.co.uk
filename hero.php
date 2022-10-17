<?php
// This file holds the page header and expects to find teh title in $mytitle
if (!defined('ISITSAFETORUN')) {
    // This provides protection against file being called directly - if it is, ISITSAFETORUN will not be defined
    die('This file does no useful work alone'); // and so this warning message will be issued
}
?>
  <section id="hero" class="mx-auto">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active" style="background-image:url(img/webp/bromley_driving_school_ihero1.webp)">
          <div class="carousel-container">
            <div class="container-fluid">
              <h2 class="d-flex animate__animated animate__fadeInDown">Drive with Confidence</h2>
              <p class="d-flex w-auto">We offer the finest driving tuition money can buy</p><a href="#lessontype"
                class="d-flex btn btn-outline-dark animate__animated animate__bounceIn"
                aria-label="Read more about the driving lesson types" style="width:160px;float: left;">Read More...</a>
            </div>
          </div>
        </div>
        <div class="carousel-item bg-image" data-background-image-url="img/webp/bromleydrivingschool_hero3.webp" >
          <div class="carousel-container">
            <div class="container-fluid">
              <h2 class="d-flex animate__animated animate__fadeInDown">Mobility Automatic Lessons</h2>
              <p class="d-flex w-auto">Learn to drive in an automatic car</p><a href="automatic.php"
                class="d-flex btn btn-outline-dark animate__animated animate__bounceIn"
                aria-label="Read more about learning to drive in an automatic" style="width:160px;float: left;">Read
                More...</a>
            </div>
          </div>
        </div>
        <div id="passplus" class="carousel-item bg-image"
        data-background-image-url="img/webp/bromleydrivingschool_hero2.webp">
          <div class="carousel-container">
            <div class="container-fluid">
              <h2 class="d-flex animate__animated animate__fadeInDown">PassPlus Driving Lesson</h2>
              <p class="d-flex w-auto">Don't just learn to pass your test. Learn to drive after you've passed</p><a
                href="passplus.php" class=" d-flex btn btn-outline-dark animate__animated animate__bounceIn"
                aria-label="Read more about the Pass Plus driving course" style="width:160px;float: left;">Read
                More...</a>
            </div>
          </div>
        </div>
      </div><a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev"><svg
          xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
          class="bi bi-chevron-left carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"
          viewBox="0 0 16 16">
          <path fill-rule="evenodd"
            d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
        </svg></a><a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next"><svg
          xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
          class="bi bi-chevron-right carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"
          viewBox="0 0 16 16">
          <path fill-rule="evenodd"
            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
        </svg></a>
    </div>
  </section>