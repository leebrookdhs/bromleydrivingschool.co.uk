<?php
define('ISITSAFETORUN', TRUE); // flag to be tested by all required pages before they run. See explanations in block text.
$mytitle = 'Join the franchise'; //Text to be used by head.php as title
$seodescription = 'Bromley Driving School are interested in speaking with qualified driving instructors who want to join the franchise';
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
        <li>Driving Instructor Franchise</li>
      </ol>
    </div>
  </section>
  <!-- End Breadcrumbs -->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-auto">
          <h2 class="fw-bold mb-3">Join our
            <picture>
              <source type="image/webp" srcset="img/franchise_banner.webp">
              <source type="image/jpg" srcset="img/franchise_banner.jpg">
              <img src="img/franchise_banner.jpg" alt="franchise Banner" style="width: 200px; " loading="lazy"> </picture>
          </h2>
          <p class="mb-4">If you are a qualified and experienced ADI looking to join our
            franchise, we want to hear from you. Send your details using the form below or call
            us on <a href="tel:447886366110" target="_blank">07886 366 110</a>. We will give you a call to discuss
            opportunities and options.</p>
        </div>
        <div class="flex-grow w-100 mt-2">
          <form data-bss-recipient="9e28f5eec3ad9721215e108748530387" data-bss-subject="Franchise enquiry">
            <fieldset>
              <legend>Learn more about our franchise</legend>
              <div class="container">
                <div class="row d-flex my-2" style="width: 100%;height: auto;margin-top: 5px;margin-bottom: 4px;padding: 5px;">
                  <div class="col-md-4">
                    <label class="form-label visually-hidden invisible" for="name">Full name</label>
                    <div class="input-group input-group-sm"><span class="input-group-text">
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person bi bi-person">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                      </svg>
                      </span>
                      <input class="form-control" type="text" placeholder="Full name" name="name" autocomplete="on" required="" minlength="3" maxlength="25" style="font-size: 1rem;font-family: raleway, open-sans;">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label class="form-label visually-hidden invisible" for="email">email address</label>
                    <div class="input-group input-group-sm"><span class="input-group-text">
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope">
                        <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"></path>
                      </svg>
                      </span>
                      <input class="form-control" type="text" name="email" placeholder="example@domain.com" autofocus="" autocomplete="on" inputmode="email" required="" style="font-size: 1rem;font-family: raleway, open-sans;">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label class="form-label visually-hidden invisible" for="phone">Telephone number</label>
                    <div class="input-group input-group-sm"><span class="input-group-text">
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-telephone">
                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"></path>
                      </svg>
                      </span>
                      <input class="form-control" type="tel" name="phone" placeholder="01234 567 890" autocomplete="on" required="" inputmode="tel" style="font-size: 1rem;font-family: raleway, open-sans;">
                    </div>
                  </div>
                  <div class="col-12 text-muted">
                    <p class="text-muted mt-2" style="font-size: .8rem;">Your contact details will not be shared with any other organisations</p>
                  </div>
                </div>
                <div class="row d-flex my-2" style="width: 100%;height: auto;margin-top: 5px;margin-bottom: 4px;padding: 5px;">
                  <div class="col" style="width: 100%;">
                    <div class="form-check" style="font-size: 0.8rem;">
                      <input class="form-check-input" type="checkbox" id="formCheck-1">
                      <label class="form-check-label text-muted" for="formCheck-1" style="font-size: 0.8rem;">Please, review and accept our T&amp;Cs and privacy policy</label>
                    </div>
                  </div>
                  <div class="col">
                    <button class="btn btn-success btn-sent" type="submit">Send details&nbsp;
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-send">
                      <path fill-rule="evenodd" d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"></path>
                    </svg>
                    </button>
                  </div>
                </div>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </section>
</main>

<!--End #main --> 
<?php
require 'footer.php';
?>