<?php include("../includes/track_visitors.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Merge PDF Online - Combine PDF Files Free | PDF Merger Tool</title>
  <meta name="description" content="Free online tool to merge PDF files. Combine multiple PDFs into one document quickly and easily. No registration required. Works on all devices.">
  <meta name="keywords" content="merge pdf, combine pdf, combine pdf files, merge pdf free, merge pdf online, merge pdf files, combine pdf online, pdf combiner free, combine pdf files free, merge pdf online free, combine pdfs into one pdf, combine pdfs into one, adobe combine pdf, merge pdf files free, combine two pdfs, combining pdf files into one, combine documents into one pdf, combine multiple pdfs into one, merge two pdfs, merge pdf documents, merge files into one pdf, pdf joiner, merge pdfs into one, combine 2 pdfs, merge documents into one pdf, unite pdf files">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link rel="canonical" href="https://accuwebtools.com/merge-pdf" />
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
  <script src="https://unpkg.com/pdf-lib@1.17.1/dist/pdf-lib.min.js"></script>
  <script src="https://unpkg.com/pdf-lib@1.17.1/dist/pdf-lib.js"></script>
  <script src="https://unpkg.com/downloadjs@1.4.7"></script>
  <style>
    .pdf-merger {
      padding: 60px 0;
    }
    .upload-area {
      border: 2px dashed #dee2e6;
      border-radius: 0.375rem;
      padding: 40px;
      text-align: center;
      cursor: pointer;
      transition: all 0.3s;
      min-height: 300px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      background-color: #f8f9fa;
      margin-bottom: 30px;
    }
    .upload-area:hover {
      border-color: #0d6efd;
      background-color: #e9f0fd;
    }
    .upload-area.dragover {
      border-color: #0d6efd;
      background-color: #e9f0fd;
    }
    .upload-icon {
      font-size: 48px;
      color: #0d6efd;
      margin-bottom: 15px;
    }
    .file-list {
      list-style: none;
      padding: 0;
      margin: 20px 0;
    }
    .file-list-item {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 15px;
      background-color: #fff;
      border: 1px solid #dee2e6;
      border-radius: 0.375rem;
      margin-bottom: 10px;
    }
    .file-list-item .file-info {
      display: flex;
      align-items: center;
    }
    .file-list-item .file-icon {
      margin-right: 10px;
      color: #dc3545;
    }
    .file-list-item .file-name {
      margin-right: 10px;
      word-break: break-all;
    }
    .file-list-item .file-size {
      color: #6c757d;
      font-size: 0.875rem;
    }
    .file-list-item .remove-btn {
      color: #dc3545;
      cursor: pointer;
      background: none;
      border: none;
      padding: 0;
    }
    .merge-btn {
      padding: 12px 30px;
      font-size: 1.1rem;
    }
    .progress {
      height: 10px;
      margin: 20px 0;
    }
    .merge-result {
      text-align: center;
      padding: 30px;
      background-color: #f8f9fa;
      border-radius: 0.375rem;
      margin-top: 30px;
      display: none;
    }
    .result-icon {
      font-size: 60px;
      color: #198754;
      margin-bottom: 20px;
    }
    .download-btn {
      margin-top: 20px;
    }
    .seo-keywords {
      display: none;
    }
    @media (max-width: 768px) {
      .upload-area {
        padding: 20px;
        min-height: 200px;
      }
      .upload-icon {
        font-size: 36px;
      }
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
            <li class="current">Merge PDF</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- PDF Merger Section -->
    <section id="pdf-merger" class="section pdf-merger">
      <div class="container section-title" data-aos="fade-up">
        <h2>Free PDF Merger Tool</h2>
        <div><span>Combine</span> <span class="description-title">Merge</span> <span>Join</span> <span class="description-title">PDF Files</span></div>
        <p class="mt-3">Upload two or more PDF files to combine them into a single document</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <!-- Upload Area -->
            <div id="upload-area" class="upload-area">
              <div class="upload-icon">
                <i class="bi bi-file-earmark-pdf"></i>
              </div>
              <h4>Drag & Drop PDF Files Here</h4>
              <p class="text-muted">or click to browse files</p>
              <input type="file" id="file-input" class="d-none" accept=".pdf" multiple>
              <button id="browse-btn" class="btn btn-primary mt-3">
                <i class="bi bi-folder2-open me-2"></i>Select PDF Files
              </button>
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
                  <button id="merge-btn" class="btn btn-primary merge-btn" disabled>
                    <i class="bi bi-file-earmark-pdf me-2"></i>Merge PDFs
                  </button>
                </div>
              </div>
            </div>

            <!-- Progress Bar -->
            <div id="progress-container" class="progress-container" style="display: none;">
              <div class="progress">
                <div id="merge-progress" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 0%"></div>
              </div>
              <p id="progress-text" class="text-center text-muted">Merging your PDF files...</p>
            </div>

            <!-- Merge Result -->
            <div id="merge-result" class="merge-result">
              <div class="result-icon">
                <i class="bi bi-check-circle"></i>
              </div>
              <h4>PDFs Merged Successfully!</h4>
              <p id="result-info" class="text-muted">Your combined PDF file is ready to download</p>
              <button id="download-btn" class="btn btn-success download-btn">
                <i class="bi bi-download me-2"></i>Download Merged PDF
              </button>
              <button id="new-merge-btn" class="btn btn-outline-primary download-btn ms-2">
                <i class="bi bi-file-earmark-pdf me-2"></i>Merge More Files
              </button>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Hidden SEO Content -->
      <div class="seo-keywords">
        <p>merge pdf, combine pdf, combine pdf files, merge pdf free, merge pdf online, merge pdf files, combine pdf online, pdf combiner free, combine pdf files free, merge pdf online free, combine pdfs into one pdf, combine pdfs into one, adobe combine pdf, merge pdf files free, combine two pdfs, combining pdf files into one, combine documents into one pdf, combine multiple pdfs into one, merge two pdfs, merge pdf documents, merge files into one pdf, pdf joiner, merge pdfs into one, combine 2 pdfs, merge documents into one pdf, unite pdf files</p>
      </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="section bg-light">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Why Use Our PDF Merger?</h2>
          <p>Powerful features to combine your PDF documents</p>
        </div>
        <div class="row g-4">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3"><i class="bi bi-lightning"></i></div>
                <h5>Fast Processing</h5>
                <p>Merge PDF files quickly in the cloud without quality loss</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3"><i class="bi bi-shield-lock"></i></div>
                <h5>Secure</h5>
                <p>Files are processed securely and deleted automatically</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3"><i class="bi bi-device-phone"></i></div>
                <h5>Works Everywhere</h5>
                <p>Use on any device - computer, tablet or smartphone</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3"><i class="bi bi-upload"></i></div>
                <h5>Easy Upload</h5>
                <p>Drag & drop or select files from your device</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3"><i class="bi bi-file-earmark-pdf"></i></div>
                <h5>PDF Quality</h5>
                <p>Preserves original quality of your PDF documents</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3"><i class="bi bi-coin"></i></div>
                <h5>Completely Free</h5>
                <p>No watermarks, no registration, no limits</p>
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
          <h2>How to Merge PDF Files</h2>
          <p>Combine your documents in just 3 simple steps</p>
        </div>
        <div class="row g-4">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3">1</div>
                <h5>Upload PDFs</h5>
                <p>Select or drag and drop your PDF files to the upload area</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3">2</div>
                <h5>Merge Files</h5>
                <p>Click the "Merge PDFs" button to combine your documents</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3">3</div>
                <h5>Download</h5>
                <p>Save your new merged PDF file to your device</p>
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

  <!-- PDF Merger Script -->
  <script>
    // DOM Elements
    const uploadArea = document.getElementById('upload-area');
    const fileInput = document.getElementById('file-input');
    const browseBtn = document.getElementById('browse-btn');
    const addMoreBtn = document.getElementById('add-more-btn');
    const clearAllBtn = document.getElementById('clear-all-btn');
    const mergeBtn = document.getElementById('merge-btn');
    const fileList = document.getElementById('file-list');
    const fileListContainer = document.getElementById('file-list-container');
    const progressContainer = document.getElementById('progress-container');
    const mergeProgress = document.getElementById('merge-progress');
    const progressText = document.getElementById('progress-text');
    const mergeResult = document.getElementById('merge-result');
    const downloadBtn = document.getElementById('download-btn');
    const newMergeBtn = document.getElementById('new-merge-btn');
    
    // Store uploaded files
    let pdfFiles = [];
    let mergedPdfBytes = null;

    // Event Listeners
    browseBtn.addEventListener('click', () => fileInput.click());
    addMoreBtn.addEventListener('click', () => fileInput.click());
    clearAllBtn.addEventListener('click', clearAllFiles);
    mergeBtn.addEventListener('click', mergePdfs);
    downloadBtn.addEventListener('click', downloadMergedPdf);
    newMergeBtn.addEventListener('click', resetTool);
    fileInput.addEventListener('change', handleFileSelect);

    // Drag and Drop events
    uploadArea.addEventListener('dragover', (e) => {
      e.preventDefault();
      uploadArea.classList.add('dragover');
    });

    uploadArea.addEventListener('dragleave', () => {
      uploadArea.classList.remove('dragover');
    });

    uploadArea.addEventListener('drop', (e) => {
      e.preventDefault();
      uploadArea.classList.remove('dragover');
      
      if (e.dataTransfer.files.length > 0) {
        handleFileSelect({ target: { files: e.dataTransfer.files } });
      }
    });

    // Handle file selection
    function handleFileSelect(event) {
      const files = Array.from(event.target.files);
      
      // Filter only PDF files
      const pdfs = files.filter(file => {
        return file.type === 'application/pdf' || file.name.toLowerCase().endsWith('.pdf');
      });
      
      if (pdfs.length === 0) {
        alert('Please select only PDF files.');
        return;
      }
      
      // Add to our files array
      pdfFiles = [...pdfFiles, ...pdfs];
      
      // Update UI
      updateFileList();
      fileInput.value = ''; // Reset file input
    }

    // Update the file list UI
    function updateFileList() {
      fileList.innerHTML = '';
      
      pdfFiles.forEach((file, index) => {
        const listItem = document.createElement('li');
        listItem.className = 'file-list-item';
        
        listItem.innerHTML = `
          <div class="file-info">
            <i class="bi bi-file-earmark-pdf file-icon"></i>
            <span class="file-name">${file.name}</span>
            <span class="file-size">(${formatFileSize(file.size)})</span>
          </div>
          <button class="remove-btn" data-index="${index}">
            <i class="bi bi-x-lg"></i>
          </button>
        `;
        
        fileList.appendChild(listItem);
      });
      
      // Add event listeners to remove buttons
      document.querySelectorAll('.remove-btn').forEach(btn => {
        btn.addEventListener('click', (e) => {
          const index = parseInt(e.currentTarget.getAttribute('data-index'));
          removeFile(index);
        });
      });
      
      // Show file list if we have files
      if (pdfFiles.length > 0) {
        fileListContainer.style.display = 'block';
        mergeBtn.disabled = pdfFiles.length < 2;
      } else {
        fileListContainer.style.display = 'none';
      }
    }

    // Remove a file from the list
    function removeFile(index) {
      pdfFiles.splice(index, 1);
      updateFileList();
    }

    // Clear all files
    function clearAllFiles() {
      pdfFiles = [];
      updateFileList();
    }

    // Format file size
    function formatFileSize(bytes) {
      if (bytes === 0) return '0 Bytes';
      
      const k = 1024;
      const sizes = ['Bytes', 'KB', 'MB', 'GB'];
      const i = Math.floor(Math.log(bytes) / Math.log(k));
      
      return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
    }

    // Merge PDFs function - FIXED VERSION
    async function mergePdfs() {
      if (pdfFiles.length < 2) {
        alert('Please select at least 2 PDF files to merge.');
        return;
      }
      
      // Show progress
      fileListContainer.style.display = 'none';
      progressContainer.style.display = 'block';
      mergeProgress.style.width = '0%';
      progressText.textContent = 'Preparing files...';
      
      try {
        // Create a new PDF document
        const { PDFDocument } = PDFLib;
        const mergedPdf = await PDFDocument.create();
        
        // Process each PDF file
        for (let i = 0; i < pdfFiles.length; i++) {
          const file = pdfFiles[i];
          
          // Update progress
          const progress = Math.floor((i / pdfFiles.length) * 100);
          mergeProgress.style.width = `${progress}%`;
          progressText.textContent = `Processing ${i+1} of ${pdfFiles.length} files...`;
          
          try {
            // Read the file as array buffer
            const arrayBuffer = await readFileAsArrayBuffer(file);
            
            // Load the PDF with error handling
            const pdfDoc = await PDFDocument.load(arrayBuffer, {
              ignoreEncryption: true, // Handle encrypted PDFs
              throwOnInvalidObject: false // Skip invalid objects
            });
            
            // Copy pages to merged PDF
            const pages = await mergedPdf.copyPages(pdfDoc, pdfDoc.getPageIndices());
            pages.forEach(page => mergedPdf.addPage(page));
          } catch (err) {
            console.error(`Error processing file ${file.name}:`, err);
            // Skip problematic files but continue with others
            continue;
          }
        }
        
        // Check if we successfully added any pages
        if (mergedPdf.getPageCount() === 0) {
          throw new Error('No valid pages could be merged from the provided files');
        }
        
        // Finalize merge
        mergeProgress.style.width = '100%';
        progressText.textContent = 'Finalizing merged PDF...';
        
        // Save merged PDF
        mergedPdfBytes = await mergedPdf.save();
        
        // Show result
        progressContainer.style.display = 'none';
        mergeResult.style.display = 'block';
        
      } catch (error) {
        console.error('Error merging PDFs:', error);
        progressContainer.style.display = 'none';
        alert(`Error merging PDFs: ${error.message}`);
      }
    }

    // Improved file reader with error handling
    function readFileAsArrayBuffer(file) {
      return new Promise((resolve, reject) => {
        const reader = new FileReader();
        reader.onload = () => resolve(reader.result);
        reader.onerror = (err) => {
          console.error('Error reading file:', err);
          reject(new Error(`Could not read file: ${file.name}`));
        };
        reader.readAsArrayBuffer(file);
      });
    }

    // Fixed download function
    function downloadMergedPdf() {
      if (!mergedPdfBytes) {
        alert('No merged PDF available to download');
        return;
      }
      
      try {
        // Create a blob from the bytes
        const blob = new Blob([mergedPdfBytes], { type: 'application/pdf' });
        
        // Create object URL
        const url = URL.createObjectURL(blob);
        
        // Create download link
        const a = document.createElement('a');
        a.href = url;
        a.download = 'merged-document.pdf';
        document.body.appendChild(a);
        a.click();
        
        // Clean up
        setTimeout(() => {
          document.body.removeChild(a);
          URL.revokeObjectURL(url);
        }, 100);
      } catch (error) {
        console.error('Error downloading PDF:', error);
        alert('Error downloading the merged PDF. Please try again.');
      }
    }

    // Reset the tool for new merge
    function resetTool() {
      // Clean up
      if (mergedPdfBytes) {
        mergedPdfBytes = null;
      }
      
      // Reset UI
      mergeResult.style.display = 'none';
      fileListContainer.style.display = pdfFiles.length > 0 ? 'block' : 'none';
    }
  </script>

</body>

</html>