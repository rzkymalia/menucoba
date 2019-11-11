<?php 
session_start();
// koneksi ke database
$koneksi = new mysqli ("localhost", "root", "", "menucoba");
?>

<!DOCTYPE html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <title> Pelanggan</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <link rel="stylesheet" href="font_awesome/css/all.min.css">
 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 <style>
  body{
    font-family: Century Gothic;
    background-image: url(gambar/bgawal.jpg);
  }
  .container .row .col-sm-6 .card .card-body{
    background-color: light ;
  }
  
  .navbar-brand .font-weight-bold .text-dark{
    background-color: blue;

  }
  .navbar{
    background-color: blue;
  }

  
</style>

</head>
<body>
  <br>

  <!-- Navbar -->

  <nav class="navbar navbar-expand-lg navbar-light  bg-light fixed-top mb-3">
    <div class="container">
      <h1> <a class="navbar-brand font-weight-bold text-dark" href="#">Kafe Rute 15</a> </h1>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mr-4 ">
          <li class="nav-item dropdown">
            <a class="nav-link text-dark font-weight-bold"  href="#" >Home <span class="sr-only">(Current)</span></a>
            <li class="nav-item active">
              <a class="nav-link  text-dark font-weight-bold" href="carapesan.php">Cara Pesan <span class="sr-only">(current) </span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link  text-dark font-weight-bold" href="keranjang.php">Keranjang<span class="sr-only">(current) </span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link  text-dark font-weight-bold" href="checkout.php">Checkout <span class="sr-only">(current) </span></a>
            </li>
            <!-- Jika sudah login (ada session meja) -->
            <?php if (isset($_SESSION["meja"])): ?>
              <button type="button" class=" text-dark"><a href="logout.php">Logout</a></button>
              <!-- Selain itu (belum ada session meja ) -->
              <?php else: ?>
                <button type="button" class=" text-light"><a href="login.php">Login</a></button>
              <?php endif ?>

            </ul>
          </div>
        </div>
      </nav>

      <br> <br> <br> 

      <div class="row"> 
       <div class="col md-3">
       </div>
       <div class="col md-3">
        <div class="alert alert-light text-center">
         <h3> Meja <?php echo $_SESSION ["meja"] ['no_meja']; ?> </h3>
       </div>
       <div class="col md-3">
       </div>
     </div>
     <div class="col md-3">
     </div>
   </div>      



      <h1 class="text-light text-center"> Daftar Menu</h1>

   <!-- Ini CARD KECIL -->
   <div class="container">
    <div class="row">
      <a href="makanan.php">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center font-weight-bold text-warning">Makanan</h5>
            </div>
          </a>
        </div>
      </div>
      <a href="minuman.php">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center font-weight-bold text-warning">Minuman</h5>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <br>

  <section class="konten">
    <div class="container">
      <div class="row">

        <?php $ambil=$koneksi-> query ("SELECT * FROM  menu ");  ?>
        <?php while ($perproduk = $ambil->fetch_assoc()){ ?>

          <div class="card ml-4 mb-4 text-center" style="width: 16rem;">
            <img src="foto_menu/<?php echo $perproduk['foto_menu']; ?>" width="250px" height="250px">
            <div class="card-body">
              <h5 class="card-title text-dark font-weight-bold"><?php echo $perproduk ['nama_menu']; ?> </h5>
              <h5 class="card-title text-dark font-weight-bold">Rp. <?php  echo number_format($perproduk['harga_menu']); ?> </h5>
              <a href="beli.php?id=<?php echo $perproduk ['id_menu']; ?>" class="btn btn-warning btn-lg font-weight-bold"> Beli</a>
              <a href="index.php?id=<?php echo $perproduk ['deskripsi_menu']; ?>" class="btn btn-warning btn-lg font-weight-bold"> Detail</a>

            </div>
          </div>

        <?php } ?>

      </div>
    </div>
  </div>
</div>

</section>

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