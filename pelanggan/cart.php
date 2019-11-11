<html>
<head>
<title> Menu Coba</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="../font_awesome/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">

</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light  bg-dark fixed-top">
    <div class="container">
        <h3><i class="fas fa-shopping-cart text-light mr-2"></i></h3>
        <a class="navbar-brand font-weight-bold text-light" href="#">Rizz Cafe</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mr-4">
                <li class="nav-item active">
                    <a class="nav-link  text-light" href="index.php">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link  text-light" href="carapesan.php">Cara Pesan <span class="sr-only">(current) </span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link  text-light" href="hubungi.php">Hubungi Kami<span class="sr-only">(current) </span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link  text-light" href="#">Bantuan <span class="sr-only">(current) </span></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>

            <!-- icon -->
            <div class="icon">
            <h3> <a href="cart.php"><i class="fas fa-shopping-cart text-light  mr-3 ml-3"></i> </a>
            </h3>

            </div>
        </div>
    </div>
</nav>
<br> <br> <br>


<!-- Ini Tabel -->
<h2 class="text-center text-dark">Keranjang Anda</h2>

<!-- Ini Sidebar -->
<div class="row "> 
    <div class="col-md-2 bg-light">
        <ul class="list-group list-group-flush p-2 pt-4">
          <li class="list-group-item bg-dark"><i class="fas fa-list mr-2 text-light"> KATEGORI MENU</i> </li>
          <li class="list-group-item"> <i class="fas fa-angle-right text-dark mr-2"> Pasta </i></li>
          <li class="list-group-item"> <i class="fas fa-angle-right text-dark mr-2"> Nasi </i></li>
          <li class="list-group-item"> <i class="fas fa-angle-right text-dark mr-2"> Mie </i></li>
          <li class="list-group-item"> <i class="fas fa-angle-right text-dark mr-2"> Minuman</i></li>
          <li class="list-group-item"> <i class="fas fa-angle-right text-dark mr-2"> Dessert</i></li>
        </ul>   
    </div>




 <!-- Ini Tabel -->
 
<div class="col-md-10 bg-light">
    <div class="row mt-4"> 
            <div class="col-md-10 bg-light">
     <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Pesanan</th>
          <th scope="col">Jumlah</th>
          <th scope="col">Harga Satuan</th>
          <th scope="col">Jumlah Total</th>
          <th scope="col">Catatan</th>
          <th scope="col">Keterangan</th>

        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td> abc </td>
          <td>  def</td>
          <td>  ghi</td>
        </tr>
        
      </tbody>
    </table>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>