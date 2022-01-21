<?php  
session_start();
include 'pokeballproject-header.php';
?>
	<div class="container">
		<div class="jumbotron">
			<center>
			<h1>Area-Specific Balls</h1>
			<p>~ Specially made waterproof, darkness-powered, and safari only balls ~</p>
			</center>
		</div>
		<?php  
			$sql = "SELECT * FROM `pokeballtable` WHERE `Pokeball_Class`='Area-Specific' ORDER BY `Pokeball_ID`";
				$result = mysqli_query($db, $sql);
			while ($row = mysqli_fetch_assoc($result)) {
				include 'pokeballproject-description.php';
			}
		?>
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>