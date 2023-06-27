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

$input = $_GET["term"];
$sql = "SELECT * FROM cities WHERE city LIKE '$input%'";
$result = $conn->query($sql);

$cities = array();
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $cities[] = array(
      'id' => $row['id'],
      'label' => $row['city'],
      'value' => $row['city']
    );
  }
}

$conn->close();

echo json_encode($cities);
?>
