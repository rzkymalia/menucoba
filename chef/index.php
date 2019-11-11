<?php 
session_start();
// koneksi ke database
$koneksi= new mysqli ("localhost", "root", "", "menucoba");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> Chef</title>
  <!-- BOOTSTRAP STYLES-->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <!-- MORRIS CHART STYLES-->
  <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
  <!-- CUSTOM STYLES-->
  <link href="assets/css/custom.css" rel="stylesheet" />
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
  <style>
    body{
      font-family: Century Gothic;
    }
    .navbar-cls-top .navbar-brand {
        color: black ;
        background: yellow ;
        width: 260px;
        text-align: center;
        height: 60px;
        font-size: 30px;
        font-weight: 700;
    }
    .navbar-cls-top {
        background: #DEB887;
        border-bottom: none;
    }
    .sidebar-collapse .nav > li > a {
        color: black ;
        background: #DEB887;
        text-shadow: none;
    }
    .page-inner {
        width: 100%;
        margin: 10px 20px 10px 0px;
        background-color: #fff!important;
        padding: 10px;
        min-height: 1200px;
    }
    .navbar-header {
        background:     #CD853F;
    }
    .a {
        color: #8FBC8F;
        background: yellow;
        text-shadow: none;
        `   }
     #page-inner {
            width: 100%;
            margin: 10px 20px 10px 0px;
            background-color:  white!important;
            padding: 10px;
            min-height: 800px;
        }
    .user-image {
            margin: 50px auto;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 15px;
            max-height: 230px;
            max-width: 230px;
        }
    .navbar-cls-top .navbar-brand {
            color: black;
            background:     #D2B48C;
            width: 260px;
            text-align: center;
            height: 60px;
            font-size: 30px;
            font-weight: 700;
        }
        /*buat footer*/
        #page-wrapper {
            margin: 0 0 0 260px;
            padding: 15px 30px;
            min-height: 750px;
        }
    footer{
        background-color: pink;
    }
  </style>
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"> Chef</a> 
            </div>
            <div style="color: white;
            padding: 15px 50px 5px 50px;
            float: right;
            font-size: 16px;">  &nbsp; <a href="../login/index.php?halaman=logout" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="assets/img/find_user.png" class="user-image img-responsive"/>
                    </li>

                    <li> <a href="index.php?halaman=home"> <i class="fa fa-dashboard fa-3x"></i> Home</a> </li>
                    <li> <a href="index.php?halaman=pembelian"> <i class="fa fa-dashboard fa-3x"></i> Pemesanan</a> </li>
                </nav>  
                
                <!-- /. NAV SIDE  -->
                
                <!-- /. PAGE WRAPPER  -->
                 <div id="page-wrapper" >
                    <div id="page-inner">
                       <?php 
                       if (isset($_GET['halaman']))
                       {
                        if ($_GET['halaman']=="pembelian") {
                            include 'pembelian.php';
                        }
                        elseif ($_GET['halaman']=="pelanggan") {
                            include 'pelanggan.php';
                        }
                        elseif ($_GET['halaman']=="pembelian") {
                            include 'pembelian.php';
                        }
                        elseif ($_GET['halaman']== "pembayaran") {
                            include 'pembayaran.php';
                        }
                        elseif($_GET['halaman']== "detail"){
                            include 'detail.php';
                        }
                        elseif ($_GET['halaman']=="tambahmenu"){
                            include 'tambahmenu.php';
                        }
                        elseif ($_GET['halaman']=="hapusmenu") {
                            include 'hapusmenu.php';
                        }
                        elseif ($_GET['halaman']=="ubahmenu"){
                            include 'ubahmenu.php';
                        }

                        elseif ($_GET['halaman']=="logout"){
                            include 'logout.php';
                        }
                    }
                    else
                    {
                        include 'home.php';
                    }

                    ?>
                </div>
            </div>
            </div>


             <footer class="footer-light">
              <div class="container pt-3">
                <div class="row text-center">
              <div class="col">
                <p> Copyright | 2019</p>
            </div>
        </div>
    </div>
</footer>

            <!-- /. WRAPPER  -->
            <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
            <!-- JQUERY SCRIPTS -->
            <script src="assets/js/jquery-1.10.2.js"></script>
            <!-- BOOTSTRAP SCRIPTS -->
            <script src="assets/js/bootstrap.min.js"></script>
            <!-- METISMENU SCRIPTS -->
            <script src="assets/js/jquery.metisMenu.js"></script>
            <!-- MORRIS CHART SCRIPTS -->
            <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
            <script src="assets/js/morris/morris.js"></script>
            <!-- CUSTOM SCRIPTS -->
            <script src="assets/js/custom.js"></script>


        </body>
        </html>
