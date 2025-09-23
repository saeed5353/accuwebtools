<?php include("../includes/track_visitors.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>QR & Barcode Scanner - Scan QR Codes and Barcodes Online</title>
  <meta name="description" content="Free online QR code and barcode scanner. Scan codes using your webcam, upload images, or drag and drop files. Supports all major barcode types including QR, CODE128, EAN-13, and UPC-A.">
  <meta name="keywords" content="qr code scanner, qr photo scanner, barcode scanner, upc scanner, item scanner, qr scanner online, barcode reader online, scan qr code from picture, free qr code scanner, barcode scanner online, qr code reader online, qr reader online, barcode detector, scan barcode scanner">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link rel="canonical" href="https://accuwebtools.com/qr-barcode-scanner" />

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

  <!-- QR/Barcode Scanner Library -->
  <script src="https://unpkg.com/html5-qrcode"></script>

  <!-- Main CSS File -->
  <link href="../assets/css/main.css" rel="stylesheet">
  <style>
    .scanner-container {
      padding: 60px 0;
    }
    .scan-area {
      position: relative;
      width: 100%;
      max-width: 600px;
      margin: 0 auto;
      background-color: #f8f9fa;
      border-radius: 8px;
      overflow: hidden;
      min-height: 300px;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    #reader {
      width: 100%;
    }
    #qr-shaded-region {
      border-width: 30px !important;
    }
    .upload-area {
      border: 2px dashed #dee2e6;
      border-radius: 8px;
      padding: 2rem;
      text-align: center;
      cursor: pointer;
      transition: all 0.3s;
      min-height: 300px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }
    .upload-area:hover, .upload-area.dragover {
      border-color: #0d6efd;
      background-color: rgba(13, 110, 253, 0.05);
    }
    .upload-icon {
      font-size: 3rem;
      color: #6c757d;
      margin-bottom: 1rem;
    }
    .image-preview {
      max-width: 100%;
      max-height: 300px;
      margin-top: 1rem;
      display: none;
    }
    .result-container {
      margin-top: 2rem;
      padding: 1.5rem;
      border-radius: 8px;
      background-color: #f8f9fa;
      display: none;
    }
    .action-buttons {
      margin-top: 1rem;
    }
    .mode-buttons {
      margin-bottom: 1.5rem;
    }
    .camera-permission {
      text-align: center;
      padding: 2rem;
      display: none;
    }
    .scanner-status {
      margin-top: 1rem;
      text-align: center;
      font-style: italic;
      color: #6c757d;
    }
    .barcode-type {
      display: inline-block;
      padding: 0.25rem 0.5rem;
      background-color: #e9ecef;
      border-radius: 4px;
      font-size: 0.875rem;
      margin-left: 0.5rem;
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
            <li class="current">QR & Barcode Scanner</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- QR/Barcode Scanner Section -->
    <section id="scanner" class="scanner-container">
      <div class="container section-title" data-aos="fade-up">
        <h2>QR & Barcode Scanner</h2>
        <div><span>Scan</span> <span class="description-title">QR Codes and Barcodes</span></div>
        <p class="mt-3">Use your webcam or upload an image to scan QR codes and various barcode formats</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-10">
            <!-- Mode Selection Buttons -->
            <div class="text-center mode-buttons">
              <div class="btn-group" role="group">
                <button type="button" class="btn btn-primary active" id="webcam-mode-btn">
                  <i class="bi bi-camera-video me-2"></i> Scan with Webcam
                </button>
                <button type="button" class="btn btn-outline-primary" id="upload-mode-btn">
                  <i class="bi bi-upload me-2"></i> Upload Image
                </button>
              </div>
            </div>

            <!-- Webcam Scanner -->
            <div id="webcam-section">
              <div class="scan-area" id="reader"></div>
              <div class="scanner-status" id="scanner-status">Initializing scanner...</div>
              
              <div class="camera-permission" id="camera-permission">
                <div class="text-center py-4">
                  <i class="bi bi-camera-video-off display-4 text-muted"></i>
                  <h4 class="mt-3">Camera Access Required</h4>
                  <p>Please allow camera access to use the scanner. If you've denied permission, refresh the page and try again.</p>
                  <button class="btn btn-primary mt-2" id="retry-camera-btn">Retry Camera Access</button>
                </div>
              </div>
            </div>

            <!-- Upload Section -->
            <div id="upload-section" style="display: none;">
              <div class="upload-area" id="drop-area">
                <i class="bi bi-cloud-arrow-up upload-icon"></i>
                <h4>Drag & Drop Image Here</h4>
                <p class="text-muted">or</p>
                <button class="btn btn-primary" id="select-image-btn">Select Image</button>
                <input type="file" id="file-input" accept="image/*" style="display: none;">
                <img id="image-preview" class="image-preview" alt="Image preview">
              </div>
            </div>

            <!-- Results Container -->
            <div class="result-container" id="result-container">
              <h5>Scan Result:</h5>
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <code id="result-text" class="fs-6">No result yet</code>
                  <span class="barcode-type" id="barcode-type"></span>
                </div>
                <div class="action-buttons">
                  <button class="btn btn-outline-secondary btn-sm" id="copy-btn">
                    <i class="bi bi-clipboard me-1"></i> Copy
                  </button>
                  <button class="btn btn-outline-primary btn-sm ms-1" id="open-link-btn" style="display: none;">
                    <i class="bi bi-box-arrow-up-right me-1"></i> Open Link
                  </button>
                  <button class="btn btn-outline-danger btn-sm ms-1" id="clear-btn">
                    <i class="bi bi-x-circle me-1"></i> Clear
                  </button>
                </div>
              </div>
            </div>

            <!-- Supported Formats -->
            <div class="alert alert-info mt-4">
              <h5><i class="bi bi-info-circle me-2"></i> Supported Formats</h5>
              <div class="row mt-3">
                <div class="col-md-6">
                  <h6>QR Codes</h6>
                  <ul class="mb-0">
                    <li>All standard QR codes</li>
                    <li>Micro QR codes</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <h6>Barcodes</h6>
                  <ul class="mb-0">
                    <li>CODE128</li>
                    <li>EAN-13, EAN-8</li>
                    <li>UPC-A, UPC-E</li>
                    <li>CODE39, ITF</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- How It Works Section -->
    <section id="how-it-works" class="section bg-light">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>How To Use The Scanner</h2>
          <p>Simple steps to scan QR codes and barcodes</p>
        </div>
        <div class="row g-4">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3"><i class="bi bi-camera-video"></i></div>
                <h5>Webcam Scanning</h5>
                <p>Allow camera access and point your camera at a QR code or barcode for instant scanning</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3"><i class="bi bi-upload"></i></div>
                <h5>Image Upload</h5>
                <p>Upload an image containing a QR code or barcode from your device</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3"><i class="bi bi-mouse"></i></div>
                <h5>Drag & Drop</h5>
                <p>Simply drag and drop an image file onto the scanner area for quick processing</p>
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

  <!-- QR/Barcode Scanner Script -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Check if the Html5QrcodeScanner library is loaded correctly
      if (typeof Html5QrcodeScanner === 'undefined') {
        console.error('Html5QrcodeScanner library not loaded');
        document.getElementById('scanner-status').textContent = 
          'Scanner library failed to load. Please refresh the page.';
        return;
      }
      
      // Elements
      const webcamModeBtn = document.getElementById('webcam-mode-btn');
      const uploadModeBtn = document.getElementById('upload-mode-btn');
      const webcamSection = document.getElementById('webcam-section');
      const uploadSection = document.getElementById('upload-section');
      const dropArea = document.getElementById('drop-area');
      const fileInput = document.getElementById('file-input');
      const selectImageBtn = document.getElementById('select-image-btn');
      const imagePreview = document.getElementById('image-preview');
      const resultContainer = document.getElementById('result-container');
      const resultText = document.getElementById('result-text');
      const barcodeType = document.getElementById('barcode-type');
      const copyBtn = document.getElementById('copy-btn');
      const openLinkBtn = document.getElementById('open-link-btn');
      const clearBtn = document.getElementById('clear-btn');
      const scannerStatus = document.getElementById('scanner-status');
      const cameraPermission = document.getElementById('camera-permission');
      const retryCameraBtn = document.getElementById('retry-camera-btn');
      
      // Variables
      let html5QrcodeScanner = null;
      let currentMode = 'webcam';
      let isScanning = false;
      
      // Initialize the scanner
      function initScanner() {
        if (html5QrcodeScanner) {
          try {
            html5QrcodeScanner.clear();
          } catch (e) {
            console.error("Error clearing scanner:", e);
          }
        }
        
        // Use a simpler configuration without the unsupported formats reference
        const config = { 
          fps: 10, 
          qrbox: { width: 250, height: 150 },
          rememberLastUsedCamera: true
        };
        
        // Create the scanner with a simpler approach
        html5QrcodeScanner = new Html5QrcodeScanner("reader", config, false);
        
        // Render the scanner
        html5QrcodeScanner.render(
          onScanSuccess, 
          onScanFailure
        );
        
        isScanning = true;
        scannerStatus.textContent = "Scanner active - point at a QR code or barcode";
      }
      
      // Handle successful scan
      function onScanSuccess(decodedText, decodedResult) {
        console.log(`Scan result: ${decodedText}`, decodedResult);
        
        // Stop scanning after successful detection
        if (isScanning) {
          stopScanner();
        }
        
        // Display results
        resultText.textContent = decodedText;
        
        // Try to get the format name safely
        let formatName = 'Unknown';
        try {
          if (decodedResult && decodedResult.result && decodedResult.result.format) {
            formatName = decodedResult.result.format.formatName || 'Unknown';
          }
        } catch (e) {
          console.log('Could not determine barcode format', e);
        }
        barcodeType.textContent = formatName;
        
        // Show/hide open link button based on URL detection
        try {
          // Simple URL detection without using URL constructor which can throw errors
          if (decodedText.startsWith('http://') || 
              decodedText.startsWith('https://') || 
              decodedText.startsWith('www.')) {
            openLinkBtn.style.display = 'inline-block';
            openLinkBtn.onclick = () => {
              let url = decodedText;
              if (decodedText.startsWith('www.')) {
                url = 'https://' + decodedText;
              }
              window.open(url, '_blank');
            };
          } else {
            openLinkBtn.style.display = 'none';
          }
        } catch (e) {
          console.log('Error checking URL', e);
          openLinkBtn.style.display = 'none';
        }
        
        resultContainer.style.display = 'block';
      }
      
      // Handle scan failure
      function onScanFailure(error) {
        // Most errors are just because no code is detected yet, which is normal
        if (error && !error.startsWith("No multiformat readers supported")) {
          console.warn("Scan error:", error);
        }
      }
      
      // Stop the scanner
      function stopScanner() {
        if (html5QrcodeScanner && isScanning) {
          try {
            html5QrcodeScanner.clear().catch(error => {
              console.error("Failed to clear scanner:", error);
            });
          } catch (e) {
            console.error("Error stopping scanner:", e);
          }
          isScanning = false;
          scannerStatus.textContent = "Scanner stopped";
        }
      }
      
      // Switch to webcam mode
      function switchToWebcamMode() {
        currentMode = 'webcam';
        webcamSection.style.display = 'block';
        uploadSection.style.display = 'none';
        webcamModeBtn.classList.add('active');
        webcamModeBtn.classList.remove('btn-outline-primary');
        webcamModeBtn.classList.add('btn-primary');
        uploadModeBtn.classList.remove('active');
        uploadModeBtn.classList.remove('btn-primary');
        uploadModeBtn.classList.add('btn-outline-primary');
        
        // Clear upload preview
        imagePreview.style.display = 'none';
        imagePreview.src = '';
        
        // Initialize scanner
        setTimeout(initScanner, 300);
      }
      
      // Switch to upload mode
      function switchToUploadMode() {
        currentMode = 'upload';
        webcamSection.style.display = 'none';
        uploadSection.style.display = 'block';
        uploadModeBtn.classList.add('active');
        uploadModeBtn.classList.remove('btn-outline-primary');
        uploadModeBtn.classList.add('btn-primary');
        webcamModeBtn.classList.remove('active');
        webcamModeBtn.classList.remove('btn-primary');
        webcamModeBtn.classList.add('btn-outline-primary');
        
        // Stop scanner if active
        stopScanner();
      }
      
      // Handle file selection
      function handleFileSelect(file) {
        if (!file || !file.type.match('image.*')) {
          alert('Please select an image file (JPEG, PNG, etc.)');
          return;
        }
        
        // Preview image
        const reader = new FileReader();
        reader.onload = function(e) {
          imagePreview.src = e.target.result;
          imagePreview.style.display = 'block';
          
          // Use the file scanning functionality from the library
          // First check if Html5Qrcode is available
          if (typeof Html5Qrcode === 'undefined') {
            scannerStatus.textContent = "Scanner functionality not available";
            return;
          }
          
          // Create a temporary instance for file scanning
          const html5QrCode = new Html5Qrcode("reader");
          
          // Scan the image file
          html5QrCode.scanFile(file, true)
            .then(decodedText => {
              onScanSuccess(decodedText, { result: { format: { formatName: 'QR_CODE' } } });
            })
            .catch(err => {
              console.error("Error scanning file:", err);
              scannerStatus.textContent = "No QR code or barcode detected in this image";
              
              // Try without the QR code only flag
              html5QrCode.scanFile(file, false)
                .then(decodedResult => {
                  onScanSuccess(decodedResult.decodedText, decodedResult);
                })
                .catch(err => {
                  console.error("Error scanning file with all formats:", err);
                  scannerStatus.textContent = "No QR code or barcode detected in this image";
                });
            });
        };
        reader.readAsDataURL(file);
      }
      
      // Event Listeners
      webcamModeBtn.addEventListener('click', switchToWebcamMode);
      uploadModeBtn.addEventListener('click', switchToUploadMode);
      
      selectImageBtn.addEventListener('click', () => {
        fileInput.click();
      });
      
      fileInput.addEventListener('change', (e) => {
        if (e.target.files.length) {
          handleFileSelect(e.target.files[0]);
        }
      });
      
      // Drag and drop handling
      dropArea.addEventListener('dragover', (e) => {
        e.preventDefault();
        dropArea.classList.add('dragover');
      });
      
      dropArea.addEventListener('dragleave', () => {
        dropArea.classList.remove('dragover');
      });
      
      dropArea.addEventListener('drop', (e) => {
        e.preventDefault();
        dropArea.classList.remove('dragover');
        
        if (e.dataTransfer.files.length) {
          handleFileSelect(e.dataTransfer.files[0]);
        }
      });
      
      // Copy button
      copyBtn.addEventListener('click', () => {
        navigator.clipboard.writeText(resultText.textContent)
          .then(() => {
            const originalText = copyBtn.innerHTML;
            copyBtn.innerHTML = '<i class="bi bi-check me-1"></i> Copied!';
            setTimeout(() => {
              copyBtn.innerHTML = originalText;
            }, 2000);
          })
          .catch(err => {
            console.error('Failed to copy: ', err);
            alert('Failed to copy to clipboard');
          });
      });
      
      // Clear button
      clearBtn.addEventListener('click', () => {
        resultContainer.style.display = 'none';
        resultText.textContent = '';
        barcodeType.textContent = '';
        openLinkBtn.style.display = 'none';
        
        if (currentMode === 'webcam') {
          initScanner();
        } else {
          imagePreview.style.display = 'none';
          imagePreview.src = '';
        }
      });
      
      // Retry camera access
      retryCameraBtn.addEventListener('click', () => {
        initScanner();
      });
      
      // Check camera permissions and initialize
      function checkCameraPermissions() {
        // First check if mediaDevices is available
        if (!navigator.mediaDevices || !navigator.mediaDevices.enumerateDevices) {
          cameraPermission.innerHTML = `
            <div class="text-center py-4">
              <i class="bi bi-camera-video-off display-4 text-muted"></i>
              <h4 class="mt-3">Camera Not Supported</h4>
              <p>Your browser does not support camera access. Please use a modern browser or try the upload option.</p>
            </div>
          `;
          cameraPermission.style.display = 'block';
          scannerStatus.textContent = "Camera not supported in this browser";
          return;
        }
        
        navigator.mediaDevices.enumerateDevices()
          .then(devices => {
            const hasVideoInput = devices.some(device => device.kind === 'videoinput');
            
            if (hasVideoInput) {
              navigator.mediaDevices.getUserMedia({ video: true })
                .then(stream => {
                  // We have permission, initialize scanner
                  cameraPermission.style.display = 'none';
                  initScanner();
                  
                  // Stop the stream immediately since the scanner will request its own
                  stream.getTracks().forEach(track => track.stop());
                })
                .catch(err => {
                  console.error("Camera access denied:", err);
                  cameraPermission.style.display = 'block';
                  scannerStatus.textContent = "Camera access denied";
                });
            } else {
              // No camera available
              cameraPermission.innerHTML = `
                <div class="text-center py-4">
                  <i class="bi bi-camera-video-off display-4 text-muted"></i>
                  <h4 class="mt-3">No Camera Found</h4>
                  <p>No camera device was detected on your system. Please use the upload option instead.</p>
                </div>
              `;
              cameraPermission.style.display = 'block';
              scannerStatus.textContent = "No camera available";
            }
          })
          .catch(err => {
            console.error("Error enumerating devices:", err);
            cameraPermission.style.display = 'block';
            scannerStatus.textContent = "Error accessing camera";
          });
      }
      
      // Initialize the page
      checkCameraPermissions();
      
      // Clean up when leaving the page
      window.addEventListener('beforeunload', () => {
        stopScanner();
      });
    });
  </script>

</body>

</html>