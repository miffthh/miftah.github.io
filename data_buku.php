<?php include 'header.php' ?>
<div class="container">
	<div class="row">
		<div class="coll-10">
			<div class="mt-3">
				<h3>Data Buku</h3>
<hr>
<p>Selamat Datang di Halaman Data Buku. Berikut merupakan data Buku yang ada di Perpustakaan.</p>
<hr>
<a href="input_data_buku.php">Tambah Data</a>

<table class="table">
	<thead class="table-dark">


	<tr align="center">
		<th> No</th>
		<th>No Buku</th>
		<th>Judul</th>
		<th>Penerbit</th>
		<th>Tahun Terbit</th>
		<th>Pengarang</th>
		<th>Stok</th>
		<th>Aksi</th>
	</tr>
	</tr>
	</thead>
	<tbody class="table table-success table-striped">

	<?php 
	include "koneksi.php";
	$no=1;
	$sqlBuku = mysqli_query($konek, "SELECT *FROM data_buku ORDER BY no_buku ASC");

	while ($d =mysqli_fetch_array($sqlBuku)) {
		echo "<tr>
		<td align='center'>$no</td>
		<td align='center'>$d[no_buku]</td>
		<td align='center'>$d[judul]</td>
		<td align='center'>$d[penerbit]</td>
		<td align='center'>$d[tahun_terbit]</td>
		<td align='center'>$d[pengarang]</td>
		<td align='center'>$d[stok]</td>
		<td align='center'>
			<a href='edit_data_buku.php?no_buku=$d[no_buku]'>Edit</a> | <a href='hapus_data_buku.php?no_buku=$d[no_buku]'>Hapus</a>
		</td>
		</tr>";
		$no++;
	}
	 ?>
</tbody>
	</div>			
		</div>		
	</div>	
</div>
</table>