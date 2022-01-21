<?php  
session_start();
include 'pokeballproject-header.php';
?>
<div class="jumbotron">
	<h1 style="text-align: center">Become an Infoball Admin</h1>
</div>
<body>
<?php
$host = "localhost";
$user = "root";
$password = "";
$usernameused = $_SESSION['username'];
$db = mysqli_connect($host, $user, $password, 'pokeballs');
if (isset($_POST["send"])) {
	$inputcode = $_POST["code"];

	if ($inputcode == "plsmakemeadmin") {
		$sql = "UPDATE `users` SET `type`='Admin' WHERE username='$usernameused'";
		mysqli_query($db, $sql);
		$_SESSION['status'] = "Admin";
		echo "<h2><center>Congratulations! You are now an Admin</center></h2>";
	} else {
		$_SESSION['message'] = "Wrong code, check your input and try again";
	}	
}
if (isset($_SESSION['message'])) {
	echo "<center><p style='color: red'>" . $_SESSION['message'] . "</p></center>";
	unset($_SESSION["message"]);
}
?>
<div class="container">
	<form action="pokeballproject-admin.php" method="post">
	 	<div style="text-align: center;">
	 		<h3>Input admin code</h3>
	 		<input type="text" name="code">
	 		<button type="submit" name="send">Send</button>
	 		
	 	</div>
 	</form>
</div>
<?php  

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>