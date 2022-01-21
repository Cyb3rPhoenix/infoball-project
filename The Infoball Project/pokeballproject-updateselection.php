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
	<h1 style="text-align: center">Update which data?</h1>
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
  $PokeballID = $_POST["Pokeid"];

  $sql = "UPDATE `pokeballtable` SET `Pokeball_Name`='$PokeballName'
  ,`Pokeball_Pic`='$PokeballPic',`Pokeball_Desc`='$PokeballDesc',`Pokeball_Quote`='$PokeballQuote',`Pokeball_Class`='$PokeballClass' WHERE `Pokeball_ID`='$PokeballID'";
  
  mysqli_query($db, $sql);
  header("location: pokeballproject-home.php");
}

if (isset($_GET["pokeid"])) {
	$PokeballID= $_GET["pokeid"];

  $query = "SELECT * FROM `pokeballtable` WHERE `Pokeball_ID` = $PokeballID";
  $Pokeballrow = mysqli_query($db, $query);

} else{
  $PokeballID= 1;

  $query = "SELECT * FROM `pokeballtable` WHERE `Pokeball_ID` = $PokeballID";
  $Pokeballrow = mysqli_query($db, $query);
}
?>
<div class="container">
	<form action="pokeballproject-updateselection.php" method="post">
	 	<div class="btn-group btn-group-justified">
  			<div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    Classic Ball <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu">
    			<?php  
			$sql = "SELECT * FROM `pokeballtable` WHERE `Pokeball_Class`='Classic' ORDER BY `Pokeball_ID`";
				$result = mysqli_query($db, $sql);
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<li><a href='pokeballproject-updateselection.php?pokeid=".$row['Pokeball_ID']."'>".$row["Pokeball_Name"]."</a></li>";
			} ?>
    </ul>
  </div>
    <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    Turn-Based Ball <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu">
      <?php  
            $sql = "SELECT * FROM `pokeballtable` WHERE `Pokeball_Class`='Turn-Based' ORDER BY `Pokeball_ID`";
                $result = mysqli_query($db, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li><a href='pokeballproject-updateselection.php?pokeid=".$row['Pokeball_ID']."'>".$row["Pokeball_Name"]."</a></li>";
            } ?>
    </ul>
  </div>
  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    Area-Specific Ball <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu">
      <?php  
            $sql = "SELECT * FROM `pokeballtable` WHERE `Pokeball_Class`='Area-Specific' ORDER BY `Pokeball_ID`";
                $result = mysqli_query($db, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li><a href='pokeballproject-updateselection.php?pokeid=".$row['Pokeball_ID']."'>".$row["Pokeball_Name"]."</a></li>";
            } ?>
    </ul>
  </div>
  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    Type-Based Ball <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu">
     <?php  
            $sql = "SELECT * FROM `pokeballtable` WHERE `Pokeball_Class`='Type-Based' ORDER BY `Pokeball_ID`";
                $result = mysqli_query($db, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li><a href='pokeballproject-updateselection.php?pokeid=".$row['Pokeball_ID']."'>".$row["Pokeball_Name"]."</a></li>";
            } ?>
    </ul>
  </div>
  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    Stat-Based Ball <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu">
      <?php  
            $sql = "SELECT * FROM `pokeballtable` WHERE `Pokeball_Class`='Stat-Based' ORDER BY `Pokeball_ID`";
                $result = mysqli_query($db, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li><a href='pokeballproject-updateselection.php?pokeid=".$row['Pokeball_ID']."'>".$row["Pokeball_Name"]."</a></li>";
            } ?>
    </ul>
  </div>
  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    Benefits Ball <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu">
     <?php  
            $sql = "SELECT * FROM `pokeballtable` WHERE `Pokeball_Class`='Benefits' ORDER BY `Pokeball_ID`";
                $result = mysqli_query($db, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li><a href='pokeballproject-updateselection.php?pokeid=".$row['Pokeball_ID']."'>".$row["Pokeball_Name"]."</a></li>";
            } ?>
    </ul>
  </div>
  <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    Event Ball <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu">
      <?php  
            $sql = "SELECT `Pokeball_Name` FROM `pokeballtable` WHERE `Pokeball_Class`='Event' ORDER BY `Pokeball_ID`";
                $result = mysqli_query($db, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li><a href='pokeballproject-updateselection.php?pokeid=".$row['Pokeball_ID']."'>".$row["Pokeball_Name"]."</a></li>";
            } ?>
    </ul>
  </div>
    <div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    Side Pokeball <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu">
      <?php  
            $sql = "SELECT `Pokeball_Name` FROM `pokeballtable` WHERE `Pokeball_Class`='Side' ORDER BY `Pokeball_ID`";
                $result = mysqli_query($db, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li><a href='pokeballproject-updateselection.php?pokeid=".$row['Pokeball_ID']."'>".$row["Pokeball_Name"]."</a></li>";
            } ?>
    </ul>
  </div>
