<?php  
session_start();
include 'pokeballproject-header.php';
?>
<div class="container">
<div class="jumbotron">
	<h1 style="text-align: center">Data Input/Update Succesful!</h1> <br>
</div>

<?php  
$host = "localhost";
$user = "root";
$password = "";

$db = mysqli_connect($host, $user, $password, 'pokeballs');
?>
<div>
<h2>Here is the data you've just entered:</h2>
<?php  

$sql = "SELECT * FROM `pokeballtable` ORDER BY Pokeball_ID desc LIMIT 1";
$result = mysqli_query($db, $sql);

while ($row = mysqli_fetch_assoc($result)) {
	echo "<h1>Class: " . $row["Pokeball_Class"] . " Ball<br></h1s>";
	echo "<h3><strong>ID: </strong>" . $row["Pokeball_ID"] . "<br></h3>";
	echo "<h3><strong>Pokeball's Name: </strong>" . $row["Pokeball_Name"] . "<br></h3>";
	echo "<h3><strong>Pokeball's Picture: </strong>" . $row["Pokeball_Pic"] . "<br></h3>";
	echo "<h3><strong>Pokeball's Quote: </strong>" . $row["Pokeball_Quote"] . "<br></h3>";
	echo "<h3><strong>Pokeball's Description: </strong>" . $row["Pokeball_Desc"] . "<br></h3>";
	
}

?>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>