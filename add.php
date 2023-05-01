$sql = "SELECT COUNT(*) as count FROM users";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$count = $row['count'];

echo "<p>Total number of users: ".$count."</p>";
