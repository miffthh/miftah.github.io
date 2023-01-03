<?php
	error_reporting(0);
	
	include 'header.php'; 
	include "koneksi.php";
	$id_petugas=$_GET['id_petugas'];
	$sqlEdit = mysqli_query($konek, "SELECT *FROM petugas WHERE id_petugas='".$_GET['id_petugas']."'");
	$e=mysqli_fetch_array($sqlEdit); 
	?>


<div class="container">
	<div class="row">
		<div class="coll-10">
			<div class="mt-3">
			<h3>Form Edit Data Petugas</h3>
<hr>
<p>Selamat Datang di Halaman Edit Petugas. Berikut merupakan Form Edit Pengembalian Buku yang ada di Perpustakaan.</p>
<hr>
<form  method="POST" action="edit_petugas.php">
	<table class="table">

		<tr>
			<td>Id Petugas</td>
			<td><input type="text" name="txtid_petugas" value="<?php echo $e['id_petugas']; ?>" readonly></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="txtnama" value="<?php echo $e['nama']; ?>"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>
				<select name="txtjenis_kelamin">
					<option value="<?php echo $e['jenis_kelamin']; ?>"><?php echo $e['jenis_kelamin']; ?></option>
					<option value="Laki-Laki">Laki-Laki</option>
					<option value="Perempuan">Perempuan</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="txtusername" value="<?php echo $e['username']; ?>"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" name="txtpassword" value="<?php echo $e['password']; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="update" value="Simpan"></td>
		</tr>
	</table>
	</div>			
		</div>		
	</div>
</div>
</form>

<?php

include "koneksi.php";
if (isset($_POST['update'])) {
    $id_petugas = $_POST['txtid_petugas'];
    $nama = $_POST['txtnama'];
    $jenis_kelamin = $_POST['txtjenis_kelamin'];
    $username = $_POST['txtusername'];
    $password = $_POST['txtpassword'];
    

    $result = mysqli_query($konek, "UPDATE petugas SET nama='$nama', jenis_kelamin='$jenis_kelamin', username='$username', password='$password' WHERE id_petugas='$id_petugas'");

    header("Location:data_petugas.php");
}
?>
