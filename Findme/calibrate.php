<?php

if(!isset($_COOKIE["login"]))
	header("location:login.php");
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="../style/style.css" />
</head>
<style>
#buttonstart
{
position:relative;
top:20px;
left:50px;
	background-color:#1a1a1a;
	color: white;
	padding: 7px 15px;
    text-decoration: none;
    font-size: 12px;
	border-radius: 12px;
	cursor:pointer;
	}
#buttonstart1
{
position:relative;
left:-30px;
top:-10px;
	background-color:#1a1a1a;
	color: white;
	padding: 7px 15px;
    text-decoration: none;
    font-size: 12px;
	border-radius: 12px;
	cursor:pointer;
	}
		#buttonstart2
{
position:relative;

left:14px;
top:200px;
	background-color:#1a1a1a;
	color: white;
	padding: 7px 15px;
    text-decoration: none;
    font-size: 12px;
	border-radius: 12px;
	cursor:pointer;
	}
</style>



<body bgcolor="#E6E6FA">
<font size="4"><center><h1>Assdjust your sound :)</h1></center></font>

<center><audio style="position:relative" id="myVid" controls="controls" loop="loop" src="500_2s.mp3"></audio></center>
<center><button id = "buttonstart" onclick="pausesound();" type="button">Stop</button></center>
<center><button id = "buttonstart1" onclick="playsound();" type="button">Play</button></center>

<center><a href="selectmode.php"><button id = "buttonstart2" onclick="" type="button">Click here to continue :)</button></center></a>

<center><h1>~Click play and check if the volume is suitable for you</h1></center>
<center><h1>~If it is too loud or too soft, adjust your <u>computer's master volume</u></h1></center>

 <script>
 function playsound()
 {
 var m = document.getElementById("myVid");
 m.volume = 0.2;
 m.play();
 }
 function pausesound()
 {
 var m = document.getElementById("myVid");
 m.pause(); m.currentTime=0;
 }
 </script>
 
 
 
 
 
</body>
</html>