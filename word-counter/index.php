<?php include("../includes/track_visitors.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Word Counter - Count Words, Characters & More | Free Online Tool</title>
  <meta name="description" content="Free online word counter tool. Count words, characters, sentences, and paragraphs instantly. Perfect for essays, articles, and social media posts with detailed statistics.">
  <meta name="keywords" content="word counter, character counter, word count counter, count the words in word, count word count, words count in word, word counter online, word count checker, character count online, count number of words online, calculate characters online, count of words online, number of word checker, word count in word online, essay word counter, word counter tool, word counter website, word calculator, keyword counter, word counter google docs, word counter for google docs, free word counter, count number of words, word count calculator, character checker, paragraph counter, count how many words, counting tool">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link rel="canonical" href="https://accuwebtools.com/word-counter" />

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
              <h1>Word Counter</h1>
              <p class="mb-0">Count words, characters, sentences, and paragraphs in your text instantly. Perfect for writers, students, and professionals.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="../index.php">Home</a></li>
            <li class="current">Word Counter</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Word Counter Section -->
    <section id="word-counter" class="section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Free Word Counter Tool</h2>
        <div><span>Count</span> <span class="description-title">Words & Characters</span></div>
        <p class="mt-3">Get detailed statistics about your text including word count, character count, reading time and more</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-10">
            <div class="card shadow-sm">
              <div class="card-body">
                <!-- Text Input Area -->
                <div class="mb-4">
                  <textarea id="text-input" class="form-control" rows="8" placeholder="Type or paste your text here..."></textarea>
                </div>
                
                <!-- Summary Statistics -->
                <div class="row g-3 mb-4">
                  <div class="col-md-3 col-6">
                    <div class="stat-card">
                      <div class="stat-value" id="word-count">0</div>
                      <div class="stat-label">Words</div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6">
                    <div class="stat-card">
                      <div class="stat-value" id="character-count">0</div>
                      <div class="stat-label">Characters</div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6">
                    <div class="stat-card">
                      <div class="stat-value" id="sentence-count">0</div>
                      <div class="stat-label">Sentences</div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6">
                    <div class="stat-card">
                      <div class="stat-value" id="paragraph-count">0</div>
                      <div class="stat-label">Paragraphs</div>
                    </div>
                  </div>
                </div>
                
                <!-- Detailed Statistics -->
                <div class="row g-3">
                  <div class="col-md-6">
                    <div class="card h-100">
                      <div class="card-body">
                        <h5 class="card-title">Reading Statistics</h5>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            Reading Time
                            <span class="badge bg-primary rounded-pill" id="reading-time">0 min</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            Speaking Time
                            <span class="badge bg-primary rounded-pill" id="speaking-time">0 min</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            Characters (no spaces)
                            <span class="badge bg-primary rounded-pill" id="character-no-spaces">0</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card h-100">
                      <div class="card-body">
                        <h5 class="card-title">Keyword Density</h5>
                        <div id="keyword-density" class="small">
                          <p class="mb-2">Enter text to see keyword analysis</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <!-- Action Buttons -->
                <div class="d-flex justify-content-between mt-4">
                  <button class="btn btn-outline-secondary" id="clear-btn">
                    <i class="bi bi-trash me-2"></i> Clear Text
                  </button>
                  <div>
                    <button class="btn btn-outline-primary me-2" id="paste-btn">
                      <i class="bi bi-clipboard me-2"></i> Paste
                    </button>
                    <button class="btn btn-primary" id="copy-text-btn">
                      <i class="bi bi-clipboard-check me-2"></i> Copy Text
                    </button>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Writing Tips -->
            <div class="alert alert-info mt-4">
              <h5><i class="bi bi-lightbulb me-2"></i> Writing Tips</h5>
              <ul class="mb-0">
                <li>Academic papers often have strict word count requirements - use our word counter to stay within limits</li>
                <li>Social media platforms have character limits (Twitter: 280, Facebook: 63,206, Instagram: 2,200)</li>
                <li>For better readability, aim for 15-20 words per sentence and 3-4 sentences per paragraph</li>
                <li>Use keyword density analysis to optimize your content for SEO</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Hidden SEO Content -->
      <div class="seo-keywords">
        <p>word counter, character counter, word count counter, count the words in word, count word count, words count in word, word counter online, word count checker, character count online, count number of words online, calculate characters online, count of words online, number of word checker, word count in word online, essay word counter, word counter tool, word counter website, word calculator, keyword counter, word counter google docs, word counter for google docs, free word counter, count number of words, word count calculator, character checker, paragraph counter, count how many words, counting tool</p>
      </div>
    </section>

    <!-- How It Works Section -->
    <section id="how-it-works" class="section bg-light">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Why Use Our Word Counter?</h2>
          <p>Essential tool for writers, students, and professionals</p>
        </div>
        <div class="row g-4">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3"><i class="bi bi-file-earmark-text"></i></div>
                <h5>Academic Writing</h5>
                <p>Perfect for essays, research papers, and assignments with strict word count requirements</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3"><i class="bi bi-globe"></i></div>
                <h5>Content Creation</h5>
                <p>Essential for bloggers, copywriters, and marketers to create optimized content</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card h-100">
              <div class="card-body text-center">
                <div class="display-4 text-primary mb-3"><i class="bi bi-chat-square-text"></i></div>
                <h5>Social Media</h5>
                <p>Stay within platform character limits for Twitter, Facebook, Instagram, and more</p>
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

  <!-- Word Counter Script -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const textInput = document.getElementById('text-input');
      const wordCount = document.getElementById('word-count');
      const characterCount = document.getElementById('character-count');
      const sentenceCount = document.getElementById('sentence-count');
      const paragraphCount = document.getElementById('paragraph-count');
      const readingTime = document.getElementById('reading-time');
      const speakingTime = document.getElementById('speaking-time');
      const characterNoSpaces = document.getElementById('character-no-spaces');
      const keywordDensity = document.getElementById('keyword-density');
      const clearBtn = document.getElementById('clear-btn');
      const pasteBtn = document.getElementById('paste-btn');
      const copyTextBtn = document.getElementById('copy-text-btn');
      
      // Update counts when text changes
      textInput.addEventListener('input', updateCounts);
      
      // Clear button
      clearBtn.addEventListener('click', function() {
        textInput.value = '';
        updateCounts();
      });
      
      // Paste button
      pasteBtn.addEventListener('click', async function() {
        try {
          const text = await navigator.clipboard.readText();
          textInput.value = text;
          updateCounts();
        } catch (err) {
          alert('Failed to paste text. Please check browser permissions.');
        }
      });
      
      // Copy text button
      copyTextBtn.addEventListener('click', function() {
        textInput.select();
        document.execCommand('copy');
        // Show feedback
        const originalText = copyTextBtn.innerHTML;
        copyTextBtn.innerHTML = '<i class="bi bi-check2 me-2"></i> Copied!';
        setTimeout(() => {
          copyTextBtn.innerHTML = originalText;
        }, 2000);
      });
      
      // Initialize counts
      updateCounts();
      
      function updateCounts() {
        const text = textInput.value;
        
        // Word count (split by whitespace and filter out empty strings)
        const words = text.trim() === '' ? [] : text.trim().split(/\s+/);
        wordCount.textContent = words.length;
        
        // Character count
        characterCount.textContent = text.length;
        
        // Character count without spaces
        characterNoSpaces.textContent = text.replace(/\s+/g, '').length;
        
        // Sentence count (naive approach)
        const sentences = text.split(/[.!?]+/).filter(s => s.trim().length > 0);
        sentenceCount.textContent = sentences.length;
        
        // Paragraph count
        const paragraphs = text.split(/\n+/).filter(p => p.trim().length > 0);
        paragraphCount.textContent = paragraphs.length;
        
        // Reading time (average 200 words per minute)
        const readingMinutes = Math.ceil(words.length / 200);
        readingTime.textContent = readingMinutes + ' min';
        
        // Speaking time (average 150 words per minute)
        const speakingMinutes = Math.ceil(words.length / 150);
        speakingTime.textContent = speakingMinutes + ' min';
        
        // Keyword density analysis (top 5 keywords)
        if (words.length > 0) {
          const wordFrequency = {};
          words.forEach(word => {
            const cleanWord = word.toLowerCase().replace(/[^a-z0-9]/g, '');
            if (cleanWord.length > 3) { // Ignore short words
              wordFrequency[cleanWord] = (wordFrequency[cleanWord] || 0) + 1;
            }
          });
          
          // Convert to array and sort by frequency
          const sortedKeywords = Object.entries(wordFrequency)
            .sort((a, b) => b[1] - a[1])
            .slice(0, 5);
          
          // Display results
          if (sortedKeywords.length > 0) {
            let html = '<p class="mb-2">Top keywords:</p><ul class="list-unstyled">';
            sortedKeywords.forEach(([word, count]) => {
              const density = ((count / words.length) * 100).toFixed(2);
              html += `<li>${word}: ${count} times (${density}%)</li>`;
            });
            html += '</ul>';
            keywordDensity.innerHTML = html;
          } else {
            keywordDensity.innerHTML = '<p>No significant keywords found (try longer text)</p>';
          }
        } else {
          keywordDensity.innerHTML = '<p>Enter text to see keyword analysis</p>';
        }
      }
    });
  </script>

</body>

</html>