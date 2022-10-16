<?php
// This file holds the page header and expects to find teh title in $mytitle
if (!defined('ISITSAFETORUN')) {
  // This provides protection against file being called directly - if it is, ISITSAFETORUN will not be defined
  die('This file does no useful work alone'); // and so this warning message will be issued
}
?>
<!-- ======= Footer ======= -->
<div class="container my-5">
  <footer>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-3 col-md-6 col-sm-6 text-center text-lg-start d-flex flex-column item border">
          <p class="mt-4"><span style="color: rgb(68, 68, 68);"><strong>Bromley Driving School</strong> is the right
              choice for experienced drivers looking for a refresher course, or the brand new driver wanting to pass
              first time</span><br />
            <br />
          </p>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 text-center text-lg-start d-flex flex-column item border">
          <h5 class="mb-2 fw-bold"><span class="text-success fw-bolder display-6"> P</span>olicies</h5>
          <ul class="list-unstyled">
            <li class="my-3"><a class="link-secondary" href="terms.php">Terms &amp; Conditions</a></li>
            <li class="my-3"><a class="link-secondary" href="privacy.php">Privacy policy</a></li>
            <li class="my-3"><a class="link-secondary" href="cookie.php">Cookies policy</a></li>
          </ul>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 text-center text-lg-start d-flex flex-column align-items-center order-last align-items-lg-start order-lg-last item social border">
          <div class="fw-bold d-flex justify-content-center align-items-center mb-2">
            <img src="img/logos/stripe-badge-transparent.png" alt="Stripe Trust badge. Credit card payment logos" class="img-fluid mx-auto" loading="lazy" style="width:600px;height:200px;">
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-between align-items-center pt-3">
        <p class="small">&copy; Copyright <?php echo date('Y'); ?> <a class="text-dark" href="https://bromleydrivingschool.co.uk"> Bromley Driving School</a> all rights reserved
        </p>
        <p class="small"><a target="_blank" rel="noopener" href="https://dragons-digital.co.uk">Powered by Dragons
            Digital Web Design</a></p>
      </div>
    </div>
  </footer>
</div>
<div id="preloader"></div><a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="text-white"><?php echo file_get_contents("img/svg/arrow-up-short.svg"); ?></i></a>
<!-- <script async src="assets/js/aos.js"></script> -->
<script async src="assets/js/bootstrap.bundle.min.js"></script>
<!-- <script async src="assets/js/swiper-bundle.min.js"></script> -->
<script async src="assets/js/main.js"></script>
<script defer src="assets/js/cookieconsent.js"></script>
<script defer src="assets/js/cookieconsent-init.js"></script>
</body>

</html>