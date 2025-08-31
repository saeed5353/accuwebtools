<?php
class Data {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
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
        $sql = "SELECT COUNT(ip_address) AS today_visitors 
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
        $sql = "SELECT COUNT(DISTINCT ip_address) AS todayUnique_visitors 
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
    public function getCountryVisitorsThisMonth() {
        $sql = "
            SELECT country, COUNT(ip_address) AS total_visitors
            FROM visitor_logs
            WHERE MONTH(visit_time) = MONTH(CURDATE())
              AND YEAR(visit_time) = YEAR(CURDATE())
            GROUP BY country
            ORDER BY total_visitors DESC
        ";

        $result = $this->conn->query($sql);
        $data = [];

        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $data[] = [
                    'country' => $row['country'],
                    'total_visitors' => (int)$row['total_visitors']
                ];
            }
        }

        return $data;
    }

    // Destructor closes DB connection when object is destroyed
    public function __destruct() {
        $this->conn->close();
    }
    public function getPageVisitedStats() {
        $sql = "
            SELECT page_visited, COUNT(*) AS total_visits
            FROM visitor_logs
            GROUP BY page_visited
            ORDER BY total_visits DESC
        ";

        $result = $this->conn->query($sql);
        $data = [];
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $data[] = [
                    'page' => $row['page_visited'] ?: 'Unknown',
                    'total_visits' => (int)$row['total_visits']
                ];
            }
        }
        return $data;
    }
    public function getDeviceStats() {
        $sql = "
            SELECT device_type, COUNT(*) AS total_visits
            FROM visitor_logs
            GROUP BY device_type
            ORDER BY total_visits DESC
        ";

        $result = $this->conn->query($sql);
        $data = [];
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $data[] = [
                    'device' => $row['device_type'] ?: 'Unknown',
                    'total_visits' => (int)$row['total_visits']
                ];
            }
        }
        return $data;
    }
    public function getAllMessages() {
        $sql = "SELECT *
                FROM messages 
                ORDER BY submitted_at DESC";
        $result = $this->conn->query($sql);
        $data = [];

        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    }
}
?>
