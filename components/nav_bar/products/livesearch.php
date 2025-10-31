<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = 'sneaker_fest';

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$q = $_GET["q"] ?? '';
$hint = "";

if (strlen($q) > 0) {
    // Use prepared statement to avoid SQL injection
    $stmt = $conn->prepare("SELECT product_name FROM products WHERE product_name LIKE CONCAT(?, '%') ORDER BY product_name");
    $stmt->bind_param("s", $q);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $hint .= "<div class='ps-2'>" . htmlspecialchars($row['product_name']) . "</div><br />";
    }
}

$response = $hint ?: "No suggestion";
echo $response;
