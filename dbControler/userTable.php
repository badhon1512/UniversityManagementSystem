

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "universitymanagement";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE user (
  userid VARCHAR(30)  PRIMARY KEY,
  username VARCHAR(30) NOT NULL,
  type VARCHAR(30) NOT NULL,
  userpassword VARCHAR(30) NOT NULL,
  activestatus VARCHAR(30) NOT NULL
  
  )";


if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();

$sql = "CREATE TABLE test (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";





?>
