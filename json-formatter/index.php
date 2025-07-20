<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>JSON Formatter Online - Beautify, Validate & Format JSON Data</title>
  <meta name="description" content="Free online JSON formatter and validator tool. Beautify, minify, validate, and format JSON data with our powerful JSON viewer. Works as Chrome extension too.">
  <meta name="keywords" content="json formatter online, json beautifier online, json file formatter, best json formatter, chrome plugin for json formatter, codebeautify json, extension json formatter, free json formatter, free online json formatter, json beautifier chrome, json data formatter, json format chrome extension, json formatter & validator, json formatter and validator, json formatter example, json prettifier, json viewer online, json validator, json linter, json parser online">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
    .json-formatter {
      padding: 60px 0;
    }
    .editor-container {
      height: 400px;
      border: 1px solid #dee2e6;
      border-radius: 0.375rem;
      margin-bottom: 20px;
    }
    #json-input, #json-output {
      width: 100%;
      height: 100%;
      font-family: 'Courier New', Courier, monospace;
      font-size: 14px;
    }
    .btn-group-actions {
      margin-bottom: 20px;
    }
    .json-stats {
      background-color: #f8f9fa;
      padding: 10px;
      border-radius: 0.375rem;
      margin-top: 10px;
    }
    .tab-content {
      padding: 15px 0;
    }
    .error-message {
      color: #dc3545;
      font-weight: bold;
    }
    .tree-view {
      font-family: 'Courier New', Courier, monospace;
      white-space: pre;
      overflow-x: auto;
    }
    .seo-keywords {
      display: none; /* Hide but keep for SEO */
    }
    .editor-container {
      height: 400px;
      border: 1px solid #dee2e6;
      border-radius: 0.375rem;
      overflow: auto;
    }

    .tree-view {
      font-family: 'Courier New', Courier, monospace;
      white-space: pre;
      overflow-x: auto;
      padding: 10px;
    }

    #json-input, #json-output {
      width: 100%;
      height: 100%;
      border: none;
      resize: none;
      padding: 15px;
      background-color: #f8f9fa;
    }

    #json-input:focus, #json-output:focus {
      outline: none;
    }

    .btn-group-actions {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
    }

    @media (max-width: 992px) {
      .col-md-4 {
        margin-bottom: 20px;
      }
    }
  </style>
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
              <h1>JSON Formatter Online</h1>
              <p class="mb-0">Free online tool to format, validate, beautify, and analyze JSON data. Works as both JSON viewer and editor.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="../index.php">Home</a></li>
            <li class="current">JSON Formatter</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- JSON Formatter Section -->
    <section id="json-formatter" class="section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Free JSON Formatter & Validator</h2>
        <div><span>Beautify</span> <span class="description-title">Minify</span> <span>Validate</span> <span class="description-title">JSON Data</span></div>
        <p class="mt-3">Paste your JSON data below to format, validate, and analyze it with our powerful JSON tool</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
  <div class="row">
    <div class="col-lg-12">
      <div class="btn-group-actions mb-4">
        <button id="format-btn" class="btn btn-primary">
          <i class="bi bi-code-square me-2"></i>Format JSON
        </button>
        <button id="minify-btn" class="btn btn-secondary">
          <i class="bi bi-file-minus me-2"></i>Minify JSON
        </button>
        <button id="validate-btn" class="btn btn-success">
          <i class="bi bi-check-circle me-2"></i>Validate
        </button>
        <button id="clear-btn" class="btn btn-danger">
          <i class="bi bi-trash me-2"></i>Clear
        </button>
        <button id="copy-btn" class="btn btn-info">
          <i class="bi bi-clipboard me-2"></i>Copy
        </button>
        <button id="download-btn" class="btn btn-warning">
          <i class="bi bi-download me-2"></i>Download
        </button>
        <button id="sample-btn" class="btn btn-light">
          <i class="bi bi-file-earmark-code me-2"></i>Load Sample
        </button>
      </div>

      <div class="row g-4">
        <!-- Input Column -->
        <div class="col-md-4">
          <h5 class="mb-3 text-center"><i class="bi bi-input-cursor-text me-2"></i>JSON Input</h5>
          <div class="editor-container">
            <textarea id="json-input" class="form-control" 
                     placeholder='Paste your JSON here or click "Load Sample"'
                     oninput="formatJsonLive()"></textarea>
          </div>
        </div>
        
        <!-- Formatted Output Column -->
        <div class="col-md-4">
          <h5 class="mb-3 text-center"><i class="bi bi-code-slash me-2"></i>Formatted Output</h5>
          <div class="editor-container">
            <pre id="json-output" class="h-100">Formatted JSON will appear here</pre>
          </div>
        </div>
        
        <!-- Tree View Column -->
        <div class="col-md-4">
          <h5 class="mb-3 text-center"><i class="bi bi-diagram-3 me-2"></i>Tree View</h5>
          <div class="editor-container">
            <div id="json-tree" class="tree-view h-100">Tree visualization will appear here</div>
          </div>
        </div>
      </div>

      <div id="json-stats" class="json-stats mt-4" style="display: none;">
        <div class="row">
          <div class="col-md-3">
            <strong>Status:</strong> <span id="validation-status" class="text-success">Valid JSON</span>
          </div>
          <div class="col-md-3">
            <strong>Size:</strong> <span id="json-size">0</span> bytes
          </div>
          <div class="col-md-3">
            <strong>Characters:</strong> <span id="json-chars">0</span>
          </div>
          <div class="col-md-3">
            <strong>Lines:</strong> <span id="json-lines">0</span>
          </div>
        </div>
      </div>

      <div id="error-message" class="error-message mt-3" style="display: none;"></div>
    </div>
  </div>
