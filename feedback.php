<?php
define('ISITSAFETORUN', TRUE); // flag to be tested by all required pages before they run. See explanations in block text.
$mytitle = 'Student Feedback'; //Text to be used by head.php as title
$seodescription = 'The testimonials and student feedback from people who have learnt to drive or wanted to improve their driving skills with Bromley Driving School';
$keyewords = '';
require 'head.php';
?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sedgwick+Ave+Display&display=swap" rel="stylesheet">
<?php
require 'headerNav.php';
?>
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="index.php">Home</a></li>
        <li>Student feedback</li>
      </ol>
      <h2 class="mt-2">Feedback from our students</h2>
    </div>
  </section>
  <!-- End Breadcrumbs -->
  <!--  ======= Testimonials Section ======= -->
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
</main>
<!-- End #main -->
<?php
require 'footer.php';
?>