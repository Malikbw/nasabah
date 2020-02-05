<?php 
//untuk memanggil file koneksi
require_once('koneksi.php');

$query="SELECT * FROM tb_nasabah";
$data=mysqli_query($conn,$query)
 ?>

<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

	<title>tampilan bagian nasabah</title>

</head>
<body>

	<div class="container">
		<h1 style="text-align: center; margin:40px 0 15px 0">Data Nasabah</h1>
		<table class="table table-bordered">
			<thead class="thead-dark">
			    <tr style="text-align: center;">
				    <th scope="col">Nomor Induk</th>
				    <th scope="col">Nama</th>
				    <th scope="col">Gender</th>
				    <th scope="col">Alamat</th>
				    <th scope="col">Saldo</th>
				    <th scope="col">Golongan</th>
				    <th scope="col">Pengaturan</th>
			    </tr>
			</thead>

			<?php 
			while($row=mysqli_fetch_assoc($data)) { 
			?>

			<tbody>
			    <tr style="text-align: center;">
			    	<th scope="row"><?php echo $row['nomor_induk'] ?></th>
			    	<td><?php echo $row['nama'] ?></td>
			    	<td><?php echo $row['gender'] ?></td>
			    	<td><?php echo $row['alamat'] ?></td>
			    	<td><?php echo $row['saldo'] ?></td>
			    	<td><?php echo $row['golongan'] ?></td>
			    	<td>
			    		<a href="edit_nasabah.php?nomor_induk=<?php echo $row['nomor_induk']; ?>"><i class="material-icons">edit</i> |</a>
			    		<a href="hapus_nasabah.php?nomor_induk=<?php echo $row['nomor_induk']; ?>" onclick="return confirm('yakin dihapus?')"><i class="material-icons color: red" style="color: red">delete</i></a>


			    	</td>
			    </tr>
			</tbody>

			<?php
			} 
			?>
		</table>

		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="text-align: left">
			Tambah Nasabah
		</button>

		<!-- <div class="container" >
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 class="judul">Input Data</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
		            <form method="POST" action="tambah_nasabah.php">
					  <div class="form-group">
					    	<label for="nomor_induk">Nomor Induk</label>
					    	<input type="text" class="form-control" name="nomor_induk" placeholder="contoh: 90732">
					  </div>
					  <div class="form-group">
					    	<label for="nama">Nama</label>
					    	<input type="text" class="form-control" name="nama" placeholder="contoh: sarinem">
					  </div>
					  <div class="form-group">
					    	<label for="gender">Jenis Kelamin</label><br>
					    	<p>
			                	<input type="radio" name="gender" value="l"> Laki-laki
			                	<input type="radio" name="gender" value="p"> Perempuan
			                </p>	
					  </div>
					  <div class="form-group">
					    	<label for="alamat">Alamat</label>
					    	<textarea class="form-control" name="alamat" rows="3"></textarea>
					  </div>
					  <div class="form-group">
					    	<label for="saldo">Saldo</label>
					    	<input type="text" class="form-control" name="saldo" placeholder="contoh: 12.000">
					  </div>
					  <div class="form-group">
					    	<label for="golongan">Golongan</label><br>
					    	<p>
			                	<input type="radio" name="golongan" value="WNI"> WNI
			                	<input type="radio" name="golongan" value="WNA"> WNA
			                </p>
					    	
					  </div>
					  <div>
				        <button type="submit" name="tambah" class="btn bg-success text-white btn-lg btn-block">TAMBAH</button>
						<button type="reset" class="btn btn-secondary btn-lg btn-block">RESET</button>
				      </div>
					</form>

		          </div>
			</div>
		</div> -->

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">tambahkan nasabah</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      	<!-- bagian form -->
		      	<form method="POST" action="tambah_nasabah.php">
				  <div class="form-group">
				    	<label for="nomor_induk">Nomor Induk</label>
				    	<input type="text" class="form-control" name="nomor_induk" placeholder="contoh: 90732">
				  </div>
				  <div class="form-group">
				    	<label for="nama">Nama</label>
				    	<input type="text" class="form-control" name="nama" placeholder="contoh: sarinem">
				  </div>
				  <div class="form-group">
				    	<label for="gender">Jenis Kelamin</label><br>
				    	<p>
		                	<input type="radio" name="gender" value="l"> Laki-laki
		                	<input type="radio" name="gender" value="p"> Perempuan
		                </p>	
				  </div>
				  <div class="form-group">
				    	<label for="alamat">Alamat</label>
				    	<textarea class="form-control" name="alamat" rows="3"></textarea>
				  </div>
				  <div class="form-group">
				    	<label for="saldo">Saldo</label>
				    	<input type="text" class="form-control" name="saldo" placeholder="contoh: 12.000">
				  </div>
				  <div class="form-group">
				    	<label for="golongan">Golongan</label><br>
				    	<p>
		                	<input type="radio" name="golongan" value="WNI"> WNI
		                	<input type="radio" name="golongan" value="WNA"> WNA
		                </p>
				    	
				  </div>
				  <div class="modal-footer">
			        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Reset</button>
			        <button type="submit" class="btn btn-primary" name="tambah">Tambah</button>
			      </div>
				</form>
		      </div>
		      
		    </div>
		  </div>
		</div>


	</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>