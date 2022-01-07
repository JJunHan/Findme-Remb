
<?php
$con = mysqli_connect("localhost","root");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }

mysqli_select_db($con,"database");

$userName = $_POST['ID'];
echo $userName;

$result = mysqli_query($dbconnection,"SELECT * FROM level1db WHERE ID='$userName'"); 
if($result === false) {
    var_dump(mysqli_error());
}
if(mysqli_num_rows($result) != 0) //if nothing is returned means cannot find entry before if 1 means it is found
			{
				setcookie("variable","$userName");
				header('Location: login_existing.php');
				
			}
else{ //new user
$sql1="INSERT INTO casualdb (ID) VALUES ('$_POST[ID]')";
$sql2="INSERT INTO level1db (ID) VALUES ('$_POST[ID]')";
$sql3="INSERT INTO level2db (ID) VALUES ('$_POST[ID]')";
$sql4="INSERT INTO level3db (ID) VALUES ('$_POST[ID]')";
$sql5="INSERT INTO level4db (ID) VALUES ('$_POST[ID]')";
$sql6="INSERT INTO level5db (ID) VALUES ('$_POST[ID]')";
$sql7="INSERT INTO level6db (ID) VALUES ('$_POST[ID]')";
$sqlc1="INSERT INTO ccasualdb (ID) VALUES ('$_POST[ID]')";
$sqlc2="INSERT INTO clevel1db (ID) VALUES ('$_POST[ID]')";
$sqlc3="INSERT INTO clevel2db (ID) VALUES ('$_POST[ID]')";
$sqlc4="INSERT INTO clevel3db (ID) VALUES ('$_POST[ID]')";
$sqlc5="INSERT INTO clevel4db (ID) VALUES ('$_POST[ID]')";
$sqlc6="INSERT INTO clevel5db (ID) VALUES ('$_POST[ID]')";
$sqlc7="INSERT INTO clevel6db (ID) VALUES ('$_POST[ID]')";
$sqlz1="INSERT INTO z1 (ID,Score) VALUES ('$_POST[ID]','')";
mysqli_query($con,$sql1);
mysqli_query($sql2,$con);
mysqli_query($sql3,$con);
mysqli_query($sql4,$con);
mysqli_query($sql5,$con);
mysqli_query($sql6,$con);
mysqli_query($sql7,$con);
mysqli_query($sqlc1,$con);
mysqli_query($sqlc2,$con);
mysqli_query($sqlc3,$con);
mysqli_query($sqlc4,$con);
mysqli_query($sqlc5,$con);
mysqli_query($sqlc6,$con);
mysqli_query($sqlc7,$con);
mysqli_query($sqlz1,$con);




setcookie("login","1");
setcookie("username", "$userName");
$sqluploadimagebadge9 = "Update casualdb SET Image99 = 'tryharder.png' WHERE ID='$userName'"; //if cannot use update use insert
$sqluploadimagebadge99 = "Update level1db SET Image99 = 'tryharder.png' WHERE ID='$userName'"; //if cannot use update use insert
$sqluploadimagebadge999 = "Update level2db SET Image99 = 'tryharder.png' WHERE ID='$userName'"; //if cannot use update use insert
$sqluploadimagebadge9999 = "Update level3db SET Image99 = 'tryharder.png' WHERE ID='$userName'"; //if cannot use update use insert
$sqluploadimagebadge99999 = "Update level4db SET Image99 = 'tryharder.png' WHERE ID='$userName'"; //if cannot use update use insert
$sqluploadimagebadge999999 = "Update level5db SET Image99 = 'tryharder.png' WHERE ID='$userName'"; //if cannot use update use insert
$sqluploadimagebadge9999999= "Update level6db SET Image99 = 'tryharder.png' WHERE ID='$userName'"; //if cannot use update use insert
$sqluploadimagebadgec9 = "Update ccasualdb SET Image99 = 'tryharder.png' WHERE ID='$userName'"; //if cannot use update use insert
$sqluploadimagebadgec99 = "Update clevel1db SET Image99 = 'tryharder.png' WHERE ID='$userName'"; //if cannot use update use insert
$sqluploadimagebadgec999 = "Update clevel2db SET Image99 = 'tryharder.png' WHERE ID='$userName'"; //if cannot use update use insert
$sqluploadimagebadgec9999 = "Update clevel3db SET Image99 = 'tryharder.png' WHERE ID='$userName'"; //if cannot use update use insert
$sqluploadimagebadgec99999 = "Update clevel4db SET Image99 = 'tryharder.png' WHERE ID='$userName'"; //if cannot use update use insert
$sqluploadimagebadgec999999 = "Update clevel5db SET Image99 = 'tryharder.png' WHERE ID='$userName'"; //if cannot use update use insert
$sqluploadimagebadgec9999999= "Update clevel6db SET Image99 = 'tryharder.png' WHERE ID='$userName'"; //if cannot use update use insert
mysqli_query($con,$sqluploadimagebadge9);
mysqli_query($con,$sqluploadimagebadge99);
mysqli_query($con,$sqluploadimagebadge999);
mysqli_query($con,$sqluploadimagebadge9999);
mysqli_query($con,$sqluploadimagebadge99999);
mysqli_query($con,$sqluploadimagebadge999999);
mysqli_query($con,$sqluploadimagebadge9999999);
mysqli_query($con,$sqluploadimagebadgec9);
mysqli_query($con,$sqluploadimagebadgec99);
mysqli_query($con,$sqluploadimagebadgec999);
mysqli_query($con,$sqluploadimagebadgec9999);
mysqli_query($con,$sqluploadimagebadgec99999);
mysqli_query($con,$sqluploadimagebadgec999999);
mysqli_query($con,$sqluploadimagebadgec9999999);
header("Location: calibrate.php");

}
mysqli_close($con)
?>

