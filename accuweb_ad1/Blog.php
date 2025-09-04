<?php
// Blog.php
include_once "../db.php";

class Blog {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Create a new blog post
    public function addPost($title, $slug, $description, $image, $status = 'draft',$category,$meta_keywords,$meta_description) {
        $sql = "INSERT INTO blog_posts (title, slug, description, image, status,category,meta_keywords,meta_description) 
                VALUES (?, ?, ?, ?, ?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$title, $slug, $description, $image, $status, $category,$meta_keywords,$meta_description]);
    }

    // Fetch all posts
    public function getPosts() {
        $sql = "SELECT *
                FROM blog_posts 
                ORDER BY created_at DESC";
        $result = $this->conn->query($sql);
        $data = [];

        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    }
    public function getPostById($id) {
        $id = (int)$id; // Prevent SQL injection
        $sql = "SELECT * FROM blog_posts WHERE id = $id";
        $result = $this->conn->query($sql);

        if ($result && $result->num_rows > 0) {
            return $result->fetch_assoc();
        }
        return null;
    }

    // Update post
    public function updatePost($id, $title, $slug, $description, $image, $status, $category, $meta_keywords, $meta_description) {
        if ($image) {
            $sql = "UPDATE blog_posts SET title=?, slug=?, description=?, image=?, status=?, category=?, meta_keywords=?, meta_description=? WHERE id=?";
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute([$title, $slug, $description, $image, $status, $category, $meta_keywords, $meta_description, $id]);
        } else {
            $sql = "UPDATE blog_posts SET title=?, slug=?, description=?, status=?, category=?, meta_keywords=?, meta_description=? WHERE id=?";
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute([$title, $slug, $description, $status, $category, $meta_keywords, $meta_description, $id]);
        }
    }

    public function deletePost($id) {
        // First get the image name
        $sql = "SELECT image FROM blog_posts WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $post = $result->fetch_assoc();

        if ($post && !empty($post['image'])) {
            $file = "../uploads/" . $post['image'];
            if (file_exists($file)) {
                unlink($file);
            }
        }

        // Now delete post from DB
        $sql = "DELETE FROM blog_posts WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }

}
