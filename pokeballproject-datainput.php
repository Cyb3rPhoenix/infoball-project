<?php  
session_start();
if (!isset($_SESSION['username'])) {
	header("location: pokeballproject-login.php");
	$_SESSION['message'] = "You have to log in first";
}
if ($_SESSION['status'] == "Member") {
	header("location: pokeballproject-admin.php");
	$_SESSION['message'] = "You are not an admin yet";
}
include 'pokeballproject-header.php';
?>

<div class="jumbotron">
	<h1 style="text-align: center">Input New Data Below</h1>
</div>
<body>
<?php
$host = "localhost";
$user = "root";
$password = "";

$db = mysqli_connect($host, $user, $password, 'pokeballs');

if (isset($_POST["send"])) {
	$PokeballName = $_POST["pokeballname"];
	$PokeballPic = $_POST["pokeballpic"];
	$PokeballDesc = $_POST["pokeballdesc"];
	$PokeballQuote = $_POST["pokeballquote"];
	$PokeballClass = $_POST["pokeballclass"];

	$sql = "INSERT INTO pokeballtable(`Pokeball_Name`, `Pokeball_Pic`, `Pokeball_Desc`, `Pokeball_Quote`, `Pokeball_Class`) VALUES ('$PokeballName', '$PokeballPic', '$PokeballDesc', '$PokeballQuote', '$PokeballClass')";
	
	mysqli_query($db, $sql);
	header("location: pokeballproject-datasuccess.php");
}
?>
<div class="container">
	<form action="pokeballproject-datainput.php" method="post">
	 	<div style="text-align: center;">
	 		<h3>Pokeball Name</h3>
	 		<input type="text" name="pokeballname">
	 		<h3>Pokeball Picture ID</h3>
	 		<input type="text" name="pokeballpic">
	 		<h3>Pokeball Description</h3>
	 		<textarea name="pokeballdesc" rows="20" style="width: 500px"></textarea>
	 		<p>*Put backslash before every quotation mark (Example: Doesn\'t) and put &lt;br&gt; to enter</p>
	 		<h3>Pokeball Quote</h3>
	 		<input type="text" name="pokeballquote">
	 		<h3>Pokeball Class</h3>
	 		<center><div style="text-align: left; width: 150px;">
	 			<input type="radio" name="pokeballclass" value="Classic"> Classic Ball<br>
				<input type="radio" name="pokeballclass" value="Turn-Based"> Turn-Based Ball<br>
				<input type="radio" name="pokeballclass" value="Area-Specific"> Area-Specific Ball<br>
				<input type="radio" name="pokeballclass" value="Type-Based"> Type-Based Ball<br>
				<input type="radio" name="pokeballclass" value="Stat-Based"> Stat-Based Ball<br>
				<input type="radio" name="pokeballclass" value="Benefits"> Benefits Ball<br>
				<input type="radio" name="pokeballclass" value="Event"> Event Ball<br>
				<input type="radio" name="pokeballclass" value="Side"> Side Pokeball<br>
			</div></center>
	 		<br> <br>
	 		<input type="submit" name="send">
	 	</div>
 	</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>