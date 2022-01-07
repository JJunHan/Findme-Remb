
<?php
$con = mysqli_connect("localhost","root");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }

mysqli_select_db($con,"remb");

$checky = $_COOKIE["variableremb"];
echo $checky; //test

$userName = $_POST['IDname'];

if($checky == $_POST['IDname'])
{
	


$sql1="INSERT INTO remb (ID) VALUES ('$_POST[IDname]')";
mysqli_query($con,$sql1);

setcookie("login","1");
setcookie("usernameremb", "$userName");
header("Location: remb1.php");
}
else {
	
$result = mysqli_query($con,"SELECT * FROM remb WHERE ID='$userName'"); 
if($result === false) {
    var_dump(mysqli_error());
}
if(mysqli_num_rows($result) != 0) //if nothing is returned means cannot find entry before if 1 means it is found
			{
				setcookie("variableremb","$userName");
				header('Location: remb1.php');
			}
else
{
	
$sql1="INSERT INTO remb (ID) VALUES ('$_POST[IDname]')";
mysqli_query($con,$sql1);

setcookie("login","1");
setcookie("usernameremb", "$userName");

header("Location: remb1.php");

}
}
mysqli_close($con)
?>

