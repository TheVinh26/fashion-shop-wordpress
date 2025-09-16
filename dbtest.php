<?php
$servername = "localhost";
$username   = "thevinh";
$password   = "Vinh123@2025";
$dbname     = "wordpress";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connect failure: " . $conn->connect_error);
}
echo "Successful MySQL connection!";
$conn->close();
?>
