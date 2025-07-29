<?php include("../includes/track_visitors.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>AccuWebTools - Free tools for Everyday use</title>
    <meta name="description" content="AccuWebTools offers free, accurate, and easy-to-use online tools including PDF mergers, image-to-text converters, YouTube thumbnail downloaders, age calculators, and more.">
    <meta name="keywords" content="free online tools, pdf merger, image to text, youtube thumbnail downloader, age calculator, word counter, text tools, convert pdf, extract text from image, web utilities">

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon" height="100px">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="../assets/css/main.css" rel="stylesheet">
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
    <?php include '../includes/header.php'; ?>

    <main class="main">
      <!-- Hero Section -->
      <section id="hero" class="dark-background">
         
      </section>
      
      <!-- Features Section -->
      <section id="features" class="featured-tools">
        <div class="container">
          <div class="section-title text-center" data-aos="fade-up">
            <h2>Explore our Tools</h2>
            <p class="lead">Free tools to make your everything simple.</p>
          </div>
          <div class="row gy-3"> <!-- Changed gy-4 to gy-3 for tighter spacing -->
            <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="100">
              <a href="/youtube-thumbnail-downloader" class="card tool-card h-100 text-decoration-none"> <!-- Made entire card clickable -->
                <div class="card-body p-3 text-center"> <!-- Reduced padding with p-3 -->
                  <i class="bi bi-youtube tool-icon" style="color: #FF0000; font-size: 2rem;"></i>
                  <h5 class="card-title mb-0">YouTube Thumbnail</h5>
                </div>
              </a>
            </div>

            <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="200">
              <a href="/password-generator" class="card tool-card h-100 text-decoration-none">
                <div class="card-body p-3 text-center">
                  <i class="bi bi-key tool-icon" style="color: #5578ff; font-size: 2rem;"></i>
                  <h5 class="card-title mb-0">Password Generator</h5>
                </div>
              </a>
            </div>

            <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="300">
              <a href="/json-formatter" class="card tool-card h-100 text-decoration-none">
                <div class="card-body p-3 text-center">
                  <i class="bi bi-braces tool-icon" style="color: #FF5733; font-size: 2rem;"></i>
                  <h5 class="card-title mb-0">JSON Formatter</h5>
                </div>
              </a>
            </div>
            
            <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="300">
              <a href="/xml-formatter" class="card tool-card h-100 text-decoration-none">
                <div class="card-body p-3 text-center">
                  <i class="bi bi-code-slash tool-icon" style="color: #6f42c1; font-size: 2rem;"></i>
                  <h5 class="card-title mb-0">XML Formatter</h5>
                </div>
              </a>
            </div>

            <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="400">
              <a href="/qr-generator" class="card tool-card h-100 text-decoration-none">
                <div class="card-body p-3 text-center">
                  <i class="bi bi-qr-code tool-icon" style="color: #4CAF50; font-size: 2rem;"></i>
                  <h5 class="card-title mb-0">QR Code Generator</h5>
                </div>
              </a>
            </div>

            <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="100">
              <a href="/word-counter" class="card tool-card h-100 text-decoration-none">
                <div class="card-body p-3 text-center">
                  <i class="bi bi-fonts tool-icon" style="color: #28a745; font-size: 2rem;"></i>
                  <h5 class="card-title mb-0">Word Counter</h5>
                </div>
              </a>
            </div>

            <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="200">
              <a href="/sql-formatter" class="card tool-card h-100 text-decoration-none">
                <div class="card-body p-3 text-center">
                  <i class="bi bi-terminal tool-icon" style="color: #4caf50; font-size: 2rem;"></i>
                  <h5 class="card-title mb-0">SQL Formatter</h5>
                </div>
              </a>
            </div>

            <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="300">
              <a href="/image-to-text" class="card tool-card h-100 text-decoration-none">
                <div class="card-body p-3 text-center">
                  <i class="bi bi-card-image tool-icon" style="color: #e361ff; font-size: 2rem;"></i>
                  <h5 class="card-title mb-0">Image to Text</h5>
                </div>
              </a>
            </div>

            <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="400">
              <a href="/age-calculator" class="card tool-card h-100 text-decoration-none">
                <div class="card-body p-3 text-center">
                  <i class="bi bi-hourglass-split tool-icon" style="color: #ff6f61; font-size: 2rem;"></i>
                  <h5 class="card-title mb-0">Age Calculator</h5>
                </div>
              </a>
            </div>
            
            <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-delay="500">
              <a href="/merge-pdf" class="card tool-card h-100 text-decoration-none">
                <div class="card-body p-3 text-center">
                  <i class="bi bi-files tool-icon" style="color: #007bff; font-size: 2rem;"></i>
                  <h5 class="card-title mb-0">Merge PDF</h5>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>
    </main>

    <?php include '../includes/footer.php'; ?>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <!-- Main JS File -->
    <script src="../assets/js/main.js"></script>
  </body>
</html>