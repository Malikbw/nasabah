<?php 

//buatsession
if (!isset($_SESSION)) {
	session_start();
}

//koneksi
require_once('koneksi.php');

//ambil data dari form
$username=mysqli_real_escape_string($conn,$_POST['username']);
$password=mysqli_real_escape_string($conn,$_POST['password']);

//masukkan data ke database
$query="SELECT * FROM tb_nasabah WHERE username='$username' AND password='$password'";
$data= mysqli_query($conn,$query);
 
//cek jumlah data yang ada
$login=mysqli_num_rows($data);

if($login > 0) {
	// echo "selamat datang";
	$_SESSION['username']=$username;
	header("location: tampilan.php");
} else {
	// echo "gagal";
	header("location: login.php");
}

?>