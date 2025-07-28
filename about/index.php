<?php include("/includes/track_visitors.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>About Us</title>
  <meta name="description" content="Free YouTube thumbnail downloader tool. Download HD/SD thumbnails from any YouTube video instantly. Works for youtube.com and youtu.be links.">
  <meta name="keywords" content="">

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
  <style>
    .thumbnail-downloader {
    padding: 60px 0;
  }
  .input-group {
    box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.15);
  }
  .form-control-lg {
    height: calc(3.5rem + 2px);
    padding: 1rem 1.5rem;
  }
  .btn-download {
    transition: transform 0.2s;
  }
  .btn-download:hover {
    transform: translateY(-2px);
  }
  #thumbnail-image {
    border: 3px solid #fff;
    box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.15);
  }
  .seo-keywords {
      display: none; /* Hide but keep for SEO */
    }
  </style>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-B9CT86JSTC"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-B9CT86JSTC');
  </script>
</head>
<body class="starter-page-page">
   <?php include '../includes/header.php'; ?>
   <main class="main">
    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>About Us</h1>
              <!-- <p class="mb-0">Download high-quality thumbnails from any YouTube video instantly. Get HD/SD versions with our free thumbnail grabber tool.</p> -->
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="../">Home</a></li>
            <li class="current">About Us</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Thumbnail Downloader Section -->
    <section id="thumbnail-downloader" class="section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <p>Welcome to AccuWebTools – your all-in-one online utility hub!</p>

            <p>We provide a collection of fast, free, and easy-to-use tools designed to make your digital tasks simpler. Whether you're a content creator looking to grab high-quality thumbnails from YouTube or Facebook, a developer needing a quick and reliable JSON formatter, or just someone who loves convenient web tools – we've got you covered.</p>

            <p>Our goal is to help users save time and improve productivity with clean, ad-light (or ad-free) tools that just work. No sign-ups, no bloat – just quick results.</p>

            <h2>Popular Tools:</h2>

            <strong>🎬 YouTube Thumbnail Downloader</strong><br>

            <strong>📱 QR Code Generator</strong><br>

            <strong>📘 Random Password Generator</strong><br>

            <strong>🧾 JSON Formatter</strong><br>

            ... and many more!
            <br><br>
            <p>We’re constantly improving our platform and adding new tools based on user feedback. If you have suggestions or encounter issues, don’t hesitate to reach out via our Contact page.</p>
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