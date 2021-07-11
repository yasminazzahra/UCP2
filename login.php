<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
</head>
<body style="background-color: #92e6a7">
	<center>
	<form action="logincontroller.php" method="POST" style="margin-top: 200px; background-color: #081c15 color : #FFF  ">
		<h1 style="color: #10451d">Login</h1>
		<label style="color: #155d27">Email :</label>
		<input type="text" name="email" placeholder="masukkan email" required="" autofocus="">
		<br/>
		<br/>
		<label style="color: #155d27">Password :</label>
		<input type="password" name="password" placeholder="masukkan password" required="">
		<br>
		<br>
		<button type="submit" style="color: #FFF; background-color: #1b4332">LOGIN</button>
	</form>
	<!-- Menampung jika ada pesan -->
	<?php if(isset($_GET['pesan'])) {  ?>
	<label style="color:#40916c;"><?php echo $_GET['pesan']; ?></label>
	<?php } ?>	
	</center>
</body>
</html>