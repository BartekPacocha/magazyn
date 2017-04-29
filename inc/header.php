<?php include("auth.php");?>
 <!doctype html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<title>Magazyn</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style><?php include 'CSS/main.css'; ?></style>
  <style><?php include 'CSS/style.css'; ?></style>
  
  
  
  
</head>
<body>
	

	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="index.php">Magazyn</a>
	    </div>
	    <ul class="nav navbar-nav">
	      <li><a href="dodaj.php">Dodaj</a></li>
	      <li><a href="pokaz.php">Pokaz</a></li>
	      <li><a href="contact.php">Kontakt</a></li>
	    </ul>
		<div class="user-view">
		<span>Zalogowany jako:</span>
		<span class="user-name">
		<?php 
			echo $_SESSION['username'];
		?>
		</span>
		<div class="logout_container">
			<a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
		</div>
	  </div>
	  </div>
	  
	</nav>



