<?php include 'header.php' ?>
<div class="container">
	<div class="row">
		<div class="coll-10">
			<div class="mt-3">
<h3>Form Edit Data Bukur</h3>
<hr>
<p>Selamat Datang di Halaman Edit Data Buku. Berikut merupakan Form Edit Data Buku yang ada di Perpustakaan.</p>
<hr>
<?php 
include "koneksi.php";
	$no_buku=$_GET['no_buku'];
	$sqlEdit = mysqli_query($konek, "SELECT *FROM data_buku WHERE no_buku='$_GET[no_buku]'");
	$e=mysqli_fetch_array($sqlEdit);

 ?>
<form action="edit_data_buku.php" method="POST">
	<table class="table">
		<tr>
			<td>No Buku</td>
			<td><input type="text" name="txtno_buku" value="<?php echo $e['no_buku']; ?>" readonly></td>
		</tr>
		<tr>
			<td>Judul</td>
			<td><input type="text" name="txtjudul" value="<?php echo $e['judul']; ?>"></td>
		</tr>
		<tr>
			<td>Penerbit</td>
			<td><input type="text" name="txtpenerbit" value="<?php echo $e['penerbit']; ?>"></td>
		</tr>
		<tr>
			<td>Tahun Terbit</td>
			<td><input type="text" name="txttahun_terbit" value="<?php echo $e['tahun_terbit']; ?>"></td>
		</tr>
		<tr>
			<td>Pengarang</td>
			<td><input type="text" name="txtpengarang" value="<?php echo $e['pengarang']; ?>"></td>
		</tr>
		<tr>
			<td>Stok</td>
			<td><input type="text" name="txtstok" value="<?php echo $e['stok']; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="update" value="Simpan"></td>
		</tr>
		</div>			
		</div>		
	</div>	
</div>
	</table>
</form>

<?php

include "koneksi.php";
if (isset($_POST['update'])) {
    $no_buku = $_POST['txtno_buku'];
    $judul = $_POST['txtjudul'];
    $penerbit = $_POST['txtpenerbit'];
    $tahun_terbit = $_POST['txttahun_terbit'];
    $pengarang = $_POST['txtpengarang'];
    $stok = $_POST['txtstok'];


    $result = mysqli_query($konek, "UPDATE data_buku SET judul='$judul',
    													 penerbit='$penerbit', 
    													 tahun_terbit='$tahun_terbit', 
    													 pengarang='$pengarang', 
    													 stok='$stok' 
    													  WHERE no_buku='$no_buku'");

    header("Location:data_buku.php");
	
}
?>