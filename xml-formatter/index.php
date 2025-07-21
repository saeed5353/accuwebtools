<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>XML Formatter Online - Beautify, Validate & Format XML Data</title>
  <meta name="description" content="Free online XML formatter and validator tool. Beautify, minify, validate, and format XML data with our powerful XML viewer. Works as Chrome extension too.">
  <meta name="keywords" content="xml formatter, xml formatter online, xml beautify, xml file formatter, beautifier xml, xml data format, xml indent online, xml beautifier online, free xml formatter, notepad xml formatter, xml prettifier, xml validator, xml linter, xml parser online, xml viewer">

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
    .xml-formatter {
      padding: 60px 0;
    }
    .editor-container {
      height: 400px;
      border: 1px solid #dee2e6;
      border-radius: 0.375rem;
      margin-bottom: 20px;
    }
    #xml-input, #xml-output {
      width: 100%;
      height: 100%;
      font-family: 'Courier New', Courier, monospace;
      font-size: 14px;
    }
    .btn-group-actions {
      margin-bottom: 20px;
    }
    .xml-stats {
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

    #xml-input, #xml-output {
      width: 100%;
      height: 100%;
      border: none;
      resize: none;
      padding: 15px;
      background-color: #f8f9fa;
    }

    #xml-input:focus, #xml-output:focus {
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
              <h1>XML Formatter Online</h1>
              <p class="mb-0">Free online tool to format, validate, beautify, and analyze XML data. Works as both XML viewer and editor.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="../index.php">Home</a></li>
            <li class="current">XML Formatter</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- XML Formatter Section -->
    <section id="xml-formatter" class="section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Free XML Formatter & Validator</h2>
        <div><span>Beautify</span> <span class="description-title">Minify</span> <span>Validate</span> <span class="description-title">XML Data</span></div>
        <p class="mt-3">Paste your XML data below to format, validate, and analyze it with our powerful XML tool</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
  <div class="row">
    <div class="col-lg-12">
      <div class="btn-group-actions mb-4">
        <button id="format-btn" class="btn btn-primary">
          <i class="bi bi-code-square me-2"></i>Format XML
        </button>
        <button id="minify-btn" class="btn btn-secondary">
          <i class="bi bi-file-minus me-2"></i>Minify XML
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
        <div class="col-md-6">
          <h5 class="mb-3 text-center"><i class="bi bi-input-cursor-text me-2"></i>XML Input</h5>
          <div class="editor-container">
            <textarea id="xml-input" class="form-control" 
                     placeholder='Paste your XML here or click "Load Sample"'
                     oninput="formatXmlLive()"></textarea>
          </div>
        </div>
        
        <!-- Formatted Output Column -->
        <div class="col-md-6">
          <h5 class="mb-3 text-center"><i class="bi bi-code-slash me-2"></i>Formatted Output</h5>
          <div class="editor-container">
            <pre id="xml-output" class="h-100">Formatted XML will appear here</pre>
          </div>
        </div>
      </div>

      <div id="xml-stats" class="xml-stats mt-4" style="display: none;">
        <div class="row">
          <div class="col-md-3">
            <strong>Status:</strong> <span id="validation-status" class="text-success">Valid XML</span>
          </div>
          <div class="col-md-3">
            <strong>Size:</strong> <span id="xml-size">0</span> bytes
          </div>
          <div class="col-md-3">
            <strong>Characters:</strong> <span id="xml-chars">0</span>
          </div>
          <div class="col-md-3">
            <strong>Lines:</strong> <span id="xml-lines">0</span>
          </div>
        </div>
      </div>

      <div id="error-message" class="error-message mt-3" style="display: none;"></div>
    </div>
  </div>
