<?php

include 'koneksi.php';
include 'cost_kamar_data_exe.php';

  if (isset($_GET['id'])) {
    $id = ($_GET["id"]);
    

    $sql = "SELECT * FROM kamar WHERE id='$id'";
    $result = mysqli_query($conn, $sql);

    if(!$result){
      die ("Query Error: ".mysqli_errno($conn).
         " - ".mysqli_error($conn));
    }
   
    $fetch = mysqli_fetch_assoc($result);
       if (!count($fetch)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='kamar_2.php';</script>";
       }
  } else {
    echo "<script>alert('Masukkan data id.');window.location='kamar_2.php';</script>";
  }         
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
</head>
<body>

    <div class="bg-image" style="background-image: url(images/lobby.jpeg); height: 100vh;filter: brightness(50%)">
    </div>

    <div class="container" style="margin-top:-550px;">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-5 text-center" data-aos="fade">
          
          <form style="" action="#" method="post" class="bg-white p-md-5 p-4 mb-5 border">
            
            <div class="col-md-12 form-group">
                <h3 class="text-warning">Isi Data Diri</h3><br>
            </div>

            <div>
                <input type="hidden" name="id" value="<?php echo $fetch['id']; ?>"><br>
            </div>
          
            <div class="row">
                <div class="col-md-12 form-group">
                  <label for="nama">Nama</label>
                  <input type="text" id="nama" name="nama" class="form-control" required="true">
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="no_telp">No. Telpon</label>
                  <input type="text" id="no_telp" name="no_telp" class="form-control" required="true">
                </div>
              </div>
          
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="checkin">Check In</label>
                  <input type="date" name="checkin" id="checkin" class="form-control" required="true">
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="hari">Hari</label>
                  <input type="text" name="hari" id="hari" class="form-control" required="true">
                </div>
              </div>

              <br>
              <div class="row">
              <label for="jenis_pembayaran" class="col-sm-2 col-form-label">Pembayaran</label>
                <div class="col-md-12 form-group">
                        <select required="true" class="custom-select" name="jenis_pembayaran">
                        <option selected>Pilih Jenis Pembayaran</option>
                        <option id="va" value="va">VA</option>
                        <option id="transfer" value="transfer">Transfer</option>
                        </select>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group">
                  <input type="hidden" value="<?php echo $fetch['harga']."K/Malam"?>" type="text" name="total" id="total" class="form-control" disabled>
                </div>
              </div>
<br>
              <div class="row">
                <div class="col-md-12 form-group">
                  <button type="submit" name="submit" class="btn btn-warning text-white font-weight-bold"> Submit</button>
                </div>
              </div>
              <br>
              
            </form>

          </div>
        </div>
      </div>


    <div>
        <div class="navbar-fixed">
            <ul>
            <li class="none-style-navbar" style="float:left"><a href="#">Hoteru</a></li>
            <li><a href="cost_akun.php">Akun</a></li>
            <li><a href="cost_tentang_2.php">Tentang Kami</a></li>
            <li><a class="active" href="cost_kamar_2.php">Kamar</a></li>
            <li><a href="cost_home_2.php">Home</a></li>
            </ul>
        </div>    
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>