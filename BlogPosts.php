<?php
include_once "db.php";
class Blog {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Get single post by ID
    public function getPostById($id) {
        $sql = "SELECT * FROM blog_posts WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc(); // fetch 1 row as associative array
    }

    public function getPostBySlug($slug) {
        $sql = "SELECT * FROM blog_posts WHERE slug = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$slug]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function getPosts($limit, $offset) {
      $stmt = $this->conn->prepare("SELECT * FROM blog_posts ORDER BY created_at DESC LIMIT ? OFFSET ?");
      $stmt->bind_param("ii", $limit, $offset);
      $stmt->execute();
      return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    public function getTotalPosts() {
      $result = $this->conn->query("SELECT COUNT(*) as total FROM blog_posts");
      $row = $result->fetch_assoc();
      return $row['total'];
    }
     // Fetch categories with post counts
    public function getCategoriesWithCounts() {
        $sql = "SELECT category, COUNT(*) as count 
                FROM blog_posts 
                GROUP BY category 
                ORDER BY category ASC";
        $result = $this->conn->query($sql);

        $categories = [];
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $categories[] = $row;
            }
        }
        return $categories;
    }

    // Get posts by category
    public function getPostsByCategory($category, $limit, $offset) {
        $stmt = $this->conn->prepare("SELECT * FROM blog_posts WHERE category = ? ORDER BY created_at DESC LIMIT ?, ?");
        $stmt->bind_param("sii", $category, $offset, $limit);
        $stmt->execute();
        $result = $stmt->get_result();

        $posts = [];
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $posts[] = $row;
            }
        }
        return $posts;
    }

    // Count posts by category
    public function getTotalPostsByCategory($category) {
        $stmt = $this->conn->prepare("SELECT COUNT(*) as total FROM blog_posts WHERE category = ?");
        $stmt->bind_param("s", $category);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        return $row['total'] ?? 0;
    }


}
?>