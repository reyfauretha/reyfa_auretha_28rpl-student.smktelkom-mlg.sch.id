<?php
	include('../config.php');
	$id = @$_GET['id'];
	$sql = mysqli_query($koneksi, "DELETE FROM t_buku WHERE id='$id'");
	header('location:tampil_buku.php');

?>