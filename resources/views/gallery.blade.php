<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>About Sam</title>
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

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

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
            <h2>About Me</h2>
            <p>I'm "Sam" and I'm a Front-End Web Developer using HTML , CSS , JavaScript , based in Egypt. I like to understand people to solve their problems and craft digital solutions that resonate.</p>

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
                <img src="assets/img/about me img/noah-buscher-1-kPytLsVkY-unsplash.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/about me img/fotis-fotopoulos-6sAl6aQ4OWI-unsplash.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/about me img/fotis-fotopoulos-LJ9KY8pIH3E-unsplash.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/about me img/pexels-rubaitul-azad-12879651.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/about me img/Letter_of_recommendation.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/about me img/Experience_certificate.png" alt="">
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
              <h2>This is an example of Portfolio detail</h2>
              <p>

                I have always been intrigued by how technology has the ability to connect people and enhance our daily experiences. As a digital designer, I recognize my duty to develop designs that are aesthetically pleasing, user-friendly, intuitive, and accessible to all.

              </p>
              <p>
                Firstly, let me express my gratitude to "Cali Technology Solutions", the company I have been fortunate enough to work with. They have not only provided me with a certificate acknowledging my skills but also a recommendation letter that highlights my contributions and capabilities as a developer. I am immensely grateful for their support and the opportunities they have given me to grow and excel in my career.
              </p>

              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  I am excited to continue my journey as a web developer, taking on new challenges, and contributing to the ever-evolving digital landscape. If you're looking for a developer who can bring both front-end and back-end expertise to your projects, I'd love to connect and discuss how I can contribute to your success.
                </p>
                <div>
                  <img src="assets/img/testimonials/testimonials-2 .jpg" class="testimonial-img" alt="">
                  <h3>Sam</h3>
                  <h4>Web Developer</h4>
                </div>
              </div>

              <p>
                Throughout my career, I have honed my skills and gained valuable experience in web development. Previously, I worked as a front-end developer, where I developed a strong foundation in design principles, HTML, CSS, and JavaScript. This expertise allowed me to create captivating user interfaces and deliver exceptional user experiences.
              <p>
                However, my journey didn't stop at front-end development. Driven by a desire to broaden my expertise, I ventured into back-end development using PHP and the Laravel framework. This transition has allowed me to build robust and scalable web applications, implementing complex functionality and optimizing performance.

              </p>

            </div>
          </div>

          <div class="col-lg-3">
            <div class="portfolio-info">
              <h3>More Information</h3>
              <ul>
                <li><strong>Category</strong> <span>About Me</span></li>
                <li><strong>Developer</strong> <span>Sam</span></li>
                <li><strong>Date</strong> <span>January 2023</span></li>
                <li><strong>Project URL</strong> <a href="#">samdev.online</a></li>
                <li><a href="http://www.samdev.online/" class="btn-visit align-self-start">Visit Website</a></li>
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

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
