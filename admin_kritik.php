<?php
include 'koneksi.php';

$sql = "SELECT * FROM kritik";
$result = mysqli_query($conn, $sql);
$no = 1;
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
            <li><a class="active" href="admin_kritik.php">Kritik & Saran</a></li>
            <li><a href="admin_kamar.php">Kamar</a></li>
            <li><a href="admin_reservasi.php">Reservasi</a></li>
            </ul>
        </div>    
    </div>
                    
    <!-- judul -->
    <div style="margin-top:60px" class="container">

        <figure>
            <h1>Kritik &amp; Saran</h1>
            <blockquote class="blockquote">
                <p>Kritik &amp; Saran dari Costumer</p>
            </blockquote>
        </figure>

            <!-- Tabel -->
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Pesan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php while ($fetch = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td style="display: none;"><?php echo $fetch['id']; ?></td>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $fetch['nama']?></td>
                            <td><?php echo $fetch['email']?></td>
                            <td><?php echo $fetch['pesan']?></td>
                            <td>
                                <a href="admin_kritik_hapus_exe.php?id=<?php echo $fetch['id']; ?>" class="btn btn-danger">Hapus</a>
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