<?php

$con = mysqli_connect("localhost","root");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }

mysqli_select_db($con,"database");



mysqli_query($con,"DELETE FROM ccasualdb WHERE ID='$_GET[id]'");

echo "Item deleted<br>" ;
  header("Location: ccasualdb.php");
mysqli_close($con);
?>