</div>
      
      <!-- Hidden SEO Content -->
      <div class="seo-keywords">
        <p>xml formatter, xml formatter online, xml beautify, xml file formatter, beautifier xml, xml data format, xml indent online, xml beautifier online, free xml formatter, notepad xml formatter, xml prettifier, xml validator, xml linter, xml parser online, xml viewer</p>
      </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="section bg-light">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Advanced XML Formatter Features</h2>
          <p>Everything you need to work with XML data</p>
        </div>
        <div class="row g-4">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3"><i class="bi bi-braces"></i></div>
                <h5>XML Beautifier</h5>
                <p>Format messy XML data into human-readable form with proper indentation and line breaks</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3"><i class="bi bi-file-code"></i></div>
                <h5>XML Minifier</h5>
                <p>Compress XML by removing all unnecessary whitespace to reduce file size</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3"><i class="bi bi-check-circle"></i></div>
                <h5>XML Validator</h5>
                <p>Check if your XML is valid and get detailed error messages for debugging</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3"><i class="bi bi-filetype-xml"></i></div>
                <h5>Syntax Highlighting</h5>
                <p>Color-coded XML elements for better readability and understanding</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3"><i class="bi bi-clipboard"></i></div>
                <h5>Copy & Download</h5>
                <p>Easily copy formatted XML to clipboard or download as a file</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3"><i class="bi bi-puzzle"></i></div>
                <h5>Chrome Extension</h5>
                <p>Install our XML formatter as a Chrome extension for easy access</p>
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
          <h2>How to Use the XML Formatter</h2>
          <p>Simple steps to format and validate your XML data</p>
        </div>
        <div class="row g-4">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3">1</div>
                <h5>Paste XML</h5>
                <p>Copy and paste your XML data into the input area or load a sample</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3">2</div>
                <h5>Format/Validate</h5>
                <p>Click "Format XML" to beautify or "Validate" to check for errors</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3">3</div>
                <h5>View & Export</h5>
                <p>View formatted output and copy/download results</p>
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

  <!-- XML Formatter Script -->
  <script>
    // Sample XML data
    const sampleXml = `<?xml version="1.0" encoding="UTF-8"?>
<catalog>
  <book id="bk101">
    <author>Gambardella, Matthew</author>
    <title>XML Developer's Guide</title>
    <genre>Computer</genre>
    <price>44.95</price>
    <publish_date>2000-10-01</publish_date>
    <description>An in-depth look at creating applications with XML.</description>
  </book>
  <book id="bk102">
    <author>Ralls, Kim</author>
    <title>Midnight Rain</title>
    <genre>Fantasy</genre>
    <price>5.95</price>
    <publish_date>2000-12-16</publish_date>
    <description>A former architect battles corporate zombies.</description>
  </book>
</catalog>`;

    // Format XML with proper indentation
    function formatXml(xml) {
      try {
        // Remove all line breaks and extra whitespace
        const trimmed = xml.replace(/\s+/g, ' ').trim();
        
        // Add line breaks between tags
        let formatted = '';
        let indent = '';
        const tab = '  ';
        let inTag = false;
        let inAttribute = false;
        
        for (let i = 0; i < trimmed.length; i++) {
          const char = trimmed[i];
          
          if (char === '<') {
            if (trimmed[i + 1] === '/') {
              // Closing tag
              indent = indent.substring(0, indent.length - tab.length);
              if (!inTag) {
                formatted += '\n' + indent;
              }
            } else {
              // Opening tag
              if (inTag) {
                formatted += '\n' + indent;
              }
              indent += tab;
            }
            inTag = true;
            inAttribute = false;
            formatted += char;
          } else if (char === '>') {
            inTag = false;
            inAttribute = false;
            formatted += char;
          } else if (char === '"') {
            inAttribute = !inAttribute;
            formatted += char;
          } else if (char === '/' && trimmed[i + 1] === '>') {
            // Self-closing tag
            indent = indent.substring(0, indent.length - tab.length);
            formatted += char;
          } else {
            formatted += char;
          }
        }
        
        return formatted.trim();
      } catch (e) {
        return xml; // Return original if formatting fails
      }
    }

    // Minify XML by removing extra whitespace
    function minifyXml(xml) {
      return xml.replace(/>\s+</g, '><').trim();
    }

    // Validate XML
    function validateXml(xml) {
      try {
        // Simple validation - check for proper tag structure
        if (!xml.includes('<') || !xml.includes('>')) {
          return { valid: false, message: 'No XML tags found' };
        }
        
        // Check for mismatched tags
        const tagStack = [];
        const tagRegex = /<\/?([a-zA-Z][^\s>]*)/g;
        let match;
        
        while ((match = tagRegex.exec(xml)) !== null) {
          const tagName = match[1];
          if (match[0].startsWith('</')) {
            // Closing tag
            if (tagStack.length === 0 || tagStack.pop() !== tagName) {
              return { valid: false, message: `Mismatched closing tag: ${tagName}` };
            }
          } else if (!match[0].endsWith('/>')) {
            // Opening tag (not self-closing)
            tagStack.push(tagName);
          }
        }
        
        if (tagStack.length > 0) {
          return { valid: false, message: `Unclosed tag: ${tagStack.pop()}` };
        }
        
        return { valid: true, message: 'Valid XML' };
      } catch (e) {
        return { valid: false, message: e.message };
      }
    }

    // Update statistics
    function updateStats(xml) {
      document.getElementById('xml-size').textContent = new Blob([xml]).size;
      document.getElementById('xml-chars').textContent = xml.length;
      document.getElementById('xml-lines').textContent = xml.split('\n').length;
      document.getElementById('xml-stats').style.display = 'block';
    }

    // Format XML on button click
    document.getElementById('format-btn').addEventListener('click', function() {
      const xmlInput = document.getElementById('xml-input').value;
      const formatted = formatXml(xmlInput);
      document.getElementById('xml-output').textContent = formatted;
      
      const validation = validateXml(formatted);
      document.getElementById('validation-status').textContent = validation.message;
      document.getElementById('validation-status').className = validation.valid ? 'text-success' : 'text-danger';
      
      updateStats(formatted);
      
      if (!validation.valid) {
        document.getElementById('error-message').textContent = validation.message;
        document.getElementById('error-message').style.display = 'block';
      } else {
        document.getElementById('error-message').style.display = 'none';
      }
    });

    // Minify XML on button click
    document.getElementById('minify-btn').addEventListener('click', function() {
      const xmlInput = document.getElementById('xml-input').value;
      const minified = minifyXml(xmlInput);
      document.getElementById('xml-output').textContent = minified;
      
      const validation = validateXml(minified);
      document.getElementById('validation-status').textContent = validation.message;
      document.getElementById('validation-status').className = validation.valid ? 'text-success' : 'text-danger';
      
      updateStats(minified);
      
      if (!validation.valid) {
        document.getElementById('error-message').textContent = validation.message;
        document.getElementById('error-message').style.display = 'block';
      } else {
        document.getElementById('error-message').style.display = 'none';
      }
    });

    // Validate XML on button click
    document.getElementById('validate-btn').addEventListener('click', function() {
      const xmlInput = document.getElementById('xml-input').value;
      const validation = validateXml(xmlInput);
      
      document.getElementById('validation-status').textContent = validation.message;
      document.getElementById('validation-status').className = validation.valid ? 'text-success' : 'text-danger';
      document.getElementById('xml-output').textContent = validation.valid ? 'XML is valid' : validation.message;
      
      updateStats(xmlInput);
      
      if (!validation.valid) {
        document.getElementById('error-message').textContent = validation.message;
        document.getElementById('error-message').style.display = 'block';
      } else {
        document.getElementById('error-message').style.display = 'none';
      }
    });

    // Clear inputs
    document.getElementById('clear-btn').addEventListener('click', function() {
      document.getElementById('xml-input').value = '';
      document.getElementById('xml-output').textContent = 'Formatted XML will appear here';
      document.getElementById('xml-stats').style.display = 'none';
      document.getElementById('error-message').style.display = 'none';
    });

    // Copy to clipboard
    document.getElementById('copy-btn').addEventListener('click', function() {
      const output = document.getElementById('xml-output').textContent;
      navigator.clipboard.writeText(output).then(() => {
        alert('XML copied to clipboard!');
      });
    });

    // Download XML
    document.getElementById('download-btn').addEventListener('click', function() {
      const output = document.getElementById('xml-output').textContent;
      const blob = new Blob([output], { type: 'application/xml' });
      const url = URL.createObjectURL(blob);
      const a = document.createElement('a');
      a.href = url;
      a.download = 'formatted.xml';
      document.body.appendChild(a);
      a.click();
      document.body.removeChild(a);
      URL.revokeObjectURL(url);
    });

    // Load sample XML
    document.getElementById('sample-btn').addEventListener('click', function() {
      document.getElementById('xml-input').value = sampleXml;
      const formatted = formatXml(sampleXml);
      document.getElementById('xml-output').textContent = formatted;
      
      const validation = validateXml(formatted);
      document.getElementById('validation-status').textContent = validation.message;
      document.getElementById('validation-status').className = validation.valid ? 'text-success' : 'text-danger';
      
      updateStats(formatted);
      document.getElementById('error-message').style.display = 'none';
    });

    // Live formatting as user types
    function formatXmlLive() {
      const xmlInput = document.getElementById('xml-input').value;
      if (xmlInput.trim().length > 0) {
        const formatted = formatXml(xmlInput);
        document.getElementById('xml-output').textContent = formatted;
        updateStats(formatted);
      } else {
        document.getElementById('xml-output').textContent = 'Formatted XML will appear here';
        document.getElementById('xml-stats').style.display = 'none';
      }
    }
  </script>

</body>

</html>