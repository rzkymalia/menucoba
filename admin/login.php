<?php 
session_start();
//skrip koneksi

$koneksi = new mysqli ("localhost", "root", "", "menucoba");

 ?>

 <html>
 	<head>
 		<title> Login </title>
	 		<!-- Required meta tags -->
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	  <!-- Bootstrap CSS -->
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	  <link rel="stylesheet" href="style.css">
	  <style>
	    .container {
	                  width : 30%;
	                  margin-top: 9%;
	                  box-shadow: 0 3px 20px rgba(0,0,0,0.4);
	                  padding : 35px;
	                }
  </style>
 	</head>
 	<body>
 		<center>
 		<div class="container">

 			<h4 class="text-center">Form Login</h4>

 			<form method="Post">
 				<div class="form-group">
 					<label> Username</label>
 					<input type="text" name="user" class="form-control">
 				</div>

 				<div class="form-group">
 					<label>Password</label>
 					<input type="password" name="pass" class="form-control">
 				</div>

 				<button type="submit" class="btn btn-primary" name="login"> Login </button>
 				<br> <br> 

 				<h6 class="text-center">Belum punya akun? <a href="">Daftar</a></h6> 
 			</form>
	</center>
 			 <?php 
 			 if (isset($_POST['login']))
 			 {
 			 	$ambil= $koneksi->query("SELECT * FROM admin WHERE username='$_POST[user]'
 			 		AND password ='$_POST[pass]'");
 			 	$yangcocok =$ambil -> num_rows;
 			 	if ($yangcocok==1)
 			 	{
 			 		$_SESSION['admin']=$ambil->fetch_assoc(); 
 			 		echo "<div class='alert alert-info'> Login Berhasil</div>";
 			 		echo "<meta http-equiv='refresh' content='1;url=index.php'>";     
 			 	}
 			 	else{
 			 		echo "<div class='alert alert-danger'> Login Gagal</div>";
 			 		echo "<meta http-equiv='refresh' content='1;url=login.php'>";  
 			 	}
 			 }
 			 ?>

 	  </div>
  </div>
  

  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>



 	</body>
 </html>