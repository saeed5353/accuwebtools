<?php include("../includes/track_visitors.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Base64 Encoder/Decoder - Free Online Base64 Converter Tool</title>
  <meta name="description" content="Free online Base64 encoder and decoder tool. Encode text to Base64 or decode Base64 to text instantly. No registration required. Works with strings, images, and files.">
  <meta name="keywords" content="base64 encoder, base64 decoder, base64 encode, base64 decode, base64 converter, base64 online, base64 encode decode, base64 string, base64 text, base64 image, base64 to text, text to base64, base64 encoding, base64 decoding, free base64 tool, online base64 encoder, base64 decode online, base64 encode online, base64 translator, base64 codec">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link rel="canonical" href="https://accuwebtools.com/base64-encoder-decoder" />

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
    .base64-tool {
      padding: 60px 0;
    }
    .editor-container {
      min-height: 300px;
      border: 1px solid #dee2e6;
      border-radius: 0.375rem;
      margin-bottom: 20px;
    }
    #input-text, #output-text {
      width: 100%;
      min-height: 300px;
      font-family: 'Courier New', Courier, monospace;
      font-size: 14px;
      border: none;
      resize: vertical;
      padding: 15px;
      background-color: #f8f9fa;
    }
    #input-text:focus, #output-text:focus {
      outline: none;
      background-color: #fff;
    }
    .btn-group-actions {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
      margin-bottom: 20px;
    }
    .stats-info {
      background-color: #f8f9fa;
      padding: 10px;
      border-radius: 0.375rem;
      margin-top: 10px;
    }
    .error-message {
      color: #dc3545;
      font-weight: bold;
    }
    .success-message {
      color: #28a745;
      font-weight: bold;
    }
    .seo-keywords {
      display: none; /* Hide but keep for SEO */
    }
    .file-upload-area {
      border: 2px dashed #dee2e6;
      border-radius: 0.375rem;
      padding: 30px;
      text-align: center;
      cursor: pointer;
      transition: all 0.3s;
    }
    .file-upload-area:hover {
      border-color: #0d6efd;
      background-color: #f0f7ff;
    }
    .file-upload-area.dragover {
      border-color: #0d6efd;
      background-color: #e7f3ff;
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
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="../index.php">Home</a></li>
            <li class="current">Base64 Encoder/Decoder</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Base64 Tool Section -->
    <section id="base64-tool" class="section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Free Base64 Encoder & Decoder</h2>
        <div><span>Encode</span> <span class="description-title">Decode</span> <span>Base64 Strings</span></div>
        <p class="mt-3">Convert text to Base64 encoding or decode Base64 strings back to text instantly</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
          <div class="col-lg-12">
            <div class="btn-group-actions">
              <button id="encode-btn" class="btn btn-primary">
                <i class="bi bi-arrow-down-circle me-2"></i>Encode to Base64
              </button>
              <button id="decode-btn" class="btn btn-success">
                <i class="bi bi-arrow-up-circle me-2"></i>Decode from Base64
              </button>
              <button id="clear-btn" class="btn btn-danger">
                <i class="bi bi-trash me-2"></i>Clear All
              </button>
              <button id="copy-input-btn" class="btn btn-info">
                <i class="bi bi-clipboard me-2"></i>Copy Input
              </button>
              <button id="copy-output-btn" class="btn btn-warning">
                <i class="bi bi-clipboard-check me-2"></i>Copy Output
              </button>
              <button id="swap-btn" class="btn btn-secondary">
                <i class="bi bi-arrow-left-right me-2"></i>Swap
              </button>
            </div>

            <div class="row g-4">
              <!-- Input Column -->
              <div class="col-md-6">
                <h5 class="mb-3 text-center"><i class="bi bi-input-cursor-text me-2"></i>Input Text</h5>
                <div class="editor-container">
                  <textarea id="input-text" class="form-control" 
                           placeholder="Enter text to encode or Base64 string to decode..."
                           oninput="autoDetectAndConvert()"></textarea>
                </div>
                <div class="mt-3">
                  <label class="form-label">Or upload a file:</label>
                  <div class="file-upload-area" id="file-upload-area">
                    <i class="bi bi-cloud-upload fs-1 text-muted"></i>
                    <p class="mt-2 mb-0">Click to upload or drag and drop</p>
                    <p class="text-muted small">Supports text files, images, and more</p>
                    <input type="file" id="file-input" style="display: none;" accept="*/*">
                  </div>
                </div>
              </div>
              
              <!-- Output Column -->
              <div class="col-md-6">
                <h5 class="mb-3 text-center"><i class="bi bi-code-slash me-2"></i>Output</h5>
                <div class="editor-container">
                  <textarea id="output-text" class="form-control" 
                           placeholder="Encoded or decoded result will appear here..."
                           readonly></textarea>
                </div>
                <div id="stats-info" class="stats-info mt-3" style="display: none;">
                  <div class="row">
                    <div class="col-md-6">
                      <strong>Input Size:</strong> <span id="input-size">0</span> bytes
                    </div>
                    <div class="col-md-6">
                      <strong>Output Size:</strong> <span id="output-size">0</span> bytes
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div id="error-message" class="error-message mt-3" style="display: none;"></div>
            <div id="success-message" class="success-message mt-3" style="display: none;"></div>
          </div>
        </div>
      </div>
      
      <!-- Hidden SEO Content -->
      <div class="seo-keywords">
        <p>base64 encoder, base64 decoder, base64 encode, base64 decode, base64 converter, base64 online, base64 encode decode, base64 string, base64 text, base64 image, base64 to text, text to base64, base64 encoding, base64 decoding, free base64 tool, online base64 encoder, base64 decode online, base64 encode online, base64 translator, base64 codec</p>
      </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="section bg-light">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Base64 Encoder/Decoder Features</h2>
          <p>Everything you need for Base64 encoding and decoding</p>
        </div>
        <div class="row g-4">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3"><i class="bi bi-arrow-down-circle"></i></div>
                <h5>Encode to Base64</h5>
                <p>Convert any text, string, or data to Base64 encoding format instantly</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3"><i class="bi bi-arrow-up-circle"></i></div>
                <h5>Decode from Base64</h5>
                <p>Decode Base64 strings back to their original text or data format</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3"><i class="bi bi-file-earmark"></i></div>
                <h5>File Support</h5>
                <p>Upload and encode/decode files including images, documents, and more</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3"><i class="bi bi-lightning"></i></div>
                <h5>Instant Conversion</h5>
                <p>Real-time encoding and decoding with automatic detection of input type</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3"><i class="bi bi-clipboard"></i></div>
                <h5>Easy Copy</h5>
                <p>One-click copy functionality for both input and output text</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3"><i class="bi bi-shield-check"></i></div>
                <h5>Privacy First</h5>
                <p>All processing happens in your browser - no data is sent to servers</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="footer-monetag">
      <div class="container text-center">
        <h4 class="mb-3">Discover Amazing Deals & Offers</h4>
        <p class="mb-4">Check out these exclusive offers from our partners</p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
          <button class="monetag-button" onclick="openMonetagLink('https://otieu.com/4/10062536')">
            <i class="bi bi-gift"></i> Special Offers
          </button>
          <button class="monetag-button" onclick="openMonetagLink('https://otieu.com/4/10059978')">
            <i class="bi bi-tags"></i> Exclusive Deals
          </button>
          <button class="monetag-button" onclick="openMonetagLink('https://otieu.com/4/10062700')">
            <i class="bi bi-lightning"></i> Quick Rewards
          </button>
        </div>
      </div>
    </section>
    <!-- How It Works Section -->
    <section id="how-it-works" class="section">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>How to Use Base64 Encoder/Decoder</h2>
          <p>Simple steps to encode or decode Base64 strings</p>
        </div>
        <div class="row g-4">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3">1</div>
                <h5>Enter Text or Upload File</h5>
                <p>Type your text in the input area or upload a file to encode/decode</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3">2</div>
                <h5>Choose Action</h5>
                <p>Click "Encode to Base64" to convert text, or "Decode from Base64" to decode</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3">3</div>
                <h5>Copy Result</h5>
                <p>View the result in the output area and copy it to your clipboard</p>
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
    // Elements
    const inputText = document.getElementById('input-text');
    const outputText = document.getElementById('output-text');
    const encodeBtn = document.getElementById('encode-btn');
    const decodeBtn = document.getElementById('decode-btn');
    const clearBtn = document.getElementById('clear-btn');
    const copyInputBtn = document.getElementById('copy-input-btn');
    const copyOutputBtn = document.getElementById('copy-output-btn');
    const swapBtn = document.getElementById('swap-btn');
    const fileInput = document.getElementById('file-input');
    const fileUploadArea = document.getElementById('file-upload-area');
    const statsInfo = document.getElementById('stats-info');
    const inputSize = document.getElementById('input-size');
    const outputSize = document.getElementById('output-size');
    const errorMessage = document.getElementById('error-message');
    const successMessage = document.getElementById('success-message');
    
    if (!inputText || !outputText || !encodeBtn) {
      throw new Error('Essential elements are missing from the page');
    }

    // File upload handling
    fileUploadArea.addEventListener('click', () => {
      fileInput.click();
    });

    fileUploadArea.addEventListener('dragover', (e) => {
      e.preventDefault();
      fileUploadArea.classList.add('dragover');
    });

    fileUploadArea.addEventListener('dragleave', () => {
      fileUploadArea.classList.remove('dragover');
    });

    fileUploadArea.addEventListener('drop', (e) => {
      e.preventDefault();
      fileUploadArea.classList.remove('dragover');
      const files = e.dataTransfer.files;
      if (files.length > 0) {
        handleFile(files[0]);
      }
    });

    fileInput.addEventListener('change', (e) => {
      if (e.target.files.length > 0) {
        handleFile(e.target.files[0]);
      }
    });

    function handleFile(file) {
      const reader = new FileReader();
      reader.onload = function(e) {
        // For binary files, encode to base64
        if (file.type.startsWith('image/') || file.type.startsWith('application/')) {
          const base64 = e.target.result.split(',')[1] || e.target.result;
          inputText.value = base64;
          outputText.value = 'Base64 encoded file. Click "Decode from Base64" to decode.';
          showSuccess('File loaded and encoded to Base64');
          updateStats();
        } else {
          // For text files, read as text
          inputText.value = e.target.result;
          showSuccess('File loaded successfully');
          updateStats();
        }
      };
      
      if (file.type.startsWith('text/') || file.type === 'application/json') {
        reader.readAsText(file);
      } else {
        reader.readAsDataURL(file);
      }
    }

    // Encode to Base64
    encodeBtn.addEventListener('click', () => {
      try {
        const input = inputText.value.trim();
        if (!input) {
          showError('Please enter text to encode');
          return;
        }
        
        const encoded = btoa(unescape(encodeURIComponent(input)));
        outputText.value = encoded;
        showSuccess('Text encoded to Base64 successfully');
        updateStats();
      } catch (err) {
        showError('Encoding failed: ' + err.message);
      }
    });

    // Decode from Base64
    decodeBtn.addEventListener('click', () => {
      try {
        const input = inputText.value.trim();
        if (!input) {
          showError('Please enter Base64 string to decode');
          return;
        }
        
        // Remove data URL prefix if present
        const base64String = input.includes(',') ? input.split(',')[1] : input;
        
        const decoded = decodeURIComponent(escape(atob(base64String)));
        outputText.value = decoded;
        showSuccess('Base64 decoded successfully');
        updateStats();
      } catch (err) {
        showError('Decoding failed. Please check if the input is valid Base64: ' + err.message);
      }
    });

    // Clear all
    clearBtn.addEventListener('click', () => {
      inputText.value = '';
      outputText.value = '';
      fileInput.value = '';
      statsInfo.style.display = 'none';
      errorMessage.style.display = 'none';
      successMessage.style.display = 'none';
    });

    // Copy input
    copyInputBtn.addEventListener('click', () => {
      if (inputText.value.trim()) {
        inputText.select();
        navigator.clipboard.writeText(inputText.value)
          .then(() => showSuccess('Input copied to clipboard'))
          .catch(err => showError('Failed to copy: ' + err));
      } else {
        showError('No input to copy');
      }
    });

    // Copy output
    copyOutputBtn.addEventListener('click', () => {
      if (outputText.value.trim()) {
        outputText.select();
        navigator.clipboard.writeText(outputText.value)
          .then(() => showSuccess('Output copied to clipboard'))
          .catch(err => showError('Failed to copy: ' + err));
      } else {
        showError('No output to copy');
      }
    });

    // Swap input and output
    swapBtn.addEventListener('click', () => {
      const temp = inputText.value;
      inputText.value = outputText.value;
      outputText.value = temp;
      updateStats();
      showSuccess('Input and output swapped');
    });

    // Auto-detect and convert
    function autoDetectAndConvert() {
      clearTimeout(window.autoConvertTimeout);
      window.autoConvertTimeout = setTimeout(() => {
        const input = inputText.value.trim();
        if (!input) {
          outputText.value = '';
          statsInfo.style.display = 'none';
          return;
        }
        
        // Try to detect if input is Base64
        const base64Pattern = /^[A-Za-z0-9+/]*={0,2}$/;
        if (base64Pattern.test(input) && input.length > 0 && input.length % 4 === 0) {
          // Likely Base64, try to decode
          try {
            const base64String = input.includes(',') ? input.split(',')[1] : input;
            const decoded = decodeURIComponent(escape(atob(base64String)));
            outputText.value = decoded;
            updateStats();
          } catch (e) {
            // Not valid Base64, encode instead
            try {
              const encoded = btoa(unescape(encodeURIComponent(input)));
              outputText.value = encoded;
              updateStats();
            } catch (err) {
              // Ignore errors during auto-convert
            }
          }
        } else {
          // Not Base64, encode it
          try {
            const encoded = btoa(unescape(encodeURIComponent(input)));
            outputText.value = encoded;
            updateStats();
          } catch (err) {
            // Ignore errors during auto-convert
          }
        }
      }, 500);
    }

    // Update statistics
    function updateStats() {
      const input = inputText.value;
      const output = outputText.value;
      
      if (input || output) {
        inputSize.textContent = new Blob([input]).size;
        outputSize.textContent = new Blob([output]).size;
        statsInfo.style.display = 'block';
      } else {
        statsInfo.style.display = 'none';
      }
    }

    // Show success message
    function showSuccess(message) {
      successMessage.textContent = message;
      successMessage.style.display = 'block';
      errorMessage.style.display = 'none';
      setTimeout(() => {
        successMessage.style.display = 'none';
      }, 3000);
    }

    // Show error message
    function showError(message) {
      errorMessage.textContent = message;
      errorMessage.style.display = 'block';
      successMessage.style.display = 'none';
      setTimeout(() => {
        errorMessage.style.display = 'none';
      }, 5000);
    }

  } catch (error) {
    console.error('Error initializing Base64 tool:', error);
  }
});

function openMonetagLink(url) {
  window.open(url, '_blank', 'noopener,noreferrer');
}
</script>
