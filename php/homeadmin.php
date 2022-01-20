<?php

session_start();
//the case if the user is not log in and we redirect him in the index
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../phplogin/index.php');
	exit;
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<a href="../web/Accueil.html"
      			<P><center><IMG src="../web/logo/logo.png" alt="logo" height="150" width="150"></center>
      			</a>
				<a href="profileadmin.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
				<a href="register.html"><i class="fas fa-user-plus"></i>Register</a>
				<a href="Manage.php"><i class="fas fa-crown"></i>Manage</a>

			</div>
		</nav>
		<div class="content">
			<h2>Home Page</h2>
			<p>Welcome, <?=$_SESSION['name']?></p>
		</div>
	</body>
</html>