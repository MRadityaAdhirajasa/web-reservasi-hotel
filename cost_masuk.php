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

    <div class="container" style="margin-top:-550px">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-5 text-center" data-aos="fade">
          
          <form style="" action="cost_home_2.php" method="post" class="bg-white p-md-5 p-4 mb-5 border">
            
            <div class="col-md-12 form-group">
                <h3 class="text-warning">Masuk</h3><br>
            </div>
          
            <div class="row">
                <div class="col-md-12 form-group">
                  <label for="nama">Nama</label>
                  <input type="text" id="nama" class="form-control" required="true">
                </div>
            </div>
          
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="password">Password</label>
                  <input type="password" id="password" class="form-control" required="true">
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group">
                    <button type="submit" name="submit" class="btn btn-warning text-white font-weight-bold"> Masuk</button>
                </div>
              </div>

              <br>
              <div class="row">
                <div class="col-md-12 form-group">
                    <a style="" href="daftar.php">Daftar</a><br>
                    <a href="admin_masuk.php">Masuk Sebagai Admin</a>
                </div>
              </div>
              
            </form>

          </div>
        </div>
      </div>


    <div>
        <div class="navbar-fixed">
            <ul>
            <li class="none-style-navbar" style="float:left"><a href="#">Hoteru</a></li>
            <li><a class="active" href="cost_masuk.php">Masuk</a></li>
            <li><a href="cost_tentang.php">Tentang Kami</a></li>
            <li><a href="cost_kamar.php">Kamar</a></li>
            <li><a href="cost_home.php">Home</a></li>
            </ul>
        </div>    
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>