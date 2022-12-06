<?php
$servername = "localhost";
$unmae = "root";
$password = "";
$dbname = "test_db";

// Create connection
$conn = new mysqli($servername, $unmae, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (user_name, password)
VALUES ('','')";

if ($conn->query($sql) === TRUE) {
  echo "New user created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


<form action="table.php">
  <input type="submit" value="View"/>
</form>
