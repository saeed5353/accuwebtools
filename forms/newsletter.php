<?php
include_once "../db.php";
$conn = $db;

if ($conn->connect_error) {
  http_response_code(500);
  echo "Database connection failed: " . $conn->connect_error;
  exit();
}
// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email  = $conn->real_escape_string($_POST['email']);

  $sql = "INSERT INTO newsletter(email) VALUES ('$email')";

  if ($conn->query($sql) === TRUE) {
    echo "Your message has been sent. Thank you!";
  } else {
    http_response_code(500);
    echo "Error: " . $conn->error;
  }

  $conn->close();
} else {
  http_response_code(403);
  echo "There was a problem with your submission, please try again.";
}
?>
