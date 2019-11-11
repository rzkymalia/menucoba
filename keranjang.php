<?php 
session_start();


$koneksi = new mysqli("localhost","root", "", "menucoba");

if (empty($_SESSION['keranjang']) OR !isset ($_SESSION["keranjang"])) {
	echo "<script> alert ('keranjang kosong, silahkan belanja dulu') ; </script>";
	echo "<script>location='index.php';</script> ";
}

?>

<!DOCTYPE html>
<head>
	<title> Keranjang </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="font_awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style>
		body{
			font-family: Century Gothic;
			background-color: grey;
		}
	</style>
</head>
<body>
	<br> <br> <br>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light  bg-light fixed-top mb-3">
		<div class="container">
			<h1> <a class="navbar-brand font-weight-bold text-dark" href="#">Kafe Rute 15</a> </h1>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto mr-4">
					<li class="nav-item dropdown">
						<a class="nav-link text-dark  font-weight-bold" href="index.php">Home</a>  <span class="sr-only">(current) </span></a>
						
						<li class="nav-item active">
							<a class="nav-link  text-dark font-weight-bold" href="carapesan.php">Cara Pesan <span class="sr-only">(current) </span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link text-dark font-weight-bold" href="keranjang.php">Keranjang<span class="sr-only">(current) </span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link  text-dark font-weight-bold" href="checkout.php">Checkout <span class="sr-only">(current) </span></a>
						</li>

						<!-- Jika sudah login (ada session meja) -->
						<?php if (isset($_SESSION["meja"])): ?>
							<button type="button" class=" text-light"><a href="logout.php">Logout</a></button>

							<!-- Selain itu (belum ada session meja ) -->
							<?php else: ?>
								<li class="nav-item active">
									<button type="button" class=" text-light"><a href="login.php">Login</a></button>
								</li>
							<?php endif ?>
						</ul>
					</div>
				</div>
			</nav>


			<section class="konten">
				<div class="container">
					<h1 class="text-light">Keranjang Belanja</h1>
					<hr>
					<table class="table table-bordered" bgcolor="#DEB887">
						<thead>
							<tr class="text-dark">
								<th>No</th>
								<th>Menu</th>
								<th>Harga</th>
								<th>Jumlah</th>
								<th>Subharga</th>
								<th>Aksi</th>

							</tr>
						</thead>
						<tbody bgcolor="#FFEBCD">
							<tr>
								<?php $nomor= 1; ?>
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
									<td> 
										<a href="hapuskeranjang.php?id=<?php echo $id_menu  ?>" class="btn btn-danger ">Hapus</a>
									</td>

								</tr>
								<?php $nomor++; ?>
							<?php endforeach; ?>
						</tbody>
					</table>
					<a href="index.php" class="btn btn-primary">Lanjutkan Belanja</a>
					<a href="checkout.php" class="btn btn-danger">Checkout</a>

					

				</div>
			</section>



			<br><br><br><br><br><br><br>
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

			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		</body>
		</html>