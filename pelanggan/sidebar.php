<html>
<head>
<title> Menu Coba</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="font_awesome/css/all.min.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light  bg-danger fixed-top">
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
                <li class="nav-item active">
                    <a class="nav-link  text-light" href="tambahmenu.php"> Tambah Menu <span class="sr-only">(current)</span></a>
                </li>
               
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>
            <!-- icon -->
            <div class="icon">
            <h3> <i class="fas fa-shopping-cart text-light  mr-3 ml-3"></i>
                <i class="fas fa-envelope text-light mr-3"> </i>
                <i class="fas fa-bell text-light mr-3"></i>
            </h3>

            </div>
        </div>
    </div>
</nav>



<!-- Sidebar -->

<div class="row mt-5 no-gutters"> 
    <div class="col-md-2 bg-light">
        <ul class="list-group list-group-flush p-2 pt-4">
          <li class="list-group-item bg-danger"><i class="fas fa-list mr-2 text-dark"> MENU</i> </li>
          <li class="list-group-item"> <i class="fas fa-angle-right text-danger mr-2"> Pasta </i></li>
          <li class="list-group-item"> <i class="fas fa-angle-right text-danger mr-2"> Nasi </i></li>
          <li class="list-group-item"> <i class="fas fa-angle-right text-danger mr-2"> Mie </i></li>
          <li class="list-group-item"> <i class="fas fa-angle-right text-danger mr-2"> Minuman</i></li>
          <li class="list-group-item"> <i class="fas fa-angle-right text-danger mr-2"> Dessert</i></li>

        </ul>   
    </div>
    
    <!-- Ini Carousel -->
    <div class="col-md-10 bg-light">
       <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/mie1.jpg" class="d-block w-100" alt="...">
       </div>
            <div class="carousel-item">
              <img src="img/pasta.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/pasta1.jpg" class="d-block w-100" alt="...">
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

        <h4 class="text-center m-4">PRODUK TERBARU</h4>

<!-- Ini Card -->


    <div class="row text-center">
        <div class="card mr-2 ml-4" style="width: 18rem;">
            <img src="img/menu1.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
        </div>

         <div class="card mr-2 ml-3" style="width: 18rem;">
                <img src="img/menu2.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
        </div>

         <div class="card mr-2 ml-3" style="width: 18rem;">
                <img src="img/menu3.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
        </div>

         <div class="card mr-4 ml-3" style="width: 18rem;">
                <img src="img/menu3.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Nasi + Chicken Katsu</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
             </div>
             </div>
        </div>
    </div>









    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>