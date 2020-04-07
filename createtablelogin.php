<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "praktikum9";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die ("Connection failed: " . mysqli_connect_error());
}
$sql = "CREATE TABLE login (
id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(20) NOT NULL,
password VARCHAR(10) NOT NULL)"; 
if (mysqli_query($conn, $sql)){
	echo "Created successfuly";
} else {
	echo "Error creating" . mysqli_error($conn);
}
mysqli_close($conn);


?>