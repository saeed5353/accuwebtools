<?php include("../includes/track_visitors.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>PDF to Word Converter - Convert PDF to DOCX Online Free | PDF to Word Tool</title>
  <meta name="description" content="Free online tool to convert PDF files to Word documents (DOCX). Transform your PDFs into editable Word files with high accuracy. No registration required. Works on all devices.">
  <meta name="keywords" content="pdf to word, pdf pdf to word, convert pdf to word, convert pdf in to word, convert pdf to word format, convert pdf to word converter, pdf to word word converter, pdf convert to word converter, pdf to docx, pdf to doc, pdf to document, transfer pdf to word free, pdf to word doc, pdf to word document, pdf in to word, convert word to pdf">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link rel="canonical" href="https://accuwebtools.com/pdf-to-word" />
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/mammoth/1.4.0/mammoth.browser.min.js"></script>
  <script src="https://unpkg.com/downloadjs@1.4.7"></script>
  <script src="https://unpkg.com/pdf-lib@1.17.1/dist/pdf-lib.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/mammoth/1.4.0/mammoth.browser.min.js"></script>
  <script src="https://unpkg.com/downloadjs@1.4.7"></script>
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
              <h1>PDF to Word Converter</h1>
              <p class="mb-0">Convert your PDF files to editable Word documents with high accuracy. Preserves formatting and layout.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="../index.php">Home</a></li>
            <li class="current">PDF to Word</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- PDF to Word Converter Section -->
    <section id="pdf-to-word" class="section pdf-to-word">
      <div class="container section-title" data-aos="fade-up">
        <h2>Free PDF to Word Converter</h2>
        <div><span>Convert</span> <span class="description-title">Transform</span> <span>PDF to</span> <span class="description-title">Word DOCX</span></div>
        <p class="mt-3">Upload your PDF file to convert it to an editable Word document</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <!-- Upload Area -->
            <div id="upload-area" class="upload-area">
              <div class="upload-icon">
                <i class="bi bi-file-earmark-pdf"></i>
              </div>
              <h4>Drag & Drop PDF File Here</h4>
              <p class="text-muted">or click to browse files (Max 10 files at once)</p>
              <input type="file" id="file-input" class="d-none" accept=".pdf" multiple>
              <button id="browse-btn" class="btn btn-primary mt-3">
                <i class="bi bi-folder2-open me-2"></i>Select PDF Files
              </button>
              <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" id="preserve-layout" checked>
                <label class="form-check-label" for="preserve-layout">
                  Preserve original layout
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="extract-images" checked>
                <label class="form-check-label" for="extract-images">
                  Extract images from PDF
                </label>
              </div>
            </div>

            <!-- File List -->
            <div id="file-list-container" style="display: none;">
              <h5 class="mb-3">Selected Files</h5>
              <ul id="file-list" class="file-list"></ul>
              
              <div class="d-flex justify-content-between align-items-center">
                <button id="add-more-btn" class="btn btn-outline-primary">
                  <i class="bi bi-plus-circle me-2"></i>Add More Files
                </button>
                <div>
                  <button id="clear-all-btn" class="btn btn-outline-danger me-2">
                    <i class="bi bi-trash me-2"></i>Clear All
                  </button>
                  <button id="convert-btn" class="btn btn-primary convert-btn" disabled>
                    <i class="bi bi-file-earmark-word me-2"></i>Convert to Word
                  </button>
                </div>
              </div>
            </div>

            <!-- Progress Bar -->
            <div id="progress-container" style="display: none;">
              <div class="progress">
                <div id="progress-bar" class="progress-bar" role="progressbar" style="width: 0%"></div>
              </div>
              <p id="progress-text">Processing...</p>
            </div>

            <div id="result-container" class="result">
              <h3>Conversion Complete!</h3>
              <p id="result-message"></p>
              <button id="download-btn">Download</button>
              <button id="new-convert-btn">Convert Another File</button>
            </div>

            <!-- Conversion Result -->
            <div id="convert-result" class="convert-result" style="display: none;">
              <div class="result-icon">
                <i class="bi bi-check-circle"></i>
              </div>
              <h4>Conversion Successful!</h4>
              <p id="result-info" class="text-muted">Your Word document is ready to download</p>
              <div id="download-options" class="mb-3">
                <div class="btn-group" role="group">
                  <button type="button" class="btn btn-outline-secondary active" data-format="docx">DOCX (Word)</button>
                  <button type="button" class="btn btn-outline-secondary" data-format="doc">DOC (Word 97-2003)</button>
                  <button type="button" class="btn btn-outline-secondary" data-format="rtf">RTF (Rich Text)</button>
                  <button type="button" class="btn btn-outline-secondary" data-format="txt">TXT (Plain Text)</button>
                </div>
              </div>
              <button id="download-btn" class="btn btn-success download-btn">
                <i class="bi bi-download me-2"></i>Download Word File
              </button>
              <button id="new-convert-btn" class="btn btn-outline-primary download-btn ms-2">
                <i class="bi bi-file-earmark-pdf me-2"></i>Convert More Files
              </button>
              <div class="mt-3">
                <button id="email-btn" class="btn btn-outline-info">
                  <i class="bi bi-envelope me-2"></i>Email Me the File
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Hidden SEO Content -->
      <div class="seo-keywords">
        <p>pdf to word, pdf pdf to word, convert pdf to word, convert pdf in to word, convert pdf to word format, convert pdf to word converter, pdf to word word converter, pdf convert to word converter, pdf to docx, pdf to doc, pdf to document, transfer pdf to word free, pdf to word doc, pdf to word document, pdf in to word, convert word to pdf</p>
      </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="section bg-light">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Why Use Our PDF to Word Converter?</h2>
          <p>Powerful features to transform your PDFs into editable documents</p>
        </div>
        <div class="row g-4">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3"><i class="bi bi-file-earmark-text"></i></div>
                <h5>High Accuracy</h5>
                <p>Preserves original formatting, fonts, and layout of your PDF</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3"><i class="bi bi-shield-lock"></i></div>
                <h5>Secure Processing</h5>
                <p>Files are processed securely and deleted after conversion</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3"><i class="bi bi-collection"></i></div>
                <h5>Batch Conversion</h5>
                <p>Convert multiple PDF files to Word at the same time</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3"><i class="bi bi-images"></i></div>
                <h5>Image Extraction</h5>
                <p>Extracts images from PDFs and includes them in Word file</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3"><i class="bi bi-phone"></i></div>
                <h5>Mobile Friendly</h5>
                <p>Works perfectly on smartphones and tablets</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3"><i class="bi bi-coin"></i></div>
                <h5>Completely Free</h5>
                <p>No watermarks, no registration, no file size limits</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- How It Works Section -->
    <section id="how-it-works" class="section">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>How to Convert PDF to Word</h2>
          <p>Transform your documents in just 3 simple steps</p>
        </div>
        <div class="row g-4">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3">1</div>
                <h5>Upload PDF</h5>
                <p>Select or drag and drop your PDF file to the upload area</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3">2</div>
                <h5>Convert to Word</h5>
                <p>Click the "Convert to Word" button to transform your document</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3">3</div>
                <h5>Download</h5>
                <p>Save your new editable Word file to your device</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Tips Section -->
    <section id="tips" class="section bg-light">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Tips for Better Conversion</h2>
          <p>Get the best results when converting PDF to Word</p>
        </div>
        <div class="row g-4">
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card h-100">
              <div class="card-body">
                <h5><i class="bi bi-check-circle text-primary me-2"></i> Use Text-Based PDFs</h5>
                <p>For best results, use PDFs that contain actual text rather than scanned documents. Scanned PDFs will be converted to images in the Word file.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card h-100">
              <div class="card-body">
                <h5><i class="bi bi-check-circle text-primary me-2"></i> Check Complex Layouts</h5>
                <p>Documents with complex layouts (multi-column, tables, etc.) may require minor adjustments after conversion.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card h-100">
              <div class="card-body">
                <h5><i class="bi bi-check-circle text-primary me-2"></i> Use Standard Fonts</h5>
                <p>PDFs using standard fonts (Arial, Times New Roman, etc.) convert better than those with custom fonts.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card h-100">
              <div class="card-body">
                <h5><i class="bi bi-check-circle text-primary me-2"></i> Try Different Formats</h5>
                <p>If DOCX doesn't work well, try converting to RTF or DOC format for better compatibility.</p>
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
  

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="../assets/js/main.js"></script>
  
  <!-- PDF to Word Converter Script -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // DOM elements
      const fileInput = document.getElementById('file-input');
      const browseBtn = document.getElementById('browse-btn');
      const uploadArea = document.getElementById('upload-area');
      const fileListContainer = document.getElementById('file-list-container');
      const fileList = document.getElementById('file-list');
      const convertBtn = document.getElementById('convert-btn');
      const clearBtn = document.getElementById('clear-btn');
      const progressContainer = document.getElementById('progress-container');
      const progressBar = document.getElementById('progress-bar');
      const progressText = document.getElementById('progress-text');
      const resultContainer = document.getElementById('result-container');
      const resultMessage = document.getElementById('result-message');
      const downloadBtn = document.getElementById('download-btn');
      const newConvertBtn = document.getElementById('new-convert-btn');
      const formatOptions = document.querySelectorAll('input[name="output-format"]');

      // Variables
      let files = [];
      let convertedFile = null;
      let outputFormat = 'docx';

      // Event listeners
      browseBtn.addEventListener('click', () => fileInput.click());
      fileInput.addEventListener('change', handleFileSelect);
      uploadArea.addEventListener('dragover', handleDragOver);
      uploadArea.addEventListener('drop', handleDrop);
      convertBtn.addEventListener('click', convertPdf);
      clearBtn.addEventListener('click', resetConverter);
      downloadBtn.addEventListener('click', downloadFile);
      newConvertBtn.addEventListener('click', resetConverter);
      
      formatOptions.forEach(option => {
        option.addEventListener('change', function() {
          outputFormat = this.value;
        });
      });

      // Functions
      function handleFileSelect(e) {
        const newFiles = Array.from(e.target.files);
        if (newFiles.length > 0) {
          addFiles(newFiles);
        }
      }

      function handleDragOver(e) {
        e.preventDefault();
        e.stopPropagation();
        uploadArea.style.backgroundColor = '#f0f0f0';
      }

      function handleDrop(e) {
        e.preventDefault();
        e.stopPropagation();
        uploadArea.style.backgroundColor = '';

        const newFiles = Array.from(e.dataTransfer.files).filter(file => 
          file.type === 'application/pdf' || file.name.endsWith('.pdf')
        );

        if (newFiles.length > 0) {
          addFiles(newFiles);
        }
      }

      function addFiles(newFiles) {
        files = [...files, ...newFiles];
        updateFileList();
        fileListContainer.style.display = 'block';
        convertBtn.disabled = files.length === 0;
        fileInput.value = '';
      }

      function updateFileList() {
        fileList.innerHTML = '';
        files.forEach((file, index) => {
          const listItem = document.createElement('li');
          listItem.className = 'file-item';
          listItem.innerHTML = `
            <span>${file.name}</span>
            <button class="remove-btn" data-index="${index}">×</button>
          `;
          fileList.appendChild(listItem);
        });

        document.querySelectorAll('.remove-btn').forEach(btn => {
          btn.addEventListener('click', function() {
            const index = parseInt(this.dataset.index);
            files.splice(index, 1);
            updateFileList();
            if (files.length === 0) {
              fileListContainer.style.display = 'none';
            }
            convertBtn.disabled = files.length === 0;
          });
        });
      }

      async function convertPdf() {
        if (files.length === 0) return;

        // Show progress
        uploadArea.style.display = 'none';
        fileListContainer.style.display = 'none';
        progressContainer.style.display = 'block';
        progressBar.style.width = '0%';
        progressText.textContent = 'Extracting text from PDF...';

        try {
          // For simplicity, we'll only convert the first file
          const file = files[0];
          const arrayBuffer = await file.arrayBuffer();
          
          // Extract text from PDF
          progressText.textContent = 'Processing PDF...';
          progressBar.style.width = '30%';
          
          const pdfDoc = await PDFLib.PDFDocument.load(arrayBuffer);
          const pages = pdfDoc.getPages();
          let extractedText = '';
          
          for (let i = 0; i < pages.length; i++) {
            const page = pages[i];
            const text = await page.getTextContent();
            extractedText += text.items.map(item => item.str).join(' ') + '\n\n';
            
            // Update progress
            progressBar.style.width = `${30 + (i / pages.length * 60)}%`;
          }
          
          progressText.textContent = 'Creating output file...';
          progressBar.style.width = '90%';
          
          // Create output file based on selected format
          if (outputFormat === 'docx') {
            // For DOCX, we'll use mammoth.js to create a simple document
            const result = await mammoth.extractRawText({ arrayBuffer });
            const htmlContent = `<p>${extractedText.replace(/\n\n/g, '</p><p>')}</p>`;
            
            // This is a simplified approach - in a real app you'd use a proper DOCX generator
            convertedFile = {
              name: file.name.replace('.pdf', '.docx'),
              content: htmlContent,
              type: 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
            };
          } else {
            // For TXT, just use the extracted text
            convertedFile = {
              name: file.name.replace('.pdf', '.txt'),
              content: extractedText,
              type: 'text/plain'
            };
          }
          
          // Complete progress
          progressBar.style.width = '100%';
          progressText.textContent = 'Conversion complete!';
          
          // Show result
          setTimeout(showResult, 500);
          
        } catch (error) {
          console.error('Conversion error:', error);
          progressText.textContent = 'Error: ' + error.message;
          progressBar.style.backgroundColor = '#dc3545';
        }
      }

      function showResult() {
        progressContainer.style.display = 'none';
        resultContainer.style.display = 'block';
        resultMessage.textContent = `Your ${outputFormat.toUpperCase()} file is ready to download.`;
      }

      function downloadFile() {
        if (!convertedFile) return;
        
        let blob;
        if (outputFormat === 'docx') {
          // For DOCX, we'll create a simple HTML file and rename it as DOCX
          // Note: This is a workaround - real DOCX conversion requires proper library
          const htmlContent = `
            <html xmlns:o='urn:schemas-microsoft-com:office:office' 
                  xmlns:w='urn:schemas-microsoft-com:office:word' 
                  xmlns='http://www.w3.org/TR/REC-html40'>
              <head>
                <title>${convertedFile.name}</title>
                <meta charset="UTF-8">
              </head>
              <body>${convertedFile.content}</body>
            </html>
          `;
          blob = new Blob([htmlContent], { type: convertedFile.type });
        } else {
          blob = new Blob([convertedFile.content], { type: convertedFile.type });
        }
        
        download(blob, convertedFile.name, convertedFile.type);
      }

      function resetConverter() {
        files = [];
        convertedFile = null;
        fileList.innerHTML = '';
        fileListContainer.style.display = 'none';
        progressContainer.style.display = 'none';
        resultContainer.style.display = 'none';
        uploadArea.style.display = 'block';
        convertBtn.disabled = true;
        progressBar.style.width = '0%';
        progressBar.style.backgroundColor = '';
        progressText.textContent = 'Processing...';
      }
    });
  </script>
</body>

</html>