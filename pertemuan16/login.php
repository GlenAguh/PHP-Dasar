<?php 
session_start();

if(isset ($_SESSION["login"]) ){
    header("Location: index.php");
    exit;
}

require 'functions.php';

    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' ");

        // cek username
        if(mysqli_num_rows($result) === 1){

            // cek password
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row["password"]) ){

				// set session
				$_SESSION["login"] = true;

                header("Location: index.php");
                exit;
            }
        }
        $error = true;
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <style>
		@import url(https://fonts.googleapis.com/css?family=Roboto:300);

		.login-page {
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

		body {
			background-color: #B2B2B2;
			font-family: "Roboto", sans-serif;
			
		}

	</style>
</head>
<body>
<div class="login-page">
		<div class="form">
			<p>LOGIN</p>
            <?php if( isset($error)) :?>
                <p style="color:red; font-style:italic; " > username / password salah</p>
                <?php endif; ?>
			<form class="login-form" method="post" action="">
				<input for="username" type="text" name="username" id="username" placeholder="username" />
				<input type="password" for="password" name="password" id="password" placeholder="password" />
				<button type="submit" name="login">login</button>
				
			</form>
		</div>
	</div>
</body>
</html>