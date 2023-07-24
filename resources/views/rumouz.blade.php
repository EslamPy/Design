<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Rumouz Project</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/house-icon-png-white-32.png" rel="icon">
  <link href="assets/img/house-icon-png-white-32.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!--  Main CSS File -->
  <link href="assets/css/rumouz.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="{{ route('index') }}" class="logo d-flex align-items-center  me-auto me-lg-0">
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <i class="bi bi-camera"></i>
        <h1>PortFolio</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
            <li><a href="{{ route('index') }}" class="active">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('services') }}">Services</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

      <div class="header-social-links">
        <a href="https://twitter.com/" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/realsamdev/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Projects I worked on</h2>
            <h3>Rumouz</h3>
            <p>Today, I am thrilled to share with you my latest project called Rumouz an innovative educational platform designed to make learning accessible and engaging.</p>

            <a class="cta-btn" href="{{ route('contact') }}">Available for hire</a>

          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <!-- ======= Gallery Single Section ======= -->
    <section id="gallery-single" class="gallery-single">
      <div class="container">

        <div class="position-relative h-100">
          <div class="slides-1 portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                <img src="assets/img/Rumouz/Working.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/Rumouz/Coding.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/Rumouz/Rumouz1.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/Rumouz/Rumouz2.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/Rumouz/rumouz4.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/Rumouz/Coding1.jpg" alt="">
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>

        </div>

        <div class="row justify-content-between gy-4 mt-4">

          <div class="col-lg-8">
            <div class="portfolio-description">
            <h2>Rumouz Project</h2>
            <p>
              Today, I am thrilled to share with you my latest project called Rumouz—an innovative educational platform designed to make learning accessible and engaging.
            </p>

              <p>
              Rumouz is not just another online learning platform; it's a comprehensive hub that offers a wide range of courses right at your fingertips. Whether you're interested in mastering a new skill, exploring a subject, or preparing for exams, Rumouz has got you covered.
              </p>

              <p>
                One of the key features of Rumouz is its extensive course library. It hosts a diverse collection of courses, carefully curated to cater to various interests and skill levels. From programming and design to business and languages, there's something for everyone.
              </p>

                <p>
                  But what sets Rumouz apart is its interactive approach to learning. Within the platform, you'll find interactive exams that challenge your knowledge and understanding. These exams are designed to be engaging, presenting you with multiple-choice questions that test your comprehension and critical thinking abilities.
                </p>

                <p>
                  What makes Rumouz truly unique is its emphasis on personalization. You have the freedom to customize your learning path, selecting the courses that align with your interests and goals. As you progress, you can track your performance and receive valuable insights through detailed analytics, allowing you to monitor your growth and identify areas for improvement.
                </p>
                <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Rumouz: Unlocking the Power of Knowledge. Empowering minds, inspiring growth, and shaping futures. Education made accessible, interactive, and transformative."
                  <div>
                  <img src="assets/img/Rumouz/dark_person.jpg" class="testimonial-img" alt="">
                  <h3>Sam</h3>
                  <h4>Web Developer</h4>
                </div>
              </div>

              <p>
                With Rumouz, you have the flexibility to learn at your own pace, whenever and wherever it suits you. The platform is accessible from any device, making it convenient for busy professionals, students, or anyone seeking to expand their knowledge. </p>
                <p>
                I invite you to explore Rumouz and discover the vast opportunities it presents. Join me on this exciting adventure of learning, growth, and transformation. Let Rumouz be your guide as you embark on your educational journey.</p>

            </div>
          </div>

          <div class="col-lg-3">
            <div class="portfolio-info">
              <h3>More Information</h3>
              <ul>
                <li><strong>Client</strong> <span>Ahed</span></li>
                <li><strong>Services</strong> <span>Educational Platform</span></li>
                <li><strong>Date</strong> <span>January 2023</span></li>
                <li><strong>Rumouz Website</strong> <a href="#">https://romuz.cali-ts.com/</a></li>
                <li><a href="https://romuz.cali-ts.com/" class="btn-visit align-self-start">Visit Website</a></li>
              </ul>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Single Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>PortFolio</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="http://www.samdev.online/">Sam</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader">
    <div class="line"></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!--  Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
