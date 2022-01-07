<?php
error_reporting(0); //hide all errors
//error_reporting(E_ALL); //show all errors

//////////////*********************************NOTICE****************************************///////////////////////

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//i put the lightupnowait1 function is to deal with when there is no need to upload data. 

// hence the button RESTART will come. 

//however since i placed the php in the same page as the functions it self when it sends the data to myadmin it sorta refreshes the page and it reboots. 
if(!isset($_COOKIE["login"]))
	header("location:loginre.php");


	$con = mysqli_connect("localhost","root");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  };

mysqli_select_db($con,"remb");

	$xx = $_COOKIE["usernameremb"];
	//echo $xx;
	 echo '<div id="movename">'.'<a id="marginal1">'.'Welcome:&nbsp;'.'<a id="stylewelcome">'.$xx.'!'.'</a>'.'</a>'.'</div>'; //test
	$rembscore = $_POST['Score1'];
	//echo $rembscore;
	$remblevel = $_POST['Level'];
 $sqlforceupload = "INSERT INTO r1 ( ID, Score, Level) Values ('$xx', '$rembscore', '$remblevel')";
 if(isset($xx)) //all must be not empty to submite the query
 {
	 if(isset($rembscore))
	 {
		 if(isset($remblevel))
		 {
 			mysqli_query($con,$sqlforceupload);
		 }
	 }
 }
?>
<html>
<head>
</head>
<style>
#stylewelcome
{
	color:#ff6600;
	font-size:17pt;
	position:relative;
}
#movename
{
	position:relative;
	text-align:center;
	padding-bottom:5px;
	padding-top:5px;
    font-weight: bold;

}
.button1 {
    background-color: white; 
    border: 2px solid black;
    color: white;
    padding: 50px 100px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
	cursor: pointer;
}
.button2 {
    background-color: white; 
    border: 2px solid black;
    color: white;
    padding: 50px 100px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
	cursor: pointer;
}
.button3 {
    background-color: white; 
    border: 2px solid black;
    color: white;
    padding: 50px 100px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
	cursor: pointer;
}
.button4 {
    background-color: white; 
    border: 2px solid black;
    color: white;
    padding: 50px 100px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
	cursor: pointer;
}
.button5 {
    background-color: white; 
    border: 2px solid black;
    color: white;
    padding: 50px 100px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
	cursor: pointer;
}
.button6 {
    background-color: white; 
    border: 2px solid black;
    color: white;
    padding: 50px 100px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
	cursor: pointer;
}
.button7 {
    background-color: white; 
    border: 2px solid black;
    color: white;
    padding: 50px 100px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
	cursor: pointer;
}
.button8 {
    background-color: white; 
    border: 2px solid black;
    color: white;
    padding: 50px 100px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
	cursor: pointer;
}
.button9 {
    background-color: white; 
    border: 2px solid black;
    color: white;
    padding: 50px 100px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
	cursor: pointer;
}
.button10 {
    background-color: white; 
    border: 2px solid black;
    color: white;
    padding: 50px 100px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
	cursor: pointer;
}
.button11 {
    background-color: white; 
    border: 2px solid black;
    color: white;
    padding: 50px 100px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
	cursor: pointer;
}
.button12 {
    background-color: white; 
    border: 2px solid black;
    color: white;
    padding: 50px 100px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
	cursor: pointer;
}
.button13 {
    background-color: white; 
    border: 2px solid black;
    color: white;
    padding: 50px 100px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
	cursor: pointer;
}
.button14 {
    background-color: white; 
    border: 2px solid black;
    color: white;
    padding: 50px 100px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
	cursor: pointer;
}
.button15 {
    background-color: white; 
    border: 2px solid black;
    color: white;
    padding: 50px 100px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
	cursor: pointer;
}
.button16 {
    background-color: white; 
    border: 2px solid black;
    color: white;
    padding: 50px 100px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
	cursor: pointer;
}
.startbutton {
    background-color: limegreen; 
    border: 2px solid black;
    color: white;
    padding: 20px 40px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
	font-size:15pt;
	cursor: pointer;
}
.restartbutton {
    background-color: limegreen; 
    border: 2px solid black;
    color: white;
    padding: 20px 40px;
    text-align: center;
    text-decoration: none;
    display: none;
	font-size:15pt;
	cursor: pointer;
	top:15px;
	position:relative;
}
.startbutton1 {
    background-color: limegreen; 
    border: 2px solid black;
    color: white;
    padding: 20px 40px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
	font-size:15pt;
	cursor: pointer;
	display:none;
	
}
.restartbutton1 {
    background-color: limegreen; 
    border: 2px solid black;
    color: white;
    padding: 20px 40px;
    text-align: center;
    text-decoration: none;
    display: none;
	font-size:15pt;
	cursor: pointer;
	top:15px;
	position:relative;

}
#gamingpad
{
	position:relative;
	text-align:center;
}
#starting
{
	position:relative;
	top:15px;
}
#starting1
{
	position:relative;
	top:15px;
}
h1
{
	font: normal 200% 'century gothic', arial;
color:maroon;
}
#currentscore
{
	font: normal 200% 'century gothic', arial;
}
#currentscore1
{
	font: normal 150% 'century gothic', arial;
}
#Display_Score
{
	color:red;
}
#howmanyleft
{
	color:red;
}
#percent
{
	color:red;
}
#percent1
{
	font: normal 150% 'century gothic', arial;
}
#up
{
	position:absolute;
}
#down
{
	position:absolute;
}
#moveup
{
	position:relative;
	text-align:center;
	right:570px;
	cursor: pointer;
	z-index:2;
}
#movedown
{
	position:relative;
	text-align:center;
	right:571px;
	top:170px;
	cursor: pointer;
	z-index:2;
}
#levelscore
{
	position:absolute;
	font: normal 230% 'century gothic', arial;
}
#movescore
{
	position:relative;
	text-align:center;
	z-index:2;
	top:123px;
	right:519px;
}
#senddatadiv
{
position: relative;
text-align:center;
right:575px;
top:-635px;
}

