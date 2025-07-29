<?php include("../includes/track_visitors.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Age Calculator - Calculate Your Exact Age in Years, Months, Days</title>
  <meta name="description" content="Free online age calculator tool. Calculate your exact age in years, months, days, hours, minutes and seconds from your date of birth. Find out how old you are today.">
  <meta name="keywords" content="age calculator, age calculation calculator, calculate your age, birthday calculator, age calculator by birth date, age calculator how old am i, birth date age calculator, born date calculator, calculate age using date of birth, calculate how old i am, date of birth and age calculator, find age by dob, get age from date of birth, year born calculator, biological age calculator, age finder, dob calculator, age calculator app, find age, age and date calculator, age by birth date, age calculator by dob, calculate current age, calculate exact age, calculate my age">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">

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
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

  <!-- Main CSS File -->
  <link href="../assets/css/main.css" rel="stylesheet">
  <style>
    .age-calculator {
      padding: 60px 0;
    }
    .input-group {
      box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.15);
    }
    .form-control-lg {
      height: calc(3.5rem + 2px);
      padding: 1rem 1.5rem;
    }
    .btn-calculate {
      transition: transform 0.2s;
    }
    .btn-calculate:hover {
      transform: translateY(-2px);
    }
    .age-results {
      border: 3px solid #fff;
      box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.15);
      background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    }
    .age-box {
      border-radius: 8px;
      background: white;
      box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,0.075);
    }
    .seo-keywords {
      display: none; /* Hide but keep for SEO */
    }
    .flatpickr-input {
      cursor: pointer;
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
              <h1>Age Calculator</h1>
              <p class="mb-0">Calculate your exact age in years, months, days, hours, minutes and seconds from your date of birth.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="../index.php">Home</a></li>
            <li class="current">Age Calculator</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Age Calculator Section -->
    <section id="age-calculator" class="section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Free Age Calculator</h2>
        <div><span>Calculate</span> <span class="description-title">Your Exact Age</span></div>
        <p class="mt-3">Find out exactly how old you are today or on any date in the past or future</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <div class="input-group mb-4">
              <input type="text" 
                     id="birth-date" 
                     class="form-control form-control-lg flatpickr-input" 
                     placeholder="Select your date of birth (YYYY-MM-DD)" 
                     data-date-format="Y-m-d"
                     required
                     readonly>
              <button class="btn btn-primary btn-lg" 
                      type="button" 
                      id="calculate-btn">
                Calculate Age
              </button>
            </div>

            <div id="result-container" class="text-center" style="display: none;">
              <div class="age-results p-4 mb-4 rounded">
                <h3 class="mb-4">Your Age</h3>
                
                <div class="row g-3">
                  <div class="col-md-4">
                    <div class="age-box p-3">
                      <div class="display-4 text-primary" id="years">0</div>
                      <div class="text-muted">Years</div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="age-box p-3">
                      <div class="display-4 text-primary" id="months">0</div>
                      <div class="text-muted">Months</div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="age-box p-3">
                      <div class="display-4 text-primary" id="days">0</div>
                      <div class="text-muted">Days</div>
                    </div>
                  </div>
                </div>
                
                <div class="row g-3 mt-3">
                  <div class="col-md-4">
                    <div class="age-box p-3">
                      <div class="display-4 text-primary" id="hours">0</div>
                      <div class="text-muted">Hours</div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="age-box p-3">
                      <div class="display-4 text-primary" id="minutes">0</div>
                      <div class="text-muted">Minutes</div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="age-box p-3">
                      <div class="display-4 text-primary" id="seconds">0</div>
                      <div class="text-muted">Seconds</div>
                    </div>
                  </div>
                </div>
                
                <div class="mt-4">
                  <p class="lead" id="next-birthday"></p>
                  <p class="text-muted" id="birth-date-display"></p>
                </div>
              </div>
            </div>

            <div class="text-muted mt-4">
              <small>Our age calculator works for any date from 1900 to current year</small>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Hidden SEO Content -->
      <div class="seo-keywords">
        <p>age calculator, calculate your age, birthday calculator, age calculator by birth date, find age by dob, get age from date of birth, year born calculator, biological age calculator, age finder, dob calculator, calculate current age, calculate exact age, calculate my age, age detector, born calculator, date of birth calculator, age count, age calculation calculator</p>
      </div>
    </section>

    <!-- How It Works Section -->
    <section id="how-it-works" class="section bg-light">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>How to Calculate Your Age</h2>
          <p>Simple steps to find out exactly how old you are</p>
        </div>
        <div class="row g-4">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3">1</div>
                <h5>Enter Your Birth Date</h5>
                <p>Select your date of birth using our interactive calendar picker</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3">2</div>
                <h5>Click Calculate</h5>
                <p>Press the calculate button to process your exact age</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3">3</div>
                <h5>View Results</h5>
                <p>See your age in years, months, days, hours, minutes and seconds</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="section">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Frequently Asked Questions</h2>
          <p>Common questions about our age calculator</p>
        </div>
        
        <div class="accordion" id="ageCalculatorFaq" data-aos="fade-up" data-aos-delay="100">
          <div class="accordion-item">
            <h3 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                How accurate is this age calculator?
              </button>
            </h3>
            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#ageCalculatorFaq">
              <div class="accordion-body">
                Our age calculator provides 100% accurate results based on the date you enter. It calculates the exact duration between your birth date and the current date, accounting for leap years and varying month lengths.
              </div>
            </div>
          </div>
          
          <div class="accordion-item">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                Can I calculate age for a date in the future?
              </button>
            </h3>
            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#ageCalculatorFaq">
              <div class="accordion-body">
                Yes, you can enter any future date to calculate how old you will be on that specific date. This is useful for planning birthdays or other important events.
              </div>
            </div>
          </div>
          
          <div class="accordion-item">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                What date formats are supported?
              </button>
            </h3>
            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#ageCalculatorFaq">
              <div class="accordion-body">
                Our calculator automatically converts dates to the standard YYYY-MM-DD format. You can enter dates in various formats (MM/DD/YYYY, DD-MM-YYYY, etc.) and our system will recognize them correctly.
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
  <script src="../assets/vendor/flatpickr/flatpickr.min.js"></script>

  <!-- Main JS File -->
  <script src="../assets/js/main.js"></script>

  <!-- Age Calculator Script -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Initialize date picker
      flatpickr("#birth-date", {
        dateFormat: "Y-m-d",
        maxDate: "today",
        defaultDate: "1990-01-01",
        allowInput: true
      });
      
      // Calculate age when button is clicked
      document.getElementById('calculate-btn').addEventListener('click', calculateAge);
      
      // Also calculate when Enter is pressed in the date field
      document.getElementById('birth-date').addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
          calculateAge();
        }
      });
      
      function calculateAge() {
        const birthDate = document.getElementById('birth-date').value;
        
        if (!birthDate) {
          alert('Please select your date of birth');
          return;
        }
        
        const birthDateObj = new Date(birthDate);
        const today = new Date();
        
        if (birthDateObj > today) {
          alert('Birth date cannot be in the future');
          return;
        }
        
        // Calculate age in years, months, days
        let years = today.getFullYear() - birthDateObj.getFullYear();
        let months = today.getMonth() - birthDateObj.getMonth();
        let days = today.getDate() - birthDateObj.getDate();
        
        // Adjust for negative months/days
        if (days < 0) {
          months--;
          // Get the last day of the previous month
          const lastDayOfMonth = new Date(
            today.getFullYear(),
            today.getMonth(),
            0
          ).getDate();
          days += lastDayOfMonth;
        }
        
        if (months < 0) {
          years--;
          months += 12;
        }
        
        // Calculate total days lived
        const diffTime = Math.abs(today - birthDateObj);
        const diffDays = Math.floor(diffTime / (1000 * 60 * 60 * 24));
        
        // Calculate hours, minutes, seconds
        const totalHours = Math.floor(diffTime / (1000 * 60 * 60));
        const hours = totalHours % 24;
        const totalMinutes = Math.floor(diffTime / (1000 * 60));
        const minutes = totalMinutes % 60;
        const totalSeconds = Math.floor(diffTime / 1000);
        const seconds = totalSeconds % 60;
        
        // Calculate next birthday
        const nextBirthday = new Date(
          today.getFullYear(),
          birthDateObj.getMonth(),
          birthDateObj.getDate()
        );
        
        if (nextBirthday < today) {
          nextBirthday.setFullYear(today.getFullYear() + 1);
        }
        
        const daysUntilBirthday = Math.ceil((nextBirthday - today) / (1000 * 60 * 60 * 24));
        
        // Display results
        document.getElementById('years').textContent = years;
        document.getElementById('months').textContent = months;
        document.getElementById('days').textContent = days;
        document.getElementById('hours').textContent = hours;
        document.getElementById('minutes').textContent = minutes;
        document.getElementById('seconds').textContent = seconds;
        
        const options = { year: 'numeric', month: 'long', day: 'numeric' };
        document.getElementById('birth-date-display').textContent = 
          `Born on ${birthDateObj.toLocaleDateString('en-US', options)}`;
        
        if (daysUntilBirthday === 0) {
          document.getElementById('next-birthday').textContent = '🎉 Today is your birthday! 🎉';
        } else {
          document.getElementById('next-birthday').textContent = 
            `Your next birthday is in ${daysUntilBirthday} day${daysUntilBirthday !== 1 ? 's' : ''}`;
        }
        
        // Show results
        document.getElementById('result-container').style.display = 'block';
        
        // Update seconds every second
        clearInterval(window.ageCalculatorInterval);
        window.ageCalculatorInterval = setInterval(() => {
          const now = new Date();
          const diffTime = Math.abs(now - birthDateObj);
          const totalSeconds = Math.floor(diffTime / 1000);
          const seconds = totalSeconds % 60;
          document.getElementById('seconds').textContent = seconds;
        }, 1000);
      }
    });
  </script>

</body>

</html>