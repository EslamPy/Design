<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Development Presentation</title>
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
  <link href="assets/css/style.css" rel="stylesheet">

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
            <h2>Software Engineering</h2>
            <p>This like a introductionon programming in front-end and back-end development.
                Today, we'll explore the roles of developers and their responsibilities in these domains.</p>

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
                <img src="assets/img/Development/Coding2.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/Development/Programming.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/Development/Wroking.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/Development/Coding.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/Development/Laptop.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/Development/Laptop2.jpg" alt="">
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
            <h2>Programming and Software Engineering Presentation</h2>
              <p>Slide 1: Front-end Development Front-end development focuses on the user-facing aspects of a website or application Developers in this field use languages such as HTML, CSS, and JavaScript to create visually appealing and interactive interfaces.</p>

              <p>Slide 2: Front-end Development - Key Points

                Front-end developers work with HTML to structure the content and CSS to style the elements. JavaScript is used to add interactivity, handle user input, and manipulate the DOM. They ensure cross-browser compatibility, responsiveness, and accessibility to deliver a seamless user experience.
                </p>

                <p>Slide 3: Front-end Development Tools

                Front-end developers rely on a variety of tools, including code editors like Visual Studio Code, version control systems like Git, and package managers like npm or yarn.
                They often use frameworks and libraries such as React, Angular, or Vue.js to expedite development and enhance functionality.</p>

                <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Adam: Variables: "Variables are like containers to store data, and they can change as the program runs."
                  Adam: Conditional Statements: "With conditionals, you can make decisions in your code, like 'if this happens, then do that.'"                </p>
                <div>
                  <img src="assets/img/Development/Steve Jobs.jpg" class="testimonial-img" alt="">
                  <h3>Sam</h3>
                  <h4>Developer</h4>
                </div>
              </div>

              <p>
                Back-end developers work with languages such as Python, PHP, Ruby, or Java to handle server-side operations. They build APIs, implement authentication and security measures, and handle database operations.
              <p>
                Testing and Debugging: Web developers are responsible for testing and debugging websites to ensure they function correctly. They perform various testing techniques, such as unit testing, integration testing, and cross-browser compatibility testing, to identify and fix any issues or bugs.
              </p>

            </div>
          </div>

          <div class="col-lg-3">
            <div class="portfolio-info">
              <h3>More Information</h3>
              <ul>
                <li><strong>Category</strong> <span>Presentation</span></li>
                <li><strong>Services</strong> <span>Software Engineering</span></li>
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

  <!--  Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
