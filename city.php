<?php
// Assuming you have a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yottol";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$cityId = $_GET["id"];
$sql = "SELECT * FROM cities WHERE id = $cityId";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  echo "<h2>City Details</h2>";
  echo "<table class='result'>";
  echo "<tr><th>City</th><th>State union</th><th>Population</th></tr>";
  echo "<tr><td>" . $row["city"] . "</td><td>" . $row["state_union"] . "</td><td>" . $row["population"] . "</td></tr>";
  echo "</table>";
} else {
  echo "City not found.";
}

$conn->close();
?>
