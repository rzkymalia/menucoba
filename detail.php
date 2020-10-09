

<?php 
session_start();
// koneksi ke database
$koneksi = new mysqli ("localhost", "root", "", "menucoba");
?>



<!DOCTYPE html>
<html>
<head>
  <title>detail</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <style>
    body{
      font-family: Century Gothic;
    }
  </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light  bg-dark fixed-top mb-4">
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

            <?php
             $id = $_GET['id'];
             $query = $koneksi->query("SELECT * FROM menu WHERE id_menu='$id' "); 
             $data = $query->fetch_assoc();
             ?>
      <div class="container shadow p-3 mb-5 bg-white rounded " style="margin-top: 100px;">
        <div class="row">
          <div class="col-md-6">
            <img src="foto_menu/<?= $data['foto_menu'] ?>" class="img-fluid mx-auto shadow-sm p-3 mb-5 bg-white rounded" style="display: block;" alt="Image" width="300" height="300" />
          </div>
          <div class="col-md-6 shadow-sm p-3 mb-5 bg-white rounded">
            <h3 class="text-center"><?= $data['nama_menu'] ?></h3>
            <p>Price : Rp <?= number_format($data['harga_menu']) ?></p>
            <p>Decription : <?= $data['deskripsi_menu'] ?></p>
            <br/>
            <br/>
            <a href="makanan.php" class="btn btn-warning">Kembali</a>
            <a href="beli.php?id=<?php echo $perproduk ['id_menu']; ?>" class="btn btn-success">Pesan</a>
          </div>
        </div>
      </div>
    
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>