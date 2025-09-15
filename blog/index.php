<?php 
  include("../includes/track_visitors.php");
  include("../BlogPosts.php"); 

  $blog = new Blog($db);

  // Get category filter
  $selectedCategory = isset($_GET['category']) ? $_GET['category'] : '';

  // Pagination setup
  $limit = 6; // posts per page
  $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
  $offset = ($page - 1) * $limit;

  // Fetch categories with counts
  $categories = $blog->getCategoriesWithCounts();

  // Fetch posts (filtered if category selected)
  if (!empty($selectedCategory)) {
      $posts = $blog->getPostsByCategory($selectedCategory, $limit, $offset);
      $totalPosts = $blog->getTotalPostsByCategory($selectedCategory);
  } else {
      $posts = $blog->getPosts($limit, $offset);
      $totalPosts = $blog->getTotalPosts();
  }

  $totalPages = ceil($totalPosts / $limit);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Blog - AccuWebTools</title>
  <meta name="description" content="Read the latest guides, tutorials, and articles from AccuWebTools. Stay updated with web hosting, online tools, and digital marketing tips.">
  <meta name="keywords" content="accuwebtools blog, tech blog, free tools blog, hosting guides, seo tips, digital marketing blog">

  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../assets/css/main.css" rel="stylesheet">
</head>

<body>
  <?php include '../includes/header.php'; ?>

  <main class="main">
    <section id="hero" class="dark-background">
       
    </section>
    <section class="py-5 bg-light">
      <div class="container">
        <h1 class="text-center mb-5">Our Blog</h1>
        <div class="row">
          
          <!-- Sidebar Categories -->
          <aside class="col-lg-3 mb-4">
            <div class="list-group shadow-sm">
              <a href="?" class="list-group-item list-group-item-action <?php echo empty($selectedCategory) ? 'active' : ''; ?>">
                All Categories <span class="badge bg-secondary float-end"><?php echo $blog->getTotalPosts(); ?></span>
              </a>
              <?php foreach ($categories as $cat): ?>
                <a href="?category=<?php echo urlencode($cat['category']); ?>" 
                   class="list-group-item list-group-item-action <?php echo ($selectedCategory == $cat['category']) ? 'active' : ''; ?>">
                   <?php echo htmlspecialchars($cat['category']); ?>
                   <span class="badge bg-primary float-end"><?php echo $cat['count']; ?></span>
                </a>
              <?php endforeach; ?>
            </div>
          </aside>

          <!-- Blog Posts -->
          <div class="col-lg-9">
            <div class="row g-4">
              <?php if (!empty($posts)): ?>
                <?php foreach ($posts as $post): ?>
                  <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm border-0">
                      <?php if (!empty($post['image'])): ?>
                        <img src="../uploads/<?php echo htmlspecialchars($post['image']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($post['title']); ?>">
                      <?php else: ?>
                        <img src="../assets/img/blog-placeholder.jpg" class="card-img-top" alt="Placeholder">
                      <?php endif; ?>

                      <div class="card-body d-flex flex-column">
                        <h5 class="card-title">
                          <a href="../blog-detail?id=<?php echo urlencode($post['id']); ?>" class="text-dark text-decoration-none">
                            <?php echo htmlspecialchars($post['title']); ?>
                          </a>
                        </h5>
                        <p class="text-muted small mb-2">
                          <?php echo date("F j, Y", strtotime($post['created_at'])); ?>
                          <?php if (!empty($post['category'])): ?>
                            | <span class="badge bg-primary"><?php echo htmlspecialchars($post['category']); ?></span>
                          <?php endif; ?>
                        </p>
                        <p class="card-text flex-grow-1">
                          <?php echo substr(strip_tags($post['description']), 0, 100) . '...'; ?>
                        </p>
                        <a href="../blog-detail?id=<?php echo urlencode($post['id']); ?>" class="btn btn-outline-primary mt-auto">Read More</a>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
              <?php else: ?>
                <p class="text-center">No posts available in this category.</p>
              <?php endif; ?>
            </div>

            <!-- Pagination -->
            <?php if ($totalPages > 1): ?>
              <nav class="mt-5">
                <ul class="pagination justify-content-center">
                  <?php if ($page > 1): ?>
                    <li class="page-item">
                      <a class="page-link" href="?<?php echo http_build_query(['category'=>$selectedCategory,'page'=>$page-1]); ?>">&laquo; Prev</a>
                    </li>
                  <?php endif; ?>

                  <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                    <li class="page-item <?php echo ($i == $page) ? 'active' : ''; ?>">
                      <a class="page-link" href="?<?php echo http_build_query(['category'=>$selectedCategory,'page'=>$i]); ?>"><?php echo $i; ?></a>
                    </li>
                  <?php endfor; ?>

                  <?php if ($page < $totalPages): ?>
                    <li class="page-item">
                      <a class="page-link" href="?<?php echo http_build_query(['category'=>$selectedCategory,'page'=>$page+1]); ?>">Next &raquo;</a>
                    </li>
                  <?php endif; ?>
                </ul>
              </nav>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include '../includes/footer.php'; ?>

  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/js/main.js"></script>
</body>
</html>
