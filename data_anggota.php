<?php include 'header.php' ?>
<div class="container">
	<div class="row">
		<div class="coll-10">
			<div class="mt-3">
				<h3>Data Anggota</h3>
<hr>
<p>Selamat Datang di Halaman Data Anggota. Berikut merupakan data Anggota Perpustakaan yang sudah terdaftar menjadi Anggota.</p>
<hr>
<a href="input_anggota.php">Tambah Data</a>

<table class="table">
	<thead class="table-dark">


	<tr align="center">
		<th> No</th>
		<th>No Aanggota</th>
		<th>Nama</th>
		<th>Jurusan</th>
		<th>Jenis Kelamin</th>
		<th>No Telepon</th>
		<th>Alamat</th>
		<th>Aksi</th>
	</tr>
	</tr>
	</thead>
	<tbody class="table table-success table-striped">

	<?php 
	include "koneksi.php";
	$no=1;
	$sqlAnggota = mysqli_query($konek, "SELECT *FROM anggota ORDER BY no_anggota ASC");

	while ($d =mysqli_fetch_array($sqlAnggota)) {
		echo "<tr>
		<td align='center'>$no</td>
		<td align='center'>$d[no_anggota]</td>
		<td align='center'>$d[nama]</td>
		<td align='center'>$d[jurusan]</td>
		<td align='center'>$d[jenis_kelamin]</td>
		<td align='center'>$d[no_telepon]</td>
		<td align='center'>$d[alamat]</td>
		<td align='center'>
			<a href='edit_anggota.php?no_anggota=$d[no_anggota]'>Edit</a> | <a href='hapus_anggota.php?no_anggota=$d[no_anggota]'>Hapus</a>
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