<?php 
session_start();
// koneksi ke database
$koneksi = new mysqli ("localhost", "root", "", "menucoba");
?>

<!DOCTYPE html>
<head>
  <title> Pelanggan</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="font_awesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    body{
      font-family: Century Gothic;
    }
  </style>

</head>
<body>
  <br>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light  bg-dark fixed-top mb-3">
    <div class="container">
      <h1> <a class="navbar-brand font-weight-bold text-light" href="#">Kafe Rute 15</a> </h1>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mr-4">
          <li class="nav-item dropdown">
            <a class="nav-link text-light dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Menu</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="makanan.php">Makanan</a>
              <a class="dropdown-item" href="minuman.php">Minuman</a>
            </div>
            <li class="nav-item active">
              <a class="nav-link  text-light" href="carapesan.php">Cara Pesan <span class="sr-only">(current) </span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link  text-light" href="keranjang.php">Keranjang<span class="sr-only">(current) </span></a>
            </li>
            <!-- Jika sudah login (ada session meja) -->
            <?php if (isset($_SESSION["meja"])): ?>
              <li class="nav-item active">
                <a class="nav-link  text-light" href="logout.php">Logout<span class="sr-only">(current) </span></a>
              </li>
              <!-- Selain itu (belum ada session meja ) -->
              <?php else: ?>
                <li class="nav-item active">
                  <a class="nav-link  text-light" href="login.php">Login <span class="sr-only">(current) </span></a>
                </li>
              <?php endif ?>
              <li class="nav-item active">
                <a class="nav-link  text-light" href="checkout.php">Checkout <span class="sr-only">(current) </span></a>
              </li>




            </ul>


          </div>
        </div>
      </nav>


      <br> <br> <br> 
      <!-- Ini Carousel -->
      <div class="container">
       <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner"> 
          <div class="carousel-item active"> 
            <img src="img/rute.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/rute2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/rute3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
  <br>

  <h4 class="text-center text-danger">PRODUK TERBARU</h4> <br>

  <!-- Ini CARD KECIL -->
  <a href=""><div class="container text-center ">
    <div class="row">
      <div class="card mr-2 ml-3" style="width: 16rem;">
        <div class="card-body">
          <h5 class="card-title text-danger"> <img src="img/new.png" alt="" width="50px">MENU TERBARU</h5>
        </div>
      </div>
    </a>

    <a href="">
      <div class="card mr-2 ml-3" style="width: 16rem;">
        <div class="card-body">
          <h5 class="card-title text-danger"> <img src="img/love.jpg" alt="" width="50px">MENU FAVORITE</h5>
        </div>
      </div>
    </a>

    <a href="">
      <div class="card mr-2 ml-3" style="width: 16rem;">
        <div class="card-body">
          <h5 class="card-title text-danger"> <img src="img/diskon.png" alt="" width="50px"> MENU PROMO</h5>
        </div>
      </div>
    </a>

    <a href="">
      <div class="card mr-2 ml-3 " style="width: 16rem;">
        <div class="card-body">
          <h5 class="card-title text-danger"><img src="img/kategori2.png" alt="" width="55px"> KATEGORI</h5>
        </div>
      </div>
    </a>

  </div>
</div>

<br>

<section class="konten">
  <div class="container">
    <h1> &nbsp Daftar Menu</h1>
    <div class="row">

      <?php $ambil=$koneksi-> query ("SELECT * FROM  menu ");  ?>
      <?php while ($perproduk = $ambil->fetch_assoc()){ ?>


        <div class="card ml-4 mb-4" style="width: 16rem;">
          <img src="foto_menu/<?php echo $perproduk['foto_menu']; ?>" width="250px" height="250px">
          <div class="card-body">
            <h5 class="card-title"><?php echo $perproduk ['nama_menu']; ?> </h5>
            <h5 class="card-title">Rp. <?php  echo $perproduk ['harga_menu']; ?> </h5>
            <a href="beli.php?id=<?php echo $perproduk ['id_menu']; ?>" class="btn btn-primary"> beli</a>
            <a href="detail.php?id=<?= $perproduk['id_menu'] ?>" class="btn btn-primary"> detail</a>
          </div>
        </div>
      <?php } ?>

    </div>
  </div>
</div>
</div>

</section>



<footer class=" footer-light bg-dark text-warning font-weight-bold">
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