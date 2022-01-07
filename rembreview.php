<!DOCTYPE HTML>
<html>
<style>
#movingaudio
{
}
#movingaudiodiv
{
	position:relative;
	text-align:center;
padding-left:85px;
}
input[type=submit] {
    padding:5px 20px; 
    background:#3399ff; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
top:-35px;
position:relative;
}
input[type=text] 
{
width: 150px;
padding: 6px 15px 7px;
margin: 8px 0;
border: 1px solid #585858;
box-sizing: border-box;
position: relative;	



}
#styling3
{
padding-left:155px;
padding-bottom:30px;

}
#styling4
{
padding-right:50px;
}
#sendus1
{
position:relative;
left:700px;
top:30px;
padding-top:5px;
}
button[type=button] {
    padding:5px 20px; 
    background:limegreen; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 7px; 
left:139px;
position:relative;
z-index:2;
}

</style>
<head>
  <title>Project</title>
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>

<div id="main">
<div id="header"> 
<div id="logo">
<div id="logo_text">

<h1><a href="mainpage.html">Games<span class="logo_colour">:)</span></a></h1>

<h2><font size='5'>HTML/PHP based web games</font> <br>
</div>

</div>

<div id="menubar">
<ul id="menu">
	<li><a href="findme.html">Find Me</a> </li>
	<li  class="selected"><a href="remb.html">Remb</a></li>
</ul>
</div>

</div>

<div id="content_header">&nbsp;</div>
</div>
<?php
$dbconnection = @mysqli_connect('localhost','root');
            if (!$dbconnection) 
            {
             echo '<p> Unable to connect to the database at this time.</P>';
             die;
            }
            if (!mysqli_select_db($dbconnection,'remb'))
            {
	           exit('<P>failed loading database </P>');
	          }
			 $users_ID = $_POST['Namereview'];
			 setcookie("users_ID2", "$users_ID");
			 
			 
            $result = @mysqli_query($dbconnection,'SELECT Score FROM r1');
            if (!$result)
            {
             exit('<P> Error performing query:' .mysqli_error(). '</P>');
            }
            $x="<SCRIPT type =text/javascript> document.write(a)</SCRIPT> ";
            
            $result = mysqli_query($dbconnection,"SELECT * FROM r1 WHERE ID='$users_ID'"); //check z1 because i force data into z1 empty scores but with all new usernames
			if(mysqli_num_rows($result) == 0) //if nothing is returned means cannot find the entry so reset
			{
				
				header('Location: home4.html');
			}
			else
			{
				
				
				
				

			}
 //$users_ID = $_POST['Namereview'];
//setcookie("users_ID", "$users_ID");
//echo $users_ID;
?>
<script type="text/javascript">
function popup()
{
var searchaudio = document.getElementById("searchforaudio");
 if(searchaudio.style.display =='none')	
	{searchaudio.style.display= 'block';}

	else 
	{searchaudio.style.display='none';}
}
</script>
<div id="site_content">
<div id="content">
<center><button type="button" onclick="popup();"><strong>Click here to Search for result's analysis</strong></button></center>
<br>
<div id="searchforaudio" style="border:4px solid black; width:457px; height:110px;  border-radius: 20px; position:relative; left:220px; display:none;">
<h2><font color="blue"><b>&nbsp;&nbsp;&nbsp;&nbsp;Enter your User ID for your result's analysis</b></h2></font>
<div id="styling4">
<form action="rembreview.php" id="form111" method="POST" name="form">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Namereview" id="texty" style="left:100px;"/>
</div>
<div id="styling3">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Search!" id="searchy" style="background:skyblue; left:100px;"/>
</div>
</form>
</div>
</div>
</div>

<div id="movingaudiodiv">
	<object id="movingaudio" type="text/html" data="remb/rembreviewew.php"  height="800px" style="border:1px ridge #585858; width:60%;background: white;overflow:hidden; right:23px; position:relative;">
    
	</object>
</div>
<a href="#top" style="text-align:center; position:relative;"><h1>To The Top!</h1></a>
&nbsp;


<div id="footer">
<p><a <a href="mainpage.html">Home</a> | <a href="aboutus.html">About Us</a> | <a href="aboutus.html">Contact Us</a> <br>
<center>fun stuff</center>
</div>

</body>
</html>