</div>
 	</form>
</div>


<div class="container">
  <?php

  while ($result = mysqli_fetch_assoc($Pokeballrow)) {
       
      
  ?>
  <form action="pokeballproject-updateselection.php" method="post">

    <div class="page_header">
      <center>
    <h1>Updating for: <?php  echo $result["Pokeball_Name"]; ?></h1></div>
</center>
    <div style="text-align: center;">
      <h3>Pokeball Name</h3>
      <input type="text" name="pokeballname" value="<?php  echo $result["Pokeball_Name"];?>">
      <h3>Pokeball Picture ID</h3>
      <input type="text" name="pokeballpic" value="<?php  echo $result["Pokeball_Pic"];?>">
      <h3>Pokeball Description</h3>
      <textarea name="pokeballdesc" rows="20" style="width: 500px"><?php  echo $result["Pokeball_Desc"];?></textarea>
      <p>*Put backslash before every quotation mark (Example: Doesn\'t) and put &lt;br&gt; to enter</p>
      <h3>Pokeball Quote</h3>
      <input type="text" name="pokeballquote" value="<?php  echo $result["Pokeball_Quote"];?>">

       <center><h3>Pokeball Class</h3><div style="text-align: left; width: 150px;">
        <input type="radio" name="pokeballclass" value="Classic" <?php  if ($result['Pokeball_Class'] == "Classic") {echo "checked";}?>> Classic Ball<br>
        <input type="radio" name="pokeballclass" value="Turn-Based" <?php  if ($result['Pokeball_Class'] == "Turn-Based") {echo "checked";}?>> Turn-Based Ball<br>
        <input type="radio" name="pokeballclass" value="Area-Specific" <?php  if ($result['Pokeball_Class'] == "Area-Specific") {echo "checked";}?>> Area-Specific Ball<br>
        <input type="radio" name="pokeballclass" value="Type-Based" <?php  if ($result['Pokeball_Class'] == "Type-Based") {echo "checked";}?>> Type-Based Ball<br>
        <input type="radio" name="pokeballclass" value="Stat-Based" <?php  if ($result['Pokeball_Class'] == "Stat-Based") {echo "checked";}?>> Stat-Based Ball<br>
        <input type="radio" name="pokeballclass" value="Benefits" <?php  if ($result['Pokeball_Class'] == "Benefits") {echo "checked";}?>> Benefits Ball<br>
        <input type="radio" name="pokeballclass" value="Event" <?php  if ($result['Pokeball_Class'] == "Event") {echo "checked";}?>> Event Ball<br>
        <input type="radio" name="pokeballclass" value="Side" <?php  if ($result['Pokeball_Class'] == "Side") {echo "checked";}?>> Side Pokeball<br>
      </div></center>
  <input type="hidden" value="<?php echo $result['Pokeball_ID']?>" name="Pokeid">
      <br> <br>
      <input type="submit" name="send">
    </div>
  </form>
</div>
<?php
}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>