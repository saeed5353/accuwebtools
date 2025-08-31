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
}
?>