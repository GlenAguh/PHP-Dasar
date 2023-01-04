<?php 
require 'functions.php';
session_start();

// cek cookie
if( isset($_COOKIE['Id']) && isset($_COOKIE['key']) ) {
	$id = $_COOKIE['Id'];
	$key = $_COOKIE['key'];

	// ambil username berdasarkan id
	$result = mysqli_query($conn, "SELECT username FROM user WHERE Id = $id");
	$row = mysqli_fetch_assoc($result);

	// cek cookie dan username
	if( $key === hash('sha256', $row['username']) ) {
		$_SESSION['login'] = true;
	}


}

if(isset ($_SESSION["login"]) ){
    header("Location: index.php");
    exit;
}



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


				// cek remember me
			if( isset($_POST['remember']) ) {
				// buat cookie
				setcookie('Id', $row['Id'], time()+60);
				setcookie('key', hash('sha256', $row['username']), time()+60);
			}


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
    <link rel="stylesheet" href="css/login.css">
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

				<input type="checkbox" name="remember" id="remember">
				<label for="remember">Remember Me</label>
				
				<br><br>

				<button type="submit" name="login">login</button>
				
			</form>
		</div>
	</div>
</body>
</html>