#senddata
{
    background-color: lightblue; 
    border: 2px solid black;
    color: black;
    padding: 310px 250px;
    text-align: center;
    text-decoration: none;
	font-weight:bold;
	font-size:15pt;
	position:absolute;
	z-index:2;
	opacity:0.92;
	font-size: 30px;
}
#yesbutton
{
    background-color: limegreen; 
    border: 2px solid black;
    color: white;
    padding: 20px 50px;
    text-align: center;
    text-decoration: none;
	font-size:15pt;
	cursor: pointer;
	position:absolute;
	z-index:3;
}
#yesbuttonmove
{
	position: relative;
    text-align:center;
    right:156px;
    top:-275px;
}
#nobuttonmove
{
	position: relative;
    text-align:center;

    top:-275px;
}
#nobutton
{
    background-color: limegreen; 
    border: 2px solid black;
    color: white;
    padding: 20px 55px;
    text-align: center;
    text-decoration: none;
	font-size:15pt;
	cursor: pointer;
	position:absolute;
	z-index:3;
}
</style>
<body bgcolor="#E6E6FA">

<center> <font id="currentscore" size="6pt">Current Score:  <a id="Display_Score">0</a></center></font>
<center> <font id="percent1" color="blue">Percentage correct:  <a id="percent">__</a><font color="red">%</center></font></font>
<center> <font id="currentscore1" color="brown">Valid clicks left:  <a id="howmanyleft">__</a></center></font>

<div id="movescore">
<a id="levelscore">1</a>
</div>

<div id="moveup">
<img src="up.png" id="up" onclick="upp();"/>
</div>

<div id="movedown">
<img src="down.png" id="down" onclick="downn();"/>
</div>

<div id="gamingpad">
<button class="button1" id="1"></button> &nbsp;

<button class="button2" id="2"></button> &nbsp;

<button class="button3" id="3"></button> &nbsp;

<button class="button4" id="4"></button> &nbsp;

<br>
<br>

<button class="button5" id="5"></button> &nbsp;

<button class="button6" id="6"></button> &nbsp;

<button class="button7" id="7"></button> &nbsp;

<button class="button8" id="8"></button> &nbsp;

<br>
<br>

<button class="button9" id="9"></button> &nbsp;

<button class="button10" id="10"></button> &nbsp;

<button class="button11" id="11"></button> &nbsp;

<button class="button12" id="12"></button> &nbsp;

<br>
<br>

<button class="button13" id="13"></button> &nbsp;

<button class="button14" id="14"></button> &nbsp;

<button class="button15" id="15"></button> &nbsp;

<button class="button16" id="16"></button> &nbsp;

</div>

<center><input type="button" class="startbutton" id="starting" onclick="lightup1()" value="START"></button></center>

<center><input type="button" class="restartbutton" id="restarting" onclick="lightupnowait1()" value="RESTART"></button></center>

<center><input type="button" class="startbutton1" id="starting1" onclick="lightup()" value="START2"></button></center>

<center><input type="button" class="restartbutton1" id="restarting1" onclick="lightupnowait()" value="RESTART2"></button></center>

<div id="senddatadiv">
<input type="button" class="sendme" id="senddata" onclick="choose()" value="DO YOU WANT TO SAVE YOUR GAME DATA?"/>
</div>

<div id="yesbuttonmove">
<input type="button" id="yesbutton" onclick="chooseoptionyes()" value="YES"/>
</div>

<div id="nobuttonmove">
<input type="button" id="nobutton" onclick="chooseoptionno()" value="NO"/>
</div>

<script>
function chooseoptionyes()
{
	window.location = "rembhavedata.php";
}
function chooseoptionno()
{
	window.location = "rembnodata.php";
}
// document.addEventListener("click", clicknumberoftimes); //everytime u click u will call this function


</script>
</body>
</html>