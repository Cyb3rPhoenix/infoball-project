<?php  
session_start();
include 'pokeballproject-header.php';
?>
<div class="jumbotron">
	<h1 style="text-align: center">Register</h1>
</div>
<body>
<?php
$host = "localhost";
$user = "root";
$password = "";

$db = mysqli_connect($host, $user, $password, 'pokeballs');

if (isset($_POST["reg"])) {
	$username = $_POST["name"];
	$email = $_POST["email"];
	$password = $_POST["pass"];
	$type = $_POST["membership"];

	$sql = "INSERT INTO users(`username`, `email`, `password`, `type`) VALUES ('$username', '$email', '$password', '$type')";
	mysqli_query($db, $sql);
	header("location: pokeballproject-home.php");
	$_SESSION['username'] = $username;
	$_SESSION['status'] = $type;
}

?>
<div class="container">
	<form action="pokeballproject-register.php" method="post">
	 	<div style="text-align: center;">
	 		<h3>Username</h3>
	 		<input type="text" name="name">
	 		<h3>Email</h3>
	 		<input type="text" name="email">
	 		<h3>Password</h3>
	 		<input type="password" name="pass">
	 		<br> <br>
	 		<input type="hidden" value="Member" name="membership">
	 		<button type="submit" name="reg">Register</button>
	 		<br> <br> <br> <br> <br> <br>
	 		<a href="pokeballproject-login.php">Already has an account? Login here!</a>
	 	</div>
 	</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>