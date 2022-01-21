<!DOCTYPE html>
<html>
<head>
	<title>Infoball - The Unofficial Pokéball Database</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>	
				</button>
				<a class="navbar-brand" href="pokeballproject-home.php" style="padding-left: 5px !important; padding-top: 5px !important;">
					<img src="logo.png" class="img-responsive" style="width: 40px">
				</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
				<li class="dropdown">
					<a href="" class="dropdown-toggle" data-toggle="dropdown">Pokeballs</a>
					<ul class="dropdown-menu">
				<li> <a href="pokeballproject-classicball.php">Classic Balls</a> </li> <!-- Poke ball, Great ball, Ultra ball, Master ball (4) -->
				<li> <a href="pokeballproject-turnbasedball.php">Turn-Based Balls</a> </li> <!-- Quick Ball, Timer Ball (2) -->
				<li> <a href="pokeballproject-areaspecificball.php">Area-Specific Balls</a> </li> <!-- Dive Ball, Dusk Ball, Lure Ball, Safari Ball (4) -->
				<li> <a href="pokeballproject-typebasedball.php">Type-Based Ball</a> </li> <!-- Net Ball, Beast Ball, Moon Ball (3) -->
				<li> <a href="pokeballproject-statbasedball.php">Stat-Based Ball</a> </li> <!-- Fast Ball, Level Ball, Love Ball, Nest Ball, Heavy Ball, Repeat Ball (6) -->
				<li> <a href="pokeballproject-benefitsball.php">Benefits Balls</a> </li> <!-- Heal Ball, Luxury Ball, Friend Ball (3) -->
				<li> <a href="pokeballproject-eventball.php">Event Balls</a> </li> <!-- Sport Ball, Premiere Ball, Cherish Ball, Park Ball, Dream Ball (5) -->
					</ul>
				</li>
				<li> <a href="pokeballproject-sidepokeball.php">Side Pokeball</a></li>
				<li> <a href="pokeballproject-mechanism.php">Pokeball Mechanism</a></li>
				<li> <a href="pokeballproject-gallery.php">Pokeball Gallery</a></li>
				<li> <a href="pokeballproject-quiz.php">Pokeball Quiz</a></li>
				<li class="dropdown">
					<a href="" class="dropdown-toggle" data-toggle="dropdown">Data Input</a>
					<ul class="dropdown-menu">
						<li> <a href="pokeballproject-datainput.php">Input new data</a></li>
						<li> <a href="pokeballproject-updateselection.php">Update existing data</a></li>
					</ul>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<?php  

				$host = "localhost";
				$user = "root";
				$password = "";

				if (!isset($_SESSION['username'])) {
					echo "<li> <a href='pokeballproject-login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
				} else{
					echo "<li class='dropdown'>
					<a href='' class='dropdown-toggle' data-toggle='dropdown'>Welcome, " . $_SESSION['username'] . "</a>
					<ul class='dropdown-menu'>
				<li> <a href='pokeballproject-logout.php'>Log Out</a> </li>";
				if ($_SESSION['status'] == "Member") {
					echo "<li> <a href='pokeballproject-admin.php'>Become an admin</a> </li>";
				}
				echo "</ul>";
				}

				$db = mysqli_connect($host, $user, $password, 'pokeballs');

				?>
				
			</div>
		</div>
	</nav>