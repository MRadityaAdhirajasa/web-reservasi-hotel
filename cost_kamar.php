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
    <title>Hoteru</title>

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .hideme {
        height: 1px; border: none }
        .noborder{border: none}
        .offscreen {
        height: 1px; width: 1px; position: absolute; overflow: hidden; top: -10px; }
    </style>

</head>
<body>

    <div class="bg-image" style="background-image: url(images/lobby.jpeg); height: 100vh;filter: brightness(50%)">
    </div>


    <div style="display flex; text-align: center; position:relative; top:-340px">
        <h1 style="color: white; font-size:80px;">Kamar</h1>
    </div>



    <section class="section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7">
            <h2 class="heading" data-aos="fade-up">Kamar</h2>
          </div>
        </div>

        <table class="table">
            <thead>
                <tr class="hideme">
                <th scope="col" class="noborder"><span class="offscreen">Foto</span></th>
                <th scope="col" class="noborder"><span class="offscreen">Jenis</span></th>
                <th scope="col" class="noborder"><span class="offscreen">Harga</span></th>
                <th scope="col" class="noborder"><span class="offscreen">Action</span></th>
                </tr>
            </thead>
            <tbody>
            <?php while ($fetch = mysqli_fetch_assoc($result)) { ?>
                <tr>
                <td><img src = "images/<?php echo $fetch['foto']?>" alt="foto" width="330px" height="200px"></td>
                <td style="padding-top: 110px"><h3><?php echo $fetch['tipe']?></h3></td>
                <td style="padding-top: 110px"><h3><?php echo $fetch['harga']."K/Malam"?></h3></td>
                </tr>
                <?php
                }
                ?>	
            </tbody>
        </table>
      </div>
    </section>


    <div>
        <div class="navbar-fixed">
            <ul>
            <li class="none-style-navbar" style="float:left"><a href="#">Hoteru</a></li>
            <li><a href="masuk.php">Masuk</a></li>
            <li><a href="cost_tentang.php">Tentang Kami</a></li>
            <li><a class="active" href="cost_kamar.php">Kamar</a></li>
            <li><a href="cost_home.php">Home</a></li>
            </ul>
        </div>    
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>