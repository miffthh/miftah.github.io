<?php
	error_reporting(0);
	
	include 'header.php'; 
	include "koneksi.php";
	$no_pengembalian=$_GET['no_pengembalian'];
	$sqlEdit = mysqli_query($konek, "SELECT *FROM transaksi_pengembalian WHERE no_pengembalian='".$_GET['no_pengembalian']."'");
	$e=mysqli_fetch_array($sqlEdit); 
	?>


<div class="container">
	<div class="row">
		<div class="coll-10">
			<div class="mt-3">
			<h3>Form Edit Data Pengembalian</h3>
<hr>
<p>Selamat Datang di Halaman Edit Pengembalian Peminjaman Buku. Berikut merupakan Form Edit Pengembalian Buku yang ada di Perpustakaan.</p>
<hr>
<form  method="POST" action="edit_pengembalian.php">
	<table class="table">

		<tr>
			<td>No Pengembalian</td>
			<td><input type="text" name="txtno_pengembalian" value="<?php echo $e['no_pengembalian']; ?>" readonly></td>
		</tr>
		<tr>
			<td>No Peminjaman</td>
			<?php
			$konek = mysqli_connect("localhost","root","","perpustakaan");
			?>
			<td><select name="txtno_peminjaman" kode="no_peminjaman" class="form-control"  onchange='changeValue(this.value)'required >
				<option value="<?php echo $e['no_peminjaman']; ?>"> <?php echo $e['no_peminjaman']; ?></option>
				<?php 
				$query =mysqli_query($konek, "select *from transaksi_peminjaman order by no_peminjaman esc");
				$result =mysqli_query($konek, "select *from transaksi_peminjaman");
				while ($row = mysqli_fetch_array($result)) {
					echo '<option name="no_peminjaman" value="'.$row['no_peminjaman'].'">'.$row['no_peminjaman'].'</option>';
				}
				 ?>
			</select></td>
		</tr>
		<tr>
			<td>Jumlah Pengembalian</td>
			<td><input type="text" name="txtjumlah_pengembalian" value="<?php echo $e['jumlah_pengembalian']; ?>" ></td>
		</tr>
		<tr>
			<td>Tanggal Pengembalian</td>
			<td><input type="date" name="txttanggal_pengembalian" value="<?php echo $e['tanggal_pengembalian']; ?>" ></td>
		</tr>
		<tr>
			<td>Denda</td>
			<td><input type="text" name="txtdenda" value="<?php echo $e['denda']; ?>" ></td>
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
    $no_pengembalian = $_POST['txtno_pengembalian'];
    $no_peminjaman = $_POST['txtno_peminjaman'];
    $jumlah_pengembalian = $_POST['txtjumlah_pengembalian'];
    $tanggal_pengembalian = $_POST['txttanggal_pengembalian'];
    $denda = $_POST['txtdenda'];
    

    $result = mysqli_query($konek, "UPDATE transaksi_pengembalian SET no_peminjaman='$no_peminjaman',
    																jumlah_pengembalian='$jumlah_pengembalian',
    																tanggal_pengembalian='$tanggal_pengembalian',
    																denda='$denda'
    															WHERE no_pengembalian='$no_pengembalian'");

    ?>
		<script language=javascript>document.location.href="data_pengembalian.php";</script>
		<?php
}
mysql_close();
?>
