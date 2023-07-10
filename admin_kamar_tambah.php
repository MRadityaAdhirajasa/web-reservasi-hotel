<?php
include 'koneksi.php';
// include 'admin_kamar_tambah_exe.php';

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Management Hoteru</title>
    
    <link rel="stylesheet" href="css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="navbar-fixed">
        <div>
            <ul>
            <li class="none-style-navbar" style="float:left"><a href="#"><img src="images/admin.png" alt="admin" width="28px" height="24px"></a></li>
            <li class="none-style-navbar" style="float:left"><a href="cost_home.php">Logout</a></li>
            <li><a href="admin_kritik.php">Kritik & Saran</a></li>
            <li><a class="active" href="admin_kamar.php">Kamar</a></li>
            <li><a href="admin_reservasi.php">Reservasi</a></li>
            </ul>
        </div>    
    </div>
       
    
    <div style="margin-top:60px" class="container">

    <figure>
        <h1>Tambah Data Kamar</h1>
    </figure>
        
        <div class="container">
            <form method="post" action="admin_kamar_tambah_exe.php" enctype="multipart/form-data">
    
            <div class="mb-3 row">
                <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                <div class="col-sm-10">
                    <input class="form-control" type="file" name="foto" accept=".jpg, .jpeg, .png">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="tipe" class="col-sm-2 col-form-label">Tipe</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="tipe">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="harga" class="col-sm-2 col-form-label">harga</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="harga">
                </div>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Tambah</button>
            <a href="admin_kamar.php" class="btn btn-danger">Kembali</a>

            </form>
        </div>
    </div>
        

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>