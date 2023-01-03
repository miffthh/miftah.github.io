<?php
include "koneksi.php";
$hapus = mysqli_query($konek, "DELETE FROM transaksi_peminjaman WHERE no_peminjaman='$_GET[no_peminjaman]'");

if($hapus){
	header('location:data_peminjaman.php');
}else{
	echo "Gagal Menghapus Data...";
}
?>