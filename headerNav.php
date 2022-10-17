<?php
// This file holds the page header and expects to find teh title in $mytitle
if (!defined('ISITSAFETORUN')) {
    // This provides protection against file being called directly - if it is, ISITSAFETORUN will not be defined
    die('This file does no useful work alone'); // and so this warning message will be issued
}
?>
<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
<div class="alert alert-success alert-dismissible fade show announcement-top-bar text-center"
    style="font-family: raleway, sans-serif;" role="alert">
    <p class="d-none d-md-block mb-2"><strong>Hours of Business: </strong>Monday - Friday : 8:00am - 8:00pm |
      Saturday-Sunday : Closed</p>
    <p class="d-none d-md-block fw-bolder text-uppercase">Call now to book <a href="tel:447886366110" target="_blank"
        class="btn btn-success">07886 366 110</a> or book <a href="booking.php" target="_self"
        class="btn btn-success fw-bolder">online</a></p>
    <p class="d-block d-md-none mb-2"><strong>Hours of Business: </strong>Monday - Friday : 8:00am - 8:00pm |
      Saturday-Sunday : Closed</p>
    <p class="d-block d-md-none fw-bolder text-uppercase">Call now to book <a href="tel:447886366110"
        target="_blank">07886 366 110</a> or book <a href="booking.php" target="_self">online</a></p>
  </div>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-start"> <a href="index.php" class="logo"><?php echo file_get_contents("img/logos/bromley-driving-school-logo.svg"); ?>
        <h1 class="d-none">Bromley Driving School - Driving Excellence Forward</h1>
      </a>

      <nav id="navbar" class="navbar navbar-nav">
        <ul>
          <li><a class="nav-link scrollto <?= ($activePage == 'index') ? 'active' : ''; ?>" href="index.php">Home<span class="sr-only">(current)</span></a></li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Learn to drive</a>
            <ul class="dropdown-menu">
              <li>
                <h6 class="dropdown-header">Track progress</h6>
              </li>
              <li><a class="dropdown-item <?= ($activePage == 'learner-app') ? 'active fw-bold' : ''; ?>" href="learner-app.php">Learner app</a></li>
              <li>
                <h6 class="dropdown-header">Lessons</h6>
              </li>
              <li><a class="dropdown-item <?= ($activePage == 'beginner') ? 'active fw-bold' : ''; ?>" href="beginner.php">Beginners lessons</a></li>
              <li><a class="dropdown-item<?= ($activePage == 'passplus') ? 'active fw-bold' : ''; ?>"  href="passplus.php">Pass-plus course</a></li>
              <li><a class="dropdown-item <?= ($activePage == 'refresher') ? 'active fw-bold' : ''; ?>"  href="refresher.php">Refresher courses</a></li>
              <li><a class="dropdown-item <?= ($activePage == 'intensive') ? 'active fw-bold' : ''; ?>"  href="intensive.php">Intensive courses</a></li>
              <li>
                <h6 class="dropdown-header">Gearbox type</h6>
              </li>
              <li><a class="dropdown-item <?= ($activePage == 'automatic') ? 'active fw-bold' : ''; ?>"  href="automatic.php">Automatic lessons</a></li>
              <li><a class="dropdown-item <?= ($activePage == 'manual') ? 'active fw-bold' : ''; ?>"  href="manual.php">Manual lessons</a></li>
              <li>
                <h6 class="dropdown-header">Useful info</h6>
              </li>
              <li><a class="dropdown-item <?= ($activePage == 'faqs') ? 'active fw-bold' : ''; ?>"  href="faqs.php">FAQs</a></li>
              <li><a class="dropdown-item <?= ($activePage == 'licence') ? 'active fw-bold' : ''; ?>"  href="licence.php">Get your licence</a></li>
              <li><a class="dropdown-item <?= ($activePage == 'feedback') ? 'active fw-bold' : ''; ?>"  href="feedback.php">Student feedback</a></li>
              <li><a class="dropdown-item <?= ($activePage == 'pricing') ? 'active fw-bold' : ''; ?>"  href="pricing.php">Lesson prices</a> </li>
            </ul>
          </li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contact</a>
            <ul class="dropdown-menu">
              <li>
                <h6 class="dropdown-header">New students</h6>
              </li>
              <li><a class="dropdown-item <?= ($activePage == 'new-student') ? 'active fw-bold' : ''; ?>"  href="new-student.php">Lesson enquiries</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
                <h6 class="dropdown-header">Existing students</h6>
              </li>
              <li><a class="dropdown-item <?= ($activePage == 'booking') ? 'active fw-bold' : ''; ?>"  href="booking.php">Book lessons</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
                <h6 class="dropdown-header">General enquiries</h6>
              </li>
              <li><a class="dropdown-item <?= ($activePage == 'contact') ? 'active fw-bold' : ''; ?>"  href="contact.php">General enquiries</a></li>
              <li><a class="dropdown-item <?= ($activePage == 'franchise') ? 'active fw-bold' : ''; ?>"  href="franchise.php">Franchise enquiries</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle <?= ($activePage == 'blog') ? 'active' : ''; ?>" href="blog.php" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item <?= ($activePage == 'harder-learn-drive-thirties') ? 'active fw-bold' : ''; ?>"  href="harder-learn-drive-thirties.php">Learning to drive in
                  30s</a></li>
              <li><a class="dropdown-item <?= ($activePage == 'thinking-learning-drive') ? 'active fw-bold' : ''; ?>"  href="thinking-learning-drive.php">Thinking of learning to
                  drive?</a></li>
              <li><a class="dropdown-item <?= ($activePage == 'beginner') ? 'active fw-bold' : ''; ?>"  href="top-hazards-new-drivers.php">Top hazards for new drivers</a>
              </li>
            </ul>
          </li>
        </ul>
        <i class="mobile-nav-toggle">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-list"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
          </svg>
        </i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->


