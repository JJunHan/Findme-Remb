
<?php
$con = mysqli_connect("localhost","root");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }

mysqli_select_db($con,"remb");

$userName = $_POST['IDname'];
echo $userName;

$result = mysqli_query($con,"SELECT * FROM remb WHERE ID='$userName'"); 
if($result === false) {
    var_dump(mysqli_error());
}
if(mysqli_num_rows($result) != 0) //if nothing is returned means cannot find entry before if 1 means it is found
			{//found before
				setcookie("variableremb","$userName");
				header('Location: loginre1.php');
				
			}
else{ //new user
if($userName != '') //if it is not empty send
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

