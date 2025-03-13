<?php
$servername = "host.docker.internal"; // Docker service name for MySQL
$username = "mysql91";
$password = "*killmenow*"; // Same as in docker-compose.yml
$dbname = "mlops";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
