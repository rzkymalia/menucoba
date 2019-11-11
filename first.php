<!DOCTYPE html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <title> Kafe Rute 15 </title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <link rel="stylesheet" href="font_awesome/css/all.min.css">
 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 <style>
  body{
    font-family: Century Gothic;
  }
  section{
    min-height: 420px;
  }

  .kotak {
    color: white;
    width: 40px;
    height:40px;
    font-size: 2em;
    background-color: orange;
    text-align: center;
    line-height: 40px;
    margin: 6px;
    float: left;
    transition: 1s;
    align: center;
    font-family: Century Gothic;
  }
  .kotak:hover{
    transform: rotate(360deg);
    border-radius: 50%;
  }
  .clear { clear : both; }
  #sidebar{
    width: auto;
    float: none;
  }
  .jumbotron{
    background-image: url(gambar/bgfix.jpg);
  }
  .portfolio{
    background-image: url(gambar/bgawal.jpg);
    opacity: 
  }
  .about{
    background-color: #FFF0F5;
    color: #8B4513;
  }
  .kaki{
    background-color:  #DEB887;
  }
  .navbar{
    background-color: #DEB887;
  }
</style>

</head>
<body>
  <br>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top mb-3">
    <div class="container">
      <h1> <a class="navbar-brand font-weight-bold text-dark" href="#">KAFE RUTE 15</a> </h1>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mr-4">
          <li class="nav-item dropdown">
            <button><a href="login.php">LOGIN</a></button>
          </ul>
        </div>
      </div>
    </nav>
    <br>    <br> 

    <!-- JUMBOTRON -->
    <div class="container">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
       <div class="container text-center">
        <br> 
        <h1 class="display-4 text-light">Selamat Datang </h1>
        <h2 class="text-light">di Kafe Rute 15 <br></h2> <br>
        <br><br><br><br><br><br><br><br>
      </div> 
    </div>
  </div>
</div>
</div>

<div class="container">
<section  class="portfolio  pb-4">
  <div class="container">
    <h1 class="text-center text-light"> Menu Andalan</h1>
    <div class="row">
      <div class="card mr-4 ml-2 mb-4 mt-2" style="width: 14rem;">
        <img src="menuandalan/menu1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div> 
      <div class="card mr-4 ml-2 mb-4 mt-2" style="width: 14rem;">
        <img src="menuandalan/nasgor.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div> 
      <div class="card mr-4 ml-2 mb-4 mt-2" style="width: 14rem;">
        <img src="menuandalan/chikensteak2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div> 
      <div class="card mr-4 ml-2 mb-4 mt-2" style="width: 14rem;">
        <img src="menuandalan/menu1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div> 
    </div>
  </section>
</div>

<div class="container">
  <section  class="about">
    <h1 class="text-center font-weight-bold">Tentang Kami</h1>
    <hr>
    <div class="container">
      <div class="row">
        <div class="col md-12 text-center">
          <h2>Alamat</h2>
          <p>Jl. Kisamaun No.150, RT.003/RW.005 </p>
          <p> Sukasari, Kec. Tangerang, Kota Tangerang, Banten 15118</p>
          <h2>Jam Operasional</h2>
          <p>Senin - Jum'at pukul 11:00 - 23:00</p>
          <p> Sabtu - Minggu pukul 11:00-00:00</p>
        </div>
      </div>  
      <br><br>
      <center>
        <h2 class="text-center">Our Partner:</h2>
        <img src="gambar/gofoodd.jpg"> &nbsp &nbsp
        <img src="gambar/gopayy.jpg">
      </center>
    </section>
  </div>


    <footer class="footer-light bg-light text-dark font-weight-bold">
      <div class="container pt-3">
        <div class="row text-center">
         <div class="col">
          <p> Copyright | 2019</p>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>