<?php  
session_start();
include 'pokeballproject-header.php';
?>
	<div class="container">
		<div class="jumbotron">
			<center>
			<h1>Pokeball Gallery</h1>
			<p>~ The museum of pokeballs ~</p>
			</center>
		</div>
		
				<div class="row" style="margin-top: 10px; margin-bottom: 110px">
					<?php
					$y = 0;
			$sql = "SELECT * FROM `pokeballtable` ORDER BY `Pokeball_ID`";
				$result = mysqli_query($db, $sql);
			while ($row = mysqli_fetch_array($result)) {
				$y = $y+1;
				if ($y == 3) {
					?>
					<div class="row" style="margin-top: 10px; margin-bottom: 110px">
				<?php
			$y = 0;
		}
				?>
			<div class="col-sm-4" style="height: 100%">
				<img src="<?php  echo $row["Pokeball_Pic"];?>" class="img-responsive">
		</div>
		<?php
			}
		?>
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>