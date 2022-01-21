<?php  
session_start();
include 'pokeballproject-header.php';
?>
    <div class="container">
        <div class="jumbotron">
            <center>
            <h1>Side Pokeballs</h1>
            <p>~ Pokeballs not included in the main games ~</p>
            </center>
        </div>
        <?php  
            $sql = "SELECT * FROM `pokeballtable` WHERE `Pokeball_Class`='Side' ORDER BY `Pokeball_ID`";
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