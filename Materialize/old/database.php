<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "id17867745_muhalwan";
$password = "Ayamgoreng12@";
$dbname = "id17867745_pweb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM login";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - pass: " . $row["pass"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>

</body>
</html>