<?php 
	// Bagian untuk menghpus beberapa list ikan
	
	session_start();

	$id_ikan = $_GET["id"];
	unset($_SESSION["keranjang"][$id_ikan]);

	echo "<script>alert('pesanan ikan dihapus dari keranjang');</script>";
	echo "<script>location='keranjang.php'; </script>";
 ?>