<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>SQL Formatter - Beautify & Format SQL Queries Online</title>
  <meta name="description" content="Free online SQL formatter tool. Beautify and format your SQL queries with customizable options including keyword case, indentation, comment removal, and compact mode.">
  <meta name="keywords" content="sql formatter, sql query formatter, sql formatter online, sql beautifier, sql query formatter online, sql beautify, sql beautifier online, sql code formatter, sql formatter ssms, sql pretty, query formatter, instant sql formatter, redgate sql formatter, beautify sql query online, beautify sql code, code beautify sql, code formatter sql, format t sql, formatter sql server, mysql formatter, oracle sql formatter, poor man sql formatter, poor sql formatter, postgresql formatter, pretty print sql online, sql code beautifier online, sql command formatter, sql developer formatter, sql developer sql formatter">

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
                    <div class="formatted-output" id="sql-output">Your formatted SQL will appear here...</div>
                  </div>
                </div>
                
                <!-- Action Buttons -->
                <div class="row mt-3">
                  <div class="col-md-6">
                    <button class="btn btn-primary w-100 py-2" id="format-btn">
                      <i class="bi bi-magic me-2"></i> Format SQL
                    </button>
                  </div>
                  <div class="col-md-6">
                    <button class="btn btn-success w-100 py-2 copy-btn" id="copy-output-btn">
                      <i class="bi bi-clipboard me-2"></i> Copy Formatted SQL
                    </button>
                  </div>
                </div>
                
                <hr>
                
                <!-- Formatting Options -->
                <h5 class="mb-3">Formatting Options</h5>
                <div class="row g-3">
                  <!-- Keyword Case -->
                  <div class="col-md-4">
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
                  </div>
                  
                  <!-- Column Name Case -->
                  <div class="col-md-4">
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
                  </div>
                  
                  <!-- Indentation -->
                  <div class="col-md-4">
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
                  </div>
                  
                  <!-- Additional Options -->
                  <div class="col-12 mt-3">
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
                  </div>
                </div>
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

  <!-- SQL Formatter Script -->
  <script>
  document.addEventListener('DOMContentLoaded', function() {
   function formatSQL(sql, options) {
  const keywords = [
    'SELECT', 'FROM', 'WHERE', 'JOIN', 'LEFT JOIN', 'RIGHT JOIN', 'INNER JOIN', 'OUTER JOIN',
    'GROUP BY', 'HAVING', 'ORDER BY', 'LIMIT', 'AND', 'OR', 'NOT', 'AS',
    'TRUE', 'FALSE', 'NULL', 'IS', 'IN', 'BETWEEN', 'LIKE', 'ON', 'UNION',
    'INTERSECT', 'EXCEPT', 'VALUES', 'SET', 'DESC'
  ];

  const functions = [
    'AVG', 'COUNT', 'FIRST', 'LAST', 'MAX', 'MIN', 'SUM', 'UCASE', 'LCASE', 'MID',
    'LEN', 'ROUND', 'NOW', 'FORMAT', 'COALESCE', 'NVL', 'IFNULL', 'ISNULL'
  ];

  if (options.removeComments) {
    sql = sql.replace(/--.*$/gm, '').replace(/\/\*[\s\S]*?\*\//g, '');
  }

  if (options.compactMode) {
    return `<pre>${sql.replace(/\s+/g, ' ').trim()}</pre>`;
  }

  const indent = options.indentation === 'tab' ? '\t' :
                options.indentation === 'none' ? '' :
                ' '.repeat(parseInt(options.indentation));

  // Normalize line breaks for major clauses
  sql = sql.replace(/\b(SELECT|FROM|WHERE|GROUP BY|HAVING|ORDER BY|LIMIT|LEFT JOIN|RIGHT JOIN|INNER JOIN|OUTER JOIN|JOIN|AND|OR)\b/gi, '\n$1');

  const lines = sql.split('\n').map(line => line.trim()).filter(Boolean);
  const formattedLines = [];
  let currentIndentLevel = 0;

  for (let i = 0; i < lines.length; i++) {
    let line = lines[i];
    
    // Handle SELECT clause with subqueries
    if (/^SELECT\b/i.test(line)) {
      const clauseRegex = /^SELECT\s*/i;
      const expression = line.replace(clauseRegex, '');
      
      formattedLines.push(`<span class="sql-keyword">SELECT</span>`);
      
      // Split the SELECT list items, handling subqueries properly
      const items = splitSelectItems(expression);
      
      items.forEach((item, idx) => {
        item = item.trim();
        if (item.endsWith(',')) item = item.slice(0, -1);
        
        // Format the item with proper indentation
        let formattedItem = indent.repeat(currentIndentLevel + 1) + item;
        
        // If this is a subquery, we need to format it with increased indentation
        if (isSubquery(item)) {
          const subqueryLines = formatSubquery(item, indent, currentIndentLevel + 1);
          formattedItem = subqueryLines;
        }
        
        // Add comma if not the last item
        if (idx < items.length - 1) {
          if (typeof formattedItem === 'string') {
            formattedItem += ',';
          } else {
            // For multi-line subqueries, add comma to the last line
            formattedItem[formattedItem.length - 1] += ',';
          }
        }
        
        if (Array.isArray(formattedItem)) {
          formattedLines.push(...formattedItem);
        } else {
          formattedLines.push(formattedItem);
        }
      });
      continue;
    }
    
    // Handle other clauses normally
    formattedLines.push(indent.repeat(currentIndentLevel) + line);
  }

  let result = formattedLines.join('\n');

  // Highlight keywords
  keywords.forEach(kw => {
    const regex = new RegExp(`\\b${kw}\\b`, 'gi');
    result = result.replace(regex, match => {
      let keyword = match;
      if (options.keywordCase === 'upper') keyword = match.toUpperCase();
      else if (options.keywordCase === 'lower') keyword = match.toLowerCase();
      else if (options.keywordCase === 'capitalize') keyword = match.charAt(0).toUpperCase() + match.slice(1).toLowerCase();
      return `<span class="sql-keyword">${keyword}</span>`;
    });
  });

  // Highlight SQL functions
  functions.forEach(fn => {
    const regex = new RegExp(`\\b(${fn})\\s*\\(`, 'gi');
    result = result.replace(regex, (match, fnName) => {
      return `<span class="sql-function">${fnName}</span>(`;
    });
  });

  return `<pre>${result}</pre>`;
}

// Helper: split SELECT items, handling subqueries properly
function splitSelectItems(input) {
  const items = [];
  let buffer = '';
  let parens = 0;
  let inString = false;
  let stringChar = null;

  for (let i = 0; i < input.length; i++) {
    const char = input[i];
    
    // Handle string literals
    if ((char === "'" || char === '"') && !inString) {
      inString = true;
      stringChar = char;
    } else if (char === stringChar && inString) {
      inString = false;
      stringChar = null;
    }
    
    // Track parentheses (but not inside strings)
    if (!inString) {
      if (char === '(') parens++;
      if (char === ')') parens--;
    }
    
    // Split on commas only when not inside strings or parentheses
    if (char === ',' && parens === 0 && !inString) {
      items.push(buffer.trim());
      buffer = '';
    } else {
      buffer += char;
    }
  }

  if (buffer.trim() !== '') items.push(buffer.trim());
  return items;
}

// Check if an item is a subquery
function isSubquery(item) {
  return /\(\s*SELECT\b/i.test(item);
}

// Format a subquery with proper indentation
function formatSubquery(subquery, indentStr, indentLevel) {
  // Extract the subquery content (remove surrounding parentheses)
  const content = subquery.trim().slice(1, -1).trim();
  
  // Split into lines and format each line
  const lines = content.split('\n').map(line => line.trim()).filter(Boolean);
  const formattedLines = [];
  
  // Add opening parenthesis on its own line
  formattedLines.push(indentStr.repeat(indentLevel) + '(');
  
  // Format each line of the subquery with increased indentation
  for (let line of lines) {
    formattedLines.push(indentStr.repeat(indentLevel + 1) + line);
  }
  
  // Add closing parenthesis
  formattedLines.push(indentStr.repeat(indentLevel) + ')');
  
  return formattedLines;
}

// Helper: split on commas not inside parentheses
function splitByCommaOutsideParentheses(input) {
  const parts = [];
  let buffer = '';
  let parens = 0;

  for (let i = 0; i < input.length; i++) {
    const char = input[i];

    if (char === '(') parens++;
    if (char === ')') parens--;

    if (char === ',' && parens === 0) {
      parts.push(buffer.trim());
      buffer = '';
    } else {
      buffer += char;
    }
  }

  if (buffer.trim() !== '') parts.push(buffer.trim());
  return parts;
}




    document.getElementById('format-btn').addEventListener('click', function() {
      const sqlInput = document.getElementById('sql-input').value;
      if (!sqlInput.trim()) {
        document.getElementById('sql-output').innerHTML = '<pre>Please enter SQL to format</pre>';
        return;
      }

      const options = {
        keywordCase: document.getElementById('keyword-case').value,
        identifierCase: document.getElementById('identifier-case').value,
        indentation: document.getElementById('indentation').value,
        removeComments: document.getElementById('remove-comments').checked,
        compactMode: document.getElementById('compact-mode').checked,
        alignJoins: document.getElementById('align-joins').checked,
        breakLongLines: document.getElementById('break-long-lines').checked
      };

      const formattedSQL = formatSQL(sqlInput, options);
      document.getElementById('sql-output').innerHTML = formattedSQL;
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

    const optionElements = [
      'keyword-case', 'identifier-case', 'indentation',
      'remove-comments', 'compact-mode', 'align-joins', 'break-long-lines'
    ];

    optionElements.forEach(id => {
      document.getElementById(id).addEventListener('change', function() {
        if (document.getElementById('sql-input').value.trim()) {
          document.getElementById('format-btn').click();
        }
      });
    });
  });
</script>

</body>
</html>