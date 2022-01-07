<?php

if(!isset($_COOKIE["login"]))
	header("location:login.php");
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="../style/style.css" />
</head>
<style>
		#buttonstart2
{
position:relative;

	background-color:teal;
	color: white;
	padding: 7px 15px;
    text-decoration: none;
    font-size: 12px;
	border-radius: 12px;
	cursor:pointer;
	font-family: "palatino linotype", palatino, serif;
	}
			#buttonstart23
{
position:relative;
left:100px;
	background-color:orange;
	color: black;
	padding: 7px 15px;
    text-decoration: none;
    font-size: 12px;
	border-radius: 12px;
	cursor:pointer;
	font-family: "palatino linotype", palatino, serif;
	}
#move
{
	position:relative;
	text-align:center;
	left:-40px;
	top:30px;
}
       #image10
{
position: absolute;
}
#image11
{
position: absolute;
padding-left:400px; 
}
#movepics
{

position: relative;
text-align:center;
left:-227px;
top:-110px;

}
     #text1
{
font-size:45pt;
font-family: segoe script;		
position: relative;
text-align: center;
}
#movemagni
{
	position:absolute;
}
#magnif
{
	position:relative;
	text-align:center;
	top:-205px;
	right:205px;
	z-index:-1;
}
#ear
{
	position:absolute;
}
#earr
{
	position:relative;
	text-align:center;
	top:-205px;
	padding-left:295px;
	z-index:-1;
}
#spot
{
	position:absolute;
}
#spott
{
	position:relative;
	text-align:center;
	top:-128px;
	right:300px;
	z-index:-1;
}
#spott2
{
	position:relative;
	text-align:center;
	top:-128px;
	padding-left:407px;
	z-index:-1;
}
#spott3
{
	position:relative;
	text-align:center;
	top:-28px;
	right:520px;

	z-index:-1;
}
#spott4
{
	position:relative;
	text-align:center;
	top:-142px;
	padding-left:110px;

	z-index:-1;
}

</style>



<body bgcolor="#E6E6FA">

 <font color="black"><strong><p id="text1">FIND-ME</p></font></strong>
	<div id="movepics">
    <img src="stickman.png" width="53px" height="114px" id="image10">
    <img src="stickman1.png" width="53px" height="114px" id="image11">
	</div>
	
	
<font size="4"><center><h1 style="padding-left:20px;">Have you taken your audio test?</h1></center></font>

 
 
 <div id="move">
<a href="freq_level.php"><button id = "buttonstart2" onclick="" type="button"><font size="4">Identify the Frequency!</button></font></a>
<!-- clevel = freq_level -->
 <!-- level = vol_level -->
<a href="vol_level.php"><button id = "buttonstart23" type="button"><font size="4">Listen for the Loudest Sound!</button></a></font>
</div>
<br>
<br>
<br>

<center><h1 id="test"></h1></center>
<center><h1 style="padding-right:1200px;"><font color="#E6E6FA">.</font><u><b> </u></b></h1></center>

<div id="magnif">
<img src="magni.png" id="movemagni" height="50px" width="50px"/>
</div>

<div id="earr">
<img src="ear.png" id="ear" height="50px" width="50px"/>
</div>

<div id="spott">
<img src="spot.png" id="spot" height="100px" width="100px"/>
</div>

<div id="spott2">
<img src="spot2.png" id="spot" height="100px" width="100px"/>
</div>

<div id="spott3">
<img src="freqgame250.png" id="spot" height="350px" width="480px"/>
</div>

<h1 style="position:relative; text-align:center; right:10px;">Listen to where <br>the <b><font color="red">250HZ</font></b> <br>is at and click!</h1>

<div id="spott4">
<img src="soundgame250.png" id="spot" height="350px" width="480px"/>
</div>

<h1 style="position:relative; text-align:center;padding-right:30px; top:80px;">Listen for the <b><font color="red"><br>Loudest sound<br></font></b>and click!</h1>

 <!-- <script>
 function chooselevel()
 {

   var xxx = document.getElementById("test");
   var whatintheworld = 6; //total 6 mode
   var multiple = Math.floor(Math.random() * whatintheworld);
   xxx.innerHTML= multiple;
   if(multiple == 1)
   {
	  window.location.href = "clevel1.php";
   }
    if(multiple == 2)
   {
	   window.location.href = "clevel2.php";
   }
    if(multiple == 3)
   {
	  window.location.href = "clevel3.php";
   }
    if(multiple == 4)
   {
	  window.location.href = "clevel4.php";
   }
    if(multiple == 5)
   {
	  window.location.href = "clevel5.php";
   }
    if(multiple == 6)
   {
	  window.location.href = "clevel6.php";
   }

 }

 </script> -->
 
 
 
 
 
</body>
</html>