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
	<style>
		@import url(https://fonts.googleapis.com/css?family=Roboto:300);

		.register-page {
			width: 360px;
			padding: 8% 0 0;
			margin: auto;
		}

		.form {
			position: relative;
			font-family:Arial, Helvetica, sans-serif;
			z-index: 1;
			background: #FFFFFF;
			max-width: 360px;
			margin: 0 auto 100px;
			padding: 45px;
			text-align: center;
			box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
		}

		.form input {
			font-family: "Roboto", sans-serif;
			outline: 0;
			background: #f2f2f2;
			width: 100%;
			border: 0;
			margin: 0 0 15px;
			padding: 15px;
			box-sizing: border-box;
			font-size: 14px;
		}

		.form button {
			font-family: "Roboto", sans-serif;
			text-transform: uppercase;
			outline: 0;
			background: #b3b3b3;
			width: 100%;
			border: 0;
			padding: 15px;
			color: #FFFFFF;
			font-size: 14px;
			-webkit-transition: all 0.3 ease;
			transition: all 0.3 ease;
			cursor: pointer;
			color: black;
		}

		.form button:hover,
		.form button:active,
		.form button:focus {
			background: #2C3639;
			color: #f2f2f2;
		
		}

		.form .message {
			margin: 15px 0 0;
			color: #b3b3b3;
			font-size: 12px;
		}

		.form .message a {
			color: black;
			text-decoration: none;
		}

		.form .register-form {
			display: none;
		}

	

		body {
			background-color: #B2B2B2;
			font-family: "Roboto", sans-serif;
			
		}
	</style>
</head>

<body>


	<div class="register-page">
		<div class="form">
			<p>Login</p>
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