<?php
require 'functions.php';

if (isset($_POST["register"])) {

	if (registrasi($_POST) > 0) {
		echo "<script>
				alert('user baru berhasil ditambahkan!');
	 		  </script>";
	} else {
		echo mysqli_error($conn);
	}
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halaman Registrasi</title>
	<link rel="stylesheet" href="css/register.css">
</head>

<body>
		

	<div class="register-page">
		<div class="form">
			<p>REGISTER</p>
			<form class="login-form" method="post" action="">
				<input for="username" type="text" name="username" id="username" placeholder="username" />
				<input type="password" for="password" name="password" id="password" placeholder="password" />
				<input type="password" for="password2" name="password2" id="password2" placeholder="Konfirmasi password" />
				<button type="submit" name="register">login</button>
				<p class="message">Not registered? <a href="#">Create an account</a></p>
			</form>
		</div>
	</div>

</body>

</html>