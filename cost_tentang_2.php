<?php
include 'koneksi.php';
include 'cost_tentang_2_exe.php';

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


    <div style="display flex; text-align: center; position:relative; top:-340px">
        <h1 style="color: white; font-size:80px;">Tentang Kami</h1>
    </div>


    <section class="section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7">
            <h2 class="heading" data-aos="fade-up">Tentang Kami</h2>
          </div>
        </div>
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-6">
            <p>Hoteru, salah satu hotel terbaik yang dekat dengan pusat kota dan tempat berbelanja. Didukung dengan tempat spa lengkap, Gym, kolam renang serta kamar super keren akan membuat liburan Anda semakin menyenangkan.   </p>
          </div>
        </div>
        
      </div>
    </section>


    <section class="section contact-section" style="margin-top:150px">
      <div class="container">
        <div class="row">
          <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
          <h2 class="heading text-black" data-aos="fade">Kritik &amp; Saran</h2>
            
            <form action="#" method="post" enctype="multipart/form-data" class="bg-white p-md-5 p-4 mb-5 border">
              
            <div class="row">
                <div class="col-md-6 form-group">
                  <label for="nama">Nama</label>
                  <input type="text" id="nama" name="nama" class="form-control ">
                </div>
              </div>
          
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" name="email" class="form-control ">
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-md-12 form-group">
                  <label for="pesan">Pesan</label>
                  <textarea name="pesan" id="pesan" class="form-control " cols="30" rows="8"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <button type="submit" name="submit" class="btn btn-warning text-white font-weight-bold">Kirim</button>
                </div>
              </div>
              
            </form>
          </div>

          <div class="col-md-5" data-aos="fade-up" data-aos-delay="200">
            <div class="row">
              <div class="col-md-10 ml-auto contact-info">
                <p><span class="d-block">Address:</span> <span> Jl. garam, kecamatan gula, Bandar Lampung</span></p>
                <p><span class="d-block">Phone:</span> <span> (+62) 444 3535</span></p>
                <p><span class="d-block">Email:</span> <span> Hoteru@domain.com</span></p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>


    <div>
        <div class="navbar-fixed">
            <ul>
            <li class="none-style-navbar" style="float:left"><a href="#">Hoteru</a></li>
            <li><a href="cost_akun.php">Akun</a></li>
            <li><a class="active" href="cost_tentang_2.php">Tentang Kami</a></li>
            <li><a href="cost_kamar_2.php">Kamar</a></li>
            <li><a href="cost_home_2.php">Home</a></li>
            </ul>
        </div>    
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>