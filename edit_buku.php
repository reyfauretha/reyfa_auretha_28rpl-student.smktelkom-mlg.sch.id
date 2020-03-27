<?php
//memasukkan file config.php
include('../config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tampil Data Buku</title>
    <!-- CSS online dari bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script>
        $(document).ready(function(){
            $("#myModal").on("show.bs.modal", function(event){
                // Get the button that triggered the modal
                var button = $(event.relatedTarget);

                // Extract value from the custom data-* attribute
                var titleData = button.data("title");
                $(this).find(".modal-title").text(titleData);
            });
        });
    </script>
    <style>
        .bs-example{
            margin: 20px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a href="../user.php" class="navbar-brand">Beranda</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="#" class="nav-item nav-link active">Home</a>
                <a href="#" class="nav-item nav-link">Book</a>
                <a href="#" class="nav-item nav-link">Profile</a>
            </div>
            <form class="form-inline ml-auto">
                <div class="navbar-nav">
                    <a href="../logout.php" class="nav-item nav-link active">Logout</a>
                </div>
            </form>
        </div>
    </nav>

    <?php
        //jika sudah mendapatkan parameter GET id dari URL
        if(isset($_GET['id'])){
            //membuat variabel $id untuk menyimpan id dari GET id di URL
            $id = $_GET['id'];
            
            //query ke database SELECT tabel mahasiswa berdasarkan id = $id
            $select = mysqli_query($koneksi, "SELECT * FROM t_buku WHERE id='$id'") or die(mysqli_error($koneksi));
            
            //jika hasil query = 0 maka muncul pesan error
            if(mysqli_num_rows($select) == 0){
                echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
                exit();
            //jika hasil query > 0
            }else{
                //membuat variabel $data dan menyimpan data row dari query
                $data = mysqli_fetch_assoc($select);
            }
        }
	?>
	
	<div class="container" style="margin-top:20px">
		<h2>Edit Buku</h2>
		<hr>
    
        <div> 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" data-title="editBuku">Edit Data</button> 
        </div>
        <div id="myModal" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="proses_edit_buku.php?id=<?php echo $id; ?>" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Data Buku</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">       
                            <div class="form-group">
                                <label class="control-label">ID Buku:</label>
                                <input type="text" name="id_buku"class="form-control" value="<?php echo $data['kode_buku']; ?>" readonly required>
                            </div>                 
                            <div class="form-group">
                                <label class="control-label">Judul:</label>
                                <input type="text" name="judul" class="form-control" value="<?php echo $data['judul_buku']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Penerbit:</label>
                                <input type="text" name="penerbit" class="form-control" value="<?php echo $data['jenis_buku']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Pengarang:</label>
                                <input type="number" name="pengarang" class="form-control" value="<?php echo $data['stok']; ?>" required>
                            </div>
                            <div class="form-group">Ringkasan</label>
                            <input type="text" name="ringkasan" class="form-control" value="<?php echo $data['penerbit']; ?>" required>
                            </div> 
                            <div class="form-group">
                                <label class="control-label">Cover:</label>
                                <input type="text" name="cover" class="form-control" value="<?php echo $data['stok']; ?>" required>
                            </div>    
                            <div class="form-group">
                                <label class="control-label">stok:</label>
                                <input type="number" name="stok" class="form-control" value="<?php echo $data['stok']; ?>" required>
                            </div>   
                            <div class="form-group">
                                <label class="control-label">ID kategori:</label>
                                <input type="text" name="id_kategori"class="form-control" value="<?php echo $data['kode_buku']; ?>" readonly required>
                            </div>                         
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
</body>
</html>