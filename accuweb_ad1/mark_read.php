<?php
$conn = new mysqli("localhost", "u915156841_tech", "cc%8cVr3NQ", "u915156841_accuwebtools");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = intval($_POST['id']);
    $sql = "UPDATE messages SET isRead = 1 WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        header("Location: messages.php?success=1");
    } else {
        header("Location: messages.php?error=1");
    }
}
?>
