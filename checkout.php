<?php 
session_start();
$koneksi = new mysqli ("localhost", "root", "", "menucoba");

//jika tidak ada session meja  (belum login) maka dilarikan ke login php
if (!isset($_SESSION["meja"])) {
	echo "<script> alert('silahkan login');</script>";
	echo "<script> location='login.php'; </script>";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>checkout</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="font_awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style>
		body{
			font-family: Century Gothic;
			background-image: url(gambar/bgawal.jpg);		

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


			<br><br><br>
			<section class="konten">
				<div class="container">
					<h1 class="text-light">Checkout Belanja</h1>
					<hr>
					<table class="table table-bordered" bgcolor="#DEB887">
						<thead>
							<tr>
								<th>No</th>
								<th>Menu</th>
								<th>Harga</th>
								<th>Jumlah</th>
								<th>Subharga</th>
							</tr>
						</thead>
						<tbody bgcolor="#FFEBCD">
							<tr>
								<?php $nomor= 1; ?>
								<?php $totalbelanja = 0; ?>
								<?php foreach ($_SESSION["keranjang"] as $id_menu => $jumlah): ?>


									<!--  menampilkan produk yang sedang diperulaangkan berdasarkan id_menu -->
									<?php 
									$ambil=$koneksi->query("SELECT * FROM menu WHERE id_menu='".$id_menu."'");
									$pecah=$ambil->fetch_assoc();
									$subharga = $pecah["harga_menu"] * $jumlah;

									?> 

									<td> <?php echo $nomor; ?> </td>
									<td>  <?php echo $pecah ["nama_menu"]; ?> </td>
									<td> Rp. <?php echo $pecah ["harga_menu"]; ?> </td>
									<td> <?php echo $jumlah; ?> </td>
									<td> Rp. <?php echo number_format($subharga);  ?></td>
								</tr>
								<?php $nomor++; ?>
								<?php $totalbelanja+=$subharga; ?>
							<?php endforeach; ?>
						</tbody>
						<tfoot>
							<tr>
								<th colspan="4">Total Belanja</th>
								<th>Rp <?php echo number_format($totalbelanja); ?></th>
							</tr>


						</tfoot>
					</table>
					
					<div class="row">
						<div class="col md-2">
							<form method="post">
								<div class="form-group"> 
									<div class="alert alert-light font-weight-bold">No Meja</div>
								</div>
							</form>
						</div>
						<div class="col md-2">
							<div class="alert alert-primary font-weight-bold">
								 <?php echo $_SESSION ["meja"] ['no_meja']; ?>
								
							</div>
						</div>
						<div class="col md-2">
						</div>
						<div class="col md-2">
						</div>
						<div class="col md-2">
						</div>
						<div class="col md-2">
						</div>
					</div>
					<button class="btn btn-primary">checkout</button>


				</div>
			</section>

			<br><br><br><br><br><br><br><br>
			<br><br><br><br><br><br><br>
			<footer class=" footer-light bg-light text-dark font-weight-bold">
				<div class="container pt-3">
					<div class="row text-center">
						<div class="col">
							<p> Copyright | 2019</p>
						</div>
					</div>
				</div>
			</footer>




		</body>
		</html>