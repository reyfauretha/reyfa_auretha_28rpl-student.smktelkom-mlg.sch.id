<?php
	include('../config.php');
	
	$id = @$_GET['id'];
	
	$judul = @$_POST['judul'];
	$penerbit = @$_POST['penerbit'];
    $pengarang = @$_POST['pengarang'];
    $ringkasan = @$_POST['ringkasan'];
    $cover = @$_POST['cover'];
    $stok = @$_POST['stok'];
	
	$sql = mysqli_query($koneksi,"UPDATE t_buku SET judul='$judul', penerbit='$penerbit', pengarang='$pengarang', 
    ringkasan='$ringkasan', cover='$cover', stok='$stok' where id='$id'");
    if($sql){
        echo '<script>alert("Berhasil menyimpan data."); document.location="tampil_buku.php?id='.$id.'";</script>';
    }else{
        echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
    }
    // header('location:tampil_buku.php');

?>