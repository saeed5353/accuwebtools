<?php include("../includes/track_visitors.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>SQL Formatter - Free and Instant SQL Formatter</title>
  <meta name="description" content="Free online SQL formatter tool. Beautify and format your SQL queries with customizable options including keyword case, indentation, comment removal, and compact mode.">
  <meta name="keywords" content="sql formatter, sql query formatter, sql formatter online, sql beautifier, sql query formatter online, sql beautify, sql beautifier online, sql code formatter, sql formatter ssms, sql pretty, query formatter, instant sql formatter, redgate sql formatter, beautify sql query online, beautify sql code, code beautify sql, code formatter sql, format t sql, formatter sql server, mysql formatter, oracle sql formatter, poor man sql formatter, poor sql formatter, postgresql formatter, pretty print sql online, sql code beautifier online, sql command formatter, sql developer formatter, sql developer sql formatter">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link rel="canonical" href="https://accuwebtools.com/sql-formatter" />
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
  <script src="https://unpkg.com/sql-formatter@2.3.3/dist/sql-formatter.min.js"></script>
  <!-- Main CSS File -->
  <link href="../assets/css/main.css" rel="stylesheet">
  <style>
    .sql-keyword {
      font-weight: bold;
      color: #0d6efd; /* Blue for keywords */
    }

    .sql-function {
      color: #9c27b0; /* Purple for SQL functions */
      font-weight: bold;
    }
    .code-editor {
      font-family: 'Courier New', Courier, monospace;
      min-height: 300px;
      border-radius: 5px;
    }
    .formatted-output {
      background-color: #f8f9fa;
      border: 1px solid #dee2e6;
      border-radius: 5px;
      padding: 15px;
      min-height: 300px;
      white-space: pre-wrap;
      font-family: 'Courier New', Courier, monospace;
    }
    .copy-btn {
      transition: all 0.3s;
    }
    .copy-btn:hover {
      transform: translateY(-2px);
    }
    .copy-btn.copied {
      background-color: #28a745 !important;
      border-color: #28a745 !important;
    }
    .option-card {
      cursor: pointer;
      transition: all 0.2s;
    }
    .option-card:hover {
      transform: scale(1.02);
      box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
    }
    .option-active {
      background-color: #0d6efd;
      color: white;
    }
    .seo-keywords {
      display: none; /* Hide but keep for SEO */
    }
    .sample-query-btn {
      position: absolute;
      right: 15px;
      top: 10px;
      z-index: 10;
    }
    .sql-keyword {
      font-weight: bold;
      color: #0d6efd;
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
              <h1>SQL Formatter</h1>
              <p class="mb-0">Beautify and format your SQL queries for better readability and maintainability. Customize formatting with various options.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="../index.php">Home</a></li>
            <li class="current">SQL Formatter</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- SQL Formatter Section -->
    <section id="sql-formatter" class="section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Free SQL Formatter</h2>
        <div><span>Beautify & Format</span> <span class="description-title">SQL Queries</span></div>
        <p class="mt-3">Improve readability of your SQL code with customizable formatting options</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-10">
            <div class="card shadow-sm">
              <div class="card-body">
                <!-- Input/Output Area -->
                <div class="row g-4">
                  <div class="col-md-6">
                    <div class="position-relative">
                      <label for="sql-input" class="form-label">Input SQL</label>
                      <textarea class="form-control code-editor" id="sql-input" rows="20" placeholder="Paste your SQL query here..."></textarea>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="sql-output" class="form-label">Formatted SQL</label>
                    <div class="formatted-output" id="sql-output"><pre><code></code></pre></div>
                  </div>
                </div>
                
                <!-- Action Buttons -->
                <div class="row mt-3">
                  <div class="col-md-6">
                    <!-- <button class="btn btn-primary w-100 py-2" id="format-btn">
                      <i class="bi bi-magic me-2"></i> Format SQL
                    </button> -->
                  </div>
                  <div class="col-md-6">
                    <button class="btn btn-success w-100 py-2 copy-btn" id="copy-output-btn">
                      <i class="bi bi-clipboard me-2"></i> Copy Formatted SQL
                    </button>
                  </div>
                </div>
                
                <hr>
                
                <!-- Formatting Options -->
                <!-- <h5 class="mb-3">Formatting Options</h5> -->
                <!-- <div class="row g-3"> -->
                  <!-- Keyword Case -->
                  <!-- <div class="col-md-4">
                    <div class="card option-card" data-option="keyword-case">
                      <div class="card-body text-center">
                        <i class="bi bi-type-h1 fs-3 mb-2"></i>
                        <h6>Keyword Case</h6>
                        <select class="form-select mt-2" id="keyword-case">
                          <option value="upper">UPPERCASE</option>
                          <option value="lower">lowercase</option>
                          <option value="capitalize" selected>Capitalize</option>
                          <option value="preserve">Preserve original</option>
                        </select>
                      </div>
                    </div>
                  </div> -->
                  
                  <!-- Column Name Case -->
                  <!-- <div class="col-md-4">
                    <div class="card option-card" data-option="identifier-case">
                      <div class="card-body text-center">
                        <i class="bi bi-text-paragraph fs-3 mb-2"></i>
                        <h6>Identifier Case</h6>
                        <select class="form-select mt-2" id="identifier-case">
                          <option value="preserve" selected>Preserve original</option>
                          <option value="upper">UPPERCASE</option>
                          <option value="lower">lowercase</option>
                          <option value="capitalize">Capitalize</option>
                        </select>
                      </div>
                    </div>
                  </div> -->
                  
                  <!-- Indentation -->
                  <!-- <div class="col-md-4">
                    <div class="card option-card" data-option="indentation">
                      <div class="card-body text-center">
                        <i class="bi bi-text-indent-left fs-3 mb-2"></i>
                        <h6>Indentation</h6>
                        <select class="form-select mt-2" id="indentation">
                          <option value="2">2 spaces</option>
                          <option value="4" selected>4 spaces</option>
                          <option value="tab">Tab</option>
                          <option value="none">No indentation</option>
                        </select>
                      </div>
                    </div>
                  </div> -->
                  
                  <!-- Additional Options -->
                  <!-- <div class="col-12 mt-3">
                    <div class="row g-3">
                      <div class="col-md-3">
                        <div class="form-check form-switch">
                          <input class="form-check-input" type="checkbox" id="remove-comments" checked>
                          <label class="form-check-label" for="remove-comments">Remove comments</label>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-check form-switch">
                          <input class="form-check-input" type="checkbox" id="compact-mode">
                          <label class="form-check-label" for="compact-mode">Compact mode</label>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-check form-switch">
                          <input class="form-check-input" type="checkbox" id="align-joins" checked>
                          <label class="form-check-label" for="align-joins">Align JOINs</label>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-check form-switch">
                          <input class="form-check-input" type="checkbox" id="break-long-lines" checked>
                          <label class="form-check-label" for="break-long-lines">Break long lines</label>
                        </div>
                      </div>
                    </div>
                  </div> -->
                <!-- </div> -->
              </div>
            </div>
            
            <!-- SQL Formatting Tips -->
            <div class="alert alert-info mt-4">
              <h5><i class="bi bi-lightbulb me-2"></i> SQL Formatting Tips</h5>
              <ul class="mb-0">
                <li>Consistent indentation makes complex queries easier to understand</li>
                <li>Standardized keyword casing improves readability</li>
                <li>Proper line breaks help visualize query structure</li>
                <li>Removing unnecessary comments can clean up your code</li>
                <li>Well-formatted SQL is easier to debug and maintain</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Hidden SEO Content -->
      <div class="seo-keywords">
        <p>sql formatter, sql query formatter, sql formatter online, sql beautifier, sql query formatter online, sql beautify, sql beautifier online, sql code formatter, sql formatter ssms, sql pretty, query formatter, instant sql formatter, redgate sql formatter, beautify sql query online, beautify sql code, code beautify sql, code formatter sql, format t sql, formatter sql server, mysql formatter, oracle sql formatter, poor man sql formatter, poor sql formatter, postgresql formatter, pretty print sql online, sql code beautifier online, sql command formatter, sql developer formatter, sql developer sql formatter</p>
      </div>
    </section>

    <!-- Why Format SQL Section -->
    <section id="why-format-sql" class="section bg-light">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Why Format Your SQL?</h2>
          <p>Benefits of well-formatted SQL queries for developers and teams</p>
        </div>
        <div class="row g-4">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3"><i class="bi bi-eye"></i></div>
                <h5>Improved Readability</h5>
                <p>Formatted SQL is easier to read and understand, especially for complex queries with multiple joins and subqueries</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3"><i class="bi bi-people"></i></div>
                <h5>Team Collaboration</h5>
                <p>Consistent formatting makes it easier for team members to work with each other's SQL code</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3"><i class="bi bi-bug"></i></div>
                <h5>Easier Debugging</h5>
                <p>Properly formatted SQL helps identify syntax errors and logical issues more quickly</p>
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

  <!-- SQL Formatter Script -->
  <script>
    var textarea = document.querySelector('textarea');
    var code = document.querySelector('code');

    var format = window.sqlFormatter.format;

    textarea.addEventListener('input', function(event) {
      code.innerText = format(event.target.value);
    });
    document.getElementById('copy-output-btn').addEventListener('click', function() {
      const output = document.getElementById('sql-output').innerText;
      if (!output.trim()) return;

      navigator.clipboard.writeText(output).then(() => {
        const btn = document.getElementById('copy-output-btn');
        btn.classList.add('copied');
        btn.innerHTML = '<i class="bi bi-check2 me-2"></i> Copied!';
        setTimeout(() => {
          btn.classList.remove('copied');
          btn.innerHTML = '<i class="bi bi-clipboard me-2"></i> Copy Formatted SQL';
        }, 2000);
      });
    });
  </script>
</body>
</html>