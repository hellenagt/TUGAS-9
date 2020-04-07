<?php

include 'koneksi_inc.php';

$user = $_POST['user'];
$password = $_POST['password'];

$sql = mysqli_query($conn, "SELECT * FROM login WHERE username='$user' && password='$password'");
$test = mysqli_num_rows($sql);
if ($test>0){
	header("location:cetak.php");
}
else{
	echo "<script>alert('Username atau Password salah!')</script>";
	echo "<script>location.href='indeks.php'</script>";
}
?>