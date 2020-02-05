<?php 

$servername = "localhost";
$username = "root";
$password = ""; 
$database = "nasabah"; //nama database yang akan dibuka

// membuat koneksi ke database
$conn = mysqli_connect($servername, $username, $password, $database);

// cek koneksi apakah berhasil
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "koneksi berhasil";

?>