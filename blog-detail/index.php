<?php 

  include("../includes/track_visitors.php"); 
  include("../BlogPosts.php");
  
  // Get the slug from the URL
  $slug = isset($_GET['slug']) ? $_GET['slug'] : '';
  
  if(empty($slug)) {
    // Redirect to homepage if no slug provided
    header("Location: index.php");
    exit();
  }
  
  $blog = new Blog($db);
  $post = $blog->getPostById($slug);
  
  if(!$post) {
    // Redirect to 404 page if post not found
    header("Location: 404.php");
    exit();
  }
 
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?php echo htmlspecialchars($post['title']); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($post['meta_description']); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($post['meta_keywords']); ?>">

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon" height="100px">
    <link rel="canonical" href="https://accuwebtools.com" />

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
    <script src="https://analytics.ahrefs.com/analytics.js" data-key="U0aAv+k6tj/t5S9GbIcmUg" async></script>
    <!-- <script type='text/javascript' src='//pl27452491.profitableratecpm.com/34/56/0b/34560be75f4f63c61e3b45ffe63c064c.js'></script> -->
  </head>

  <body class="index-page">
    <?php include '../includes/header.php'; ?>

    <main class="main">
      <!-- Hero Section -->
      <section id="hero" class="dark-background">
         
      </section>
      <div class="container py-5">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <?php if (!empty($post['image'])): ?>
              <div class="text-center mb-4">
                <img src="../uploads/<?php echo htmlspecialchars($post['image']); ?>" 
                     class="img-fluid rounded shadow-sm" 
                     alt="<?php echo htmlspecialchars($post['title']); ?>">
              </div>
            <?php endif; ?>
            <h1 class="text-center mb-3"><?php echo htmlspecialchars($post['title']); ?></h1>
            <p class="text-center text-muted">
              <?php echo date("F j, Y", strtotime($post['created_at'])); ?>
              <?php if (!empty($post['category'])): ?>
                | <span class="badge bg-primary"><?php echo htmlspecialchars($post['category']); ?></span>
              <?php endif; ?>
            </p>
            <div class="mt-4">
              <p class="lead text-center">
                <?php echo nl2br($post['description']); ?>
              </p>
            </div>
          </div>
        </div>
      </div>
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