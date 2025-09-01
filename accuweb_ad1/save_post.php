<?php
include_once "../db.php";
include_once "Blog.php";

$blog = new Blog($db);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];
    $meta_description = $_POST['meta_description'];
    $meta_keywords = $_POST['meta_keywords'];
    $status = $_POST['status'];
    $category = $_POST['category'];

    // Handle image upload
    $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
    $image = null;
    if (!empty($_FILES['image']['name'])) {
        $targetDir = "../uploads/";
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }
        $image = $targetDir . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $image);
    }
    if ($blog->addPost($title, $slug, $description, basename($_FILES['image']['name']), $status, $category,$meta_keywords,$meta_description)) {
        header("Location: blog.php?success=1");
        exit;
    } else {
        echo "Error saving post.";
    }
}
