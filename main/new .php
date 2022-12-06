<!-------<h1>Welcome, <?php echo $_SESSION['user_name']; ?></h1>
        <a href="logout.php">Logout</a>
		
		  $connection = $conn = mysqli_connect($sname, $unmae, $password, $db_name);
if (!$connection) {
  die("Database connection failed: " . mysqli_connect_error()); }
  
  
  <!-----<?php 

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

$sql = "CREATE TABLE IF NOT EXISTS products (product_id INT NOT NULL AUTO_INCREMENT,
name VARCHAR(64),
price DOUBLE,
decription BLOB,
PRIMARY KEY(product_ID)
)";

$result = mysqli_query($conn, $sql) or die ("Bad Create: $sql");
?>---->