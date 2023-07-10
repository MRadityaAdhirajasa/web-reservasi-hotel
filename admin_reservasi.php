<?php
include 'koneksi.php';

$sql = "SELECT * FROM pesanan";
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
<div>
        <div class="navbar-fixed">
            <ul>
            <li class="none-style-navbar" style="float:left"><a href="#"><img src="images/admin.png" alt="admin" width="28px" height="24px"></a></li>
            <li class="none-style-navbar" style="float:left"><a href="cost_home.php">Logout</a></li>
            <li><a href="admin_kritik.php">Kritik & Saran</a></li>
            <li><a href="admin_kamar.php">Kamar</a></li>
            <li><a class="active" href="admin_reservasi.php">Reservasi</a></li>
            </ul>
        </div>    
    </div>
                    
    <!-- judul -->
    <div style="margin-top:60px" class="container">

        <figure>
            <h1>Data Reservasi</h1>
            <blockquote class="blockquote">
                <p>Data Reservasi Yang Ada Pada Database</p>
            </blockquote>
        </figure>

        <!-- Tabel -->
        <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>No. Telp</th>
                        <th>checkin</th>
                        <th>hari</th>
                        <th>Pembayaran</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php while ($fetch = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td style="display: none;"><?php echo $fetch['id_pesanan']; ?></td>
                        <td><?php echo $fetch['nama']?></td>
                        <td><?php echo $fetch['no_telp']?></td>
                        <td><?php echo $fetch['checkin']?></td>
                        <td><?php echo $fetch['hari']?></td>
                        <td><?php echo $fetch['jenis_pembayaran']?></td>
                        <td>
                            <a href="admin_reservasi_hapus_exe.php?id=<?php echo $fetch['id_pesanan']; ?>" class="btn btn-danger">Hapus</a>
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