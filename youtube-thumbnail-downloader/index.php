<?php include("../includes/track_visitors.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>YouTube Thumbnail Downloader - Get HD Thumbnails from Videos</title>
  <meta name="description" content="Free YouTube thumbnail downloader tool. Download HD/SD thumbnails from any YouTube video instantly. Works for youtube.com and youtu.be links.">
  <meta name="keywords" content="youtube thumbnail downloader, yt thumbnail downloader, thumbnail downloader, yt thumb downloader, download thumbnail from youtube, thumbnail grabber, youtube video thumbnail download, download youtube video thumbnail, youtube thumbnail download hd, down thumbnail youtube, download thumbnail of youtube video, youtube thamble download, youtube video thamble download, yt video thumbnail download, youtube thumbnail grabber, get youtube thumbnail, get thumbnail from youtube">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">

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
              <h1>YouTube Thumbnail Downloader</h1>
              <p class="mb-0">Download high-quality thumbnails from any YouTube video instantly. Get HD/SD versions with our free thumbnail grabber tool.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="../index.php">Home</a></li>
            <li class="current">YouTube Thumbnail Downloader</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Thumbnail Downloader Section -->
    <section id="thumbnail-downloader" class="section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Free YouTube Thumbnail Downloader</h2>
        <div><span>Download</span> <span class="description-title">HD YouTube Thumbnails</span></div>
        <p class="mt-3">Get thumbnails from any YouTube video in maximum resolution (1280×720) or standard quality (640×480)</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <div class="input-group mb-4">
              <input type="url" 
                     id="youtube-url" 
                     class="form-control form-control-lg" 
                     placeholder="Paste YouTube URL (e.g., https://youtube.com/watch?v=...)" 
                     required
                     pattern="^(https?\:\/\/)?(www\.)?(youtube\.com|youtu\.?be)\/.+">
              <button class="btn btn-primary btn-lg" 
                      type="button" 
                      id="fetch-btn"
                      disabled>
                Get Thumbnail
              </button>
            </div>

            <div id="result-container" class="text-center" style="display: none;">
              <div class="thumbnail-preview mb-4">
                <img id="thumbnail-image" class="img-fluid rounded shadow" 
                     alt="YouTube Video Thumbnail" style="max-height: 400px;">
              </div>
              
              <div class="download-options row g-3">
                <div class="col-md-6">
                  <button id="hd-download" class="btn btn-success w-100 py-3 btn-download">
                    <i class="bi bi-download me-2"></i>Download HD (1280×720)
                  </button>
                </div>
                <div class="col-md-6">
                  <button id="sd-download" class="btn btn-primary w-100 py-3 btn-download">
                    <i class="bi bi-download me-2"></i>Download SD (640×480)
                  </button>
                </div>
              </div>
            </div>

            <div class="text-muted mt-4">
              <small>Works with all YouTube URLs: youtube.com, youtu.be, mobile links, and embedded videos</small>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Hidden SEO Content -->
      <div class="seo-keywords">
        <p>YouTube thumbnail downloader, yt thumbnail downloader, free thumbnail grabber, download youtube thumbnails, get youtube video thumbnail, hd thumbnail download, youtube thumbnail extractor, save youtube thumbnails, youtube preview image download</p>
      </div>
    </section>

    <!-- How It Works Section -->
    <section id="how-it-works" class="section bg-light">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>How to Download YouTube Thumbnails</h2>
          <p>Simple steps to get any YouTube video thumbnail</p>
        </div>
        <div class="row g-4">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3">1</div>
                <h5>Copy YouTube URL</h5>
                <p>Copy the link of any YouTube video from your browser's address bar</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3">2</div>
                <h5>Paste & Fetch</h5>
                <p>Paste the URL in our thumbnail downloader and click "Get Thumbnail"</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3">3</div>
                <h5>Download Thumbnail</h5>
                <p>Choose HD or SD quality and save the thumbnail to your device</p>
              </div>
            </div>
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
<script>
  document.addEventListener('DOMContentLoaded', () => {
    try {
      const urlInput = document.getElementById('youtube-url');
      const fetchBtn = document.getElementById('fetch-btn');
      const resultContainer = document.getElementById('result-container');
      const thumbnailImage = document.getElementById('thumbnail-image');
      const hdDownload = document.getElementById('hd-download');
      const sdDownload = document.getElementById('sd-download');
      
      if (!urlInput || !fetchBtn || !resultContainer || !thumbnailImage || !hdDownload || !sdDownload) {
        throw new Error('One or more required elements are missing from the page');
      }

      let currentVideoId = null;

      urlInput.addEventListener('input', () => {
        fetchBtn.disabled = !urlInput.checkValidity();
      });

      fetchBtn.addEventListener('click', async () => {
        const videoUrl = urlInput.value;
        currentVideoId = extractVideoId(videoUrl);
        
        if(currentVideoId) {
          const hdUrl = `https://img.youtube.com/vi/${currentVideoId}/maxresdefault.jpg`;
          thumbnailImage.src = hdUrl;
          resultContainer.style.display = 'block';
          resultContainer.scrollIntoView({ behavior: 'smooth' });
        } else {
          alert('Please enter a valid YouTube URL');
        }
      });

      hdDownload.addEventListener('click', () => downloadThumbnail('maxresdefault', 'hd'));
      sdDownload.addEventListener('click', () => downloadThumbnail('hqdefault', 'sd'));

      async function downloadThumbnail(type, quality) {
        if(!currentVideoId) {
          alert('Please fetch a thumbnail first');
          return;
        }
        
        const imgUrl = `https://img.youtube.com/vi/${currentVideoId}/${type}.jpg`;
        const fileName = `yt_thumbnail_${currentVideoId}_${quality}.jpg`;

        try {
          // Fetch the image first
          const response = await fetch(imgUrl);
          const blob = await response.blob();
          const blobUrl = URL.createObjectURL(blob);
          
          // Create download link
          const link = document.createElement('a');
          link.href = blobUrl;
          link.download = fileName;
          document.body.appendChild(link);
          link.click();
          
          // Clean up
          setTimeout(() => {
            document.body.removeChild(link);
            URL.revokeObjectURL(blobUrl);
          }, 100);
        } catch (error) {
          console.error('Download failed:', error);
          alert('Failed to download thumbnail. Please try again.');
        }
      }

      function extractVideoId(url) {
        if (!url) return null;
        const regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|&v=)([^#&?]*).*/;
        const match = url.match(regExp);
        return (match && match[2].length === 11) ? match[2] : null;
      }

    } catch (error) {
      console.error('Error initializing thumbnail downloader:', error);
    }
  });
</script>