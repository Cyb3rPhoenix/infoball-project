<?php  
session_start();
include 'pokeballproject-header.php';
?>

<div class="jumbotron">
	<h1 style="text-align: center">Login</h1>
</div>
<body>
<?php

$host = "localhost";
$user = "root";
$password = "";

$db = mysqli_connect($host, $user, $password, 'pokeballs');

if (isset($_POST["log"])) {
	$username = $_POST["name"];
	$password = $_POST["pass"];

	$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
	$result = mysqli_query($db, $sql);
	$usertype = mysqli_fetch_assoc($result);

	if (mysqli_num_rows($result) == 1) {
		$_SESSION['username'] = $username;
		$_SESSION['status'] = $usertype["type"];
		header("location: pokeballproject-home.php");
	} else{
		$_SESSION['message'] = "Username / password combination is incorrect";
	}	
}
if (isset($_SESSION['message'])) {
	echo "<center><p style='color: red'>" . $_SESSION['message'] . "</p></center>";
	unset($_SESSION["message"]);
}

?>
<div class="container">
	<form action="pokeballproject-login.php" method="post">
	 	<div style="text-align: center;">
	 		<h3>Username</h3>
	 		<input type="text" name="name">
	 		<h3>Password</h3>
	 		<input type="password" name="pass">
	 		<br> <br>
	 		<button type="submit" name="log">Login</button>
	 		<br> <br> <br> <br> <br> <br>
	 		<a href="pokeballproject-register.php">Don't have an account? Click here to register!</a>
	 	</div>
 	</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>