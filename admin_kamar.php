<?php
include 'koneksi.php';

$sql = "SELECT * FROM kamar";
$result = mysqli_query($conn, $sql);
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
                    
    <!-- judul -->
    <div style="margin-top:60px" class="container">

    <figure>
        <h1>Data Kamar</h1>
        <blockquote class="blockquote">
            <p>Data Kamar Yang Ada Pada Database</p>
        </blockquote>
    </figure>
    
    <a href="admin_kamar_tambah.php" class="btn btn-primary">Tambah</a>

    <!-- Tabel -->
        <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Tipe</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php while ($fetch = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td style="display: none;"><?php echo $fetch['id']; ?></td>
                        <td><img src = "images/<?php echo $fetch['foto']?>" height = "120" width = "140"/></td>
                        <td><?php echo $fetch['tipe']?></td>
                        <td><?php echo $fetch['harga']."K/Malam"?></td>
                        <td>
                            <a href="admin_kamar_edit.php?id=<?php echo $fetch['id']; ?>" class="btn btn-warning">Ubah</a>
                            <a href="admin_kamar_hapus_exe.php?id=<?php echo $fetch['id']; ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>	
                </tbody>
            </table>
        </div>
    </div>


       
        

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>