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
        $sql = "SELECT * FROM blog_posts ORDER BY created_at DESC";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Get single post by ID
    public function getPostById($id) {
        $sql = "SELECT * FROM blog_posts WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Update post
    public function updatePost($id, $title, $slug, $description, $image, $status) {
        $sql = "UPDATE blog_posts 
                SET title=?, slug=?, description=?, image=?, status=?, updated_at=NOW() 
                WHERE id=?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$title, $slug, $description, $image, $status, $id]);
    }

    // Delete post
    public function deletePost($id) {
        $sql = "DELETE FROM blog_posts WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$id]);
    }
}
