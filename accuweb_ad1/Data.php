<?php
class Data {
    private $conn;

    public function __construct() {
        $this->conn = new mysqli("localhost", "u915156841_tech", "cc%8cVr3NQ", "u915156841_accuwebtools");

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    // Function to count total visitors
    public function getTotalUniqueVisitors() {
        $sql = "SELECT COUNT(DISTINCT ip_address) AS total_visitors FROM visitor_logs";
        $result = $this->conn->query($sql);

        if ($result && $row = $result->fetch_assoc()) {
            return $row['total_visitors'];
        }
        return 0;
    }

    public function getTotalVisitors() {
        $sql = "SELECT COUNT(ip_address) AS total_visitors FROM visitor_logs";
        $result = $this->conn->query($sql);

        if ($result && $row = $result->fetch_assoc()) {
            return $row['total_visitors'];
        }
        return 0;
    }

    // Function to count today's visitors
    public function getTodayVisitors() {
        $today = date("Y-m-d");
        $sql = "SELECT COUNT(DISTINCT ip_address) AS today_visitors 
                FROM visitor_logs 
                WHERE DATE(visit_time) = '$today'";
        $result = $this->conn->query($sql);

        if ($result && $row = $result->fetch_assoc()) {
            return $row['today_visitors'];
        }
        return 0;
    }

    public function getUniqueTodayVisitors() {
        $today = date("Y-m-d");
        $sql = "SELECT COUNT(ip_address) AS todayUnique_visitors 
                FROM visitor_logs 
                WHERE DATE(visit_time) = '$today'";
        $result = $this->conn->query($sql);

        if ($result && $row = $result->fetch_assoc()) {
            return $row['todayUnique_visitors'];
        }
        return 0;
    }
    public function getMonthlyVisitors() {
        $sql = "
            SELECT 
            DATE_FORMAT(visit_time, '%b') AS month_name,
            COUNT(ip_address) AS total_visitors,
            COUNT(DISTINCT ip_address) AS unique_visitors
        FROM visitor_logs
        WHERE YEAR(visit_time) = YEAR(CURDATE())
        GROUP BY MONTH(visit_time)
        ORDER BY MONTH(visit_time) ASC;
        ";

        $result = $this->conn->query($sql);
        $data = [];

        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $data[] = [
                    'month' => $row['month_name'],
                    'total_visitors' => $row['total_visitors'],
                    'unique_visitors' => $row['unique_visitors']
                ];
            }
        }

        return $data;
    }

    // Destructor closes DB connection when object is destroyed
    public function __destruct() {
        $this->conn->close();
    }
}
?>
