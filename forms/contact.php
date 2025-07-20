<?php
// Database connection config
$host = "localhost";
$user = "u915156841_tech";       
$password = "cc%8cVr3NQ";       
$database = "u915156841_accuwebtools";

// Connect to MySQL
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
  http_response_code(500);
  echo "Database connection failed: " . $conn->connect_error;
  exit();
}

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name    = $conn->real_escape_string($_POST['name']);
  $email   = $conn->real_escape_string($_POST['email']);
  $subject = $conn->real_escape_string($_POST['subject']);
  $message = $conn->real_escape_string($_POST['message']);

  $sql = "INSERT INTO messages (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

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
