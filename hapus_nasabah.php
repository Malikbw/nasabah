<?php 

//koneksi
require_once('koneksi.php');

$nomor_induk=$_GET['nomor_induk'];

$query="DELETE FROM tb_nasabah WHERE nomor_induk = '$nomor_induk'";
$data= mysqli_query($conn,$query);

//langsung pindah
header('location: tampilan.php');

 ?>