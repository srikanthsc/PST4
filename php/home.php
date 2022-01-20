<?php

session_start();
//the case if the user is not log in and we redirect him in the index
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../Istya/index.php');
	exit;
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<!--<link href="style.css" rel="stylesheet" type="text/css">-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<a href="../web/Accueil.html"
      			<P><center>></center>
      			</a>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
				<a href="register.html"><i class="fas fa-user-plus"></i>Register</a>
			</div>
		</nav>
		<div class="content">
			<h2>Home Page</h2>
			<p>Welcome, <?=$_SESSION['name']?></p>
		</div>
	</body>
</html>