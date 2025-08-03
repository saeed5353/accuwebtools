<?php
// Database connection
$conn = new mysqli("localhost", "u915156841_tech", "cc%8cVr3NQ", "u915156841_accuwebtools");
// $conn = new mysqli("localhost", "root", "", "toolsdb");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get visitor data
$ip = $_SERVER['REMOTE_ADDR'];
$userAgent = $_SERVER['HTTP_USER_AGENT'];
$page = $_SERVER['REQUEST_URI'];

// Determine device type
if (preg_match('/mobile/i', $userAgent)) {
    $device = "Mobile";
} elseif (preg_match('/tablet/i', $userAgent)) {
    $device = "Tablet";
} else {
    $device = "Desktop";
}

$tenMinutesAgo  = date("Y-m-d H:i:s", strtotime("-10 minutes"));

// Check if IP + page visited in the last 1 hour
$checkSql = "SELECT * FROM visitor_logs 
             WHERE ip_address = ? 
             AND page_visited = ? 
             AND visit_time >= ?";
             
$stmt = $conn->prepare($checkSql);
$stmt->bind_param("sss", $ip, $page, $tenMinutesAgo);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    // Get country (optional)
    $country = "Unknown";
    $ipInfo = @file_get_contents("http://ip-api.com/json/$ip");
    if ($ipInfo !== false) {
        $ipData = json_decode($ipInfo);
        $country = $ipData->country ?? "Unknown";
    }

    // Insert new visitor log
    $stmt = $conn->prepare("INSERT INTO visitor_logs (ip_address, country, page_visited, user_agent, device_type) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $ip, $country, $page, $userAgent, $device);
    $stmt->execute();
    $stmt->close();
}

$conn->close();
?>
