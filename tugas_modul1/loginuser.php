<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	<br/>
	<br/>
	<form method="post" action="cek_loginuser.php">
        <h2>LOGIN</h2>
        <label>Username</label>
     	<input type="text" name="username" placeholder="Masukkan Username" required autofocus><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Masukkan Password" required autofocus><br>

     	<button type="submit">Login</button>
	</form>
</body>
</html>

