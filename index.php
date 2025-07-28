<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>AccuWebTools - Accurate & Free Online Tools for Everyday Tasks</title>
  <meta name="description" content="AccuWebTools offers free, accurate, and easy-to-use online tools including PDF mergers, image-to-text converters, YouTube thumbnail downloaders, age calculators, and more.">
  <meta name="keywords" content="accuwebtools,accuweb tools, accu web tools,free online tools, pdf merger, image to text, youtube thumbnail downloader, age calculator, word counter, text tools, convert pdf, extract text from image, web utilities">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon" height="100px">
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-B9CT86JSTC"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-B9CT86JSTC');
  </script>
</head>

<body class="index-page">
   <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo.png" alt="logo">
        <h1 class="sitename">AccuWebTools</h1>
      </a>
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about">About</a></li>
          <li><a href="all-tools">All Tools</a></li>
          <li><a href="contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
    <style>
      .floating-shapes {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        pointer-events: none;
        overflow: hidden;
      }
      
      .shape {
        position: absolute;
        opacity: 0.1;
        border-radius: 50%;
      }
      
      .shape-1 {
        width: 300px;
        height: 300px;
        background: #6e8efb;
        top: -100px;
        right: -100px;
      }
      
      .shape-2 {
        width: 200px;
        height: 200px;
        background: #a777e3;
        bottom: -50px;
        left: -50px;
      }
      
      .btn-gradient {
        background: linear-gradient(to right, #6e8efb, #a777e3);
        border: none;
        color: white;
        font-weight: 500;
        padding: 12px 30px;
        border-radius: 50px;
        transition: all 0.3s ease;
      }
      
      .btn-gradient:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        color: white;
      }
      
     .tool-card {
        transition: all 0.2s ease;
        border: 1px solid rgba(0,0,0,0.1);
        box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        height: 100%;
      }
      
      .tool-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        border-color: rgba(110, 142, 251, 0.3);
      }
      
      .tool-icon {
        margin-bottom: 10px;
      }
      
      .card-title {
        font-size: 1rem;
        font-weight: 600;
        color: #333;
      }
      
      /* Better mobile spacing */
      @media (max-width: 767.98px) {
        .featured-tools {
          padding: 50px 0;
        }
        
        .col-6 {
          padding: 5px;
        }
        
        .tool-card {
          margin-bottom: 0;
        }
      }
      .testimonial-card {
        background: white;
        border-radius: 12px;
        padding: 30px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        margin: 15px;
        height: 100%;
      }
      
      .testimonial-text {
        font-style: italic;
        margin-bottom: 20px;
      }
      
      .testimonial-author {
        font-weight: 600;
      }
      .stats-section {
        background: #ededf3;
        padding: 20px 0;
      }
      
      .stat-item {
        text-align: center;
        padding: 30px;
      }
      
      .stat-number {
        font-size: 3rem;
        font-weight: 700;
        color: #6e8efb;
        margin-bottom: 10px;
      }
      /*.heading-container {
        background: linear-gradient(135deg, #6e8efb, #a777e3);
        color: white;
        padding: 120px 0 80px;
        text-align: center;
        position: relative;
        overflow: hidden;
        width: 100%;
      }*/
    </style>
  </header>

  <main class="main">
    <!-- Hero Section -->
    <section id="hero" class="dark-background">
       
    </section>
    <center>
        <div class="container heading-container" data-aos="fade-up" style="margin-top:50px;margin-bottom: 20px;">
          <h1 class="hero-title">Powerful Online Tools for Everyone</h1>
          <p class="hero-subtitle">Free, easy-to-use utilities to simplify your digital life. No registration required!</p>
        </div>
      </center>
    
    <!-- Features Section -->
    <section id="features" class="featured-tools">
      <div class="container">
        <div class="section-title text-center" data-aos="fade-up">
          <h2>Our Popular Tools</h2>
          <p class="lead">Handpicked utilities to boost your productivity</p>
        </div>
        <div class="row gy-3"> <!-- Changed gy-4 to gy-3 for tighter spacing -->
          <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="100"> <!-- Added col-6 for better mobile -->
            <a href="youtube-thumbnail-downloader" class="card tool-card h-100 text-decoration-none"> <!-- Made entire card clickable -->
              <div class="card-body p-3 text-center"> <!-- Reduced padding with p-3 -->
                <i class="bi bi-youtube tool-icon" style="color: #FF0000; font-size: 2rem;"></i> <!-- Reduced icon size -->
                <h5 class="card-title mb-0">YouTube Thumbnail</h5> <!-- Changed to h5 and removed margin -->
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="200">
            <a href="password-generator" class="card tool-card h-100 text-decoration-none">
              <div class="card-body p-3 text-center">
                <i class="bi bi-key tool-icon" style="color: #5578ff; font-size: 2rem;"></i>
                <h5 class="card-title mb-0">Password Generator</h5>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="300">
            <a href="json-formatter" class="card tool-card h-100 text-decoration-none">
              <div class="card-body p-3 text-center">
                <i class="bi bi-braces tool-icon" style="color: #FF5733; font-size: 2rem;"></i>
                <h5 class="card-title mb-0">JSON Formatter</h5>
              </div>
            </a>
          </div>
          
          <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="300">
            <a href="xml-formatter" class="card tool-card h-100 text-decoration-none">
              <div class="card-body p-3 text-center">
                <i class="bi bi-code-slash tool-icon" style="color: #6f42c1; font-size: 2rem;"></i>
                <h5 class="card-title mb-0">XML Formatter</h5>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="400">
            <a href="qr-generator" class="card tool-card h-100 text-decoration-none">
              <div class="card-body p-3 text-center">
                <i class="bi bi-qr-code tool-icon" style="color: #4CAF50; font-size: 2rem;"></i>
                <h5 class="card-title mb-0">QR Code Generator</h5>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="100">
            <a href="word-counter" class="card tool-card h-100 text-decoration-none">
              <div class="card-body p-3 text-center">
                <i class="bi bi-fonts tool-icon" style="color: #28a745; font-size: 2rem;"></i>
                <h5 class="card-title mb-0">Word Counter</h5>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="200">
            <a href="sql-formatter" class="card tool-card h-100 text-decoration-none">
              <div class="card-body p-3 text-center">
                <i class="bi bi-terminal tool-icon" style="color: #4caf50; font-size: 2rem;"></i>
                <h5 class="card-title mb-0">SQL Formatter</h5>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="300">
            <a href="image-to-text" class="card tool-card h-100 text-decoration-none">
              <div class="card-body p-3 text-center">
                <i class="bi bi-card-image tool-icon" style="color: #e361ff; font-size: 2rem;"></i>
                <h5 class="card-title mb-0">Image to Text</h5>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="400">
            <a href="age-calculator" class="card tool-card h-100 text-decoration-none">
              <div class="card-body p-3 text-center">
                <i class="bi bi-hourglass-split tool-icon" style="color: #ff6f61; font-size: 2rem;"></i>
                <h5 class="card-title mb-0">Age Calculator</h5>
              </div>
            </a>
          </div>
          
          <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="500">
            <a href="merge-pdf" class="card tool-card h-100 text-decoration-none">
              <div class="card-body p-3 text-center">
                <i class="bi bi-files tool-icon" style="color: #007bff; font-size: 2rem;"></i>
                <h5 class="card-title mb-0">Merge PDF</h5>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <section class="stats-section">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="100">
            <div class="stat-item">
              <div class="stat-number" id="tool-count">10+</div>
              <p>Free Tools</p>
            </div>
          </div>
          <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="200">
            <div class="stat-item">
              <div class="stat-number" id="user-count">100K+</div>
              <p>Monthly Users</p>
            </div>
          </div>
          <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="300">
            <div class="stat-item">
              <div class="stat-number" id="country-count">50+</div>
              <p>Countries</p>
            </div>
          </div>
          <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="400">
            <div class="stat-item">
              <div class="stat-number">100%</div>
              <p>Free Forever</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonials Section -->
    <section class="testimonials-section bg-light py-5">
      <div class="container">
        <div class="section-title text-center" data-aos="fade-up">
          <h2>What Our Users Say</h2>
          <p class="lead">Trusted by developers, marketers, and professionals worldwide</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial-card">
              <div class="testimonial-text">
                "The YouTube thumbnail downloader saved me hours of work. I use it daily for my content creation workflow."
              </div>
              <div class="testimonial-author">
                <strong>Sarah Johnson</strong><br>
                <small>Content Creator</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="testimonial-card">
              <div class="testimonial-text">
                "As a developer, the JSON and SQL formatters are indispensable tools that help me work more efficiently."
              </div>
              <div class="testimonial-author">
                <strong>Michael Chen</strong><br>
                <small>Full Stack Developer</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="testimonial-card">
              <div class="testimonial-text">
                "The password generator helps me create and manage secure passwords for all my online accounts."
              </div>
              <div class="testimonial-author">
                <strong>Emily Rodriguez</strong><br>
                <small>Digital Marketer</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Faq Section -->
    <section id="faq" class="faq section light-background">

      <div class="container-fluid">

        <div class="row gy-4">

          <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">

            <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
              <h3><span>Frequently Asked </span><strong>Questions</strong></h3>
              <p>
                ❓ Frequently Asked Questions (FAQ)
              </p>
            </div>

            <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">

              <div class="faq-item faq-active">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Is this website free to use?</h3>
                <div class="faq-content">
                  <p>Yes! All tools on our website are 100% free to use with no hidden charges.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Do I need to create an account?</h3>
                <div class="faq-content">
                  <p>Nope. No registration or login is required to use any of our tools.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Do you store any user data?</h3>
                <div class="faq-content">
                  <p>No. We do not store any personal data or uploaded content. Privacy and user security are a priority.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->
              <div class="faq-item">
                <i class="faq-icon bi bi-question-circle"></i>
                <h3>Can I request a new tool to be added?</h3>
                <div class="faq-content">
                  <p>Absolutely! We welcome suggestions. Please use the contact form to let us know what tool you'd like to see.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->
            </div>

          </div>

          <div class="col-lg-5 order-1 order-lg-2">
            <img src="assets/img/faq.jpg" class="img-fluid" alt="FAQ IMAGE" data-aos="zoom-in" data-aos-delay="100">
          </div>
        </div>

      </div>

    </section><!-- /Faq Section -->

    <!-- Contact Section -->
  </main>

  <?php include 'includes/footer.php'; ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>