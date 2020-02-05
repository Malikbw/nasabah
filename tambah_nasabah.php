<?php 
//koneksi
require_once('koneksi.php');

//ambil data
$nomor_induk=$_POST['nomor_induk'];
$nama=$_POST['nama'];
$gender=$_POST['gender'];
$alamat=$_POST['alamat'];
$saldo=$_POST['saldo'];
$golongan=$_POST['golongan'];

//masukkan data ke database
$query="INSERT INTO tb_nasabah VALUES ('$nomor_induk','$nama','$gender','$alamat','$saldo','$golongan')";
$tambah=mysqli_query($conn,$query);

//lngsung pindah
header('location: tampilan.php');

// if($tambah) {
// 	echo "data berhasil";
// }else{
// 	echo "data gagal";
// }

?>