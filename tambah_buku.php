<?php
//memasukkan file config.php
    include('../config.php');
    if(isset($_POST['submit'])){
        $id_buku		= @$_POST['judul'];
        $judul			= @$_POST['judul'];
        $penerbit		= @$_POST['penerbit'];
        $pengarang		= @$_POST['pengarang'];
        $ringkasan	    = @$_POST['ringkasan'];
        $cover	    	= @$_POST['cover'];
        $stok	    	= @$_POST['stok'];
        $id_kategori	= @$_POST['id_kategori'];
        
        $cek = mysqli_query($koneksi, "SELECT * FROM t_buku WHERE kode_buku='$id_buku'") or die(mysqli_error($koneksi));
        
        if(mysqli_num_rows($cek) == 0){
            $sql = mysqli_query($koneksi, "INSERT INTO t_buku(id_buku, judul,penerbit,pengarang,ringkasan ,cover,stok, id_kategori) VALUES('$id_buku', '$judul', '$penerbit','$pengarang','$ringkasan','$cover', '$stok','$id_kategori')") or die(mysqli_error($koneksi));
            
            if($sql){
                echo '<script>alert("Berhasil menambahkan data."); document.location="tampil_buku.php";</script>';
            }else{
                echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
            }
        }else{
            echo '<div class="alert alert-warning">Gagal, kode_buku sudah terdaftar.</div>';
        }
    }
?>