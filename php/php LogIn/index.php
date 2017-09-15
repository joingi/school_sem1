<?php
include('login.php'); // Includes Login Script

if (isset($_SESSION['myusername'])) {
	header("location: profile.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Form in PHP with Session</title>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
	<div class="container">
		<div id="main">
			<h1>PHP Login Sesion Example</h1>
			<div id="login">
				<h2>Login Forms</h2>
				<form action="login.php" method="post">
					<label>username :</label>
					<input id="myusername" name="myusername" Placeholder="username" type="text">
					<label>Password :</label>
					<input id="mypassword" name="mypassword" placeholder="********" type="password">
					<input name="submit" type="submit" value=" Login ">
					<span><?php echo $error; ?></span>
				</form>
			</div>
		</div>
	</div>
</body>
</html>