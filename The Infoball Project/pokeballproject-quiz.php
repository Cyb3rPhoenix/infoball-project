<?php  
session_start();
include 'pokeballproject-header.php';
?>
	
	<div class="container">
		<div class="jumbotron">
			<center>
			<h1>Pokeball Quiz</h1>
			<p>~ Think you know everything about pokeballs? ~</p>
			</center>
		</div>
		<div id="img" style="text-align: center"></div>
		<div style="text-align: center">
		<input type="text" id="ans" />
		<input type="submit" value="Submit" onclick="send()" /></div>
	</div>
	<script>
	var ballcode = Math.floor(Math.random() * 4);
	var ball = ["poke ball", "great ball", "ultra ball", "master ball"]
	var key = 0;
	var input = "";
	var answer = "";
	document.getElementById("img").innerHTML = "<img style='width:300px; height:300px'; src='" + ball[ballcode] + ".png'></img> <br> <h1>What is the name of this ball?</h1>"

	function send () {
		input = document.getElementById("ans").value;
		answer = input.toLowerCase();

		if (answer == ball[ballcode]) {
			alert("Correct");
		}
	}
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>