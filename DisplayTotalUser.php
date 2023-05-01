<?php
$servername = "mysql";
$username = "root";
$password = "password";
$dbname = "redlock";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->select_db($dbname);

$sql = "SELECT ID, Nama, Alamat, Jabatan FROM users";
$result = $conn->query($sql);
$sql = "SELECT COUNT(*) as count FROM users";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$count = $row['count'];

echo "<p>Total number of users: ".$count."</p>";

$conn->close();
?>
