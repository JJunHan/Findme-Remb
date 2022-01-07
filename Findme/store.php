<?php

$con = mysqli_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysqli_connect_error());
  }

mysqli_select_db($con, "database");

$userName = $_POST['ID'];
echo $userName;

$result = mysqli_query($con,"SELECT * FROM level1db WHERE ID='$userName'"); 
if($result === false) {
    var_dump(mysqli_error());
}
if(mysqli_num_rows($result) != 0) //if nothing is returned means cannot find entry before if 1 means it is found
			{
				setcookie("variable","$userName");
				header('Location: login_existing.php');
			}
else{ //new user

$myarray = array("casualdb", "level1db", "level2db", "level3db", "level4db", "level5db", "level6db", "ccasualdb", "clevel1db", "clevel2db","clevel3db", "clevel4db","clevel5db","clevel6db");
for($i = 0; $i < sizeof($myarray); $i++) {
  $sql = "INSERT INTO " . $myarray[$i] . " ID VALUES ('$_POST[ID]')";
  mysqli_query($con,$sql);
};

// NOT SURE WATS TIS
$sqlz1="INSERT INTO z1 (ID,Score) VALUES ('$_POST[ID]','')";
mysqli_query($con,$sqlz1);

// Set cookie for login and username
setcookie("login","1");
setcookie("username", "$userName");

// Give user tryharder badge
for($i = 0; $i < sizeof($myarray); $i++) {
  $sql = "Update " . $myarray[$i] . " SET Image99 = 'tryharder.png' WHERE ID='$userName'";
  mysqli_query($con,$sql);
};

header("Location: calibrate.php");

};
mysqli_close($con)
?>

