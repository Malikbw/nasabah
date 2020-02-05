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
$query="UPDATE tb_nasabah SET nama = '$nama', gender = '$gender', alamat= '$alamat', saldo = '$saldo', golongan = '$golongan' WHERE nomor_induk = '$nomor_induk' ";
$ubah=mysqli_query($conn,$query);

//lngsung pindah
header('location: tampilan.php');

?>