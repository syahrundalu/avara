<!DOCTYPE html>
<html lang="en">

  <head>

   <!-- Favicons -->
   <link href="assets/images/ico.png" rel="icon">
   <link href="assets/images/ico.png" rel="apple-touch-icon">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>PT Avara Wirya Arganta</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/flaticon/font/flaticon.css">

  </head>

  <style>
    @media (max-width: 767px) {
   
    .page-heading {
    padding-top : 200px;
  }
  }
  </style>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <?php include('header.php'); ?>
<!-- ***** Header Area End ***** -->

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="breadcrumb"><a href="index.php">Home</a>  /  Contact Us</span>
          <h3>Hubungi Kami</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-page section">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="section-heading">
            <h6>| Hubungi Kami</h6>
            <h2>Apa yang bisa kami bantu?</h2>
          </div>
          <p>Kami senang mendengar dari Anda! Jika Anda memiliki pertanyaan, komentar, atau masukan, jangan ragu untuk menghubungi kami. Tim kami siap membantu Anda dengan segala kebutuhan Anda. Anda dapat menghubungi kami melalui formulir kontak di bawah ini, atau menggunakan informasi kontak yang tersedia. Terima kasih telah mengunjungi situs kami, dan kami berharap dapat segera berkomunikasi dengan Anda.</p>
          <div class="row">
            <div class="col-lg-5">
              <div class="item phone">
                <img src="assets/images/phone-icon.png" alt="" style="max-width: 40px;">
                <h6>+6221-38711104<br><span>Phone Number</span></h6>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="item email">
                <img src="assets/images/email-icon.png" alt="" style="max-width: 48px;">
                <h6>info@kinaryaadikaaskari.com<br><span>Business Email</span></h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <form id="contact-form" action="assets/forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-lg-12">
                <fieldset>
                  <label for="name">Full Name</label>
                  <input type="name" name="name" id="name" placeholder="Your Name..." autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="email">Email Address</label>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="subject">Subject</label>
                  <input type="subject" name="subject" id="subject" placeholder="Subject..." autocomplete="on" >
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="message">Message</label>
                  <textarea name="message" id="message" placeholder="Your Message"></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="orange-button">Send Message</button>
                </fieldset>
              </div>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="sent-message">Your message has been sent. Thank you!</div>            
              <div class="error-message">Sorry</div>
            </div>
          </form>
        </div>
        <div class="col-lg-12">
          <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15863.689347810656!2d106.9754074!3d-6.2739423!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698d002ad5751b%3A0xc56500df6893d366!2sPT%20Avara%20Wirya%20Arganta!5e0!3m2!1sen!2sid!4v1721141766103!5m2!1sen!2sid" width="100%" height="500px" frameborder="0" style="border:0; border-radius: 10px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>
  <?php include('whatsapp-float.php'); ?>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>
    <!--Validate-->
    <script src="assets/php-email-form/validate.js"></script>

  </body>
</html>