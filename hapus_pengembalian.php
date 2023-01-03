<?php
include "koneksi.php";
$hapus = mysqli_query($konek, "DELETE FROM transaksi_pengembalian WHERE no_pengembalian='$_GET[no_pengembalian]'");

if($hapus){
	header('location:data_pengembalian.php');
}else{
	echo "Gagal Menghapus Data...";
}
?>