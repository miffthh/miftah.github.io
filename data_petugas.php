<?php include 'header.php' ?>
<div class="container">
	<div class="row">
		<div class="coll-10">
			<div class="mt-3">
				<h3>Data Petugas</h3>
<hr>
<p>Selamat Datang di Halaman Data Petugas Perpustakaan. Berikut merupakan data Petugas yang ada di Perpustakaan.</p>
<hr>
<a href="input_petugas.php">Tambah Data</a>

<table class="table">
	<thead class="table-dark">


	<tr align="center">
		<th>No</th>
		<th>Id Petugas</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>Username</th>
		<th>Password</th>
		<th>Aksi</th>
	</tr>
	</tr>
	</thead>
	<tbody class="table table-success table-striped">

	<?php 
	include "koneksi.php";
	$no=1;
	$sqlPetugas = mysqli_query($konek, "SELECT *FROM petugas ORDER BY id_petugas ASC");

	while ($d =mysqli_fetch_array($sqlPetugas)) {
		echo "<tr>
		<td align='center'>$no</td>
		<td align='center'>$d[id_petugas]</td>
		<td align='center'>$d[nama]</td>
		<td align='center'>$d[jenis_kelamin]</td>
		<td align='center'>$d[username]</td>
		<td align='center'>$d[password]</td>
		<td align='center'>
			<a href='edit_petugas.php?id_petugas=$d[id_petugas]'>Edit</a> | <a href='hapus_petugas.php?id_petugas=$d[id_petugas]'>Hapus</a>
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