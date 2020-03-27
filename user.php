<?php
    session_start();
    
    if(!isset($_SESSION['email'])){
        header("Location: index.php?access_denied");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>user</title>
        <style>
            .welcome{
                color: grey;
                font-size: 34pt;
                font-weight: 900;
            }
        </style>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-light navbar-expand-md" style="background-color: #B0E0E6;">
            <a class="navbar-brand" href="#">home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="#">beranda</a>
                    <a class="nav-item nav-link" href="buku/tampil_buku.php">buku</a>
                    <a class="nav-item nav-link" href="#">profil</a>
                </div>
                <form class="form-inline ml-auto"action="">
                    <div class="navbar-nav">
                        <a href="logout.php" class="nav-item nav-link active">logout</a>
                    </div>
                </form>
            </div>
        </nav>
        <h3 class="welcome">selamat datang <?php echo $_SESSION['email'];?></h3>
        <h4><a href="logout.php">logout</a></h4>
    </body>
</html>