<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>About Me</title>
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
            <h2>About</h2>
            <p>Hello, I'm Sam, a web developer with expertise in front-end development using HTML, CSS, and JavaScript. I have a portfolio of projects that highlight my ability to create visually appealing and user-friendly interfaces.</p>

            <a class="cta-btn" href="{{ route('contact') }}">Available for hire</a>
          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="assets/img/about me img/About.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-5 content">
            <h2>Web Developer Based in Egypt</h2>
            <p class="fst-italic py-3">
              I'm currently available for new work. Let me know if you're looking for a digital designer. Let’s talk about the next big thing!
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.samdev.online</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+123 456 7890</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Cairo, Egypt</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>samdev@outlook.de</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                </ul>
              </div>
            </div>
            <p class="py-3">
            Life is a lot like development , and you know what? Life is a lot like development – it's all about embracing the process. Just like we programmers refine our code with each line, I believe we should approach life with the same enthusiasm for growth. Embrace the ups and downs, the successes and the bugs, as they make us who we are. Every day is an opportunity to learn something new, to become better than we were yesterday. So let's keep evolving, exploring, and pushing our boundaries. Together, we'll code our way to a future full of possibilities!
            </p>
            <p class="m-0">
                Amidst the ever-changing nature of both technology and existence, let's remember to stay curious. Curiosity not only hones our development skills but also expands our horizons in life. We encounter countless bugs and roadblocks along the way, but it's the determination to overcome them that defines who we are. Embrace every experience as it comes, savor the little moments, and cherish the journey.
                In the world of programming, just like in life, collaboration is key. We don't have to face everything alone. Together, we can create marvels that surpass our individual abilities. We support, challenge, and inspire each other to grow and innovate.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="section-header">
          <h2>Reviwes</h2>
          <p>What they are saying</p>
        </div>

        <div class="slides-3 swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  "Sam's problem-solving abilities are beyond extraordinary. When confronted with a bug or a system issue, they turn into a relentless detective, leaving no stone unturned until they discover the root cause and devise a solution. Besides their technical talents, Sam has a talent for leadership. They inspire and motivate their team members to go above and beyond, creating a cohesive and high-achieving group."
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  "When it comes to working with Sam, it's like having a technical wizard and a creative genius all in one! Their problem-solving skills are unparalleled, and they have an uncanny ability to turn complex concepts into elegant solutions. Working with Sam has been an absolute pleasure, and their dedication to delivering high-quality results is commendable. 5 out of 5 stars!"
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/person2.jpg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  "Sam is not just a skilled developer; they are a great communicator too! They took the time to understand our requirements thoroughly, and their regular updates kept us informed throughout the project. Sam's professionalism and commitment to deadlines are remarkable. It's rare to find someone who is both technically proficient and great at client interaction. We are incredibly satisfied with their work. 5 out of 5 stars!"
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  "I have had the privilege of collaborating with Sam on several projects, and each experience has exceeded my expectations. They have an exceptional ability to grasp the bigger picture while paying attention to the smallest details. Sam's positive attitude and adaptability to new challenges make them a true asset to any team. Working with Sam has undoubtedly elevated our project outcomes. 5 out of 5 stars!"
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  "Sam's passion for continuous learning is truly admirable. They stay updated with the latest trends in technology and are never afraid to explore new tools and frameworks. What sets Sam apart is their ability to think outside the box and come up with innovative solutions. It's no surprise that their work is highly sought after. 5 out of 5 stars!"
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>PortFolio</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="http://www.samdev.online/">Sam Dev</a>
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
