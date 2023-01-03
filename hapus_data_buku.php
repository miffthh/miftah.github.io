<?php
include "koneksi.php";
$hapus = mysqli_query($konek, "DELETE FROM data_buku WHERE no_buku='$_GET[no_buku]'");

if($hapus){
	header('location:data_buku.php');
}else{
	echo "Gagal Menghapus Data...";
}
?>