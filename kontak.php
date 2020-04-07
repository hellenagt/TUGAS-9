<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "praktikum9";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die ("Connection failed: " . mysqli_connect_error());
}
$sql = "CREATE TABLE kontak (
id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(30) NOT NULL,
jkel VARCHAR(10),
email VARCHAR(40),
alamat VARCHAR(50),
kota VARCHAR(20),
pesan TEXT)"; 
if (mysqli_query($conn, $sql)){
	echo "Created successfuly";
} else {
	echo "Error creating" . mysqli_error($conn);
}
mysqli_close($conn);


?>