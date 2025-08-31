<?php
include_once "../db.php";
class User {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Function to login user
    public function login($email, $password) {
        // Sanitize input
        $email = $this->conn->real_escape_string($email);
        $hashedPassword = md5($password);
        // Prepare and execute query
        $stmt = $this->conn->prepare("SELECT id, email, password, name FROM users WHERE email = ? AND password = ?");
        $stmt->bind_param("ss", $email, $hashedPassword);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();
            
            return $user;
        }
        
        return false;
    }

    // Function to get user by ID
    public function getUserById($id) {
        $stmt = $this->conn->prepare("SELECT id, email, name FROM users WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        
        return $result->fetch_assoc();
    }

    // Function to check if user is logged in
    public function isLoggedIn() {
        return isset($_SESSION['user_id']);
    }

    // Function to logout
    public function logout() {
        session_unset();
        session_destroy();
    }

    // Close connection
    public function __destruct() {
        $this->conn->close();
    }
}
?>