</div>
      
      <!-- Hidden SEO Content -->
      <div class="seo-keywords">
        <p>json formatter online, json beautifier online, json file formatter, best json formatter, chrome plugin for json formatter, codebeautify json, extension json formatter, free json formatter, free online json formatter, json beautifier chrome, json data formatter, json format chrome extension, json formatter & validator, json formatter and validator, json formatter example, json prettifier, json viewer online, json validator, json linter, json parser online</p>
      </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="section bg-light">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Advanced JSON Formatter Features</h2>
          <p>Everything you need to work with JSON data</p>
        </div>
        <div class="row g-4">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3"><i class="bi bi-braces"></i></div>
                <h5>JSON Beautifier</h5>
                <p>Format messy JSON data into human-readable form with proper indentation and line breaks</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3"><i class="bi bi-file-code"></i></div>
                <h5>JSON Minifier</h5>
                <p>Compress JSON by removing all unnecessary whitespace to reduce file size</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3"><i class="bi bi-check-circle"></i></div>
                <h5>JSON Validator</h5>
                <p>Check if your JSON is valid and get detailed error messages for debugging</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3"><i class="bi bi-diagram-3"></i></div>
                <h5>Tree Viewer</h5>
                <p>Visualize JSON structure in an expandable tree format for better understanding</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3"><i class="bi bi-clipboard"></i></div>
                <h5>Copy & Download</h5>
                <p>Easily copy formatted JSON to clipboard or download as a file</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3"><i class="bi bi-puzzle"></i></div>
                <h5>Chrome Extension</h5>
                <p>Install our JSON formatter as a Chrome extension for easy access</p>
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
          <h2>How to Use the JSON Formatter</h2>
          <p>Simple steps to format and validate your JSON data</p>
        </div>
        <div class="row g-4">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3">1</div>
                <h5>Paste JSON</h5>
                <p>Copy and paste your JSON data into the input area or load a sample</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3">2</div>
                <h5>Format/Validate</h5>
                <p>Click "Format JSON" to beautify or "Validate" to check for errors</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3">3</div>
                <h5>View & Export</h5>
                <p>View formatted output, tree structure, and copy/download results</p>
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
    // Elements
    const jsonInput = document.getElementById('json-input');
    const jsonOutput = document.getElementById('json-output');
    const jsonTree = document.getElementById('json-tree');
    const formatBtn = document.getElementById('format-btn');
    const minifyBtn = document.getElementById('minify-btn');
    const validateBtn = document.getElementById('validate-btn');
    const clearBtn = document.getElementById('clear-btn');
    const copyBtn = document.getElementById('copy-btn');
    const downloadBtn = document.getElementById('download-btn');
    const sampleBtn = document.getElementById('sample-btn');
    const jsonStats = document.getElementById('json-stats');
    const validationStatus = document.getElementById('validation-status');
    const jsonSize = document.getElementById('json-size');
    const jsonChars = document.getElementById('json-chars');
    const jsonLines = document.getElementById('json-lines');
    const errorMessage = document.getElementById('error-message');
    
    if (!jsonInput || !jsonOutput || !formatBtn) {
      throw new Error('Essential elements are missing from the page');
    }

    // Sample JSON data
    const sampleJson = `{
  "name": "JSON Formatter Online",
  "description": "A free tool to format, validate and analyze JSON data",
  "features": [
    "Beautify JSON",
    "Minify JSON",
    "Validate JSON",
    "Tree View",
    "Copy to Clipboard",
    "Download as File"
  ],
  "stats": {
    "users": 15000,
    "rating": 4.8,
    "languages": ["English", "Spanish", "French"]
  },
  "isFree": true
}`;

    // Load sample JSON
    sampleBtn.addEventListener('click', () => {
      jsonInput.value = sampleJson;
      formatJson();
    });

    // Format JSON
    formatBtn.addEventListener('click', formatJson);

    // Minify JSON
    minifyBtn.addEventListener('click', () => {
      try {
        const jsonObj = JSON.parse(jsonInput.value);
        const minified = JSON.stringify(jsonObj);
        jsonOutput.textContent = minified;
        updateStats(minified);
        showTreeView(jsonObj);
        showSuccess("JSON minified successfully");
      } catch (err) {
        showError(err.message);
      }
    });

    // Validate JSON
    validateBtn.addEventListener('click', () => {
      try {
        JSON.parse(jsonInput.value);
        showSuccess("JSON is valid");
        formatJson();
      } catch (err) {
        showError(err.message);
      }
    });

    // Clear all
    clearBtn.addEventListener('click', () => {
      jsonInput.value = '';
      jsonOutput.textContent = '';
      jsonTree.innerHTML = '';
      jsonStats.style.display = 'none';
      errorMessage.style.display = 'none';
    });

    // Copy to clipboard
    copyBtn.addEventListener('click', () => {
      if (jsonOutput.textContent.trim()) {
        navigator.clipboard.writeText(jsonOutput.textContent)
          .then(() => showSuccess("Copied to clipboard"))
          .catch(err => showError("Failed to copy: " + err));
      } else {
        showError("No formatted JSON to copy");
      }
    });

    // Download JSON
    downloadBtn.addEventListener('click', () => {
      if (jsonOutput.textContent.trim()) {
        const blob = new Blob([jsonOutput.textContent], { type: 'application/json' });
        const url = URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = 'formatted.json';
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
        URL.revokeObjectURL(url);
        showSuccess("Download started");
      } else {
        showError("No JSON to download");
      }
    });

    // Format JSON function
    function formatJson() {
      try {
        const jsonObj = JSON.parse(jsonInput.value);
        const formatted = JSON.stringify(jsonObj, null, 2);
        jsonOutput.textContent = formatted;
        updateStats(formatted);
        showTreeView(jsonObj);
        showSuccess("JSON formatted successfully");
      } catch (err) {
        showError(err.message);
      }
    }

    // Update statistics
    function updateStats(jsonText) {
      jsonSize.textContent = new Blob([jsonText]).size;
      jsonChars.textContent = jsonText.length;
      jsonLines.textContent = jsonText.split('\n').length;
      jsonStats.style.display = 'block';
    }

    // Show tree view
    function showTreeView(jsonObj) {
      jsonTree.innerHTML = '';
      jsonTree.appendChild(createTreeElement(jsonObj));
    }

    // Recursive function to create tree elements
    function createTreeElement(data, parentKey = '') {
      const ul = document.createElement('ul');
      ul.className = 'list-unstyled';
      
      if (typeof data !== 'object' || data === null) {
        const li = document.createElement('li');
        li.textContent = `${parentKey}: ${data}`;
        ul.appendChild(li);
        return ul;
      }
      
      for (const key in data) {
        const li = document.createElement('li');
        const span = document.createElement('span');
        span.textContent = key + ': ';
        span.style.fontWeight = 'bold';
        li.appendChild(span);
        
        if (typeof data[key] === 'object' && data[key] !== null) {
          const toggle = document.createElement('span');
          toggle.textContent = '▶';
          toggle.style.cursor = 'pointer';
          toggle.style.marginRight = '5px';
          toggle.onclick = function() {
            const childUl = this.nextElementSibling;
            if (childUl.style.display === 'none') {
              childUl.style.display = 'block';
              this.textContent = '▼';
            } else {
              childUl.style.display = 'none';
              this.textContent = '▶';
            }
          };
          li.insertBefore(toggle, span);
          
          const childUl = createTreeElement(data[key]);
          childUl.style.display = 'none';
          li.appendChild(childUl);
        } else {
          const valueSpan = document.createElement('span');
          valueSpan.textContent = typeof data[key] === 'string' ? `"${data[key]}"` : data[key];
          li.appendChild(valueSpan);
        }
        
        ul.appendChild(li);
      }
      
      return ul;
    }

    // Show success message
    function showSuccess(message) {
      errorMessage.style.display = 'none';
      validationStatus.textContent = message;
      validationStatus.className = 'text-success';
      jsonStats.style.display = 'block';
    }

    // Show error message
    function showError(message) {
      errorMessage.textContent = message;
      errorMessage.style.display = 'block';
      validationStatus.textContent = 'Invalid JSON';
      validationStatus.className = 'text-danger';
      jsonStats.style.display = 'block';
    }

  } catch (error) {
    console.error('Error initializing JSON formatter:', error);
  }
});
function formatJsonLive() {
  // Add slight delay to prevent constant reformatting while typing
  clearTimeout(window.formatJsonTimeout);
  window.formatJsonTimeout = setTimeout(formatJson, 500);
}

// Modify your existing formatJson function to handle empty input
function formatJson() {
  try {
    const input = jsonInput.value.trim();
    if (!input) {
      jsonOutput.textContent = 'Formatted JSON will appear here';
      jsonTree.innerHTML = 'Tree visualization will appear here';
      jsonStats.style.display = 'none';
      errorMessage.style.display = 'none';
      return;
    }
    
    const jsonObj = JSON.parse(input);
    const formatted = JSON.stringify(jsonObj, null, 2);
    jsonOutput.textContent = formatted;
    updateStats(formatted);
    showTreeView(jsonObj);
    showSuccess("JSON formatted successfully");
  } catch (err) {
    jsonOutput.textContent = 'Invalid JSON - ' + err.message;
    jsonTree.innerHTML = 'Cannot display tree for invalid JSON';
    showError(err.message);
  }
}

// Update your existing showTreeView function to handle empty state
function showTreeView(jsonObj) {
  jsonTree.innerHTML = '';
  if (!jsonObj || typeof jsonObj !== 'object') {
    jsonTree.textContent = 'No valid JSON object to display';
    return;
  }
  jsonTree.appendChild(createTreeElement(jsonObj));
}
</script>