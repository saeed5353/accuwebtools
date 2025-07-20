<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Password Generator - Create Strong & Secure Passwords</title>
  <meta name="description" content="Free online password generator tool. Create strong, secure, random passwords with customizable options including length, special characters, numbers, and uppercase letters.">
  <meta name="keywords" content="password generator, password gen, pw generator, pw gen, passwordgen, psw generator, password password generator, random password generator, lastpass password generator, strong password generator, password generator free, norton password generator, password creator, last password generator, random password gen, create random password, lastpass random password generator, lastpass password gen, lastpass random password, 12 character password generator, random password generator lastpass, last pass password gen, strong password gen, random password maker, 15 character password generator, password generator, random password generator, strong password generator, password generator free, password gen, pw generator, random password gen, create random password, pw gen, passwordgen, psw generator, strong password gen, random password maker, free password creator, strong pass gen, random password creator, password generator 10 characters">

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
    .password-generator {
      padding: 60px 0;
    }
    .password-display {
      font-size: 1.5rem;
      letter-spacing: 1px;
      height: 60px;
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
    .strength-meter {
      height: 8px;
      border-radius: 4px;
      margin-top: 8px;
    }
    .strength-weak {
      background-color: #dc3545;
      width: 25%;
    }
    .strength-medium {
      background-color: #fd7e14;
      width: 50%;
    }
    .strength-strong {
      background-color: #28a745;
      width: 75%;
    }
    .strength-very-strong {
      background-color: #20c997;
      width: 100%;
    }
    .customization-option {
      cursor: pointer;
      transition: all 0.2s;
    }
    .customization-option:hover {
      transform: scale(1.05);
    }
    .option-active {
      background-color: #0d6efd;
      color: white;
    }
    .seo-keywords {
      display: none; /* Hide but keep for SEO */
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
              <h1>Password Generator</h1>
              <p class="mb-0">Create strong and secure passwords to keep your accounts safe online. Customize your password with various options.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="../index.php">Home</a></li>
            <li class="current">Password Generator</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Password Generator Section -->
    <section id="password-generator" class="section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Free Password Generator</h2>
        <div><span>Create</span> <span class="description-title">Strong & Secure Passwords</span></div>
        <p class="mt-3">Generate random passwords with customizable options to enhance your online security</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <div class="card shadow-sm">
              <div class="card-body">
                <!-- Password Display -->
                <div class="input-group mb-4">
                  <input type="text" 
                         id="password-output" 
                         class="form-control form-control-lg password-display" 
                         readonly
                         value="Click Generate">
                  <button class="btn btn-primary copy-btn" 
                          type="button" 
                          id="copy-btn">
                    <i class="bi bi-clipboard"></i> Copy
                  </button>
                </div>
                
                <!-- Strength Indicator -->
                <div class="mb-4">
                  <div class="d-flex justify-content-between mb-1">
                    <span>Password Strength:</span>
                    <span id="strength-text">None</span>
                  </div>
                  <div class="strength-meter" id="strength-meter"></div>
                </div>
                
                <!-- Generate Button -->
                <div class="d-grid mb-4">
                  <button class="btn btn-success btn-lg py-3" id="generate-btn">
                    <i class="bi bi-arrow-repeat me-2"></i> Generate New Password
                  </button>
                </div>
                
                <hr>
                
                <!-- Customization Options -->
                <h5 class="mb-3">Customize Your Password</h5>
                <div class="row g-3">
                  <!-- Length Slider -->
                  <div class="col-md-6">
                    <label for="length-slider" class="form-label">Length: <span id="length-value">12</span> characters</label>
                    <input type="range" class="form-range" min="8" max="32" value="12" id="length-slider">
                  </div>
                  
                  <!-- Character Types -->
                  <div class="col-md-6">
                    <div class="row g-2">
                      <div class="col-6">
                        <div class="p-3 border rounded text-center customization-option option-active" data-option="uppercase">
                          <i class="bi bi-type-h1 fs-3"></i>
                          <div>ABC (Uppercase)</div>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="p-3 border rounded text-center customization-option option-active" data-option="lowercase">
                          <i class="bi bi-type fs-3"></i>
                          <div>abc (Lowercase)</div>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="p-3 border rounded text-center customization-option option-active" data-option="numbers">
                          <i class="bi bi-123 fs-3"></i>
                          <div>123 (Numbers)</div>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="p-3 border rounded text-center customization-option option-active" data-option="symbols">
                          <i class="bi bi-hash fs-3"></i>
                          <div>#$& (Symbols)</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Additional Options -->
                  <div class="col-12">
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="exclude-similar" checked>
                      <label class="form-check-label" for="exclude-similar">Exclude similar characters (e.g., i, l, 1, L, o, 0, O)</label>
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="exclude-ambiguous" checked>
                      <label class="form-check-label" for="exclude-ambiguous">Exclude ambiguous characters (e.g., {}, [], (), |, \, /, `, ', ")</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Password Tips -->
            <div class="alert alert-info mt-4">
              <h5><i class="bi bi-lightbulb me-2"></i> Password Tips</h5>
              <ul class="mb-0">
                <li>Use at least 12 characters for better security</li>
                <li>Include a mix of uppercase, lowercase, numbers, and symbols</li>
                <li>Avoid using personal information or common words</li>
                <li>Use a unique password for each account</li>
                <li>Consider using a password manager to store your passwords securely</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Hidden SEO Content -->
      <div class="seo-keywords">
        <p>password generator, random password generator, strong password generator, password gen, pw generator, create random password, secure password creator, online password maker, free password generator, lastpass password generator, norton password generator, password strength checker, password security tool, generate secure password, password complexity generator</p>
      </div>
    </section>

    <!-- How It Works Section -->
    <section id="how-it-works" class="section bg-light">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Why Use a Strong Password?</h2>
          <p>Protect your online accounts from hackers and unauthorized access</p>
        </div>
        <div class="row g-4">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3"><i class="bi bi-shield-lock"></i></div>
                <h5>Security Protection</h5>
                <p>Strong passwords prevent unauthorized access to your personal and financial information</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3"><i class="bi bi-key"></i></div>
                <h5>Brute Force Defense</h5>
                <p>Complex passwords take significantly longer to crack using automated tools</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3"><i class="bi bi-person-badge"></i></div>
                <h5>Account Safety</h5>
                <p>Unique passwords for each account prevent domino effect if one account is compromised</p>
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
    const passwordOutput = document.getElementById('password-output');
    const copyBtn = document.getElementById('copy-btn');
    const generateBtn = document.getElementById('generate-btn');
    const lengthSlider = document.getElementById('length-slider');
    const lengthValue = document.getElementById('length-value');
    const strengthText = document.getElementById('strength-text');
    const strengthMeter = document.getElementById('strength-meter');
    const optionElements = document.querySelectorAll('.customization-option');
    const excludeSimilar = document.getElementById('exclude-similar');
    const excludeAmbiguous = document.getElementById('exclude-ambiguous');
    
    // Character sets
    const characterSets = {
      uppercase: 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
      lowercase: 'abcdefghijklmnopqrstuvwxyz',
      numbers: '0123456789',
      symbols: '!@#$%^&*()_+-=[]{}|;:,.<>?'
    };
    
    // Similar and ambiguous characters to exclude
    const similarChars = 'il1Lo0O';
    const ambiguousChars = '{}[]()|\\/\'"`~,;:.<>';
    
    // Initialize
    let activeOptions = ['uppercase', 'lowercase', 'numbers', 'symbols'];
    updateLengthDisplay();
    generatePassword();
    
    // Event Listeners
    lengthSlider.addEventListener('input', () => {
      updateLengthDisplay();
      generatePassword();
    });
    
    optionElements.forEach(option => {
      option.addEventListener('click', () => {
        const optionType = option.dataset.option;
        option.classList.toggle('option-active');
        
        if (option.classList.contains('option-active')) {
          if (!activeOptions.includes(optionType)) {
            activeOptions.push(optionType);
          }
        } else {
          activeOptions = activeOptions.filter(opt => opt !== optionType);
        }
        
        // Ensure at least one option is selected
        if (activeOptions.length === 0) {
          option.classList.add('option-active');
          activeOptions.push(optionType);
          return;
        }
        
        generatePassword();
      });
    });
    
    copyBtn.addEventListener('click', copyPassword);
    generateBtn.addEventListener('click', generatePassword);
    excludeSimilar.addEventListener('change', generatePassword);
    excludeAmbiguous.addEventListener('change', generatePassword);
    
    // Functions
    function updateLengthDisplay() {
      lengthValue.textContent = lengthSlider.value;
    }
    
    function generatePassword() {
      let charset = '';
      
      // Build character set based on active options
      activeOptions.forEach(option => {
        charset += characterSets[option];
      });
      
      // Remove similar characters if option is checked
      if (excludeSimilar.checked) {
        similarChars.split('').forEach(char => {
          charset = charset.replace(char, '');
        });
      }
      
      // Remove ambiguous characters if option is checked
      if (excludeAmbiguous.checked) {
        ambiguousChars.split('').forEach(char => {
          charset = charset.replace(char, '');
        });
      }
      
      // Generate password
      let password = '';
      const length = parseInt(lengthSlider.value);
      
      for (let i = 0; i < length; i++) {
        const randomIndex = Math.floor(Math.random() * charset.length);
        password += charset[randomIndex];
      }
      
      // Ensure at least one character from each selected set is included
      activeOptions.forEach(option => {
        if (!password.match(new RegExp(`[${characterSets[option]}]`))) {
          const randomIndex = Math.floor(Math.random() * characterSets[option].length);
          const randomChar = characterSets[option][randomIndex];
          const replaceIndex = Math.floor(Math.random() * password.length);
          password = password.substring(0, replaceIndex) + randomChar + password.substring(replaceIndex + 1);
        }
      });
      
      passwordOutput.value = password;
      checkPasswordStrength(password);
    }
    
    function copyPassword() {
      const password = passwordOutput.value;
      if (!password || password === 'Click Generate') return;
      
      navigator.clipboard.writeText(password).then(() => {
        copyBtn.classList.add('copied');
        copyBtn.innerHTML = '<i class="bi bi-check2"></i> Copied!';
        
        setTimeout(() => {
          copyBtn.classList.remove('copied');
          copyBtn.innerHTML = '<i class="bi bi-clipboard"></i> Copy';
        }, 2000);
      }).catch(err => {
        console.error('Failed to copy password: ', err);
      });
    }
    
    function checkPasswordStrength(password) {
      if (!password || password === 'Click Generate') {
        strengthText.textContent = 'None';
        strengthMeter.className = 'strength-meter';
        strengthMeter.style.width = '0%';
        return;
      }
      
      let strength = 0;
      const length = password.length;
      
      // Length contributes to strength
      if (length >= 8) strength += 1;
      if (length >= 12) strength += 1;
      if (length >= 16) strength += 1;
      
      
      // Character variety contributes to strength
      if (/[A-Z]/.test(password)) strength += 1;
      if (/[a-z]/.test(password)) strength += 1;
      if (/[0-9]/.test(password)) strength += 1;
      if (/[^A-Za-z0-9]/.test(password)) strength += 2;
      
      // Update strength display
      strengthMeter.className = 'strength-meter';
      
      if (strength <= 2) {
        strengthText.textContent = 'Weak';
        strengthMeter.classList.add('strength-weak');
      } else if (strength <= 4) {
        strengthText.textContent = 'Medium';
        strengthMeter.classList.add('strength-medium');
      } else if (strength <= 6) {
        strengthText.textContent = 'Strong';
        strengthMeter.classList.add('strength-strong');
      } else {
        strengthText.textContent = 'Very Strong';
        strengthMeter.classList.add('strength-very-strong');
      }
    }
    
  } catch (error) {
    console.error('Error initializing password generator:', error);
  }
});
</script>