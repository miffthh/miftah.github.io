<?php
	error_reporting(0);
	
	include 'header.php'; 
	include "koneksi.php";
	$no_peminjaman=$_GET['no_peminjaman'];
	$sqlEdit = mysqli_query($konek, "SELECT *FROM transaksi_peminjaman WHERE no_peminjaman='".$_GET['no_peminjaman']."'");
	$e=mysqli_fetch_array($sqlEdit); 
	?>


<div class="container">
	<div class="row">
		<div class="coll-10">
			<div class="mt-3">
			<h3>Form Edit Data Peminjaman</h3>
<hr>
<p>Selamat Datang di Halaman Edit Peminjaman Buku. Berikut merupakan Form Edit Peminjaman Buku yang ada di Perpustakaan.</p>
<hr>
<form  method="POST" action="edit_peminjaman.php">
	<table class="table">

		<tr>
			<td>No Peminjaman</td>
			<td><input type="text" name="txtno_peminjaman" value="<?php echo $e['no_peminjaman']; ?>" readonly></td>
		</tr>
		<tr>
			<td>No Buku</td>
			<?php
			$konek = mysqli_connect("localhost","root","","perpustakaan");
			?>
			<td><select name="txtno_buku" kode="no_buku" class="form-control" readonly onchange='changeValue(this.value)'required >
				<option value="<?php echo $e['no_buku']; ?>"> <?php echo $e['no_buku']; ?></option>
				<?php 
				$query =mysqli_query($konek, "select *from data_buku order by no_buku esc");
				$result =mysqli_query($konek, "select *from data_buku");
				while ($row = mysqli_fetch_array($result)) {
					echo '<option name="no_buku" value="'.$row['no_buku'].'">'.$row['no_buku'].'</option>';
				}
				 ?>
			</select></td>
		</tr>
		<tr>
			<td>Judul Buku</td>
			<?php
			$konek = mysqli_connect("localhost","root","","perpustakaan");
			?>
			<td><select name="txtjudul" kode="judul" class="form-control"  onchange='changeValue(this.value)'required >
				<option value="<?php echo $e['judul']; ?>" > <?php echo $e['judul']; ?></option>
				<?php 
				$query =mysqli_query($konek, "select *from data_buku order by no_buku esc");
				$result =mysqli_query($konek, "select *from data_buku");
				while ($row = mysqli_fetch_array($result)) {
					echo '<option name="judul" value="'.$row['judul'].'">'.$row['judul'].'</option>';
				}
				 ?>
			</select></td>
		</tr>
		<tr>
			<td>No Anggota</td>
			<?php
			$konek = mysqli_connect("localhost","root","","perpustakaan");
			?>
			<td><select name="txtno_anggota" kode="no_anggota" class="form-control" readonly onchange='changeValue(this.value)'required >
				<option value="<?php echo $e['no_anggota']; ?>"><?php echo $e['no_anggota']; ?></option>
				<?php 
				$query =mysqli_query($konek, "select *from anggota order by no_anggota esc");
				$result =mysqli_query($konek, "select *from anggota");
				while ($row = mysqli_fetch_array($result)) {
					echo '<option name="no_anggota" value="'.$row['no_anggota'].'">'.$row['no_anggota'].'</option>';
				}
				 ?>
			</select></td>
		</tr>
		<tr>
			<td>Nama Anggota</td>
			<?php
			$konek = mysqli_connect("localhost","root","","perpustakaan");
			?>
			<td><select name="txtnama" kode="nama" class="form-control"  onchange='changeValue(this.value)'required >
				<option value="<?php echo $e['nama']; ?>"> <?php echo $e['nama']; ?> </option>
				<?php 
				$query =mysqli_query($konek, "select *from anggota order by no_anggota esc");
				$result =mysqli_query($konek, "select *from anggota");
				while ($row = mysqli_fetch_array($result)) {
					echo '<option name="no_nama" value="'.$row['nama'].'">'.$row['nama'].'</option>';
				}
				 ?>
			</select></td>
		</tr>
		<tr>
			<td>Id Petugas</td>
			<?php
			$konek = mysqli_connect("localhost","root","","perpustakaan");
			?>
			<td><select name="txtid_petugas" kode="id_petugas" class="form-control"  onchange='changeValue(this.value)'required >
				<option value="<?php echo $e['id_petugas']; ?>"> <?php echo $e['id_petugas']; ?></option>
				<?php 
				$query =mysqli_query($konek, "select *from petugas order by id_petugas esc");
				$result =mysqli_query($konek, "select *from petugas");
				while ($row = mysqli_fetch_array($result)) {
					echo '<option name="id_petugas" value="'.$row['id_petugas'].'">'.$row['id_petugas'].'</option>';
				}
				 ?>
			</select></td>
		</tr>
		<tr>
			<td>Jumlah Pinjam</td>
			<td><input type="text" name="txtjumlah_pinjam" value="<?php echo $e['jumlah_pinjam']; ?>" ></td>
		</tr>
		<tr>
			<td>Tanggal Pinjam</td>
			<td><input type="date" name="txttanggal_pinjam" value="<?php echo $e['tanggal_pinjam']; ?>" ></td>
		</tr>
		<tr>
			<td>Tanggal Kembali</td>
			<td><input type="date" name="txttanggal_kembali" value="<?php echo $e['tanggal_kembali']; ?>" ></td>
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
    $no_peminjaman = $_POST['txtno_peminjaman'];
    $no_buku = $_POST['txtno_buku'];
    $judul = $_POST['txtjudul'];
    $no_anggota = $_POST['txtno_anggota'];
    $nama = $_POST['txtnama'];
    $id_petugas = $_POST['txtid_petugas'];
    $jumlah_pinjam = $_POST['txtjumlah_pinjam'];
    $tanggal_pinjam = $_POST['txttanggal_pinjam'];
    $tanggal_kembali = $_POST['txttanggal_kembali'];
    

    $result = mysqli_query($konek, "UPDATE transaksi_peminjaman SET no_buku='$no_buku',
    																judul='$judul',
    																no_anggota='$no_anggota',
    																nama='$nama',
    																id_petugas='$id_petugas',
    																jumlah_pinjam='$jumlah_pinjam',
    																tanggal_pinjam='$tanggal_pinjam',
    																tanggal_kembali='$tanggal_kembali'
    															WHERE no_peminjaman='$no_peminjaman'");

    ?>
		<script language=javascript>document.location.href="data_peminjaman.php";</script>
		<?php
}
mysql_close();
?>
