<?php include("../includes/track_visitors.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Image to Text Converter - Extract Text from Images Online | Free OCR Tool</title>
  <meta name="description" content="Free online OCR tool to extract text from images (JPG, PNG, HEIC). Convert pictures to text instantly with our accurate image to text converter. No registration required.">
  <meta name="keywords" content="image to text, pic to text, image text to text, text from image to text, text in image to text, text from pic, text from pictures, imagen to text, image to text converter, picture to text converter, image text to text converter, transform picture to text, convert text to picture, extracting text from image, picture to text, copy text from image, copy text from picture, copy the text from image, text from an image, copy picture text, copy text on image, copy picture to text, copy text from pic, image to text image, text by image, picture to words converter, ocr online, jpg to text, jpeg to text, from picture to text, convert image text to text, turn photo into text, jpeg text, ocr reader online, photo to text, text generator from image, image into text generator, picture text generator, pic to text converter, photo into text, image in text, text to pic, pdf to word ocr, image to text online, jpg to text converter, picture to text online, image to text converter free, pic to text online, jpeg to text converter, pdf to doc ocr, picture text, online picture to text">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link rel="canonical" href="https://accuwebtools.com/contact" />
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
  
  <!-- Tesseract.js for OCR -->
  <script src="https://cdn.jsdelivr.net/npm/tesseract.js@4/dist/tesseract.min.js"></script>
  
  <style>
    .upload-area {
      border: 2px dashed #dee2e6;
      border-radius: 8px;
      padding: 2rem;
      text-align: center;
      cursor: pointer;
      transition: all 0.3s;
      background-color: #f8f9fa;
    }
    .upload-area:hover {
      border-color: #0d6efd;
      background-color: #e7f1ff;
    }
    .upload-area.active {
      border-color: #0d6efd;
      background-color: #e7f1ff;
    }
    .preview-container {
      max-width: 100%;
      margin-top: 20px;
      display: none;
    }
    #image-preview {
      max-width: 100%;
      max-height: 300px;
      border-radius: 8px;
    }
    .progress-container {
      display: none;
      margin: 20px 0;
    }
    .extracted-text {
      min-height: 200px;
      border: 1px solid #dee2e6;
      border-radius: 8px;
      padding: 15px;
      background-color: #f8f9fa;
    }
    .supported-formats {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
      justify-content: center;
      margin-top: 10px;
    }
    .format-badge {
      background-color: #e9ecef;
      padding: 3px 8px;
      border-radius: 20px;
      font-size: 0.8rem;
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
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="../index.php">Home</a></li>
            <li class="current">Image to Text</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Image to Text Section -->
    <section id="image-to-text" class="section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Free Image to Text Converter</h2>
        <div><span>Extract</span> <span class="description-title">Text from Images</span></div>
        <p class="mt-3">Upload any image and our OCR technology will convert it to editable text in seconds</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-10">
            <div class="card shadow-sm">
              <div class="card-body">
                <!-- Upload Area -->
                <div class="upload-area mb-4" id="upload-area">
                  <div class="display-4 text-primary mb-3">
                    <i class="bi bi-cloud-arrow-up"></i>
                  </div>
                  <h5>Drag & Drop Your Image Here</h5>
                  <p class="text-muted">or click to browse files</p>
                  <div class="supported-formats">
                    <span class="format-badge">JPG</span>
                    <span class="format-badge">PNG</span>
                    <span class="format-badge">HEIC</span>
                    <span class="format-badge">HEIF</span>
                    <span class="format-badge">BMP</span>
                    <span class="format-badge">GIF</span>
                    <span class="format-badge">PDF</span>
                    <span class="format-badge">TIFF</span>
                  </div>
                  <input type="file" id="file-input" accept="image/*,.pdf" style="display: none;">
                </div>
                
                <!-- Preview Container -->
                <div class="preview-container text-center" id="preview-container">
                  <img id="image-preview" class="img-fluid" src="" alt="Preview">
                  <div class="mt-2">
                    <button class="btn btn-outline-danger btn-sm" id="remove-image-btn">
                      <i class="bi bi-trash me-1"></i> Remove Image
                    </button>
                  </div>
                </div>
                
                <!-- Progress Container -->
                <div class="progress-container" id="progress-container">
                  <div class="d-flex justify-content-between mb-1">
                    <span>Processing image...</span>
                    <span id="progress-status">0%</span>
                  </div>
                  <div class="progress">
                    <div id="progress-bar" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 0%"></div>
                  </div>
                </div>
                
                <!-- Language Selection -->
                <div class="mb-4" id="language-selection" style="display: none;">
                  <label for="language-select" class="form-label">Select Language (for better accuracy)</label>
                  <select class="form-select" id="language-select">
                    <option value="eng" selected>English</option>
                    <option value="spa">Spanish</option>
                    <option value="fra">French</option>
                    <option value="deu">German</option>
                    <option value="ita">Italian</option>
                    <option value="por">Portuguese</option>
                    <option value="rus">Russian</option>
                    <option value="chi_sim">Chinese (Simplified)</option>
                    <option value="jpn">Japanese</option>
                    <option value="kor">Korean</option>
                    <option value="ara">Arabic</option>
                  </select>
                </div>
                
                <!-- Extract Button -->
                <div class="d-grid gap-2 mb-4" id="extract-button-container" style="display: none;">
                  <button class="btn btn-primary btn-lg" id="extract-btn">
                    <i class="bi bi-text-paragraph me-2"></i> Extract Text from Image
                  </button>
                </div>
                
                <!-- Extracted Text Area -->
                <div class="mb-4" id="result-container" style="display: none;">
                  <label class="form-label">Extracted Text</label>
                  <div class="extracted-text" id="extracted-text"></div>
                  <div class="d-flex justify-content-end mt-2">
                    <button class="btn btn-primary" id="copy-text-btn">
                      <i class="bi bi-clipboard me-2"></i> Copy Text
                    </button>
                  </div>
                </div>
                
                <!-- Word Count Statistics -->
                <div class="row g-3 mb-4" id="stats-container" style="display: none;">
                  <div class="col-md-3 col-6">
                    <div class="stat-card">
                      <div class="stat-value" id="word-count">0</div>
                      <div class="stat-label">Words</div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6">
                    <div class="stat-card">
                      <div class="stat-value" id="character-count">0</div>
                      <div class="stat-label">Characters</div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6">
                    <div class="stat-card">
                      <div class="stat-value" id="line-count">0</div>
                      <div class="stat-label">Lines</div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6">
                    <div class="stat-card">
                      <div class="stat-value" id="accuracy">0%</div>
                      <div class="stat-label">Confidence</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- OCR Tips -->
            <div class="alert alert-info mt-4">
              <h5><i class="bi bi-lightbulb me-2"></i> Tips for Better Results</h5>
              <ul class="mb-0">
                <li>Use clear, high-resolution images for best accuracy</li>
                <li>Ensure text is horizontal and not at an angle</li>
                <li>For documents, use good lighting and avoid shadows</li>
                <li>Select the correct language for the text in your image</li>
                <li>For handwritten text, accuracy may be lower than printed text</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Use Cases Section -->
      <section id="use-cases" class="section bg-light">
        <div class="container">
          <div class="section-title" data-aos="fade-up">
            <h2>Practical Uses of Image to Text</h2>
            <p>Convert images to text for various applications</p>
          </div>
          <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
              <div class="card h-100">
                <div class="card-body text-center">
                  <div class="display-4 text-primary mb-3"><i class="bi bi-receipt"></i></div>
                  <h5>Digitize Receipts</h5>
                  <p>Extract text from receipts for expense tracking and record keeping</p>
                </div>
              </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
              <div class="card h-100">
                <div class="card-body text-center">
                  <div class="display-4 text-primary mb-3"><i class="bi bi-book"></i></div>
                  <h5>Scan Books</h5>
                  <p>Convert book pages or printed documents into editable digital text</p>
                </div>
              </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
              <div class="card h-100">
                <div class="card-body text-center">
                  <div class="display-4 text-primary mb-3"><i class="bi bi-card-text"></i></div>
                  <h5>Business Cards</h5>
                  <p>Extract contact information from business cards quickly</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <!-- Hidden SEO Content -->
      <div class="seo-keywords">
        <p>image to text, pic to text, image text to text, text from image to text, text in image to text, text from pic, text from pictures, imagen to text, image to text converter, picture to text converter, image text to text converter, transform picture to text, convert text to picture, extracting text from image, picture to text, copy text from image, copy text from picture, copy the text from image, text from an image, copy picture text, copy text on image, copy picture to text, copy text from pic, image to text image, text by image, picture to words converter, ocr online, jpg to text, jpeg to text, from picture to text, convert image text to text, turn photo into text, jpeg text, ocr reader online, photo to text, text generator from image, image into text generator, picture text generator, pic to text converter, photo into text, image in text, text to pic, pdf to word ocr, image to text online, jpg to text converter, picture to text online, image to text converter free, pic to text online, jpeg to text converter, pdf to doc ocr, picture text, online picture to text</p>
      </div>
    </section>

  </main>

  <?php include '../includes/footer.php'; ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="../assets/js/main.js"></script>
  
  <!-- Image to Text Script -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // DOM Elements
      const uploadArea = document.getElementById('upload-area');
      const fileInput = document.getElementById('file-input');
      const previewContainer = document.getElementById('preview-container');
      const imagePreview = document.getElementById('image-preview');
      const removeImageBtn = document.getElementById('remove-image-btn');
      const extractBtn = document.getElementById('extract-btn');
      const languageSelection = document.getElementById('language-selection');
      const extractButtonContainer = document.getElementById('extract-button-container');
      const resultContainer = document.getElementById('result-container');
      const extractedText = document.getElementById('extracted-text');
      const copyTextBtn = document.getElementById('copy-text-btn');
      const progressContainer = document.getElementById('progress-container');
      const progressBar = document.getElementById('progress-bar');
      const progressStatus = document.getElementById('progress-status');
      const statsContainer = document.getElementById('stats-container');
      const wordCountEl = document.getElementById('word-count');
      const characterCountEl = document.getElementById('character-count');
      const lineCountEl = document.getElementById('line-count');
      const accuracyEl = document.getElementById('accuracy');
      
      // Upload area click event
      uploadArea.addEventListener('click', function() {
        fileInput.click();
      });
      
      // Drag and drop events
      ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        uploadArea.addEventListener(eventName, preventDefaults, false);
      });
      
      function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
      }
      
      ['dragenter', 'dragover'].forEach(eventName => {
        uploadArea.addEventListener(eventName, highlight, false);
      });
      
      ['dragleave', 'drop'].forEach(eventName => {
        uploadArea.addEventListener(eventName, unhighlight, false);
      });
      
      function highlight() {
        uploadArea.classList.add('active');
      }
      
      function unhighlight() {
        uploadArea.classList.remove('active');
      }
      
      // Handle dropped files
      uploadArea.addEventListener('drop', handleDrop, false);
      
      function handleDrop(e) {
        const dt = e.dataTransfer;
        const files = dt.files;
        handleFiles(files);
      }
      
      // Handle file input change
      fileInput.addEventListener('change', function() {
        handleFiles(this.files);
      });
      
      // Process selected files
      function handleFiles(files) {
        if (files.length === 0) return;
        
        const file = files[0];
        const validImageTypes = ['image/jpeg', 'image/png', 'image/heic', 'image/heif', 'image/gif', 'image/bmp', 'image/tiff', 'application/pdf'];
        
        if (!validImageTypes.includes(file.type) && !file.name.match(/\.(jpg|jpeg|png|heic|heif|gif|bmp|tiff|pdf)$/i)) {
          alert('Please select a valid image file (JPG, PNG, HEIC, HEIF, BMP, GIF, TIFF, PDF)');
          return;
        }
        
        // Display preview
        if (file.type.includes('image') && !file.type.includes('pdf')) {
          const reader = new FileReader();
          reader.onload = function(e) {
            imagePreview.src = e.target.result;
            previewContainer.style.display = 'block';
          };
          reader.readAsDataURL(file);
        } else {
          // For PDFs or other formats, show file name
          imagePreview.src = '';
          imagePreview.alt = file.name;
          previewContainer.style.display = 'block';
        }
        
        // Show language selection and extract button
        languageSelection.style.display = 'block';
        extractButtonContainer.style.display = 'block';
        uploadArea.style.display = 'none';
      }
      
      // Remove image
      removeImageBtn.addEventListener('click', function() {
        resetTool();
      });
      
      // Extract text from image
      extractBtn.addEventListener('click', function() {
        if (!fileInput.files.length) return;
        
        const file = fileInput.files[0];
        const language = document.getElementById('language-select').value;
        
        // Show progress
        progressContainer.style.display = 'block';
        extractBtn.disabled = true;
        
        // Use Tesseract.js for OCR
        Tesseract.recognize(
          file,
          language,
          {
            logger: m => {
              if (m.status === 'recognizing text') {
                const progress = Math.round(m.progress * 100);
                progressBar.style.width = `${progress}%`;
                progressStatus.textContent = `${progress}%`;
              }
            }
          }
        ).then(({ data: { text, confidence, lines } }) => {
          // Display extracted text
          extractedText.textContent = text;
          resultContainer.style.display = 'block';
          progressContainer.style.display = 'none';
          
          // Calculate stats
          const words = text.trim() ? text.trim().split(/\s+/).length : 0;
          const characters = text.length;
          const accuracy = Math.round(confidence);
          
          // Update stats
          wordCountEl.textContent = words.toLocaleString();
          characterCountEl.textContent = characters.toLocaleString();
          lineCountEl.textContent = lines.length.toLocaleString();
          accuracyEl.textContent = `${accuracy}%`;
          statsContainer.style.display = 'flex';
          
          // Scroll to results
          resultContainer.scrollIntoView({ behavior: 'smooth' });
        }).catch(err => {
          console.error(err);
          alert('Error processing image. Please try again with a different image.');
          progressContainer.style.display = 'none';
          extractBtn.disabled = false;
        });
      });
      
      // Copy text to clipboard
      copyTextBtn.addEventListener('click', function() {
        const text = extractedText.textContent;
        navigator.clipboard.writeText(text).then(() => {
          const originalText = copyTextBtn.innerHTML;
          copyTextBtn.innerHTML = '<i class="bi bi-check2 me-2"></i> Copied!';
          setTimeout(() => {
            copyTextBtn.innerHTML = originalText;
          }, 2000);
        }).catch(err => {
          console.error('Failed to copy text: ', err);
        });
      });
      
      // Reset tool to initial state
      function resetTool() {
        fileInput.value = '';
        previewContainer.style.display = 'none';
        languageSelection.style.display = 'none';
        extractButtonContainer.style.display = 'none';
        resultContainer.style.display = 'none';
        statsContainer.style.display = 'none';
        progressContainer.style.display = 'none';
        uploadArea.style.display = 'block';
        extractBtn.disabled = false;
        progressBar.style.width = '0%';
        progressStatus.textContent = '0%';
      }
    });
  </script>
</body>

</html>