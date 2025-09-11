<?php include("../includes/track_visitors.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>HTML Formatter - Free Online HTML Beautifier Tool</title>
  <meta name="description" content="Free online HTML formatter and beautifier tool. Format your HTML code with customizable options including indentation level, encoding, and more.">
  <meta name="keywords" content="html formatter, html5 formatter, beautify html, html formatter online, html beautifier online, beautify html code, html code format, html text formatter, free html formatter, html code formatter online">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link rel="canonical" href="https://accuwebtools.com/html-formatter" />
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
    .formatter-container {
      max-width: 2500px;
      margin: 0 auto;
    }
    .code-editor {
      font-family: 'Courier New', monospace;
      font-size: 14px;
      line-height: 1.5;
      min-height: 300px;
    }
    .option-card {
      transition: all 0.3s ease;
      height: 100%;
    }
    .option-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    .action-buttons {
      display: flex;
      gap: 10px;
      justify-content: center;
      margin-top: 20px;
    }
    .btn-action {
      min-width: 120px;
    }
    .output-actions {
      display: none;
    }
    .formatted-output {
      background-color: #f8f9fa;
      border: 1px solid #dee2e6;
      border-radius: 0.375rem;
      padding: 12px;
      min-height: 300px;
      font-family: 'Courier New', monospace;
      font-size: 14px;
      line-height: 1.5;
      white-space: pre-wrap;
      overflow: auto;
    }
    .upload-btn {
      position: relative;
      overflow: hidden;
    }
    .upload-btn input[type=file] {
      position: absolute;
      top: 0;
      right: 0;
      min-width: 100%;
      min-height: 100%;
      font-size: 100px;
      text-align: right;
      filter: alpha(opacity=0);
      opacity: 0;
      outline: none;
      background: white;
      cursor: pointer;
      display: block;
    }
  </style>
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
              <h1>HTML Formatter</h1>
              <p class="mb-0">Beautify and format your HTML code for better readability and maintainability</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="../index.php">Home</a></li>
            <li class="current">HTML Formatter</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- HTML Formatter Section -->
    <section id="html-formatter" class="section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-10 formatter-container">
            
           <!-- Input/Output Area with Options on the Left -->
            <div class="card shadow-sm">
              <div class="card-body">
                <div class="row">
                  
                  <!-- Left Column: Formatting Options -->
                  <div class="col-lg-4 mb-4">
                    <div class="card option-card h-100">
                      <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Formatting Options</h5>
                      </div>
                      <div class="card-body">
                        <!-- Indentation -->
                        <div class="mb-3">
                          <label for="indentation" class="form-label">Indentation</label>
                          <select class="form-select" id="indentation">
                            <option value="2">2 spaces</option>
                            <option value="4" selected>4 spaces</option>
                            <option value="tab">Tab</option>
                            <option value="none">No indentation</option>
                          </select>
                        </div>

                        <!-- Encoding -->
                        <div class="mb-3">
                          <label for="encoding" class="form-label">Encoding</label>
                          <select class="form-select" id="encoding">
                            <option value="utf-8" selected>UTF-8</option>
                            <option value="iso-8859-1">ISO-8859-1</option>
                            <option value="windows-1252">Windows-1252</option>
                          </select>
                        </div>

                        <!-- Additional Options -->
                        <div>
                          <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="preserve-newlines" checked>
                            <label class="form-check-label" for="preserve-newlines">Preserve newlines</label>
                          </div>
                          <div class="form-check form-switch mt-2">
                            <input class="form-check-input" type="checkbox" id="wrap-attributes">
                            <label class="form-check-label" for="wrap-attributes">Wrap attributes</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Right Column: Input/Output -->
                  <div class="col-lg-8">
                    <label for="html-input" class="form-label">HTML Code</label>
                    <textarea class="form-control code-editor" id="html-input" rows="15" placeholder="Paste your HTML code here..."></textarea>

                    <!-- Action Buttons -->
                    <div class="action-buttons mt-4">
                      <button class="btn btn-primary btn-action" id="format-btn">
                        <i class="bi bi-magic me-2"></i> Format HTML
                      </button>
                      <label class="btn btn-outline-primary upload-btn btn-action">
                        <i class="bi bi-upload me-2"></i> Upload File
                        <input type="file" id="html-file-upload" accept=".html,.htm,.txt" hidden>
                      </label>
                    </div>

                    <!-- Output Section -->
                    <div class="mt-4">
                      <label for="html-output" class="form-label">Formatted HTML</label>
                      <div class="formatted-output" id="html-output"></div>
                    </div>

                    <!-- Output Action Buttons -->
                    <div class="output-actions action-buttons mt-3" id="output-actions">
                      <button class="btn btn-success btn-action" id="copy-output-btn">
                        <i class="bi bi-clipboard me-2"></i> Copy
                      </button>
                      <button class="btn btn-info btn-action" id="clear-output-btn">
                        <i class="bi bi-x-circle me-2"></i> Clear
                      </button>
                      <button class="btn btn-warning btn-action" id="download-btn">
                        <i class="bi bi-download me-2"></i> Download
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            
            <!-- HTML Formatting Tips -->
            <div class="alert alert-info mt-4">
              <h5><i class="bi bi-lightbulb me-2"></i> HTML Formatting Tips</h5>
              <ul class="mb-0">
                <li>Consistent indentation makes HTML structure easier to understand</li>
                <li>Properly formatted HTML is more maintainable and easier to debug</li>
                <li>Well-structured HTML improves SEO and accessibility</li>
                <li>Formatting helps identify unclosed tags and nesting issues</li>
                <li>Clean HTML code loads faster and provides better user experience</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Why Format HTML Section -->
    <section id="why-format-html" class="section bg-light">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Why Format Your HTML?</h2>
          <p>Benefits of well-formatted HTML code for developers and teams</p>
        </div>
        <div class="row g-4">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3"><i class="bi bi-eye"></i></div>
                <h5>Improved Readability</h5>
                <p>Formatted HTML is easier to read and understand, especially for complex layouts with nested elements</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3"><i class="bi bi-people"></i></div>
                <h5>Team Collaboration</h5>
                <p>Consistent formatting makes it easier for team members to work with each other's HTML code</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3"><i class="bi bi-bug"></i></div>
                <h5>Easier Debugging</h5>
                <p>Properly formatted HTML helps identify unclosed tags and nesting issues more quickly</p>
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

  <!-- HTML Formatter Script -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const htmlInput = document.getElementById('html-input');
      const htmlOutput = document.getElementById('html-output');
      const formatBtn = document.getElementById('format-btn');
      const copyBtn = document.getElementById('copy-output-btn');
      const clearBtn = document.getElementById('clear-output-btn');
      const downloadBtn = document.getElementById('download-btn');
      const fileUpload = document.getElementById('html-file-upload');
      const indentationSelect = document.getElementById('indentation');
      const encodingSelect = document.getElementById('encoding');
      const preserveNewlinesCheckbox = document.getElementById('preserve-newlines');
      const wrapAttributesCheckbox = document.getElementById('wrap-attributes');
      const outputActions = document.getElementById('output-actions');
      
      // Function to format HTML
      function formatHTML(html, indentType, indentSize, preserveNewlines, wrapAttributes) {
        // If no HTML provided, return empty string
        if (!html || html.trim() === '') return '';
        
        let formatted = '';
        let indent = 0;
        const stack = [];
        const tokens = html.split(/(<[^>]*>)/);
        let inPreTag = false;
        
        // Determine indentation character
        let indentChar = ' ';
        if (indentType === 'tab') {
          indentChar = '\t';
          indentSize = 1;
        } else if (indentType === 'none') {
          indentChar = '';
          indentSize = 0;
        }
        
        tokens.forEach(token => {
          if (token.startsWith('</')) {
            // Closing tag
            if (!inPreTag) indent--;
            stack.pop();
            formatted += '\n' + indentChar.repeat(indent * indentSize) + token;
          } else if (token.startsWith('<') && !token.startsWith('<!--') && !token.startsWith('<!DOCTYPE')) {
            // Opening tag or self-closing tag
            if (token.startsWith('<pre')) {
              inPreTag = true;
            }
            
            if (!inPreTag) {
              formatted += '\n' + indentChar.repeat(indent * indentSize) + token;
            } else {
              formatted += token;
            }
            
            if (!token.endsWith('/>') && !token.startsWith('<!') && 
                !token.startsWith('<!--') && !token.includes('</')) {
              // It's an opening tag (not self-closing, comment, or doctype)
              stack.push(token);
              if (!inPreTag) indent++;
            }
            
            if (token.startsWith('</pre')) {
              inPreTag = false;
            }
          } else {
            // Text content
            if (inPreTag) {
              formatted += token;
            } else if (preserveNewlines && token.includes('\n')) {
              // Preserve newlines in text content
              const lines = token.split('\n');
              lines.forEach((line, index) => {
                if (line.trim() !== '') {
                  if (index === 0) {
                    formatted += line;
                  } else {
                    formatted += '\n' + indentChar.repeat(indent * indentSize) + line;
                  }
                }
              });
            } else {
              // Regular text content
              const trimmed = token.trim();
              if (trimmed !== '') {
                formatted += trimmed;
              }
            }
          }
        });
        
        // Clean up extra newlines and ensure proper encoding
        formatted = formatted.trim().replace(/\n\s*\n/g, '\n');
        
        // Add proper encoding meta tag if needed
        if (encodingSelect.value !== 'utf-8' && !formatted.includes('charset=')) {
          const metaTag = `<meta charset="${encodingSelect.value}">`;
          if (formatted.includes('</head>')) {
            formatted = formatted.replace('</head>', `  ${metaTag}\n  </head>`);
          } else if (formatted.includes('<head>')) {
            formatted = formatted.replace('<head>', `<head>\n  ${metaTag}`);
          } else if (formatted.includes('<html>')) {
            formatted = formatted.replace('<html>', `<html>\n<head>\n  ${metaTag}\n</head>`);
          }
        }
        
        return formatted;
      }
      
      // Format button click handler
      formatBtn.addEventListener('click', function() {
        const inputText = htmlInput.value;
        const indentType = indentationSelect.value === 'tab' ? 'tab' : 'space';
        const indentSize = indentType === 'tab' ? 1 : parseInt(indentationSelect.value);
        
        const formattedHTML = formatHTML(
          inputText, 
          indentType, 
          indentSize,
          preserveNewlinesCheckbox.checked,
          wrapAttributesCheckbox.checked
        );
        
        htmlOutput.textContent = formattedHTML;
        outputActions.style.display = 'flex';
      });
      
      // Copy button click handler
      copyBtn.addEventListener('click', function() {
        const outputText = htmlOutput.textContent;
        if (!outputText.trim()) return;
        
        navigator.clipboard.writeText(outputText).then(() => {
          const btn = document.getElementById('copy-output-btn');
          btn.innerHTML = '<i class="bi bi-check2 me-2"></i> Copied!';
          setTimeout(() => {
            btn.innerHTML = '<i class="bi bi-clipboard me-2"></i> Copy';
          }, 2000);
        });
      });
      
      // Clear button click handler
      clearBtn.addEventListener('click', function() {
        htmlInput.value = '';
        htmlOutput.textContent = '';
        outputActions.style.display = 'none';
      });
      
      // Download button click handler
      downloadBtn.addEventListener('click', function() {
        const outputText = htmlOutput.textContent;
        if (!outputText.trim()) return;
        
        const blob = new Blob([outputText], { type: 'text/html' });
        const url = URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = 'formatted.html';
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
        URL.revokeObjectURL(url);
      });
      
      // File upload handler
      fileUpload.addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (!file) return;
        
        const reader = new FileReader();
        reader.onload = function(e) {
          htmlInput.value = e.target.result;
          // Auto-format after upload
          formatBtn.click();
        };
        reader.readAsText(file);
      });
      
      // Auto-format when options change
      const optionElements = [
        indentationSelect, 
        encodingSelect, 
        preserveNewlinesCheckbox, 
        wrapAttributesCheckbox
      ];
      
      optionElements.forEach(element => {
        element.addEventListener('change', function() {
          if (htmlInput.value.trim() !== '') {
            formatBtn.click();
          }
        });
      });
      
      // Initialize with example if empty
      if (!htmlInput.value.trim()) {
        htmlInput.value = `<!DOCTYPE html><html><head><title>Example</title></head><body><div class="container"><h1>Welcome</h1><p>This is a sample HTML document</p><ul><li>Item 1</li><li>Item 2</li><li>Item 3</li></ul></div></body></html>`;
      }
    });
  </script>
</body>
</html>