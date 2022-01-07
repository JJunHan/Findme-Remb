<?php


if(!isset($_COOKIE["login"]))
	header("location:login.php");


$con = mysqli_connect("localhost","root");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }

  
mysqli_select_db($con,"database");
$user_Name = $_COOKIE["username"];
echo $user_Name;

$update_Score = $_POST['Score1'];
echo $update_Score; 

 $sql11= mysqli_query($con,"SELECT Score FROM level6db WHERE ID='$user_Name'");
 $get_Value= mysqli_fetch_assoc($sql11);
 echo $get_Value['Score'];
 
 if($get_Value['Score']<$update_Score)
 {
 
 $sql = "UPDATE level6db SET Score = '$update_Score' WHERE ID='$user_Name'";
 $result =mysqli_query($con,$sql) or die("could not update" . mysqli_error);
 }
if($get_Value['Score'] == '') //check if its null cos deleted
 {
	 $sqlrere = "INSERT INTO level6db ( ID, Score) Values ('$user_Name', '$update_Score')";
	 echo $sqlrere; //test
     mysqli_query($con,$sqlrere);
 }
  if($get_Value['Score'] >= 10 || $update_Score >= 10)
 {
	 $sqluploadimage = "Update level6db SET Image = 'badge10.png' WHERE ID='$user_Name'";
	 mysqli_query($con,$sqluploadimage);
 }
if($get_Value['Score'] >= 20 || $update_Score >= 20)
 {
	 $sqluploadimage20 = "Update level6db SET Image1 = 'badge20.png' WHERE ID='$user_Name'";
	 mysqli_query($con,$sqluploadimage20);
 }
 if($get_Value['Score'] >= 30 || $update_Score >= 30)
 {
	 $sqluploadimagegreat = "Update level6db SET Great = 'great1.png' WHERE ID='$user_Name'";
	 mysqli_query($con,$sqluploadimagegreat);
 }
 if($get_Value['Score'] >= 80 || $update_Score >= 80)
 {
	 $sqluploadimageperfect = "Update level6db SET Perfect = 'perfect.png' WHERE ID='$user_Name'";
	 mysqli_query($con,$sqluploadimageperfect);
 }
 if($get_Value['Score'] >= 30 || $update_Score >= 30)
 {
	 $sqluploadimagebadge30 = "Update level6db SET Image2 = 'badge30.png' WHERE ID='$user_Name'";
	 mysqli_query($con,$sqluploadimagebadge30);
 }
 if($get_Value['Score'] >= 40 || $update_Score >= 40)
 {
	 $sqluploadimagebadge40 = "Update level6db SET Image3 = 'badge40.png' WHERE ID='$user_Name'";
	 mysqli_query($con,$sqluploadimagebadge40);
 }
 if($get_Value['Score'] >= 50 || $update_Score >= 50)
 {
	 $sqluploadimagebadge50 = "Update level6db SET Image4 = 'badge50.png' WHERE ID='$user_Name'";
	 mysqli_query($con,$sqluploadimagebadge50);
 }
 if($get_Value['Score'] >= 60 || $update_Score >= 60)
 {
	 $sqluploadimagebadge60 = "Update level6db SET Image5 = 'badge60.png' WHERE ID='$user_Name'";
	 mysqli_query($con,$sqluploadimagebadge60);
 }
 
 if($get_Value['Score'] <= 9 || $update_Score <= 9 || $get_Value['Score'] == 0 || $update_Score == 0 || $get_Value['Score'] == '')
 {
	 $sqluploadimagebadge9 = "Update level6db SET Image99 = 'tryharder.png' WHERE ID='$user_Name'"; //cannot use update use insert
	 mysqli_query($con,$sqluploadimagebadge9);
 }
  $sqlforceupload = "INSERT INTO x7 ( ID, Score) Values ('$user_Name', '$update_Score')";
 mysqli_query($con,$sqlforceupload);
  header("Location: level6db.php");


mysqli_close($con)
?>
