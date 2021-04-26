<?php
    
    session_start();
  ?>

  <!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>My Site | Home Page</title>
</head>
<body>

 <?php 
 

  if(isset($_SESSION["naam"]))
  {
  	$name=$_SESSION["naam"];
  	echo "WELCOME ".$name;
  }
  else
  {
  	echo "ERROR";
  }
  session_destroy();

  ?>
</body>
</html>