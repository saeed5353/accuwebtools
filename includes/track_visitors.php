<?php
// Database connection
$conn = new mysqli("localhost", "u915156841_tech", "cc%8cVr3NQ", "u915156841_accuwebtools");
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

// Check if this IP already visited this page today (to ensure uniqueness per day)
$dateToday = date("Y-m-d");
$checkSql = "SELECT * FROM visitor_logs WHERE ip_address = '$ip' AND page_visited = '$page' AND DATE(visit_time) = '$dateToday'";
$result = $conn->query($checkSql);

if ($result->num_rows == 0) {
    // Get country via external API (optional)
    $country = "Unknown";
    $ipInfo = @file_get_contents("http://ip-api.com/json/$ip");
    if ($ipInfo !== false) {
        $ipData = json_decode($ipInfo);
        $country = $ipData->country ?? "Unknown";
    }

    // Insert into DB
    $stmt = $conn->prepare("INSERT INTO visitor_logs (ip_address, country, page_visited, user_agent, device_type) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $ip, $country, $page, $userAgent, $device);
    $stmt->execute();
    $stmt->close();
}

$conn->close();
?>
