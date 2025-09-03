<?php
include_once "../db.php";
include_once "Blog.php";

$blog = new Blog($db);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'] ?? null;
    $title = $_POST['title'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];
    $meta_description = $_POST['meta_description'];
    $meta_keywords = $_POST['meta_keywords'];
    $status = $_POST['status'];
    $category = $_POST['category'];

    // Handle image upload
    $imageName = null;
    if (!empty($_FILES['image']['name'])) {
        $targetDir = "../uploads/";
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }
        $imageName = time() . "_" . basename($_FILES['image']['name']);
        $targetFile = $targetDir . $imageName;
        move_uploaded_file($_FILES['image']['tmp_name'], $targetFile);
    }

    if ($id) {
        // Update existing post
        if ($blog->updatePost($id, $title, $slug, $description, $imageName, $status, $category, $meta_keywords, $meta_description)) {
            header("Location: posts.php?updated=1");
            exit;
        } else {
            echo "Error updating post.";
        }
    } else {
        // Insert new post
        if ($blog->addPost($title, $slug, $description, $imageName, $status, $category, $meta_keywords, $meta_description)) {
            header("Location: posts.php?success=1");
            exit;
        } else {
            echo "Error saving post.";
        }
    }
}
