<?php
include_once "../db.php";
include_once "Blog.php";

$blog = new Blog($db);

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];

    if ($blog->deletePost($id)) {
        header("Location: posts.php?deleted=1");
        exit;
    } else {
        echo "Error deleting post.";
    }
} else {
    header("Location: posts.php");
    exit;
}
