<?php

$con = mysqli_connect("localhost","root");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }

mysqli_select_db($con,"database");


mysqli_query($con,"DELETE FROM clevel6db WHERE ID='$_GET[id]'");
echo "Item deleted<br>" ;
  header("Location: clevel6db.php");
mysqli_close($con);
?>
