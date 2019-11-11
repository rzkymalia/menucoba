<html>
<head>
	<title>
		Login Multiuser
	</title>
</head>
<link rel="stylesheet" href="style.css">
<style>
	body{
		font-family: Century Gothic;
		background-color:  #FFDEAD;
		font-weight: bold;
	}
	.kotak_login{
		width: 350px;
		background: #FFEFD5;
		/*meletakkan form ke tengah*/
		margin: 80px auto;
		padding: 30px 20px;
		box-shadow: 0px 0px 100px 4px #d6d6d6;
	}
	.tombol_login{
		background: #DEB887;
		color: white;
		font-size: 11pt;
		width: 100%;
		border: none;
		border-radius: 3px;
		padding: 10px 20px;
		font-weight: bold;
	}
</style>
<body>
	<br> <br>
	<h1> Login User</h1>
	<?php 
	if (isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?> 

	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>

		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">

			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">

			<input type="submit" class="tombol_login" value="LOGIN">

			<br/>
			<br/>
			
		</form>
		
	</div>



</body>
</html>







