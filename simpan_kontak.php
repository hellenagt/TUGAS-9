<?php 
include "koneksi_inc.php";

$vnama = $_POST ['nama'];
$vjkel = $_POST ['jkel'];
$vemail = $_POST ['email'];
$valamat = $_POST ['alamat'];
$vkota = $_POST ['kota'];
$vpesan = $_POST ['pesan'];
 
mysqli_query($conn, "INSERT INTO kontak(nama,jkel,email,alamat,kota,pesan) VALUES ('$vnama', '$vjkel','$vemail','$valamat','$vkota','$vpesan')")or die ("Proses simpan ke database gagal"); 
mysqli_close(); 
echo "<script>alert('Submit Berhasil!')</script>";
echo "<script>location.href='kontak.html'</script>";
