<?php 
//koneksi
require_once('koneksi.php');

$nomor_induk=$_GET['nomor_induk'];

$query="SELECT * FROM tb_nasabah WHERE nomor_induk = '$nomor_induk' ";
$data= mysqli_query($conn,$query);

$row= mysqli_fetch_assoc($data);

?>

<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title>edit nasabah</title>

</head>
<body>

		<div class="container" >
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 class="judul">Edit Data</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
		            <form method="POST" action="ubah_data.php">
					  <div class="form-group">
					    	<label for="nomor_induk">Nomor Induk</label>
					    	<input type="text" class="form-control" name="nomor_induk" placeholder="contoh: 90732" value="<?php echo $row['nomor_induk']; ?>">
					  </div>
					  <div class="form-group">
					    	<label for="nama">Nama</label>
					    	<input type="text" class="form-control" name="nama" placeholder="contoh: sarinem" value="<?php echo $row['nama']; ?>">
					  </div>
					  <div class="form-group">
					    	<label for="gender">Jenis Kelamin</label><br>
					    	<p>
			                	<input type="radio" name="gender" value="l" <?php if(!strcmp($row['gender'],"L")){echo "CHECKED";} ?> > Laki-laki
			                	<input type="radio" name="gender" value="p" <?php if(!strcmp($row['gender'],"P")){echo "CHECKED";} ?> > Perempuan
			                </p>	
					  </div>
					  <div class="form-group">
					    	<label for="alamat">Alamat</label>
					    	<textarea class="form-control" name="alamat"><?php echo $row['alamat']; ?></textarea>
					  </div>
					  <div class="form-group">
					    	<label for="saldo">Saldo</label>
					    	<input type="text" class="form-control" name="saldo" placeholder="contoh: 12.000" value="<?php echo $row['saldo']; ?>" >
					  </div>
					  <div class="form-group">
					    	<label for="golongan">Golongan</label><br>
					    	<p>
			                	<input type="radio" name="golongan" value="WNI" <?php if(!strcmp($row['golongan'],"WNI")){echo "CHECKED";} ?> > WNI
			                	<input type="radio" name="golongan" value="WNA" <?php if(!strcmp($row['golongan'],"WNA")){echo "CHECKED";} ?> > WNA
			                </p>
					    	
					  </div>
					  <div>
				        <button type="submit" name="tambah" class="btn bg-success text-white btn-lg btn-block">TAMBAH</button>
						<button type="reset" class="btn btn-secondary btn-lg btn-block">RESET</button>
				      </div>
					</form>

		          </div>
			</div>
		</div>

</body>
</html>