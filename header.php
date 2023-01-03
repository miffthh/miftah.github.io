<?php
include_once("koneksi.php");

?>

<!DOCTYPE html>
<html>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<head>
    <title>Perpustakaan</title>
</head>

<body>
		<div class="container">
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		  <div class="container-fluid">
		    <a class="navbar-brand" href="index.php">Perpustakaan</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		      <div class="navbar-nav">
		        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
		        <a class="nav-link" href="data_anggota.php">Data Anggota</a>
		        <a class="nav-link" href="data_buku.php">Data Buku</a>
		        <a class="nav-link" href="data_peminjaman.php">Data Peminjaman</a>
		        <a class="nav-link" href="data_pengembalian.php">Data Pengembalian</a>
		        <a class="nav-link" href="data_petugas.php">Data Petugas</a>
		      </div>
		    </div>
		    </div>
		  </div>
		</nav>
		

   	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>