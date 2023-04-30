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

if ($result->num_rows > 0) {
    echo "<h1>Redlock's Users</h1>";
    echo "<table style='border: 1px solid black; border-collapse: collapse;'><tr><th style='border: 1px solid black; padding: 5px;'>ID</th><th style='border: 1px solid black; padding: 5px;'>Nama</th><th style='border: 1px solid black; padding: 5px;'>Alamat</th><th style='border: 1px solid black; padding: 5px;'>Jabatan</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td style='border: 1px solid black; padding: 5px;'>".$row["ID"]."</td><td style='border: 1px solid black; padding: 5px;'>".$row["Nama"]."</td><td style='border: 1px solid black; padding: 5px;'>".$row["Alamat"]."</td><td style='border: 1px solid black; padding: 5px;'>".$row["Jabatan"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
