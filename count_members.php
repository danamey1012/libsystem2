<?php
$servername = "localhost";
$username = 'root';
$password = '';
$dbname = "library_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT COUNT(*) as total FROM members";
$result = $conn->query($sql);

$row = $result->fetch_assoc();
$totalMembers = $row['total'];

$conn->close();

echo $totalMembers;
?>
