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
	$rembvalid = $_POST['Valid'];
 $sqlforceupload = "INSERT INTO r1 ( ID, Score, Level, Valid) Values ('$xx', '$rembscore', '$remblevel','$rembvalid')";
  if(isset($xx)) //all must be not empty to submite the query
 {
	 if(isset($rembscore))
	 {
		 if(isset($remblevel))
		 {
			 if(isset($rembvalid))
			 {
			 if($remblevel == 1)
			 {
				 mysqli_query($con,$sqlforceupload); //if all not empty submit this
				 header("Location: rembhavedata1.php");
			 }
			 if($remblevel == 2)
			 {
				 mysqli_query($con,$sqlforceupload); //if all not empty submit this
				 header("Location: rembhavedata2.php");
			 }
			 if($remblevel == 3)
			 {
				 mysqli_query($con,$sqlforceupload); //if all not empty submit this
				 header("Location: rembhavedata3.php");
			 }
			 if($remblevel == 4)
			 {
				 mysqli_query($con,$sqlforceupload); //if all not empty submit this
				 header("Location: rembhavedata4.php");
			 }
			 }
		 }
	 }
 }
?>
<html>
<head>
</head>
<style>
.startbutton4 {
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
	top:15px;
	position:relative;
}
.restartbutton4 {
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
.startbutton3 {
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
	top:15px;
	position:relative;
}
.restartbutton3 {
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

<center><input type="button" class="startbutton3" id="starting3" onclick="lightup2()" value="START3"></button></center>

<center><input type="button" class="restartbutton3" id="restarting3" onclick="lightupnowait2()" value="RESTART3"></button></center>

<center><input type="button" class="startbutton4" id="starting4" onclick="lightup4()" value="START4"></button></center>

<center><input type="button" class="restartbutton4" id="restarting4" onclick="lightupnowait4()" value="RESTART4"></button></center>



<p hidden id="a">??</p>

<p hidden id="b">??</p>

<p hidden id="c">??</p>

<p hidden id="d">??</p>

<p hidden id="e">??</p>

<p hidden id="f">??</p>

<p hidden id="g">??</p>

<p hidden id="h">??</p>

<p hidden id="i">global var 1</p>

<p hidden id="j">howmanytimeclick</p>

<p hidden id="k">counter</p>

<p hidden id="l">levelcount</p>
<div id="">	
<form action="" id="form222" method="POST" name="form222">
	 <input hidden type="text" name="Score1" id="Score" value="" />
	 <input hidden type="text" name="Level" id="Levelremb" value="" />
	 <input hidden type="text" name="Valid" id="Validremb" value="" />
<input hidden type="submit" value="Save Highscore!" />
</form>

</div>


<audio hidden style="position:absolute" id="sound" controls="controls" src="1000_2ss.mp3"></audio>

<audio hidden style="position:absolute" id="correct" controls="controls" src="corrects.mp3"></audio>

<audio hidden style="position:absolute" id="wrong" controls="controls" src="wrongs.mp3"></audio>
<script type="text/javascript">
var globalnumber1 =0;
var globalnumber2 =0;
var globalnumber3 =0;
var globalnumber4 =0;
var globalnumber5 =0;
var globalnumber6 =0;
var checkpercentage =0;
var soundplay1;
var soundplay2;
var soundplay3;
var soundplay4;
var soundplay5;
var soundplay6;
var howmanytimesiclick = 1;
var counter=0;
var correcttt=0;
var counterhowmanyleft=0;
var counterhowmanyleftcalc;
document.getElementById('Score').value = counter; //hidden form to submit to database
var currentscore = document.getElementById("Display_Score"); //displayed
var howmanyleft = document.getElementById("howmanyleft"); //displayed how many valid left
var percent = document.getElementById("percent"); //display %percentage correct
var freezescreen = 1;
var up = document.getElementById("up");
var down = document.getElementById("down");
var levelscore = document.getElementById("levelscore");
var levelnumber = 1;
var senddatavariable = 1;
function lightup()
{
	var a = document.getElementById("a");
	var b = document.getElementById("b");
	var c = document.getElementById("c");
	var d = document.getElementById("d");
	var e = document.getElementById("e");
	var f = document.getElementById("f");
	var g = document.getElementById("g");
	var h = document.getElementById("h");
    var i = document.getElementById("i");
	var sound = document.getElementById("sound");

	var countdownbeforestart = 3;
	var button1 = document.getElementById("1"); //declare all the buttons
	var button2 = document.getElementById("2");
	var button3 = document.getElementById("3");
	var button4 = document.getElementById("4");
	var button5 = document.getElementById("5");
	var button6 = document.getElementById("6");
	var button7 = document.getElementById("7");
	var button8 = document.getElementById("8");
	var button9 = document.getElementById("9");
	var button10 = document.getElementById("10");
	var button11 = document.getElementById("11");
	var button12 = document.getElementById("12");
	var button13 = document.getElementById("13");
	var button14 = document.getElementById("14");
	var button15 = document.getElementById("15");
	var button16 = document.getElementById("16");
	var startin = document.getElementById("starting1"); 
	var restartin = document.getElementById("restarting1"); 
	var totalbuttons = 16; //total 16 mode but it rounds down
	var twochances = 2; //total 2 mode but it rounds down
	var fourchances = 4; //total 4 mode but it rounds down
	freezescreen = 1;
	percent.innerHTML = 0;
    counter =0;
	counterhowmanyleft=0;
	howmanytimesiclick = 1; //reset
    globalnumber1 =0;
    globalnumber2 =0;
    globalnumber3 =0;
    globalnumber4 =0;
    currentscore.innerHTML = 0;
	
	soundplay1 = Math.floor(Math.random() * twochances);
	soundplay2 = Math.floor(Math.random() * twochances);  
	soundplay3 = Math.floor(Math.random() * twochances);
    soundplay4 = Math.floor(Math.random() * twochances);  	
	
	//soundplay1 = 0;  //force test
	//soundplay2 = 0;
	//soundplay3 = 1;
    //soundplay4 = 0; 
  	
	if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0) //this is to prevent all no beep sounds so force 1 to beep
	{
		var forcebeep = Math.floor(Math.random() * fourchances) +1;
		if(forcebeep == 1){soundplay1 = 1};
		if(forcebeep == 2){soundplay2 = 1};
		if(forcebeep == 3){soundplay3 = 1};
		if(forcebeep == 4){soundplay4 = 1};
	};
	
	a.innerHTML = soundplay1;
	b.innerHTML = soundplay2;
	c.innerHTML = soundplay3;
	d.innerHTML = soundplay4;
	
	
	if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 1){howmanyleft.innerHTML = 1; counterhowmanyleft = 1; counterhowmanyleftcalc = 1; howmanytimesiclick = 4;};
	if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 0){howmanyleft.innerHTML = 1; counterhowmanyleft = 1; counterhowmanyleftcalc = 1; howmanytimesiclick = 3;};
	if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 1){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 3;};
	if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 0){howmanyleft.innerHTML = 1; counterhowmanyleft = 1; counterhowmanyleftcalc = 1; howmanytimesiclick = 2;};
	if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 1){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 2;}; //unique
	if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 0){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 2;};
	if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 1){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 2;};
	if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0){howmanyleft.innerHTML = 1; counterhowmanyleft = 1; counterhowmanyleftcalc = 1; howmanytimesiclick = 1;};
	if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 1){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 1;}; //unique
	if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 0){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 1;}; //unique
	if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 1){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 1;}; //unique
	if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 0){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 1;};
	if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 1){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 1;}; //unique
	if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 0){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 1;};
	if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 1){howmanyleft.innerHTML = 4; counterhowmanyleft = 4; counterhowmanyleftcalc = 4; howmanytimesiclick = 1;};
	

	
    var randomnumber1 = Math.floor(Math.random() * totalbuttons) +1;  //+1 so i will never get 0
    var answer1 = randomnumber1;
	var randomnumber2 = Math.floor(Math.random() * totalbuttons) +1;
    var answer2 = randomnumber2;
	var randomnumber3 = Math.floor(Math.random() * totalbuttons) +1; 
    var answer3 = randomnumber3; 
	var randomnumber4 = Math.floor(Math.random() * totalbuttons) +1; 
    var answer4 = randomnumber4; //this is for the future to check the answer

	e.innerHTML = randomnumber1;
	f.innerHTML = randomnumber2;
	g.innerHTML = randomnumber3;
	h.innerHTML = randomnumber4;
	
	
	
	//startin.value = countdownbeforestart; //countdown
	//startin.onclick = ''; //stop them from pressing the 3 2 1 countdown to restart and screw up everything
	//var clearme1 = setInterval(function (){countdownbeforestart--; startin.value = countdownbeforestart;},1000);//timer 
    //setTimeout(function(){clearInterval(clearme1); startin.style.display="none"; startin.value = 'START';},3000); //hide the button make starting value = start again
	startin.style.display="none"; //hide button immediately


	

		
	if(randomnumber1 == 1)
	{button1.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=1;}; setTimeout(function(){button1.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 2)
	{button2.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=2;}; setTimeout(function(){button2.style.backgroundColor="white";},1000);};

	if(randomnumber1 == 3)
	{button3.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=3;}; setTimeout(function(){button3.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 4)
	{button4.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=4;}; setTimeout(function(){button4.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 5)
	{button5.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=5;}; setTimeout(function(){button5.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 6)
	{button6.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=6;}; setTimeout(function(){button6.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 7)
	{button7.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=7;}; setTimeout(function(){button7.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 8)
	{button8.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=8;}; setTimeout(function(){button8.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 9)
	{button9.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=9;}; setTimeout(function(){button9.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 10)
	{button10.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=10;}; setTimeout(function(){button10.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 11)
	{button11.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=11;}; setTimeout(function(){button11.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 12)
	{button12.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=12;}; setTimeout(function(){button12.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 13)
	{button13.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=13;}; setTimeout(function(){button13.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 14)
	{button14.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=14;}; setTimeout(function(){button14.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 15)
	{button15.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=15;}; setTimeout(function(){button15.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 16)
	{button16.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=16;}; setTimeout(function(){button16.style.backgroundColor="white";},1000);};


i.innerHTML = globalnumber1;



 //start it after 3 seconds which is after count down is over
	
	
	
//////////////////////////////////////////////////////////////////////





	setTimeout(function(){	
	
	if(randomnumber2 == 1)
	{button1.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=1;}; setTimeout(function(){button1.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 2)
	{button2.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=2;}; setTimeout(function(){button2.style.backgroundColor="white";},1000);};

	if(randomnumber2 == 3)
	{button3.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=3;}; setTimeout(function(){button3.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 4)
	{button4.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=4;}; setTimeout(function(){button4.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 5)
	{button5.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=5;}; setTimeout(function(){button5.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 6)
	{button6.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=6;}; setTimeout(function(){button6.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 7)
	{button7.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=7;}; setTimeout(function(){button7.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 8)
	{button8.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=8;}; setTimeout(function(){button8.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 9)
	{button9.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=9;}; setTimeout(function(){button9.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 10)
	{button10.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=10;}; setTimeout(function(){button10.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 11)
	{button11.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=11;}; setTimeout(function(){button11.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 12)
	{button12.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=12;}; setTimeout(function(){button12.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 13)
	{button13.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=13;}; setTimeout(function(){button13.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 14)
	{button14.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=14;}; setTimeout(function(){button14.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 15)
	{button15.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=15;}; setTimeout(function(){button15.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 16)
	{button16.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=16;}; setTimeout(function(){button16.style.backgroundColor="white";},1000);};
	

	
	},1200);




//////////////////////////////////////////////////////////////////////




	setTimeout(function(){	
	
	if(randomnumber3 == 1)
	{button1.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=1;}; setTimeout(function(){button1.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 2)
	{button2.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=2;}; setTimeout(function(){button2.style.backgroundColor="white";},1000);};

	if(randomnumber3 == 3)
	{button3.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=3;}; setTimeout(function(){button3.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 4)
	{button4.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=4;}; setTimeout(function(){button4.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 5)
	{button5.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=5;}; setTimeout(function(){button5.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 6)
	{button6.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=6;}; setTimeout(function(){button6.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 7)
	{button7.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=7;}; setTimeout(function(){button7.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 8)
	{button8.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=8;}; setTimeout(function(){button8.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 9)
	{button9.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=9;}; setTimeout(function(){button9.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 10)
	{button10.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=10;}; setTimeout(function(){button10.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 11)
	{button11.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=11;}; setTimeout(function(){button11.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 12)
	{button12.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=12;}; setTimeout(function(){button12.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 13)
	{button13.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=13;}; setTimeout(function(){button13.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 14)
	{button14.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=14;}; setTimeout(function(){button14.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 15)
	{button15.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=15;}; setTimeout(function(){button15.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 16)
	{button16.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=16;}; setTimeout(function(){button16.style.backgroundColor="white";},1000);};
	

	
	},2400);


//////////////////////////////////////////////////////////////////////




	setTimeout(function(){	
	
	if(randomnumber4 == 1)
	{button1.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=1;}; setTimeout(function(){button1.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 2)
	{button2.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=2;}; setTimeout(function(){button2.style.backgroundColor="white";},1000);};

	if(randomnumber4 == 3)
	{button3.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=3;}; setTimeout(function(){button3.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 4)
	{button4.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=4;}; setTimeout(function(){button4.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 5)
	{button5.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=5;}; setTimeout(function(){button5.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 6)
	{button6.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=6;}; setTimeout(function(){button6.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 7)
	{button7.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=7;}; setTimeout(function(){button7.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 8)
	{button8.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=8;}; setTimeout(function(){button8.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 9)
	{button9.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=9;}; setTimeout(function(){button9.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 10)
	{button10.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=10;}; setTimeout(function(){button10.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 11)
	{button11.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=11;}; setTimeout(function(){button11.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 12)
	{button12.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=12;}; setTimeout(function(){button12.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 13)
	{button13.style.backgroundColor="red"; ; if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=13}; setTimeout(function(){button13.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 14)
	{button14.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=14;}; setTimeout(function(){button14.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 15)
	{button15.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=15;}; setTimeout(function(){button15.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 16)
	{button16.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=16;}; setTimeout(function(){button16.style.backgroundColor="white";},1000);};
	
	//freezescreen = 2;
	//clicknumberoftimes();
	},3600);
	
	setTimeout(function(){restartin.style.display="block";	freezescreen = 2;
	clicknumberoftimes();},3600);
	
	
}

function lightupnowait()
{
	counter =0;
	counterhowmanyleft=0;
	howmanytimesiclick = 1; //reset
    globalnumber1 =0;
    globalnumber2 =0;
    globalnumber3 =0;
    globalnumber4 =0;
	var a = document.getElementById("a");
	var b = document.getElementById("b");
	var c = document.getElementById("c");
	var d = document.getElementById("d");
	var e = document.getElementById("e");
	var f = document.getElementById("f");
	var g = document.getElementById("g");
	var h = document.getElementById("h");
    var i = document.getElementById("i");
	var sound = document.getElementById("sound");

	//var countdownbeforestart = 3;
	var button1 = document.getElementById("1"); //declare all the buttons
	var button2 = document.getElementById("2");
	var button3 = document.getElementById("3");
	var button4 = document.getElementById("4");
	var button5 = document.getElementById("5");
	var button6 = document.getElementById("6");
	var button7 = document.getElementById("7");
	var button8 = document.getElementById("8");
	var button9 = document.getElementById("9");
	var button10 = document.getElementById("10");
	var button11 = document.getElementById("11");
	var button12 = document.getElementById("12");
	var button13 = document.getElementById("13");
	var button14 = document.getElementById("14");
	var button15 = document.getElementById("15");
	var button16 = document.getElementById("16");
	var startin = document.getElementById("starting1"); 
	var restartin = document.getElementById("restarting1"); 
	var totalbuttons = 16; //total 16 mode but it rounds down
	var twochances = 2; //total 2 mode but it rounds down
	var fourchances = 4; //total 4 mode but it rounds down
	
	freezescreen = 1;
	percent.innerHTML = 0;
	
	soundplay1 = Math.floor(Math.random() * twochances);
	soundplay2 = Math.floor(Math.random() * twochances);  
	soundplay3 = Math.floor(Math.random() * twochances);
    soundplay4 = Math.floor(Math.random() * twochances);  	

	
	 

  	
	if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0) //this is to prevent all no beep sounds so force 1 to beep
	{
		var forcebeep = Math.floor(Math.random() * fourchances) +1;
		if(forcebeep == 1){soundplay1 = 1};
		if(forcebeep == 2){soundplay2 = 1};
		if(forcebeep == 3){soundplay3 = 1};
		if(forcebeep == 4){soundplay4 = 1};
	};
	
	a.innerHTML = soundplay1;
	b.innerHTML = soundplay2;
	c.innerHTML = soundplay3;
	d.innerHTML = soundplay4;
	currentscore.innerHTML = 0;
	
	
	
	
	if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 1){howmanyleft.innerHTML = 1; counterhowmanyleft = 1; counterhowmanyleftcalc = 1; howmanytimesiclick = 4;};
	if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 0){howmanyleft.innerHTML = 1; counterhowmanyleft = 1; counterhowmanyleftcalc = 1; howmanytimesiclick = 3;};
	if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 1){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 3;};
	if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 0){howmanyleft.innerHTML = 1; counterhowmanyleft = 1; counterhowmanyleftcalc = 1; howmanytimesiclick = 2;};
	if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 1){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 2;}; //unique
	if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 0){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 2;};
	if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 1){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 2;};
	if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0){howmanyleft.innerHTML = 1; counterhowmanyleft = 1; counterhowmanyleftcalc = 1; howmanytimesiclick = 1;};
	if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 1){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 1;}; //unique
	if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 0){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 1;}; //unique
	if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 1){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 1;}; //unique
	if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 0){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 1;};
	if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 1){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 1;}; //unique
	if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 0){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 1;};
	if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 1){howmanyleft.innerHTML = 4; counterhowmanyleft = 4; counterhowmanyleftcalc = 4; howmanytimesiclick = 1;};

	
    var randomnumber1 = Math.floor(Math.random() * totalbuttons) +1;  //+1 so i will never get 0
    var answer1 = randomnumber1;
	var randomnumber2 = Math.floor(Math.random() * totalbuttons) +1;
    var answer2 = randomnumber2;
	var randomnumber3 = Math.floor(Math.random() * totalbuttons) +1; 
    var answer3 = randomnumber3; //this is for the future to check the answer
	var randomnumber4 = Math.floor(Math.random() * totalbuttons) +1; 
    var answer4 = randomnumber4; //this is for the future to check the answer

	e.innerHTML = randomnumber1;
	f.innerHTML = randomnumber2;
	g.innerHTML = randomnumber3;
	h.innerHTML = randomnumber4;
	
	
	
	//startin.value = countdownbeforestart; //countdown
	//var clearme1 = setInterval(function (){countdownbeforestart--; startin.value = countdownbeforestart;},1000);//timer
    //setTimeout(function(){clearInterval(clearme1); startin.style.display="none";},3000); //hide the button
	
	restartin.style.display="none";
	//setTimeout(function(){freezescreen = 2;},3600);
		
	if(randomnumber1 == 1)
	{button1.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=1;}; setTimeout(function(){button1.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 2)
	{button2.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=2;}; setTimeout(function(){button2.style.backgroundColor="white";},1000);};

	if(randomnumber1 == 3)
	{button3.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=3;}; setTimeout(function(){button3.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 4)
	{button4.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=4;}; setTimeout(function(){button4.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 5)
	{button5.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=5;}; setTimeout(function(){button5.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 6)
	{button6.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=6;}; setTimeout(function(){button6.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 7)
	{button7.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=7;}; setTimeout(function(){button7.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 8)
	{button8.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=8;}; setTimeout(function(){button8.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 9)
	{button9.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=9;}; setTimeout(function(){button9.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 10)
	{button10.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=10;}; setTimeout(function(){button10.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 11)
	{button11.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=11;}; setTimeout(function(){button11.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 12)
	{button12.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=12;}; setTimeout(function(){button12.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 13)
	{button13.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=13;}; setTimeout(function(){button13.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 14)
	{button14.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=14;}; setTimeout(function(){button14.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 15)
	{button15.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=15;}; setTimeout(function(){button15.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 16)
	{button16.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=16;}; setTimeout(function(){button16.style.backgroundColor="white";},1000);};


i.innerHTML = globalnumber1;

	
//////////////////////////////////////////////////////////////////////





	setTimeout(function(){	
	
	if(randomnumber2 == 1)
	{button1.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=1;}; setTimeout(function(){button1.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 2)
	{button2.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=2;}; setTimeout(function(){button2.style.backgroundColor="white";},1000);};

	if(randomnumber2 == 3)
	{button3.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=3;}; setTimeout(function(){button3.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 4)
	{button4.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=4;}; setTimeout(function(){button4.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 5)
	{button5.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=5;}; setTimeout(function(){button5.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 6)
	{button6.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=6;}; setTimeout(function(){button6.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 7)
	{button7.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=7;}; setTimeout(function(){button7.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 8)
	{button8.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=8;}; setTimeout(function(){button8.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 9)
	{button9.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=9;}; setTimeout(function(){button9.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 10)
	{button10.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=10;}; setTimeout(function(){button10.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 11)
	{button11.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=11;}; setTimeout(function(){button11.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 12)
	{button12.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=12;}; setTimeout(function(){button12.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 13)
	{button13.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=13;}; setTimeout(function(){button13.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 14)
	{button14.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=14;}; setTimeout(function(){button14.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 15)
	{button15.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=15;}; setTimeout(function(){button15.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 16)
	{button16.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=16;}; setTimeout(function(){button16.style.backgroundColor="white";},1000);};
	

	
	},1200);




//////////////////////////////////////////////////////////////////////




	setTimeout(function(){	
	
	if(randomnumber3 == 1)
	{button1.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=1;}; setTimeout(function(){button1.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 2)
	{button2.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=2;}; setTimeout(function(){button2.style.backgroundColor="white";},1000);};

	if(randomnumber3 == 3)
	{button3.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=3;}; setTimeout(function(){button3.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 4)
	{button4.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=4;}; setTimeout(function(){button4.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 5)
	{button5.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=5;}; setTimeout(function(){button5.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 6)
	{button6.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=6;}; setTimeout(function(){button6.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 7)
	{button7.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=7;}; setTimeout(function(){button7.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 8)
	{button8.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=8;}; setTimeout(function(){button8.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 9)
	{button9.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=9;}; setTimeout(function(){button9.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 10)
	{button10.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=10;}; setTimeout(function(){button10.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 11)
	{button11.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=11;}; setTimeout(function(){button11.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 12)
	{button12.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=12;}; setTimeout(function(){button12.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 13)
	{button13.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=13;}; setTimeout(function(){button13.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 14)
	{button14.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=14;}; setTimeout(function(){button14.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 15)
	{button15.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=15;}; setTimeout(function(){button15.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 16)
	{button16.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=16;}; setTimeout(function(){button16.style.backgroundColor="white";},1000);};
	

	
	},2400);


//////////////////////////////////////////////////////////////////////




	setTimeout(function(){	
	
	if(randomnumber4 == 1)
	{button1.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=1;}; setTimeout(function(){button1.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 2)
	{button2.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=2;}; setTimeout(function(){button2.style.backgroundColor="white";},1000);};

	if(randomnumber4 == 3)
	{button3.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=3;}; setTimeout(function(){button3.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 4)
	{button4.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=4;}; setTimeout(function(){button4.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 5)
	{button5.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=5;}; setTimeout(function(){button5.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 6)
	{button6.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=6;}; setTimeout(function(){button6.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 7)
	{button7.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=7;}; setTimeout(function(){button7.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 8)
	{button8.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=8;}; setTimeout(function(){button8.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 9)
	{button9.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=9;}; setTimeout(function(){button9.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 10)
	{button10.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=10;}; setTimeout(function(){button10.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 11)
	{button11.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=11;}; setTimeout(function(){button11.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 12)
	{button12.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=12;}; setTimeout(function(){button12.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 13)
	{button13.style.backgroundColor="red"; ; if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=13}; setTimeout(function(){button13.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 14)
	{button14.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=14;}; setTimeout(function(){button14.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 15)
	{button15.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=15;}; setTimeout(function(){button15.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 16)
	{button16.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=16;}; setTimeout(function(){button16.style.backgroundColor="white";},1000);};
	
	//freezescreen = 2;
	//clicknumberoftimes();
	
	},3600);
	
	setTimeout(function(){restartin.style.display="block";	freezescreen = 2;
	clicknumberoftimes();},4600);

}

function clicknumberoftimes()
{

	if(freezescreen == 2)
	{
		
	var j = document.getElementById("j");
	var k = document.getElementById("k");
    var button1 = document.getElementById("1"); //declare all the buttons
	var button2 = document.getElementById("2");
	var button3 = document.getElementById("3");
	var button4 = document.getElementById("4");
	var button5 = document.getElementById("5");
	var button6 = document.getElementById("6");
	var button7 = document.getElementById("7");
	var button8 = document.getElementById("8");
	var button9 = document.getElementById("9");
	var button10 = document.getElementById("10");
	var button11 = document.getElementById("11");
	var button12 = document.getElementById("12");
	var button13 = document.getElementById("13");
	var button14 = document.getElementById("14");
	var button15 = document.getElementById("15");
	var button16 = document.getElementById("16");
	var correct = document.getElementById("correct");
	var wrong = document.getElementById("wrong");

	var huh = howmanytimesiclick;
    j.innerHTML = huh;
    var huh1 = globalnumber1;
	k.innerHTML = huh1;
	//counterhowmanyleft
	document.getElementById('Levelremb').value = levelnumber;
	document.getElementById('Validremb').value = counterhowmanyleftcalc;
	//if counter == counter - 1
	//if counter == counter + 1
	//if(soundplay1 == 1){if(soundplay2 == 0){howmanytimesiclick = 3;};};
	if(correcttt == 1)
	{
	counter = Math.max(0,counter); //make no - when calculated //remove negative score if any
	var percenttest = Math.round((counter / counterhowmanyleftcalc) * 100 * 100) / 100; //2 decimal place //counterhowmanyleftcalc is a fixed number given
	percent.innerHTML = Math.max(0, percenttest); //make all negative number to 0
	//Math.abs(); to return absolute value
	document.getElementById('Score').value = counter;
	document.getElementById('Levelremb').value = levelnumber;
	}
	else 
	{
		
	}
		
		if(howmanytimesiclick == 1) 
		{
			
		button1.onclick = function() 
		    {
			if(globalnumber1 == 1 && howmanytimesiclick == 1){correcttt = 1; button1.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button1.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay1 == 1){if(soundplay2 == 0){howmanytimesiclick = 3;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};};if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; //can use else if too but this is easier
            if(globalnumber1 != 1 && howmanytimesiclick == 1){correcttt = 0; button1.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button1.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay1 == 1){if(soundplay2 == 0){howmanytimesiclick = 3;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};};if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};

		button2.onclick = function() 
		    {
			if(globalnumber1 == 2 && howmanytimesiclick == 1){correcttt = 1; button2.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button2.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay1 == 1){if(soundplay2 == 0){howmanytimesiclick = 3;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};};if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber1 != 2 && howmanytimesiclick == 1){correcttt = 0; button2.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button2.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay1 == 1){if(soundplay2 == 0){howmanytimesiclick = 3;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};};if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};
	    button3.onclick = function() 
		    {
			if(globalnumber1 == 3 && howmanytimesiclick == 1){correcttt = 1; button3.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button3.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay1 == 1){if(soundplay2 == 0){howmanytimesiclick = 3;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};};if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber1 != 3 && howmanytimesiclick == 1){correcttt = 0; button3.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button3.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay1 == 1){if(soundplay2 == 0){howmanytimesiclick = 3;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};};if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};
		button4.onclick = function() 
		    {
			if(globalnumber1 == 4 && howmanytimesiclick == 1){correcttt = 1; button4.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button4.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay1 == 1){if(soundplay2 == 0){howmanytimesiclick = 3;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};};if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber1 != 4 && howmanytimesiclick == 1){correcttt = 0; button4.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button4.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay1 == 1){if(soundplay2 == 0){howmanytimesiclick = 3;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};};if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};	
		button5.onclick = function() 
		    {
			if(globalnumber1 == 5 && howmanytimesiclick == 1){correcttt = 1; button5.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button5.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay1 == 1){if(soundplay2 == 0){howmanytimesiclick = 3;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};};if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber1 != 5 && howmanytimesiclick == 1){correcttt = 0; button5.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button5.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay1 == 1){if(soundplay2 == 0){howmanytimesiclick = 3;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};};if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};	
		button6.onclick = function() 
		    {
			if(globalnumber1 == 6 && howmanytimesiclick == 1){correcttt = 1; button6.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button6.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay1 == 1){if(soundplay2 == 0){howmanytimesiclick = 3;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};};if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber1 != 6 && howmanytimesiclick == 1){correcttt = 0; button6.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button6.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay1 == 1){if(soundplay2 == 0){howmanytimesiclick = 3;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};};if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};
		button7.onclick = function() 
		    {
			if(globalnumber1 == 7 && howmanytimesiclick == 1){correcttt = 1; button7.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button7.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay1 == 1){if(soundplay2 == 0){howmanytimesiclick = 3;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};};if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber1 != 7 && howmanytimesiclick == 1){correcttt = 0; button7.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button7.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay1 == 1){if(soundplay2 == 0){howmanytimesiclick = 3;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};};if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};	
		button8.onclick = function() 
		    {
			if(globalnumber1 == 8 && howmanytimesiclick == 1){correcttt = 1; button8.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button8.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay1 == 1){if(soundplay2 == 0){howmanytimesiclick = 3;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};};if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber1 != 8 && howmanytimesiclick == 1){correcttt = 0; button8.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button8.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay1 == 1){if(soundplay2 == 0){howmanytimesiclick = 3;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};};if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};	
		button9.onclick = function() 
		    {
			if(globalnumber1 == 9 && howmanytimesiclick == 1){correcttt = 1; button9.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button9.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay1 == 1){if(soundplay2 == 0){howmanytimesiclick = 3;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};};if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber1 != 9 && howmanytimesiclick == 1){correcttt = 0; button9.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button9.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay1 == 1){if(soundplay2 == 0){howmanytimesiclick = 3;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};};if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};		
        button10.onclick = function() 
		    {
			if(globalnumber1 == 10 && howmanytimesiclick == 1){correcttt = 1; button10.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button10.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay1 == 1){if(soundplay2 == 0){howmanytimesiclick = 3;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};};if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber1 != 10 && howmanytimesiclick == 1){correcttt = 0; button10.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button10.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay1 == 1){if(soundplay2 == 0){howmanytimesiclick = 3;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};};if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};	
        button11.onclick = function() 
		    {
			if(globalnumber1 == 11 && howmanytimesiclick == 1){correcttt = 1; button11.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button11.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay1 == 1){if(soundplay2 == 0){howmanytimesiclick = 3;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};};if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber1 != 11 && howmanytimesiclick == 1){correcttt = 0; button11.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button11.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay1 == 1){if(soundplay2 == 0){howmanytimesiclick = 3;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};};if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};	
        button12.onclick = function() 
		    {
			if(globalnumber1 == 12 && howmanytimesiclick == 1){correcttt = 1; button12.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button12.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay1 == 1){if(soundplay2 == 0){howmanytimesiclick = 3;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};};if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber1 != 12 && howmanytimesiclick == 1){correcttt = 0; button12.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button12.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay1 == 1){if(soundplay2 == 0){howmanytimesiclick = 3;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};};if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};	
        button13.onclick = function() 
		    {
			if(globalnumber1 == 13 && howmanytimesiclick == 1){correcttt = 1; button13.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button13.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay1 == 1){if(soundplay2 == 0){howmanytimesiclick = 3;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};};if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber1 != 13 && howmanytimesiclick == 1){correcttt = 0; button13.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button13.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay1 == 1){if(soundplay2 == 0){howmanytimesiclick = 3;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};};if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};	
        button14.onclick = function() 
		    {
			if(globalnumber1 == 14 && howmanytimesiclick == 1){correcttt = 1; button14.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button14.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay1 == 1){if(soundplay2 == 0){howmanytimesiclick = 3;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};};if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber1 != 14 && howmanytimesiclick == 1){correcttt = 0; button14.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button14.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay1 == 1){if(soundplay2 == 0){howmanytimesiclick = 3;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};};if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};
        button15.onclick = function() 
		    {
			if(globalnumber1 == 15 && howmanytimesiclick == 1){correcttt = 1; button15.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button15.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay1 == 1){if(soundplay2 == 0){howmanytimesiclick = 3;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};};if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber1 != 15 && howmanytimesiclick == 1){correcttt = 0; button15.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button15.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay1 == 1){if(soundplay2 == 0){howmanytimesiclick = 3;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};};if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};
        button16.onclick = function() 
		    {
			if(globalnumber1 == 16 && howmanytimesiclick == 1){correcttt = 1; button16.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button16.style.backgroundColor="white";},1000); howmanytimesiclick++;if(soundplay1 == 1){if(soundplay2 == 0){howmanytimesiclick = 3;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};};if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};};};
            if(globalnumber1 != 16 && howmanytimesiclick == 1){correcttt = 0; button16.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button16.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay1 == 1){if(soundplay2 == 0){howmanytimesiclick = 3;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};};if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};};}; 
			};	
			
			//if(soundplay1 == 1){if(soundplay2 == 0){howmanytimesiclick = 3;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay1 == 1){if(soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};}; 
			
		}


		if(howmanytimesiclick == 2)
		{
		button1.onclick = function() 
		    {
			if(globalnumber2 == 1 && howmanytimesiclick == 2){correcttt = 1; button1.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button1.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay2 == 1){if(soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; //can use else if too but this is easier
            if(globalnumber2 != 1 && howmanytimesiclick == 2){correcttt = 0;button1.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button1.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay2 == 1){if(soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};
		button2.onclick = function() 
		    {
			if(globalnumber2 == 2 && howmanytimesiclick == 2){correcttt = 1; button2.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button2.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay2 == 1){if(soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber2 != 2 && howmanytimesiclick == 2){correcttt = 0;button2.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button2.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay2 == 1){if(soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};
	    button3.onclick = function() 
		    {
			if(globalnumber2 == 3 && howmanytimesiclick == 2){correcttt = 1; button3.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button3.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay2 == 1){if(soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber2 != 3 && howmanytimesiclick == 2){correcttt = 0;button3.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button3.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay2 == 1){if(soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};
		button4.onclick = function() 
		    {
			if(globalnumber2 == 4 && howmanytimesiclick == 2){correcttt = 1; button4.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button4.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay2 == 1){if(soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber2 != 4 && howmanytimesiclick == 2){correcttt = 0;button4.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button4.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay2 == 1){if(soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};	
		button5.onclick = function() 
		    {
			if(globalnumber2 == 5 && howmanytimesiclick == 2){correcttt = 1; button5.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button5.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay2 == 1){if(soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber2 != 5 && howmanytimesiclick == 2){correcttt = 0;button5.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button5.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay2 == 1){if(soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};	
		button6.onclick = function() 
		    {
			if(globalnumber2 == 6 && howmanytimesiclick == 2){correcttt = 1; button6.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button6.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay2 == 1){if(soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber2 != 6 && howmanytimesiclick == 2){correcttt = 0;button6.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button6.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay2 == 1){if(soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};
		button7.onclick = function() 
		    {
			if(globalnumber2 == 7 && howmanytimesiclick == 2){correcttt = 1; button7.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button7.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay2 == 1){if(soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber2 != 7 && howmanytimesiclick == 2){correcttt = 0;button7.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button7.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay2 == 1){if(soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};	
		button8.onclick = function() 
		    {
			if(globalnumber2 == 8 && howmanytimesiclick == 2){correcttt = 1; button8.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button8.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay2 == 1){if(soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber2 != 8 && howmanytimesiclick == 2){correcttt = 0;button8.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button8.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay2 == 1){if(soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};	
		button9.onclick = function() 
		    {
			if(globalnumber2 == 9 && howmanytimesiclick == 2){correcttt = 1; button9.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button9.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay2 == 1){if(soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber2 != 9 && howmanytimesiclick == 2){correcttt = 0;button9.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button9.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay2 == 1){if(soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};		
        button10.onclick = function() 
		    {
			if(globalnumber2 == 10 && howmanytimesiclick == 2){correcttt = 1; button10.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button10.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay2 == 1){if(soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber2 != 10 && howmanytimesiclick == 2){correcttt = 0;button10.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button10.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay2 == 1){if(soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};	
        button11.onclick = function() 
		    {
			if(globalnumber2 == 11 && howmanytimesiclick == 2){correcttt = 1; button11.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button11.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay2 == 1){if(soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber2 != 11 && howmanytimesiclick == 2){correcttt = 0;button11.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button11.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay2 == 1){if(soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};	
        button12.onclick = function() 
		    {
			if(globalnumber2 == 12 && howmanytimesiclick == 2){correcttt = 1; button12.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button12.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay2 == 1){if(soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber2 != 12 && howmanytimesiclick == 2){correcttt = 0;button12.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button12.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay2 == 1){if(soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};	
        button13.onclick = function() 
		    {
			if(globalnumber2 == 13 && howmanytimesiclick == 2){correcttt = 1; button13.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button13.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay2 == 1){if(soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber2 != 13 && howmanytimesiclick == 2){correcttt = 0;button13.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button13.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay2 == 1){if(soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};	
        button14.onclick = function() 
		    {
			if(globalnumber2 == 14 && howmanytimesiclick == 2){correcttt = 1; button14.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button14.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay2 == 1){if(soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber2 != 14 && howmanytimesiclick == 2){correcttt = 0;button14.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button14.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay2 == 1){if(soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};
        button15.onclick = function() 
		    {
			if(globalnumber2 == 15 && howmanytimesiclick == 2){correcttt = 1; button15.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button15.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay2 == 1){if(soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber2 != 15 && howmanytimesiclick == 2){correcttt = 0;button15.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button15.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay2 == 1){if(soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};
        button16.onclick = function() 
		    {
			if(globalnumber2 == 16 && howmanytimesiclick == 2){correcttt = 1; button16.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button16.style.backgroundColor="white";},1000); howmanytimesiclick++;if(soundplay2 == 1){if(soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber2 != 16 && howmanytimesiclick == 2){correcttt = 0;button16.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button16.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay2 == 1){if(soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};	
			
		//if(soundplay2 == 1){if(soundplay3 == 0){howmanytimesiclick = 4;};}; if(soundplay2 == 1){if(soundplay3 == 0 && soundplay4 == 0){howmanytimesiclick = 5;};}; 
			
		}
		
		
		if(howmanytimesiclick == 3)
		{
		button1.onclick = function() 
		    {
			if(globalnumber3 == 1 && howmanytimesiclick == 3){correcttt = 1; button1.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button1.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay3 == 1){if(soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; //can use else if too but this is easier
            if(globalnumber3 != 1 && howmanytimesiclick == 3){correcttt = 0;button1.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button1.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay3 == 1){if(soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};
		button2.onclick = function() 
		    {
			if(globalnumber3 == 2 && howmanytimesiclick == 3){correcttt = 1; button2.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button2.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay3 == 1){if(soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber3 != 2 && howmanytimesiclick == 3){correcttt = 0;button2.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button2.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay3 == 1){if(soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};
	    button3.onclick = function() 
		    {
			if(globalnumber3 == 3 && howmanytimesiclick == 3){correcttt = 1; button3.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button3.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay3 == 1){if(soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber3 != 3 && howmanytimesiclick == 3){correcttt = 0;button3.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button3.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay3 == 1){if(soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};
		button4.onclick = function() 
		    {
			if(globalnumber3 == 4 && howmanytimesiclick == 3){correcttt = 1; button4.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button4.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay3 == 1){if(soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber3 != 4 && howmanytimesiclick == 3){correcttt = 0;button4.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button4.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay3 == 1){if(soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};	
		button5.onclick = function() 
		    {
			if(globalnumber3 == 5 && howmanytimesiclick == 3){correcttt = 1; button5.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button5.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay3 == 1){if(soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber3 != 5 && howmanytimesiclick == 3){correcttt = 0;button5.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button5.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay3 == 1){if(soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};	
		button6.onclick = function() 
		    {
			if(globalnumber3 == 6 && howmanytimesiclick == 3){correcttt = 1; button6.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button6.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay3 == 1){if(soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber3 != 6 && howmanytimesiclick == 3){correcttt = 0;button6.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button6.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay3 == 1){if(soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};
		button7.onclick = function() 
		    {
			if(globalnumber3 == 7 && howmanytimesiclick == 3){correcttt = 1; button7.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button7.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay3 == 1){if(soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber3 != 7 && howmanytimesiclick == 3){correcttt = 0;button7.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button7.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay3 == 1){if(soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};	
		button8.onclick = function() 
		    {
			if(globalnumber3 == 8 && howmanytimesiclick == 3){correcttt = 1; button8.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button8.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay3 == 1){if(soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber3 != 8 && howmanytimesiclick == 3){correcttt = 0;button8.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button8.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay3 == 1){if(soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};	
		button9.onclick = function() 
		    {
			if(globalnumber3 == 9 && howmanytimesiclick == 3){correcttt = 1; button9.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button9.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay3 == 1){if(soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber3 != 9 && howmanytimesiclick == 3){correcttt = 0;button9.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button9.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay3 == 1){if(soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};		
        button10.onclick = function() 
		    {
			if(globalnumber3 == 10 && howmanytimesiclick == 3){correcttt = 1; button10.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button10.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay3 == 1){if(soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber3 != 10 && howmanytimesiclick == 3){correcttt = 0;button10.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button10.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay3 == 1){if(soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};	
        button11.onclick = function() 
		    {
			if(globalnumber3 == 11 && howmanytimesiclick == 3){correcttt = 1; button11.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button11.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay3 == 1){if(soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber3 != 11 && howmanytimesiclick == 3){correcttt = 0;button11.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button11.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay3 == 1){if(soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};	
        button12.onclick = function() 
		    {
			if(globalnumber3 == 12 && howmanytimesiclick == 3){correcttt = 1; button12.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button12.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay3 == 1){if(soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber3 != 12 && howmanytimesiclick == 3){correcttt = 0;button12.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button12.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay3 == 1){if(soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};	
        button13.onclick = function() 
		    {
			if(globalnumber3 == 13 && howmanytimesiclick == 3){correcttt = 1; button13.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button13.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay3 == 1){if(soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber3 != 13 && howmanytimesiclick == 3){correcttt = 0;button13.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button13.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay3 == 1){if(soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};	
        button14.onclick = function() 
		    {
			if(globalnumber3 == 14 && howmanytimesiclick == 3){correcttt = 1; button14.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button14.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay3 == 1){if(soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber3 != 14 && howmanytimesiclick == 3){correcttt = 0;button14.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button14.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay3 == 1){if(soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};
        button15.onclick = function() 
		    {
			if(globalnumber3 == 15 && howmanytimesiclick == 3){correcttt = 1; button15.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button15.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay3 == 1){if(soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber3 != 15 && howmanytimesiclick == 3){correcttt = 0;button15.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button15.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay3 == 1){if(soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};
        button16.onclick = function() 
		    {
			if(globalnumber3 == 16 && howmanytimesiclick == 3){correcttt = 1; button16.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button16.style.backgroundColor="white";},1000); howmanytimesiclick++;if(soundplay3 == 1){if(soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber3 != 16 && howmanytimesiclick == 3){correcttt = 0;button16.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button16.style.backgroundColor="white";},1000);howmanytimesiclick++;if(soundplay3 == 1){if(soundplay4 == 0){howmanytimesiclick = 5;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay3 == 1){if(soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};	
			
		//if(soundplay3 == 1){if(soundplay4 == 0){howmanytimesiclick = 5;};}; 
			
		}
	
		
		if(howmanytimesiclick == 4 && (levelnumber == 2 || levelnumber == 3 || levelnumber == 4 || levelnumber == 5))
		{

		button1.onclick = function() 
		    {
			if(globalnumber4 == 1 && howmanytimesiclick == 4){correcttt = 1; button1.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button1.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay4 == 1){if(soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay4 == 1){if(soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; //can use else if too but this is easier
            if(globalnumber4 != 1 && howmanytimesiclick == 4){correcttt = 0;button1.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button1.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay4 == 1){if(soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay4 == 1){if(soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};
		button2.onclick = function() 
		    {
			if(globalnumber4 == 2 && howmanytimesiclick == 4){correcttt = 1; button2.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button2.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay4 == 1){if(soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay4 == 1){if(soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber4 != 2 && howmanytimesiclick == 4){correcttt = 0;button2.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button2.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay4 == 1){if(soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay4 == 1){if(soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};
	    button3.onclick = function() 
		    {
			if(globalnumber4 == 3 && howmanytimesiclick == 4){correcttt = 1; button3.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button3.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay4 == 1){if(soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay4 == 1){if(soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber4 != 3 && howmanytimesiclick == 4){correcttt = 0;button3.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button3.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay4 == 1){if(soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay4 == 1){if(soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};
		button4.onclick = function() 
		    {
			if(globalnumber4 == 4 && howmanytimesiclick == 4){correcttt = 1; button4.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button4.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay4 == 1){if(soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay4 == 1){if(soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber4 != 4 && howmanytimesiclick == 4){correcttt = 0;button4.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button4.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay4 == 1){if(soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay4 == 1){if(soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};	
		button5.onclick = function() 
		    {
			if(globalnumber4 == 5 && howmanytimesiclick == 4){correcttt = 1; button5.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button5.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay4 == 1){if(soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay4 == 1){if(soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber4 != 5 && howmanytimesiclick == 4){correcttt = 0;button5.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button5.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay4 == 1){if(soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay4 == 1){if(soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};	
		button6.onclick = function() 
		    {
			if(globalnumber4 == 6 && howmanytimesiclick == 4){correcttt = 1; button6.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button6.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay4 == 1){if(soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay4 == 1){if(soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber4 != 6 && howmanytimesiclick == 4){correcttt = 0;button6.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button6.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay4 == 1){if(soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay4 == 1){if(soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};
		button7.onclick = function() 
		    {
			if(globalnumber4 == 7 && howmanytimesiclick == 4){correcttt = 1; button7.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button7.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay4 == 1){if(soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay4 == 1){if(soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber4 != 7 && howmanytimesiclick == 4){correcttt = 0;button7.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button7.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay4 == 1){if(soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay4 == 1){if(soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};	
		button8.onclick = function() 
		    {
			if(globalnumber4 == 8 && howmanytimesiclick == 4){correcttt = 1; button8.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button8.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay4 == 1){if(soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay4 == 1){if(soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber4 != 8 && howmanytimesiclick == 4){correcttt = 0;button8.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button8.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay4 == 1){if(soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay4 == 1){if(soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};	
		button9.onclick = function() 
		    {
			if(globalnumber4 == 9 && howmanytimesiclick == 4){correcttt = 1; button9.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button9.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay4 == 1){if(soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay4 == 1){if(soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber4 != 9 && howmanytimesiclick == 4){correcttt = 0;button9.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button9.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay4 == 1){if(soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay4 == 1){if(soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};		
        button10.onclick = function() 
		    {
			if(globalnumber4 == 10 && howmanytimesiclick == 4){correcttt = 1; button10.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button10.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay4 == 1){if(soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay4 == 1){if(soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber4 != 10 && howmanytimesiclick == 4){correcttt = 0;button10.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button10.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay4 == 1){if(soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay4 == 1){if(soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};	
        button11.onclick = function() 
		    {
			if(globalnumber4 == 11 && howmanytimesiclick == 4){correcttt = 1; button11.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button11.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay4 == 1){if(soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay4 == 1){if(soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber4 != 11 && howmanytimesiclick == 4){correcttt = 0;button11.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button11.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay4 == 1){if(soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay4 == 1){if(soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};	
        button12.onclick = function() 
		    {
			if(globalnumber4 == 12 && howmanytimesiclick == 4){correcttt = 1; button12.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button12.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay4 == 1){if(soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay4 == 1){if(soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber4 != 12 && howmanytimesiclick == 4){correcttt = 0;button12.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button12.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay4 == 1){if(soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay4 == 1){if(soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};	
        button13.onclick = function() 
		    {
			if(globalnumber4 == 13 && howmanytimesiclick == 4){correcttt = 1; button13.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button13.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay4 == 1){if(soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay4 == 1){if(soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber4 != 13 && howmanytimesiclick == 4){correcttt = 0;button13.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button13.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay4 == 1){if(soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay4 == 1){if(soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};	
        button14.onclick = function() 
		    {
			if(globalnumber4 == 14 && howmanytimesiclick == 4){correcttt = 1; button14.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button14.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay4 == 1){if(soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay4 == 1){if(soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber4 != 14 && howmanytimesiclick == 4){correcttt = 0;button14.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button14.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay4 == 1){if(soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay4 == 1){if(soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};
        button15.onclick = function() 
		    {
			if(globalnumber4 == 15 && howmanytimesiclick == 4){correcttt = 1; button15.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button15.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay4 == 1){if(soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay4 == 1){if(soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber4 != 15 && howmanytimesiclick == 4){correcttt = 0;button15.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button15.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay4 == 1){if(soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay4 == 1){if(soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};

        button16.onclick = function() 
		    {
			if(globalnumber4 == 16 && howmanytimesiclick == 4){correcttt = 1; button16.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button16.style.backgroundColor="white";},1000); howmanytimesiclick++; if(soundplay4 == 1){if(soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay4 == 1){if(soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber4 != 16 && howmanytimesiclick == 4){correcttt = 0;button16.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button16.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay4 == 1){if(soundplay5 == 0){howmanytimesiclick = 6;};}; if(soundplay4 == 1){if(soundplay5 == 0 && soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};	
				
		}
	
		if(howmanytimesiclick == 5 && (levelnumber == 3 || levelnumber == 4 || levelnumber == 5))
		{
		button1.onclick = function() 
		    {
			if(globalnumber5 == 1 && howmanytimesiclick == 5){correcttt = 1; button1.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button1.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay5 == 1){if(soundplay6 == 0){howmanytimesiclick = 7;};};}; //can use else if too but this is easier
            if(globalnumber5 != 1 && howmanytimesiclick == 5){correcttt = 0;button1.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button1.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay5 == 1){if(soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};
		button2.onclick = function() 
		    {
			if(globalnumber5 == 2 && howmanytimesiclick == 5){correcttt = 1; button2.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button2.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay5 == 1){if(soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber5 != 2 && howmanytimesiclick == 5){correcttt = 0;button2.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button2.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay5 == 1){if(soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};
	    button3.onclick = function() 
		    {
			if(globalnumber5 == 3 && howmanytimesiclick == 5){correcttt = 1; button3.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button3.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay5 == 1){if(soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber5 != 3 && howmanytimesiclick == 5){correcttt = 0;button3.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button3.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay5 == 1){if(soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};
		button4.onclick = function() 
		    {
			if(globalnumber5 == 4 && howmanytimesiclick == 5){correcttt = 1; button4.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button4.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay5 == 1){if(soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber5 != 4 && howmanytimesiclick == 5){correcttt = 0;button4.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button4.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay5 == 1){if(soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};	
		button5.onclick = function() 
		    {
			if(globalnumber5 == 5 && howmanytimesiclick == 5){correcttt = 1; button5.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button5.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay5 == 1){if(soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber5 != 5 && howmanytimesiclick == 5){correcttt = 0;button5.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button5.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay5 == 1){if(soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};	
		button6.onclick = function() 
		    {
			if(globalnumber5 == 6 && howmanytimesiclick == 5){correcttt = 1; button6.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button6.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay5 == 1){if(soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber5 != 6 && howmanytimesiclick == 5){correcttt = 0;button6.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button6.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay5 == 1){if(soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};
		button7.onclick = function() 
		    {
			if(globalnumber5 == 7 && howmanytimesiclick == 5){correcttt = 1; button7.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button7.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay5 == 1){if(soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber5 != 7 && howmanytimesiclick == 5){correcttt = 0;button7.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button7.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay5 == 1){if(soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};	
		button8.onclick = function() 
		    {
			if(globalnumber5 == 8 && howmanytimesiclick == 5){correcttt = 1; button8.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button8.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay5 == 1){if(soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber5 != 8 && howmanytimesiclick == 5){correcttt = 0;button8.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button8.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay5 == 1){if(soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};	
		button9.onclick = function() 
		    {
			if(globalnumber5 == 9 && howmanytimesiclick == 5){correcttt = 1; button9.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button9.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay5 == 1){if(soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber5 != 9 && howmanytimesiclick == 5){correcttt = 0;button9.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button9.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay5 == 1){if(soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};		
        button10.onclick = function() 
		    {
			if(globalnumber5 == 10 && howmanytimesiclick == 5){correcttt = 1; button10.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button10.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay5 == 1){if(soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber5 != 10 && howmanytimesiclick == 5){correcttt = 0;button10.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button10.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay5 == 1){if(soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};	
        button11.onclick = function() 
		    {
			if(globalnumber5 == 11 && howmanytimesiclick == 5){correcttt = 1; button11.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button11.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay5 == 1){if(soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber5 != 11 && howmanytimesiclick == 5){correcttt = 0;button11.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button11.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay5 == 1){if(soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};	
        button12.onclick = function() 
		    {
			if(globalnumber5 == 12 && howmanytimesiclick == 5){correcttt = 1; button12.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button12.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay5 == 1){if(soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber5 != 12 && howmanytimesiclick == 5){correcttt = 0;button12.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button12.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay5 == 1){if(soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};	
        button13.onclick = function() 
		    {
			if(globalnumber5 == 13 && howmanytimesiclick == 5){correcttt = 1; button13.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button13.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay5 == 1){if(soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber5 != 13 && howmanytimesiclick == 5){correcttt = 0;button13.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button13.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay5 == 1){if(soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};	
        button14.onclick = function() 
		    {
			if(globalnumber5 == 14 && howmanytimesiclick == 5){correcttt = 1; button14.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button14.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay5 == 1){if(soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber5 != 14 && howmanytimesiclick == 5){correcttt = 0;button14.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button14.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay5 == 1){if(soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};
        button15.onclick = function() 
		    {
			if(globalnumber5 == 15 && howmanytimesiclick == 5){correcttt = 1; button15.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button15.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay5 == 1){if(soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber5 != 15 && howmanytimesiclick == 5){correcttt = 0;button15.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button15.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay5 == 1){if(soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};
        button16.onclick = function() 
		    {
			if(globalnumber5 == 16 && howmanytimesiclick == 5){correcttt = 1; button16.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button16.style.backgroundColor="white";},1000); howmanytimesiclick++; if(soundplay5 == 1){if(soundplay6 == 0){howmanytimesiclick = 7;};};};
            if(globalnumber5 != 16 && howmanytimesiclick == 5){correcttt = 0;button16.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button16.style.backgroundColor="white";},1000);howmanytimesiclick++; if(soundplay5 == 1){if(soundplay6 == 0){howmanytimesiclick = 7;};};}; 
			};	
		}

		if(howmanytimesiclick == 6 && (levelnumber == 4 || levelnumber == 5))
		{
		button1.onclick = function() 
		    {
			if(globalnumber6 == 1 && howmanytimesiclick == 6){correcttt = 1; button1.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button1.style.backgroundColor="white";},1000);howmanytimesiclick++;}; //can use else if too but this is easier
            if(globalnumber6 != 1 && howmanytimesiclick == 6){correcttt = 0;button1.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button1.style.backgroundColor="white";},1000);howmanytimesiclick++;}; 
			};
		button2.onclick = function() 
		    {
			if(globalnumber6 == 2 && howmanytimesiclick == 6){correcttt = 1; button2.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button2.style.backgroundColor="white";},1000);howmanytimesiclick++;};
            if(globalnumber6 != 2 && howmanytimesiclick == 6){correcttt = 0;button2.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button2.style.backgroundColor="white";},1000);howmanytimesiclick++;}; 
			};
	    button3.onclick = function() 
		    {
			if(globalnumber6 == 3 && howmanytimesiclick == 6){correcttt = 1; button3.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button3.style.backgroundColor="white";},1000);howmanytimesiclick++;};
            if(globalnumber6 != 3 && howmanytimesiclick == 6){correcttt = 0;button3.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button3.style.backgroundColor="white";},1000);howmanytimesiclick++;}; 
			};
		button4.onclick = function() 
		    {
			if(globalnumber6 == 4 && howmanytimesiclick == 6){correcttt = 1; button4.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button4.style.backgroundColor="white";},1000);howmanytimesiclick++;};
            if(globalnumber6 != 4 && howmanytimesiclick == 6){correcttt = 0;button4.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button4.style.backgroundColor="white";},1000);howmanytimesiclick++;}; 
			};	
		button5.onclick = function() 
		    {
			if(globalnumber6 == 5 && howmanytimesiclick == 6){correcttt = 1; button5.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button5.style.backgroundColor="white";},1000);howmanytimesiclick++;};
            if(globalnumber6 != 5 && howmanytimesiclick == 6){correcttt = 0;button5.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button5.style.backgroundColor="white";},1000);howmanytimesiclick++;}; 
			};	
		button6.onclick = function() 
		    {
			if(globalnumber6 == 6 && howmanytimesiclick == 6){correcttt = 1; button6.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button6.style.backgroundColor="white";},1000);howmanytimesiclick++;};
            if(globalnumber6 != 6 && howmanytimesiclick == 6){correcttt = 0;button6.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button6.style.backgroundColor="white";},1000);howmanytimesiclick++;}; 
			};
		button7.onclick = function() 
		    {
			if(globalnumber6 == 7 && howmanytimesiclick == 6){correcttt = 1; button7.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button7.style.backgroundColor="white";},1000);howmanytimesiclick++;};
            if(globalnumber6 != 7 && howmanytimesiclick == 6){correcttt = 0;button7.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button7.style.backgroundColor="white";},1000);howmanytimesiclick++;}; 
			};	
		button8.onclick = function() 
		    {
			if(globalnumber6 == 8 && howmanytimesiclick == 6){correcttt = 1; button8.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button8.style.backgroundColor="white";},1000);howmanytimesiclick++;};
            if(globalnumber6 != 8 && howmanytimesiclick == 6){correcttt = 0;button8.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button8.style.backgroundColor="white";},1000);howmanytimesiclick++;}; 
			};	
		button9.onclick = function() 
		    {
			if(globalnumber6 == 9 && howmanytimesiclick == 6){correcttt = 1; button9.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button9.style.backgroundColor="white";},1000);howmanytimesiclick++;};
            if(globalnumber6 != 9 && howmanytimesiclick == 6){correcttt = 0;button9.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button9.style.backgroundColor="white";},1000);howmanytimesiclick++;}; 
			};		
        button10.onclick = function() 
		    {
			if(globalnumber6 == 10 && howmanytimesiclick == 6){correcttt = 1; button10.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button10.style.backgroundColor="white";},1000);howmanytimesiclick++;};
            if(globalnumber6 != 10 && howmanytimesiclick == 6){correcttt = 0;button10.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button10.style.backgroundColor="white";},1000);howmanytimesiclick++;}; 
			};	
        button11.onclick = function() 
		    {
			if(globalnumber6 == 11 && howmanytimesiclick == 6){correcttt = 1; button11.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button11.style.backgroundColor="white";},1000);howmanytimesiclick++;};
            if(globalnumber6 != 11 && howmanytimesiclick == 6){correcttt = 0;button11.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button11.style.backgroundColor="white";},1000);howmanytimesiclick++;}; 
			};	
        button12.onclick = function() 
		    {
			if(globalnumber6 == 12 && howmanytimesiclick == 6){correcttt = 1; button12.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button12.style.backgroundColor="white";},1000);howmanytimesiclick++;};
            if(globalnumber6 != 12 && howmanytimesiclick == 6){correcttt = 0;button12.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button12.style.backgroundColor="white";},1000);howmanytimesiclick++;}; 
			};	
        button13.onclick = function() 
		    {
			if(globalnumber6 == 13 && howmanytimesiclick == 6){correcttt = 1; button13.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button13.style.backgroundColor="white";},1000);howmanytimesiclick++;};
            if(globalnumber6 != 13 && howmanytimesiclick == 6){correcttt = 0;button13.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button13.style.backgroundColor="white";},1000);howmanytimesiclick++;}; 
			};	
        button14.onclick = function() 
		    {
			if(globalnumber6 == 14 && howmanytimesiclick == 6){correcttt = 1; button14.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button14.style.backgroundColor="white";},1000);howmanytimesiclick++;};
            if(globalnumber6 != 14 && howmanytimesiclick == 6){correcttt = 0;button14.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button14.style.backgroundColor="white";},1000);howmanytimesiclick++;}; 
			};
        button15.onclick = function() 
		    {
			if(globalnumber6 == 15 && howmanytimesiclick == 6){correcttt = 1; button15.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button15.style.backgroundColor="white";},1000);howmanytimesiclick++;};
            if(globalnumber6 != 15 && howmanytimesiclick == 6){correcttt = 0;button15.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button15.style.backgroundColor="white";},1000);howmanytimesiclick++;}; 
			};
        button16.onclick = function() 
		    {
			if(globalnumber6 == 16 && howmanytimesiclick == 6){correcttt = 1; button16.style.backgroundColor="limegreen"; correct.play();counter = counter+1;counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter;  howmanyleft.innerHTML = counterhowmanyleft; setTimeout(function(){button16.style.backgroundColor="white";},1000); howmanytimesiclick++;};
            if(globalnumber6 != 16 && howmanytimesiclick == 6){correcttt = 0;button16.style.backgroundColor="red"; wrong.play();  counterhowmanyleft = counterhowmanyleft-1; currentscore.innerHTML = counter; howmanyleft.innerHTML = counterhowmanyleft;  setTimeout(function(){button16.style.backgroundColor="white";},1000);howmanytimesiclick++;}; 
			};	
		}

}//close freeze
if(levelnumber == 1) //send after finish level 1
{
	if(howmanytimesiclick == 4)
	{
	document.getElementById('Score').value = counter;
	setTimeout(function(){document.getElementById("form222").submit();},500);
    }
};
if(levelnumber == 2)
{
	if(howmanytimesiclick == 5)
	{
	document.getElementById('Score').value = counter;
	setTimeout(function(){document.getElementById("form222").submit();},500);
	}
};
if(levelnumber == 3)
{
	if(howmanytimesiclick == 6)
	{
	document.getElementById('Score').value = counter;
	setTimeout(function(){document.getElementById("form222").submit();},500); //send data 500ms after finish last click
	}
};
if(levelnumber == 4)
{
	if(howmanytimesiclick == 7)
	{
	document.getElementById('Score').value = counter;
	setTimeout(function(){document.getElementById("form222").submit();},500); //send data 500ms after finish last click
	}
};
}//closefunction





function upp() //default levelnumber is 1
{
	var l = document.getElementById("l");
	
	if(levelnumber >= 4)
	{}
    else 
	{
	levelscore.innerHTML = levelnumber+1;
	levelnumber = levelnumber+1;
	}
	if(levelnumber == 2)
	{
		var startin = document.getElementById("starting"); 
	    var restartin = document.getElementById("restarting"); 
		var startin1 = document.getElementById("starting1"); 
		var restartin1 = document.getElementById("restarting1"); 
		var startin3 = document.getElementById("starting3");
		var restartin3 = document.getElementById("restarting3");
		var startin4 = document.getElementById("starting4");
		var restartin4 = document.getElementById("restarting4");
		startin.style.display = "none";
		restartin.style.display = "none";
		startin1.style.display = "block"; //show level 2 start
		restartin1.style.display = "none";
		startin3.style.display = "none";
		restartin3.style.display = "none";
		startin4.style.display = "none";
		restartin4.style.display= "none";
		l.innerHTML = levelnumber;
	};
	if(levelnumber == 3)
	{
	    var startin = document.getElementById("starting"); 
	    var restartin = document.getElementById("restarting"); 
		var startin1 = document.getElementById("starting1"); 
		var restartin1 = document.getElementById("restarting1"); 
		var startin3 = document.getElementById("starting3");
		var restartin3 = document.getElementById("restarting3");
		var startin4 = document.getElementById("starting4");
		var restartin4 = document.getElementById("restarting4");
		startin1.style.display = "none"; //off 2
		restartin1.style.display = "none";
		restartin3.style.display = "none";
		startin3.style.display = "block"; //show level 3 start
		startin4.style.display = "none";
		restartin4.style.display= "none";
		startin.style.display = "none";
		restartin.style.display = "none";
		l.innerHTML = levelnumber;
	};
	if(levelnumber == 4)
	{
	    var startin = document.getElementById("starting"); 
	    var restartin = document.getElementById("restarting"); 
		var startin1 = document.getElementById("starting1"); 
		var restartin1 = document.getElementById("restarting1"); 
		var startin3 = document.getElementById("starting3");
		var restartin3 = document.getElementById("restarting3");
		var startin4 = document.getElementById("starting4");
		var restartin4 = document.getElementById("restarting4");
		startin1.style.display = "none"; //off 2
		restartin1.style.display = "none";
		restartin3.style.display = "none";
		startin3.style.display = "none"; //show level 3 start
		startin4.style.display = "block";
		restartin4.style.display = "none";
		startin.style.display = "none";
		restartin.style.display = "none";
		l.innerHTML = levelnumber;
	};
}
function downn()
{
	var l = document.getElementById("l");
	
	if(levelnumber <= 1) //1 min level
	{}
    else
	{
	levelscore.innerHTML = levelnumber-1;
	levelnumber = levelnumber-1;
	l.innerHTML = levelnumber;
	}
	if(levelnumber == 1)
	{
		var startin = document.getElementById("starting"); 
	    var restartin = document.getElementById("restarting"); 
		var startin1 = document.getElementById("starting1"); 
		var restartin1 = document.getElementById("restarting1"); 
		var startin3 = document.getElementById("starting3");
		var restartin3 = document.getElementById("restarting3");
		var startin4 = document.getElementById("starting4");
		var restartin4 = document.getElementById("restarting4");
		l.innerHTML = levelnumber;
		startin1.style.display = "none"; //hide lvl 2
		restartin1.style.display = "none"; //hide restart 2
		startin.style.display = "block"; //show lvl 1
		restartin.style.display = "none";
		startin3.style.display = "none";
		restartin3.style.display = "none";
		startin4.style.display = "none";
		restartin4.style.display= "none";

	};
	if(levelnumber == 2)
	{
	    var startin = document.getElementById("starting"); 
	    var restartin = document.getElementById("restarting"); 
		var startin1 = document.getElementById("starting1"); 
		var restartin1 = document.getElementById("restarting1"); 
		var startin3 = document.getElementById("starting3");
		var restartin3 = document.getElementById("restarting3");
		var startin4 = document.getElementById("starting4");
		var restartin4 = document.getElementById("restarting4");
		startin.style.display = "none";//off lvl 1 start button
		restartin.style.display = "none";
		startin1.style.display = "block"; //show 2
		startin3.style.display = "none";
		restartin1.style.display = "none";
		restartin3.style.display = "none";
		startin4.style.display = "none";
		restartin4.style.display= "none";
		l.innerHTML = levelnumber;
	};
	if(levelnumber == 3)
	{
	    var startin = document.getElementById("starting"); 
	    var restartin = document.getElementById("restarting"); 
		var startin1 = document.getElementById("starting1"); 
		var restartin1 = document.getElementById("restarting1"); 
		var startin3 = document.getElementById("starting3");
		var restartin3 = document.getElementById("restarting3");
        var startin4 = document.getElementById("starting4");
		var restartin4 = document.getElementById("restarting4");
		startin.style.display = "none";//off lvl 1 start button
		restartin.style.display = "none";
		startin1.style.display = "none"; //show 2
		startin3.style.display = "block";
		restartin1.style.display = "none";
		restartin3.style.display = "none";
		startin4.style.display = "none";
		restartin4.style.display= "none";
		l.innerHTML = levelnumber;
	};
}

function lightup1()
{
	var a = document.getElementById("a");
	var b = document.getElementById("b");
	var c = document.getElementById("c");
	var d = document.getElementById("d");
	var e = document.getElementById("e");
	var f = document.getElementById("f");
	var g = document.getElementById("g");
	var h = document.getElementById("h");
    var i = document.getElementById("i");
	var sound = document.getElementById("sound");

	var countdownbeforestart = 3;
	var button1 = document.getElementById("1"); //declare all the buttons
	var button2 = document.getElementById("2");
	var button3 = document.getElementById("3");
	var button4 = document.getElementById("4");
	var button5 = document.getElementById("5");
	var button6 = document.getElementById("6");
	var button7 = document.getElementById("7");
	var button8 = document.getElementById("8");
	var button9 = document.getElementById("9");
	var button10 = document.getElementById("10");
	var button11 = document.getElementById("11");
	var button12 = document.getElementById("12");
	var button13 = document.getElementById("13");
	var button14 = document.getElementById("14");
	var button15 = document.getElementById("15");
	var button16 = document.getElementById("16");
	var startin = document.getElementById("starting"); 
	var restartin = document.getElementById("restarting"); 
	var totalbuttons = 16; //total 16 mode but it rounds down
	var twochances = 2; //total 2 mode but it rounds down
	var fourchances = 4; //total 4 mode but it rounds down
	var threechances =3;
    freezescreen = 1;
	percent.innerHTML = 0;
    counter = 0;
	counterhowmanyleft=0;
	howmanytimesiclick = 1; //reset
    globalnumber1 =0;
    globalnumber2 =0;
    globalnumber3 =0;
    globalnumber4 =0;
	currentscore.innerHTML = 0;
	
	soundplay1 = Math.floor(Math.random() * twochances);
	soundplay2 = Math.floor(Math.random() * twochances);  
	soundplay3 = Math.floor(Math.random() * twochances);
    //soundplay4 = Math.floor(Math.random() * twochances);  	
	
	//soundplay1 = 1;  //force test
    //soundplay2 = 0;
	//soundplay3 = 1;
    //soundplay4 = 0; 
  	
	if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 0) //this is to prevent all no beep sounds so force 1 to beep
	{
		var forcebeep = Math.floor(Math.random() * threechances) +1;
		if(forcebeep == 1){soundplay1 = 1};
		if(forcebeep == 2){soundplay2 = 1};
		if(forcebeep == 3){soundplay3 = 1};
		//if(forcebeep == 4){soundplay4 = 1};
	};
	
	a.innerHTML = soundplay1;
	b.innerHTML = soundplay2;
	c.innerHTML = soundplay3;
	//d.innerHTML = soundplay4;
	
	
	//if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 1){howmanyleft.innerHTML = 1; counterhowmanyleft = 1; counterhowmanyleftcalc = 1; howmanytimesiclick = 4;};
	if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 1){howmanyleft.innerHTML = 1; counterhowmanyleft = 1; counterhowmanyleftcalc = 1; howmanytimesiclick = 3;};
	//if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 1){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 3;};
	if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 0){howmanyleft.innerHTML = 1; counterhowmanyleft = 1; counterhowmanyleftcalc = 1; howmanytimesiclick = 2;};
	//if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 1){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 2;}; //unique
	if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 1){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 2;};
	//if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 1){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 2;};
	if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 0){howmanyleft.innerHTML = 1; counterhowmanyleft = 1; counterhowmanyleftcalc = 1; howmanytimesiclick = 1;};
	//if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 1){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 1;}; //unique
	if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 1){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 1;}; //unique
	//if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 1){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 1;}; //unique
	if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 0){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 1;};
	//if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 1){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 1;}; //unique
	if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 1){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 1;};
	//if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 1){howmanyleft.innerHTML = 4; counterhowmanyleft = 4; counterhowmanyleftcalc = 4; howmanytimesiclick = 1;};
	

	
    var randomnumber1 = Math.floor(Math.random() * totalbuttons) +1;  //+1 so i will never get 0
    var answer1 = randomnumber1;
	var randomnumber2 = Math.floor(Math.random() * totalbuttons) +1;
    var answer2 = randomnumber2;
	var randomnumber3 = Math.floor(Math.random() * totalbuttons) +1; 
    var answer3 = randomnumber3; 
	//var randomnumber4 = Math.floor(Math.random() * totalbuttons) +1; 
    //var answer4 = randomnumber4; //this is for the future to check the answer

	e.innerHTML = randomnumber1;
	f.innerHTML = randomnumber2;
	g.innerHTML = randomnumber3;
	//h.innerHTML = randomnumber4;
	
	
	
	//startin.value = countdownbeforestart; //countdown
	//startin.onclick = ''; //stop them from pressing the 3 2 1 countdown to restart and screw up everything
	//var clearme1 = setInterval(function (){countdownbeforestart--; startin.value = countdownbeforestart;},1000);//timer 
    //setTimeout(function(){clearInterval(clearme1); startin.style.display="none"; startin.value = 'START';},3000); //hide the button
    startin.style.display="none";

	/*setTimeout(function()
	{
		button1.onclick ='';
		button2.onclick ='';
		button3.onclick ='';
		button4.onclick ='';
		button5.onclick ='';
		button6.onclick ='';
		button7.onclick ='';
		button8.onclick ='';
		button9.onclick ='';
		button10.onclick ='';
		button11.onclick ='';
		button12.onclick ='';
		button13.onclick ='';
		button14.onclick ='';
		button15.onclick ='';
		button16.onclick ='';
	},0000);*/
	//setTimeout(function(){freezescreen = 2;},6600);
	
	

		
	if(randomnumber1 == 1)
	{button1.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=1;}; setTimeout(function(){button1.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 2)
	{button2.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=2;}; setTimeout(function(){button2.style.backgroundColor="white";},1000);};

	if(randomnumber1 == 3)
	{button3.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=3;}; setTimeout(function(){button3.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 4)
	{button4.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=4;}; setTimeout(function(){button4.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 5)
	{button5.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=5;}; setTimeout(function(){button5.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 6)
	{button6.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=6;}; setTimeout(function(){button6.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 7)
	{button7.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=7;}; setTimeout(function(){button7.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 8)
	{button8.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=8;}; setTimeout(function(){button8.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 9)
	{button9.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=9;}; setTimeout(function(){button9.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 10)
	{button10.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=10;}; setTimeout(function(){button10.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 11)
	{button11.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=11;}; setTimeout(function(){button11.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 12)
	{button12.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=12;}; setTimeout(function(){button12.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 13)
	{button13.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=13;}; setTimeout(function(){button13.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 14)
	{button14.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=14;}; setTimeout(function(){button14.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 15)
	{button15.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=15;}; setTimeout(function(){button15.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 16)
	{button16.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=16;}; setTimeout(function(){button16.style.backgroundColor="white";},1000);};


i.innerHTML = globalnumber1;



	
	
	
//////////////////////////////////////////////////////////////////////





	setTimeout(function(){	
	
	if(randomnumber2 == 1)
	{button1.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=1;}; setTimeout(function(){button1.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 2)
	{button2.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=2;}; setTimeout(function(){button2.style.backgroundColor="white";},1000);};

	if(randomnumber2 == 3)
	{button3.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=3;}; setTimeout(function(){button3.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 4)
	{button4.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=4;}; setTimeout(function(){button4.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 5)
	{button5.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=5;}; setTimeout(function(){button5.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 6)
	{button6.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=6;}; setTimeout(function(){button6.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 7)
	{button7.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=7;}; setTimeout(function(){button7.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 8)
	{button8.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=8;}; setTimeout(function(){button8.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 9)
	{button9.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=9;}; setTimeout(function(){button9.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 10)
	{button10.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=10;}; setTimeout(function(){button10.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 11)
	{button11.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=11;}; setTimeout(function(){button11.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 12)
	{button12.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=12;}; setTimeout(function(){button12.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 13)
	{button13.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=13;}; setTimeout(function(){button13.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 14)
	{button14.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=14;}; setTimeout(function(){button14.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 15)
	{button15.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=15;}; setTimeout(function(){button15.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 16)
	{button16.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=16;}; setTimeout(function(){button16.style.backgroundColor="white";},1000);};
	

	
	},1200);




//////////////////////////////////////////////////////////////////////




	setTimeout(function(){	
	
	if(randomnumber3 == 1)
	{button1.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=1;}; setTimeout(function(){button1.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 2)
	{button2.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=2;}; setTimeout(function(){button2.style.backgroundColor="white";},1000);};

	if(randomnumber3 == 3)
	{button3.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=3;}; setTimeout(function(){button3.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 4)
	{button4.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=4;}; setTimeout(function(){button4.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 5)
	{button5.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=5;}; setTimeout(function(){button5.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 6)
	{button6.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=6;}; setTimeout(function(){button6.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 7)
	{button7.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=7;}; setTimeout(function(){button7.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 8)
	{button8.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=8;}; setTimeout(function(){button8.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 9)
	{button9.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=9;}; setTimeout(function(){button9.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 10)
	{button10.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=10;}; setTimeout(function(){button10.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 11)
	{button11.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=11;}; setTimeout(function(){button11.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 12)
	{button12.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=12;}; setTimeout(function(){button12.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 13)
	{button13.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=13;}; setTimeout(function(){button13.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 14)
	{button14.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=14;}; setTimeout(function(){button14.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 15)
	{button15.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=15;}; setTimeout(function(){button15.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 16)
	{button16.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=16;}; setTimeout(function(){button16.style.backgroundColor="white";},1000);};
	
//freezescreen = 2;
//clicknumberoftimes();
	
	},2400);
setTimeout(function(){restartin.style.display="block"; freezescreen = 2;
clicknumberoftimes();},3400);
}
//////////////////////////////////////////////////////////////////////


function lightupnowait1()
{
	counter =0;
	counterhowmanyleft=0;
	howmanytimesiclick = 1; //reset
    globalnumber1 =0;
    globalnumber2 =0;
    globalnumber3 =0;
    globalnumber4 =0;
	var a = document.getElementById("a");
	var b = document.getElementById("b");
	var c = document.getElementById("c");
	var d = document.getElementById("d");
	var e = document.getElementById("e");
	var f = document.getElementById("f");
	var g = document.getElementById("g");
	var h = document.getElementById("h");
    var i = document.getElementById("i");
	var sound = document.getElementById("sound");

	//var countdownbeforestart = 3;
	var button1 = document.getElementById("1"); //declare all the buttons
	var button2 = document.getElementById("2");
	var button3 = document.getElementById("3");
	var button4 = document.getElementById("4");
	var button5 = document.getElementById("5");
	var button6 = document.getElementById("6");
	var button7 = document.getElementById("7");
	var button8 = document.getElementById("8");
	var button9 = document.getElementById("9");
	var button10 = document.getElementById("10");
	var button11 = document.getElementById("11");
	var button12 = document.getElementById("12");
	var button13 = document.getElementById("13");
	var button14 = document.getElementById("14");
	var button15 = document.getElementById("15");
	var button16 = document.getElementById("16");
	var startin = document.getElementById("starting"); 
	var restartin = document.getElementById("restarting"); 
	var totalbuttons = 16; //total 16 mode but it rounds down
	var twochances = 2; //total 2 mode but it rounds down
	var fourchances = 4; //total 4 mode but it rounds down
	var threechances = 3;
	freezescreen = 1;
	percent.innerHTML = 0;
	soundplay1 = Math.floor(Math.random() * twochances);
	soundplay2 = Math.floor(Math.random() * twochances);  
	soundplay3 = Math.floor(Math.random() * twochances);
    //soundplay4 = Math.floor(Math.random() * twochances);  	

	
	 

  	
	if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 0) //this is to prevent all no beep sounds so force 1 to beep
	{
		var forcebeep = Math.floor(Math.random() * threechances) +1;
		if(forcebeep == 1){soundplay1 = 1};
		if(forcebeep == 2){soundplay2 = 1};
		if(forcebeep == 3){soundplay3 = 1};
		//if(forcebeep == 4){soundplay4 = 1};
	};
	
	a.innerHTML = soundplay1;
	b.innerHTML = soundplay2;
	c.innerHTML = soundplay3;
	//d.innerHTML = soundplay4;
	currentscore.innerHTML = 0;
	
	
	
	
	//if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 1){howmanyleft.innerHTML = 1; counterhowmanyleft = 1; counterhowmanyleftcalc = 1; howmanytimesiclick = 4;};
	if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 1){howmanyleft.innerHTML = 1; counterhowmanyleft = 1; counterhowmanyleftcalc = 1; howmanytimesiclick = 3;};
	//if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 1){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 3;};
	if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 0){howmanyleft.innerHTML = 1; counterhowmanyleft = 1; counterhowmanyleftcalc = 1; howmanytimesiclick = 2;};
	//if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 1){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 2;}; //unique
	if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 1){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 2;};
	//if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 1){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 2;};
	if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 0){howmanyleft.innerHTML = 1; counterhowmanyleft = 1; counterhowmanyleftcalc = 1; howmanytimesiclick = 1;};
	//if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 1){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 1;}; //unique
	if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 1){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 1;}; //unique
	//if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 1){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 1;}; //unique
	if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 0){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 1;};
	//if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 1){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 1;}; //unique
	if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 1){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 1;};
	//if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 1){howmanyleft.innerHTML = 4; counterhowmanyleft = 4; counterhowmanyleftcalc = 4; howmanytimesiclick = 1;};

	
    var randomnumber1 = Math.floor(Math.random() * totalbuttons) +1;  //+1 so i will never get 0
    var answer1 = randomnumber1;
	var randomnumber2 = Math.floor(Math.random() * totalbuttons) +1;
    var answer2 = randomnumber2;
	var randomnumber3 = Math.floor(Math.random() * totalbuttons) +1; 
    var answer3 = randomnumber3; //this is for the future to check the answer
	//var randomnumber4 = Math.floor(Math.random() * totalbuttons) +1; 
    //var answer4 = randomnumber4; //this is for the future to check the answer

	e.innerHTML = randomnumber1;
	f.innerHTML = randomnumber2;
	g.innerHTML = randomnumber3;
	//h.innerHTML = randomnumber4;
	
	
	
	//startin.value = countdownbeforestart; //countdown
	//var clearme1 = setInterval(function (){countdownbeforestart--; startin.value = countdownbeforestart;},1000);//timer
    //setTimeout(function(){clearInterval(clearme1); startin.style.display="none";},3000); //hide the button
	
	restartin.style.display="none";
	
		
	if(randomnumber1 == 1)
	{button1.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=1;}; setTimeout(function(){button1.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 2)
	{button2.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=2;}; setTimeout(function(){button2.style.backgroundColor="white";},1000);};

	if(randomnumber1 == 3)
	{button3.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=3;}; setTimeout(function(){button3.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 4)
	{button4.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=4;}; setTimeout(function(){button4.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 5)
	{button5.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=5;}; setTimeout(function(){button5.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 6)
	{button6.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=6;}; setTimeout(function(){button6.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 7)
	{button7.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=7;}; setTimeout(function(){button7.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 8)
	{button8.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=8;}; setTimeout(function(){button8.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 9)
	{button9.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=9;}; setTimeout(function(){button9.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 10)
	{button10.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=10;}; setTimeout(function(){button10.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 11)
	{button11.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=11;}; setTimeout(function(){button11.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 12)
	{button12.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=12;}; setTimeout(function(){button12.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 13)
	{button13.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=13;}; setTimeout(function(){button13.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 14)
	{button14.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=14;}; setTimeout(function(){button14.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 15)
	{button15.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=15;}; setTimeout(function(){button15.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 16)
	{button16.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=16;}; setTimeout(function(){button16.style.backgroundColor="white";},1000);};


i.innerHTML = globalnumber1;

	
//////////////////////////////////////////////////////////////////////





	setTimeout(function(){	
	
	if(randomnumber2 == 1)
	{button1.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=1;}; setTimeout(function(){button1.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 2)
	{button2.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=2;}; setTimeout(function(){button2.style.backgroundColor="white";},1000);};

	if(randomnumber2 == 3)
	{button3.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=3;}; setTimeout(function(){button3.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 4)
	{button4.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=4;}; setTimeout(function(){button4.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 5)
	{button5.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=5;}; setTimeout(function(){button5.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 6)
	{button6.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=6;}; setTimeout(function(){button6.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 7)
	{button7.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=7;}; setTimeout(function(){button7.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 8)
	{button8.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=8;}; setTimeout(function(){button8.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 9)
	{button9.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=9;}; setTimeout(function(){button9.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 10)
	{button10.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=10;}; setTimeout(function(){button10.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 11)
	{button11.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=11;}; setTimeout(function(){button11.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 12)
	{button12.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=12;}; setTimeout(function(){button12.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 13)
	{button13.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=13;}; setTimeout(function(){button13.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 14)
	{button14.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=14;}; setTimeout(function(){button14.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 15)
	{button15.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=15;}; setTimeout(function(){button15.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 16)
	{button16.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=16;}; setTimeout(function(){button16.style.backgroundColor="white";},1000);};
	

	
	},1200);




//////////////////////////////////////////////////////////////////////




	setTimeout(function(){	
	
	if(randomnumber3 == 1)
	{button1.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=1;}; setTimeout(function(){button1.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 2)
	{button2.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=2;}; setTimeout(function(){button2.style.backgroundColor="white";},1000);};

	if(randomnumber3 == 3)
	{button3.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=3;}; setTimeout(function(){button3.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 4)
	{button4.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=4;}; setTimeout(function(){button4.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 5)
	{button5.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=5;}; setTimeout(function(){button5.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 6)
	{button6.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=6;}; setTimeout(function(){button6.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 7)
	{button7.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=7;}; setTimeout(function(){button7.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 8)
	{button8.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=8;}; setTimeout(function(){button8.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 9)
	{button9.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=9;}; setTimeout(function(){button9.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 10)
	{button10.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=10;}; setTimeout(function(){button10.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 11)
	{button11.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=11;}; setTimeout(function(){button11.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 12)
	{button12.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=12;}; setTimeout(function(){button12.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 13)
	{button13.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=13;}; setTimeout(function(){button13.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 14)
	{button14.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=14;}; setTimeout(function(){button14.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 15)
	{button15.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=15;}; setTimeout(function(){button15.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 16)
	{button16.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=16;}; setTimeout(function(){button16.style.backgroundColor="white";},1000);};
	
//freezescreen = 2;
	//clicknumberoftimes();
	
	},2400);
setTimeout(function(){restartin.style.display="block"; freezescreen = 2;
	clicknumberoftimes();},3400);
}
//////////////////////////////////////////////////////////////////////


function lightup2()
{
	var a = document.getElementById("a");
	var b = document.getElementById("b");
	var c = document.getElementById("c");
	var d = document.getElementById("d");
	var e = document.getElementById("e");
	var f = document.getElementById("f");
	var g = document.getElementById("g");
	var h = document.getElementById("h");
    var i = document.getElementById("i");
	var sound = document.getElementById("sound");

	var countdownbeforestart = 3;
	var button1 = document.getElementById("1"); //declare all the buttons
	var button2 = document.getElementById("2");
	var button3 = document.getElementById("3");
	var button4 = document.getElementById("4");
	var button5 = document.getElementById("5");
	var button6 = document.getElementById("6");
	var button7 = document.getElementById("7");
	var button8 = document.getElementById("8");
	var button9 = document.getElementById("9");
	var button10 = document.getElementById("10");
	var button11 = document.getElementById("11");
	var button12 = document.getElementById("12");
	var button13 = document.getElementById("13");
	var button14 = document.getElementById("14");
	var button15 = document.getElementById("15");
	var button16 = document.getElementById("16");
	var startin = document.getElementById("starting3"); 
	var restartin = document.getElementById("restarting3"); 
	var totalbuttons = 16; //total 16 mode but it rounds down
	var twochances = 2; //total 2 mode but it rounds down
	var fourchances = 4; //total 4 mode but it rounds down
	var fivechances = 5;
	freezescreen = 1;
	percent.innerHTML = 0;
    counter =0;
	counterhowmanyleft=0;
	howmanytimesiclick = 1; //reset everything
    globalnumber1 =0;
    globalnumber2 =0;
    globalnumber3 =0;
    globalnumber4 =0;
	globalnumber5 =0;
    currentscore.innerHTML = 0;
	
	soundplay1 = Math.floor(Math.random() * twochances);
	soundplay2 = Math.floor(Math.random() * twochances);  
	soundplay3 = Math.floor(Math.random() * twochances);
    soundplay4 = Math.floor(Math.random() * twochances);  	
	soundplay5 = Math.floor(Math.random() * twochances);  	
	
	//soundplay1 = 0;  //force test
	//soundplay2 = 0;
	//soundplay3 = 1;
    //soundplay4 = 0; 
	//soundplay5 = 0; 
  	
	if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0) //this is to prevent all no beep sounds so force 1 to beep
	{
		var forcebeep = Math.floor(Math.random() * fivechances) +1;
		if(forcebeep == 1){soundplay1 = 1};
		if(forcebeep == 2){soundplay2 = 1};
		if(forcebeep == 3){soundplay3 = 1};
		if(forcebeep == 4){soundplay4 = 1};
		if(forcebeep == 5){soundplay5 = 1};
	};
	
	a.innerHTML = soundplay1;
	b.innerHTML = soundplay2;
	c.innerHTML = soundplay3;
	d.innerHTML = soundplay4;
	
	
	if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 1){howmanyleft.innerHTML = 1; counterhowmanyleft = 1; counterhowmanyleftcalc = 1; howmanytimesiclick = 5;};
	if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 0){howmanyleft.innerHTML = 1; counterhowmanyleft = 1; counterhowmanyleftcalc = 1; howmanytimesiclick = 4;};
	if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 1){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 4;};
	if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 0){howmanyleft.innerHTML = 1; counterhowmanyleft = 1; counterhowmanyleftcalc = 1; howmanytimesiclick = 3;};
	if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 1){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 3;}; //unique
	if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 0){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 3;};
	if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 1){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 3;};
	if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanyleft.innerHTML = 1; counterhowmanyleft = 1; counterhowmanyleftcalc = 1; howmanytimesiclick = 2;};
	if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 1){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 2;}; //unique
	if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 0){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 2;}; //unique
	if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 1){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 2;}; //unique
	if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 0){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 2;};
	if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 1){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 2;}; //unique
	if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 0){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 2;};
	if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 1){howmanyleft.innerHTML = 4; counterhowmanyleft = 4; counterhowmanyleftcalc = 4; howmanytimesiclick = 2;};
	if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanyleft.innerHTML = 1; counterhowmanyleft = 1; counterhowmanyleftcalc = 1; howmanytimesiclick = 1;};
	if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 1){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 1;};
	if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 0){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 1;};
	if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 1){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 1;};
	if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 0){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 1;}; //unique
	if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 1){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 1;};
	if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 0){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 1;};
	if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 1){howmanyleft.innerHTML = 4; counterhowmanyleft = 4; counterhowmanyleftcalc = 4; howmanytimesiclick = 1;};
	if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 1;}; //unique
	if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 1){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 1;}; //unique
	if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 0){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 1;}; //unique
	if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 1){howmanyleft.innerHTML = 4; counterhowmanyleft = 4; counterhowmanyleftcalc = 4; howmanytimesiclick = 1;};
	if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 0){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 1;}; //unique
	if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 1){howmanyleft.innerHTML = 4; counterhowmanyleft = 4; counterhowmanyleftcalc = 4; howmanytimesiclick = 1;};
	if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 0){howmanyleft.innerHTML = 4; counterhowmanyleft = 4; counterhowmanyleftcalc = 4; howmanytimesiclick = 1;};
	if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 1){howmanyleft.innerHTML = 5; counterhowmanyleft = 5; counterhowmanyleftcalc = 5; howmanytimesiclick = 1;};

	
    var randomnumber1 = Math.floor(Math.random() * totalbuttons) +1;  //+1 so i will never get 0
    var answer1 = randomnumber1;
	var randomnumber2 = Math.floor(Math.random() * totalbuttons) +1;
    var answer2 = randomnumber2;
	var randomnumber3 = Math.floor(Math.random() * totalbuttons) +1; 
    var answer3 = randomnumber3; 
	var randomnumber4 = Math.floor(Math.random() * totalbuttons) +1; 
    var answer4 = randomnumber4; //this is for the future to check the answer
	var randomnumber5 = Math.floor(Math.random() * totalbuttons) +1; 
    var answer5 = randomnumber5; //this is for the future to check the answer

	e.innerHTML = randomnumber1;
	f.innerHTML = randomnumber2;
	g.innerHTML = randomnumber3;
	h.innerHTML = randomnumber4;
	
	
	
	//startin.value = countdownbeforestart; //countdown
	//startin.onclick = ''; //stop them from pressing the 3 2 1 countdown to restart and screw up everything
	//var clearme1 = setInterval(function (){countdownbeforestart--; startin.value = countdownbeforestart;},1000);//timer 
    //setTimeout(function(){clearInterval(clearme1); startin.style.display="none"; startin.value = 'START';},3000); //hide the button make starting value = start again
	startin.style.display="none"; //hide button immediately
	

		
	if(randomnumber1 == 1)
	{button1.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=1;}; setTimeout(function(){button1.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 2)
	{button2.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=2;}; setTimeout(function(){button2.style.backgroundColor="white";},1000);};

	if(randomnumber1 == 3)
	{button3.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=3;}; setTimeout(function(){button3.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 4)
	{button4.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=4;}; setTimeout(function(){button4.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 5)
	{button5.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=5;}; setTimeout(function(){button5.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 6)
	{button6.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=6;}; setTimeout(function(){button6.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 7)
	{button7.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=7;}; setTimeout(function(){button7.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 8)
	{button8.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=8;}; setTimeout(function(){button8.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 9)
	{button9.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=9;}; setTimeout(function(){button9.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 10)
	{button10.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=10;}; setTimeout(function(){button10.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 11)
	{button11.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=11;}; setTimeout(function(){button11.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 12)
	{button12.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=12;}; setTimeout(function(){button12.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 13)
	{button13.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=13;}; setTimeout(function(){button13.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 14)
	{button14.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=14;}; setTimeout(function(){button14.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 15)
	{button15.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=15;}; setTimeout(function(){button15.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 16)
	{button16.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=16;}; setTimeout(function(){button16.style.backgroundColor="white";},1000);};


i.innerHTML = globalnumber1;



 //start it after 3 seconds which is after count down is over
	
	
	
//////////////////////////////////////////////////////////////////////





	setTimeout(function(){	
	
	if(randomnumber2 == 1)
	{button1.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=1;}; setTimeout(function(){button1.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 2)
	{button2.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=2;}; setTimeout(function(){button2.style.backgroundColor="white";},1000);};

	if(randomnumber2 == 3)
	{button3.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=3;}; setTimeout(function(){button3.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 4)
	{button4.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=4;}; setTimeout(function(){button4.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 5)
	{button5.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=5;}; setTimeout(function(){button5.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 6)
	{button6.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=6;}; setTimeout(function(){button6.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 7)
	{button7.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=7;}; setTimeout(function(){button7.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 8)
	{button8.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=8;}; setTimeout(function(){button8.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 9)
	{button9.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=9;}; setTimeout(function(){button9.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 10)
	{button10.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=10;}; setTimeout(function(){button10.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 11)
	{button11.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=11;}; setTimeout(function(){button11.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 12)
	{button12.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=12;}; setTimeout(function(){button12.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 13)
	{button13.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=13;}; setTimeout(function(){button13.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 14)
	{button14.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=14;}; setTimeout(function(){button14.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 15)
	{button15.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=15;}; setTimeout(function(){button15.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 16)
	{button16.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=16;}; setTimeout(function(){button16.style.backgroundColor="white";},1000);};
	

	
	},1200);




//////////////////////////////////////////////////////////////////////




	setTimeout(function(){	
	
	if(randomnumber3 == 1)
	{button1.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=1;}; setTimeout(function(){button1.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 2)
	{button2.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=2;}; setTimeout(function(){button2.style.backgroundColor="white";},1000);};

	if(randomnumber3 == 3)
	{button3.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=3;}; setTimeout(function(){button3.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 4)
	{button4.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=4;}; setTimeout(function(){button4.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 5)
	{button5.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=5;}; setTimeout(function(){button5.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 6)
	{button6.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=6;}; setTimeout(function(){button6.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 7)
	{button7.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=7;}; setTimeout(function(){button7.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 8)
	{button8.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=8;}; setTimeout(function(){button8.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 9)
	{button9.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=9;}; setTimeout(function(){button9.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 10)
	{button10.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=10;}; setTimeout(function(){button10.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 11)
	{button11.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=11;}; setTimeout(function(){button11.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 12)
	{button12.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=12;}; setTimeout(function(){button12.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 13)
	{button13.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=13;}; setTimeout(function(){button13.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 14)
	{button14.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=14;}; setTimeout(function(){button14.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 15)
	{button15.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=15;}; setTimeout(function(){button15.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 16)
	{button16.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=16;}; setTimeout(function(){button16.style.backgroundColor="white";},1000);};
	

	
	},2400);


//////////////////////////////////////////////////////////////////////




	setTimeout(function(){	
	
	if(randomnumber4 == 1)
	{button1.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=1;}; setTimeout(function(){button1.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 2)
	{button2.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=2;}; setTimeout(function(){button2.style.backgroundColor="white";},1000);};

	if(randomnumber4 == 3)
	{button3.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=3;}; setTimeout(function(){button3.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 4)
	{button4.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=4;}; setTimeout(function(){button4.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 5)
	{button5.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=5;}; setTimeout(function(){button5.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 6)
	{button6.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=6;}; setTimeout(function(){button6.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 7)
	{button7.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=7;}; setTimeout(function(){button7.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 8)
	{button8.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=8;}; setTimeout(function(){button8.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 9)
	{button9.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=9;}; setTimeout(function(){button9.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 10)
	{button10.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=10;}; setTimeout(function(){button10.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 11)
	{button11.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=11;}; setTimeout(function(){button11.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 12)
	{button12.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=12;}; setTimeout(function(){button12.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 13)
	{button13.style.backgroundColor="red"; ; if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=13}; setTimeout(function(){button13.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 14)
	{button14.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=14;}; setTimeout(function(){button14.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 15)
	{button15.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=15;}; setTimeout(function(){button15.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 16)
	{button16.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=16;}; setTimeout(function(){button16.style.backgroundColor="white";},1000);};
	
	},3600);
	
	
	setTimeout(function(){	
	
	if(randomnumber5 == 1)
	{button1.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=1;}; setTimeout(function(){button1.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 2)
	{button2.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=2;}; setTimeout(function(){button2.style.backgroundColor="white";},1000);};

	if(randomnumber5 == 3)
	{button3.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=3;}; setTimeout(function(){button3.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 4)
	{button4.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=4;}; setTimeout(function(){button4.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 5)
	{button5.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=5;}; setTimeout(function(){button5.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 6)
	{button6.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=6;}; setTimeout(function(){button6.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 7)
	{button7.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=7;}; setTimeout(function(){button7.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 8)
	{button8.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=8;}; setTimeout(function(){button8.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 9)
	{button9.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=9;}; setTimeout(function(){button9.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 10)
	{button10.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=10;}; setTimeout(function(){button10.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 11)
	{button11.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=11;}; setTimeout(function(){button11.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 12)
	{button12.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=12;}; setTimeout(function(){button12.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 13)
	{button13.style.backgroundColor="red"; ; if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=13}; setTimeout(function(){button13.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 14)
	{button14.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=14;}; setTimeout(function(){button14.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 15)
	{button15.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=15;}; setTimeout(function(){button15.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 16)
	{button16.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=16;}; setTimeout(function(){button16.style.backgroundColor="white";},1000);};
	
	//freezescreen = 2;
	//clicknumberoftimes();
	},4800);

	
	setTimeout(function(){restartin.style.display="block";	freezescreen = 2;
	clicknumberoftimes();},4800);
	
	
}//end of function

function lightupnowait2()
{
	counter =0;
	counterhowmanyleft=0;
	howmanytimesiclick = 1; //reset
    globalnumber1 =0;
    globalnumber2 =0;
    globalnumber3 =0;
    globalnumber4 =0;
	var a = document.getElementById("a");
	var b = document.getElementById("b");
	var c = document.getElementById("c");
	var d = document.getElementById("d");
	var e = document.getElementById("e");
	var f = document.getElementById("f");
	var g = document.getElementById("g");
	var h = document.getElementById("h");
    var i = document.getElementById("i");
	var sound = document.getElementById("sound");

	//var countdownbeforestart = 3;
	var button1 = document.getElementById("1"); //declare all the buttons
	var button2 = document.getElementById("2");
	var button3 = document.getElementById("3");
	var button4 = document.getElementById("4");
	var button5 = document.getElementById("5");
	var button6 = document.getElementById("6");
	var button7 = document.getElementById("7");
	var button8 = document.getElementById("8");
	var button9 = document.getElementById("9");
	var button10 = document.getElementById("10");
	var button11 = document.getElementById("11");
	var button12 = document.getElementById("12");
	var button13 = document.getElementById("13");
	var button14 = document.getElementById("14");
	var button15 = document.getElementById("15");
	var button16 = document.getElementById("16");
	var startin = document.getElementById("starting3"); 
	var restartin = document.getElementById("restarting3"); 
	var totalbuttons = 16; //total 16 mode but it rounds down
	var twochances = 2; //total 2 mode but it rounds down
	var fourchances = 4; //total 4 mode but it rounds down
	var fivechances = 5;
	freezescreen = 1;
	percent.innerHTML = 0;
	
	soundplay1 = Math.floor(Math.random() * twochances);
	soundplay2 = Math.floor(Math.random() * twochances);  
	soundplay3 = Math.floor(Math.random() * twochances);
    soundplay4 = Math.floor(Math.random() * twochances);  	
    soundplay5 = Math.floor(Math.random() * twochances);  	
	
	 

  	
	if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0) //this is to prevent all no beep sounds so force 1 to beep
	{
		var forcebeep = Math.floor(Math.random() * fivechances) +1;
		if(forcebeep == 1){soundplay1 = 1};
		if(forcebeep == 2){soundplay2 = 1};
		if(forcebeep == 3){soundplay3 = 1};
		if(forcebeep == 4){soundplay4 = 1};
		if(forcebeep == 5){soundplay5 = 1};
	};
	
	a.innerHTML = soundplay1;
	b.innerHTML = soundplay2;
	c.innerHTML = soundplay3;
	d.innerHTML = soundplay4;
	currentscore.innerHTML = 0;
	
	
	
	
	if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 1){howmanyleft.innerHTML = 1; counterhowmanyleft = 1; counterhowmanyleftcalc = 1; howmanytimesiclick = 5;};
	if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 0){howmanyleft.innerHTML = 1; counterhowmanyleft = 1; counterhowmanyleftcalc = 1; howmanytimesiclick = 4;};
	if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 1){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 4;};
	if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 0){howmanyleft.innerHTML = 1; counterhowmanyleft = 1; counterhowmanyleftcalc = 1; howmanytimesiclick = 3;};
	if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 1){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 3;}; //unique
	if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 0){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 3;};
	if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 1){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 3;};
	if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanyleft.innerHTML = 1; counterhowmanyleft = 1; counterhowmanyleftcalc = 1; howmanytimesiclick = 2;};
	if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 1){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 2;}; //unique
	if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 0){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 2;}; //unique
	if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 1){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 2;}; //unique
	if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 0){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 2;};
	if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 1){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 2;}; //unique
	if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 0){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 2;};
	if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 1){howmanyleft.innerHTML = 4; counterhowmanyleft = 4; counterhowmanyleftcalc = 4; howmanytimesiclick = 2;};
	if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanyleft.innerHTML = 1; counterhowmanyleft = 1; counterhowmanyleftcalc = 1; howmanytimesiclick = 1;};
	if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 1){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 1;};
	if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 0){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 1;};
	if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 1){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 1;};
	if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 0){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 1;}; //unique
	if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 1){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 1;};
	if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 0){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 1;};
	if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 1){howmanyleft.innerHTML = 4; counterhowmanyleft = 4; counterhowmanyleftcalc = 4; howmanytimesiclick = 1;};
	if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 1;}; //unique
	if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 1){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 1;}; //unique
	if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 0){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 1;}; //unique
	if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 1){howmanyleft.innerHTML = 4; counterhowmanyleft = 4; counterhowmanyleftcalc = 4; howmanytimesiclick = 1;};
	if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 0){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 1;}; //unique
	if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 1){howmanyleft.innerHTML = 4; counterhowmanyleft = 4; counterhowmanyleftcalc = 4; howmanytimesiclick = 1;};
	if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 0){howmanyleft.innerHTML = 4; counterhowmanyleft = 4; counterhowmanyleftcalc = 4; howmanytimesiclick = 1;};
	if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 1){howmanyleft.innerHTML = 5; counterhowmanyleft = 5; counterhowmanyleftcalc = 5; howmanytimesiclick = 1;};

	
    var randomnumber1 = Math.floor(Math.random() * totalbuttons) +1;  //+1 so i will never get 0
    var answer1 = randomnumber1;
	var randomnumber2 = Math.floor(Math.random() * totalbuttons) +1;
    var answer2 = randomnumber2;
	var randomnumber3 = Math.floor(Math.random() * totalbuttons) +1; 
    var answer3 = randomnumber3; //this is for the future to check the answer
	var randomnumber4 = Math.floor(Math.random() * totalbuttons) +1; 
    var answer4 = randomnumber4; //this is for the future to check the answer
    var randomnumber5 = Math.floor(Math.random() * totalbuttons) +1; 
    var answer5 = randomnumber5; //this is for the future to check the answer
	
	
	e.innerHTML = randomnumber1;
	f.innerHTML = randomnumber2;
	g.innerHTML = randomnumber3;
	h.innerHTML = randomnumber4;
	
	
	
	//startin.value = countdownbeforestart; //countdown
	//var clearme1 = setInterval(function (){countdownbeforestart--; startin.value = countdownbeforestart;},1000);//timer
    //setTimeout(function(){clearInterval(clearme1); startin.style.display="none";},3000); //hide the button
	
	restartin.style.display="none";
	//setTimeout(function(){freezescreen = 2;},3600);
		
	if(randomnumber1 == 1)
	{button1.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=1;}; setTimeout(function(){button1.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 2)
	{button2.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=2;}; setTimeout(function(){button2.style.backgroundColor="white";},1000);};

	if(randomnumber1 == 3)
	{button3.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=3;}; setTimeout(function(){button3.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 4)
	{button4.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=4;}; setTimeout(function(){button4.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 5)
	{button5.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=5;}; setTimeout(function(){button5.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 6)
	{button6.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=6;}; setTimeout(function(){button6.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 7)
	{button7.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=7;}; setTimeout(function(){button7.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 8)
	{button8.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=8;}; setTimeout(function(){button8.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 9)
	{button9.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=9;}; setTimeout(function(){button9.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 10)
	{button10.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=10;}; setTimeout(function(){button10.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 11)
	{button11.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=11;}; setTimeout(function(){button11.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 12)
	{button12.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=12;}; setTimeout(function(){button12.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 13)
	{button13.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=13;}; setTimeout(function(){button13.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 14)
	{button14.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=14;}; setTimeout(function(){button14.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 15)
	{button15.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=15;}; setTimeout(function(){button15.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 16)
	{button16.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=16;}; setTimeout(function(){button16.style.backgroundColor="white";},1000);};


i.innerHTML = globalnumber1;

	
//////////////////////////////////////////////////////////////////////





	setTimeout(function(){	
	
	if(randomnumber2 == 1)
	{button1.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=1;}; setTimeout(function(){button1.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 2)
	{button2.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=2;}; setTimeout(function(){button2.style.backgroundColor="white";},1000);};

	if(randomnumber2 == 3)
	{button3.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=3;}; setTimeout(function(){button3.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 4)
	{button4.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=4;}; setTimeout(function(){button4.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 5)
	{button5.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=5;}; setTimeout(function(){button5.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 6)
	{button6.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=6;}; setTimeout(function(){button6.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 7)
	{button7.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=7;}; setTimeout(function(){button7.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 8)
	{button8.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=8;}; setTimeout(function(){button8.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 9)
	{button9.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=9;}; setTimeout(function(){button9.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 10)
	{button10.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=10;}; setTimeout(function(){button10.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 11)
	{button11.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=11;}; setTimeout(function(){button11.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 12)
	{button12.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=12;}; setTimeout(function(){button12.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 13)
	{button13.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=13;}; setTimeout(function(){button13.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 14)
	{button14.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=14;}; setTimeout(function(){button14.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 15)
	{button15.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=15;}; setTimeout(function(){button15.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 16)
	{button16.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=16;}; setTimeout(function(){button16.style.backgroundColor="white";},1000);};
	

	
	},1200);




//////////////////////////////////////////////////////////////////////




	setTimeout(function(){	
	
	if(randomnumber3 == 1)
	{button1.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=1;}; setTimeout(function(){button1.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 2)
	{button2.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=2;}; setTimeout(function(){button2.style.backgroundColor="white";},1000);};

	if(randomnumber3 == 3)
	{button3.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=3;}; setTimeout(function(){button3.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 4)
	{button4.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=4;}; setTimeout(function(){button4.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 5)
	{button5.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=5;}; setTimeout(function(){button5.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 6)
	{button6.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=6;}; setTimeout(function(){button6.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 7)
	{button7.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=7;}; setTimeout(function(){button7.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 8)
	{button8.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=8;}; setTimeout(function(){button8.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 9)
	{button9.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=9;}; setTimeout(function(){button9.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 10)
	{button10.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=10;}; setTimeout(function(){button10.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 11)
	{button11.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=11;}; setTimeout(function(){button11.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 12)
	{button12.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=12;}; setTimeout(function(){button12.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 13)
	{button13.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=13;}; setTimeout(function(){button13.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 14)
	{button14.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=14;}; setTimeout(function(){button14.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 15)
	{button15.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=15;}; setTimeout(function(){button15.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 16)
	{button16.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=16;}; setTimeout(function(){button16.style.backgroundColor="white";},1000);};
	

	
	},2400);


//////////////////////////////////////////////////////////////////////




	setTimeout(function(){	
	
	if(randomnumber4 == 1)
	{button1.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=1;}; setTimeout(function(){button1.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 2)
	{button2.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=2;}; setTimeout(function(){button2.style.backgroundColor="white";},1000);};

	if(randomnumber4 == 3)
	{button3.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=3;}; setTimeout(function(){button3.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 4)
	{button4.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=4;}; setTimeout(function(){button4.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 5)
	{button5.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=5;}; setTimeout(function(){button5.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 6)
	{button6.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=6;}; setTimeout(function(){button6.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 7)
	{button7.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=7;}; setTimeout(function(){button7.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 8)
	{button8.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=8;}; setTimeout(function(){button8.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 9)
	{button9.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=9;}; setTimeout(function(){button9.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 10)
	{button10.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=10;}; setTimeout(function(){button10.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 11)
	{button11.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=11;}; setTimeout(function(){button11.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 12)
	{button12.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=12;}; setTimeout(function(){button12.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 13)
	{button13.style.backgroundColor="red"; ; if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=13}; setTimeout(function(){button13.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 14)
	{button14.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=14;}; setTimeout(function(){button14.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 15)
	{button15.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=15;}; setTimeout(function(){button15.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 16)
	{button16.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=16;}; setTimeout(function(){button16.style.backgroundColor="white";},1000);};
	
	
	},3600);
	
	
	setTimeout(function(){	
	
	if(randomnumber5 == 1)
	{button1.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=1;}; setTimeout(function(){button1.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 2)
	{button2.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=2;}; setTimeout(function(){button2.style.backgroundColor="white";},1000);};

	if(randomnumber5 == 3)
	{button3.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=3;}; setTimeout(function(){button3.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 4)
	{button4.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=4;}; setTimeout(function(){button4.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 5)
	{button5.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=5;}; setTimeout(function(){button5.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 6)
	{button6.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=6;}; setTimeout(function(){button6.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 7)
	{button7.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=7;}; setTimeout(function(){button7.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 8)
	{button8.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=8;}; setTimeout(function(){button8.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 9)
	{button9.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=9;}; setTimeout(function(){button9.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 10)
	{button10.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=10;}; setTimeout(function(){button10.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 11)
	{button11.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=11;}; setTimeout(function(){button11.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 12)
	{button12.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=12;}; setTimeout(function(){button12.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 13)
	{button13.style.backgroundColor="red"; ; if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=13}; setTimeout(function(){button13.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 14)
	{button14.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=14;}; setTimeout(function(){button14.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 15)
	{button15.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=15;}; setTimeout(function(){button15.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 16)
	{button16.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=16;}; setTimeout(function(){button16.style.backgroundColor="white";},1000);};
	
	//freezescreen = 2;
	//clicknumberoftimes();
	},4800);
	
	setTimeout(function(){restartin.style.display="block";	freezescreen = 2;
	clicknumberoftimes();},4800);

}

function lightup4()
{
	var a = document.getElementById("a");
	var b = document.getElementById("b");
	var c = document.getElementById("c");
	var d = document.getElementById("d");
	var e = document.getElementById("e");
	var f = document.getElementById("f");
	var g = document.getElementById("g");
	var h = document.getElementById("h");
    var i = document.getElementById("i");
	var sound = document.getElementById("sound");

	var countdownbeforestart = 3;
	var button1 = document.getElementById("1"); //declare all the buttons
	var button2 = document.getElementById("2");
	var button3 = document.getElementById("3");
	var button4 = document.getElementById("4");
	var button5 = document.getElementById("5");
	var button6 = document.getElementById("6");
	var button7 = document.getElementById("7");
	var button8 = document.getElementById("8");
	var button9 = document.getElementById("9");
	var button10 = document.getElementById("10");
	var button11 = document.getElementById("11");
	var button12 = document.getElementById("12");
	var button13 = document.getElementById("13");
	var button14 = document.getElementById("14");
	var button15 = document.getElementById("15");
	var button16 = document.getElementById("16");
	var startin = document.getElementById("starting4"); 
	var restartin = document.getElementById("restarting4"); 
	var totalbuttons = 16; //total 16 mode but it rounds down
	var twochances = 2; //total 2 mode but it rounds down
	var fourchances = 4; //total 4 mode but it rounds down
	var fivechances = 5;
	freezescreen = 1;
	percent.innerHTML = 0;
    counter =0;
	counterhowmanyleft=0;
	howmanytimesiclick = 1; //reset everything
    globalnumber1 =0;
    globalnumber2 =0;
    globalnumber3 =0;
    globalnumber4 =0;
	globalnumber5 =0;
	globalnumber6 =0;
    currentscore.innerHTML = 0;
	
	soundplay1 = Math.floor(Math.random() * twochances);
	soundplay2 = Math.floor(Math.random() * twochances);  
	soundplay3 = Math.floor(Math.random() * twochances);
    soundplay4 = Math.floor(Math.random() * twochances);  	
	soundplay5 = Math.floor(Math.random() * twochances);  	
	soundplay6 = Math.floor(Math.random() * twochances);  	
	//soundplay1 = 0;  //force test
	//soundplay2 = 0;
	//soundplay3 = 1;
    //soundplay4 = 0; 
	//soundplay5 = 0; 
  	
	if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0) //this is to prevent all no beep sounds so force 1 to beep
	{
		var forcebeep = Math.floor(Math.random() * fivechances) +1;
		if(forcebeep == 1){soundplay1 = 1};
		if(forcebeep == 2){soundplay2 = 1};
		if(forcebeep == 3){soundplay3 = 1};
		if(forcebeep == 4){soundplay4 = 1};
		if(forcebeep == 5){soundplay5 = 1};
		if(forcebeep == 6){soundplay6 = 1};
	};
	
	a.innerHTML = soundplay1;
	b.innerHTML = soundplay2;
	c.innerHTML = soundplay3;
	d.innerHTML = soundplay4;
	
	
	 if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 1 ){howmanyleft.innerHTML = 1; counterhowmanyleft = 1; counterhowmanyleftcalc = 1; howmanytimesiclick = 6;};
	 if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 1 && soundplay6 == 0 ){howmanyleft.innerHTML = 1; counterhowmanyleft = 1; counterhowmanyleftcalc = 1; howmanytimesiclick = 5;};
	 if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 1 && soundplay6 == 1 ){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 5;};
	 if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 0 && soundplay6 == 0 ){howmanyleft.innerHTML = 1; counterhowmanyleft = 1; counterhowmanyleftcalc = 1; howmanytimesiclick = 4;};
	 if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 0 && soundplay6 == 1 ){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 4;};
	 if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 1 && soundplay6 == 0 ){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 4;};
	 if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 1 && soundplay6 == 1 ){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 4;};
	 if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0 ){howmanyleft.innerHTML = 1; counterhowmanyleft = 1; counterhowmanyleftcalc = 1; howmanytimesiclick = 3;};
	 if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 1 ){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 3;};
	 if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 1 && soundplay6 == 0 ){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 3;};
	 if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 1 && soundplay6 == 1 ){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 3;};
	 if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 0 && soundplay6 == 0 ){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 3;};
	 if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 0 && soundplay6 == 1 ){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 3;};
	 if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 0 && soundplay6 == 1 ){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 3;};
	 if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 1 && soundplay6 == 0 ){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 3;};
	 if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 1 && soundplay6 == 1 ){howmanyleft.innerHTML = 4; counterhowmanyleft = 4; counterhowmanyleftcalc = 4; howmanytimesiclick = 3;};
	 if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0 ){howmanyleft.innerHTML = 1; counterhowmanyleft = 1; counterhowmanyleftcalc = 1; howmanytimesiclick = 2;};
	 if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 1 ){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 2;};
	 if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 1 && soundplay6 == 0 ){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 2;};
	 if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 1 && soundplay6 == 1 ){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 2;};
	 if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 0 && soundplay6 == 0 ){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 2;};
	 if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 0 && soundplay6 == 1 ){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 2;};
	 if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 1 && soundplay6 == 0 ){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 2;};
	 if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 1 && soundplay6 == 1 ){howmanyleft.innerHTML = 4; counterhowmanyleft = 4; counterhowmanyleftcalc = 4; howmanytimesiclick = 2;};
	 if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0 ){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 2;};
	 if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 1 ){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 2;};
	 if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 1 && soundplay6 == 0 ){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 2;};
	 if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 1 && soundplay6 == 1 ){howmanyleft.innerHTML = 4; counterhowmanyleft = 4; counterhowmanyleftcalc = 4; howmanytimesiclick = 2;};
	 if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 0 && soundplay6 == 0 ){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 2;};
	 if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 0 && soundplay6 == 1 ){howmanyleft.innerHTML = 4; counterhowmanyleft = 4; counterhowmanyleftcalc = 4; howmanytimesiclick = 2;};
	 if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 1 && soundplay6 == 0 ){howmanyleft.innerHTML = 4; counterhowmanyleft = 4; counterhowmanyleftcalc = 4; howmanytimesiclick = 2;};
	 if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 1 && soundplay6 == 0 ){howmanyleft.innerHTML = 4; counterhowmanyleft = 4; counterhowmanyleftcalc = 4; howmanytimesiclick = 2;};
	 if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 1 && soundplay6 == 1 ){howmanyleft.innerHTML = 5; counterhowmanyleft = 5; counterhowmanyleftcalc = 5; howmanytimesiclick = 2;};
	 if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0 ){howmanyleft.innerHTML = 1; counterhowmanyleft = 1; counterhowmanyleftcalc = 1; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 1 ){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 1 && soundplay6 == 0 ){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 1 && soundplay6 == 1 ){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 0 && soundplay6 == 0 ){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 0 && soundplay6 == 1 ){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 1 && soundplay6 == 0 ){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 1 && soundplay6 == 1 ){howmanyleft.innerHTML = 4; counterhowmanyleft = 4; counterhowmanyleftcalc = 4; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0 ){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 1 ){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 1 && soundplay6 == 0 ){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 1 && soundplay6 == 1 ){howmanyleft.innerHTML = 4; counterhowmanyleft = 4; counterhowmanyleftcalc = 4; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 0 && soundplay6 == 0 ){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 0 && soundplay6 == 1 ){howmanyleft.innerHTML = 4; counterhowmanyleft = 4; counterhowmanyleftcalc = 4; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 1 && soundplay6 == 1 ){howmanyleft.innerHTML = 5; counterhowmanyleft = 5; counterhowmanyleftcalc = 5; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0 ){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 1 ){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 1 && soundplay6 == 0 ){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 1 && soundplay6 == 1 ){howmanyleft.innerHTML = 4; counterhowmanyleft = 4; counterhowmanyleftcalc = 4; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 0 && soundplay6 == 0 ){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 0 && soundplay6 == 1 ){howmanyleft.innerHTML = 4; counterhowmanyleft = 4; counterhowmanyleftcalc = 4; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 1 && soundplay6 == 0 ){howmanyleft.innerHTML = 4; counterhowmanyleft = 4; counterhowmanyleftcalc = 4; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 1 && soundplay6 == 1 ){howmanyleft.innerHTML = 5; counterhowmanyleft = 5; counterhowmanyleftcalc = 5; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0 ){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 1 ){howmanyleft.innerHTML = 4; counterhowmanyleft = 4; counterhowmanyleftcalc = 4; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 1 && soundplay6 == 0 ){howmanyleft.innerHTML = 4; counterhowmanyleft = 4; counterhowmanyleftcalc = 4; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 1 && soundplay6 == 1 ){howmanyleft.innerHTML = 5; counterhowmanyleft = 5; counterhowmanyleftcalc = 5; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 0 && soundplay6 == 0 ){howmanyleft.innerHTML = 4; counterhowmanyleft = 4; counterhowmanyleftcalc = 4; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 0 && soundplay6 == 1 ){howmanyleft.innerHTML = 5; counterhowmanyleft = 5; counterhowmanyleftcalc = 5; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 1 && soundplay6 == 0 ){howmanyleft.innerHTML = 5; counterhowmanyleft = 5; counterhowmanyleftcalc = 5; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 1 && soundplay6 == 1 ){howmanyleft.innerHTML = 6; counterhowmanyleft = 6; counterhowmanyleftcalc = 6; howmanytimesiclick = 1;};

	j.innerHTML =  howmanytimesiclick;
	
    var randomnumber1 = Math.floor(Math.random() * totalbuttons) +1;  //+1 so i will never get 0
    var answer1 = randomnumber1;
	var randomnumber2 = Math.floor(Math.random() * totalbuttons) +1;
    var answer2 = randomnumber2;
	var randomnumber3 = Math.floor(Math.random() * totalbuttons) +1; 
    var answer3 = randomnumber3; 
	var randomnumber4 = Math.floor(Math.random() * totalbuttons) +1; 
    var answer4 = randomnumber4; //this is for the future to check the answer
	var randomnumber5 = Math.floor(Math.random() * totalbuttons) +1; 
    var answer5 = randomnumber5; //this is for the future to check the answer
    var randomnumber6 = Math.floor(Math.random() * totalbuttons) +1; 
    var answer6 = randomnumber6; //this is for the future to check the answer
	
	e.innerHTML = randomnumber1;
	f.innerHTML = randomnumber2;
	g.innerHTML = randomnumber3;
	h.innerHTML = randomnumber4;
	
	
	
	//startin.value = countdownbeforestart; //countdown
	//startin.onclick = ''; //stop them from pressing the 3 2 1 countdown to restart and screw up everything
	//var clearme1 = setInterval(function (){countdownbeforestart--; startin.value = countdownbeforestart;},1000);//timer 
    //setTimeout(function(){clearInterval(clearme1); startin.style.display="none"; startin.value = 'START';},3000); //hide the button make starting value = start again
	startin.style.display="none"; //hide button immediately
	

		
	if(randomnumber1 == 1)
	{button1.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=1;}; setTimeout(function(){button1.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 2)
	{button2.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=2;}; setTimeout(function(){button2.style.backgroundColor="white";},1000);};

	if(randomnumber1 == 3)
	{button3.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=3;}; setTimeout(function(){button3.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 4)
	{button4.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=4;}; setTimeout(function(){button4.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 5)
	{button5.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=5;}; setTimeout(function(){button5.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 6)
	{button6.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=6;}; setTimeout(function(){button6.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 7)
	{button7.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=7;}; setTimeout(function(){button7.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 8)
	{button8.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=8;}; setTimeout(function(){button8.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 9)
	{button9.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=9;}; setTimeout(function(){button9.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 10)
	{button10.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=10;}; setTimeout(function(){button10.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 11)
	{button11.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=11;}; setTimeout(function(){button11.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 12)
	{button12.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=12;}; setTimeout(function(){button12.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 13)
	{button13.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=13;}; setTimeout(function(){button13.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 14)
	{button14.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=14;}; setTimeout(function(){button14.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 15)
	{button15.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=15;}; setTimeout(function(){button15.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 16)
	{button16.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=16;}; setTimeout(function(){button16.style.backgroundColor="white";},1000);};


i.innerHTML = globalnumber1;



 //start it after 3 seconds which is after count down is over
	
	
	
//////////////////////////////////////////////////////////////////////





	setTimeout(function(){	
	
	if(randomnumber2 == 1)
	{button1.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=1;}; setTimeout(function(){button1.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 2)
	{button2.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=2;}; setTimeout(function(){button2.style.backgroundColor="white";},1000);};

	if(randomnumber2 == 3)
	{button3.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=3;}; setTimeout(function(){button3.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 4)
	{button4.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=4;}; setTimeout(function(){button4.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 5)
	{button5.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=5;}; setTimeout(function(){button5.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 6)
	{button6.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=6;}; setTimeout(function(){button6.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 7)
	{button7.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=7;}; setTimeout(function(){button7.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 8)
	{button8.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=8;}; setTimeout(function(){button8.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 9)
	{button9.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=9;}; setTimeout(function(){button9.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 10)
	{button10.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=10;}; setTimeout(function(){button10.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 11)
	{button11.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=11;}; setTimeout(function(){button11.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 12)
	{button12.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=12;}; setTimeout(function(){button12.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 13)
	{button13.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=13;}; setTimeout(function(){button13.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 14)
	{button14.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=14;}; setTimeout(function(){button14.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 15)
	{button15.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=15;}; setTimeout(function(){button15.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 16)
	{button16.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=16;}; setTimeout(function(){button16.style.backgroundColor="white";},1000);};
	

	
	},1200);




//////////////////////////////////////////////////////////////////////




	setTimeout(function(){	
	
	if(randomnumber3 == 1)
	{button1.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=1;}; setTimeout(function(){button1.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 2)
	{button2.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=2;}; setTimeout(function(){button2.style.backgroundColor="white";},1000);};

	if(randomnumber3 == 3)
	{button3.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=3;}; setTimeout(function(){button3.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 4)
	{button4.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=4;}; setTimeout(function(){button4.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 5)
	{button5.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=5;}; setTimeout(function(){button5.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 6)
	{button6.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=6;}; setTimeout(function(){button6.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 7)
	{button7.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=7;}; setTimeout(function(){button7.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 8)
	{button8.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=8;}; setTimeout(function(){button8.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 9)
	{button9.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=9;}; setTimeout(function(){button9.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 10)
	{button10.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=10;}; setTimeout(function(){button10.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 11)
	{button11.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=11;}; setTimeout(function(){button11.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 12)
	{button12.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=12;}; setTimeout(function(){button12.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 13)
	{button13.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=13;}; setTimeout(function(){button13.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 14)
	{button14.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=14;}; setTimeout(function(){button14.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 15)
	{button15.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=15;}; setTimeout(function(){button15.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 16)
	{button16.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=16;}; setTimeout(function(){button16.style.backgroundColor="white";},1000);};
	

	
	},2400);


//////////////////////////////////////////////////////////////////////




	setTimeout(function(){	
	
	if(randomnumber4 == 1)
	{button1.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=1;}; setTimeout(function(){button1.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 2)
	{button2.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=2;}; setTimeout(function(){button2.style.backgroundColor="white";},1000);};

	if(randomnumber4 == 3)
	{button3.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=3;}; setTimeout(function(){button3.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 4)
	{button4.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=4;}; setTimeout(function(){button4.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 5)
	{button5.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=5;}; setTimeout(function(){button5.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 6)
	{button6.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=6;}; setTimeout(function(){button6.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 7)
	{button7.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=7;}; setTimeout(function(){button7.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 8)
	{button8.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=8;}; setTimeout(function(){button8.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 9)
	{button9.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=9;}; setTimeout(function(){button9.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 10)
	{button10.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=10;}; setTimeout(function(){button10.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 11)
	{button11.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=11;}; setTimeout(function(){button11.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 12)
	{button12.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=12;}; setTimeout(function(){button12.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 13)
	{button13.style.backgroundColor="red"; ; if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=13}; setTimeout(function(){button13.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 14)
	{button14.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=14;}; setTimeout(function(){button14.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 15)
	{button15.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=15;}; setTimeout(function(){button15.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 16)
	{button16.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=16;}; setTimeout(function(){button16.style.backgroundColor="white";},1000);};
	
	},3600);
	
	
	setTimeout(function(){	
	
	if(randomnumber5 == 1)
	{button1.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=1;}; setTimeout(function(){button1.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 2)
	{button2.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=2;}; setTimeout(function(){button2.style.backgroundColor="white";},1000);};

	if(randomnumber5 == 3)
	{button3.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=3;}; setTimeout(function(){button3.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 4)
	{button4.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=4;}; setTimeout(function(){button4.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 5)
	{button5.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=5;}; setTimeout(function(){button5.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 6)
	{button6.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=6;}; setTimeout(function(){button6.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 7)
	{button7.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=7;}; setTimeout(function(){button7.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 8)
	{button8.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=8;}; setTimeout(function(){button8.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 9)
	{button9.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=9;}; setTimeout(function(){button9.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 10)
	{button10.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=10;}; setTimeout(function(){button10.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 11)
	{button11.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=11;}; setTimeout(function(){button11.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 12)
	{button12.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=12;}; setTimeout(function(){button12.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 13)
	{button13.style.backgroundColor="red"; ; if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=13}; setTimeout(function(){button13.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 14)
	{button14.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=14;}; setTimeout(function(){button14.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 15)
	{button15.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=15;}; setTimeout(function(){button15.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 16)
	{button16.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=16;}; setTimeout(function(){button16.style.backgroundColor="white";},1000);};
	
	//freezescreen = 2;
	//clicknumberoftimes();
	},4800);

	setTimeout(function(){	
	
	if(randomnumber6 == 1)
	{button1.style.backgroundColor="red";  if(soundplay6 == 1){sound.volume = 0.5; sound.play();globalnumber6=1;}; setTimeout(function(){button1.style.backgroundColor="white";},1000);};

    if(randomnumber6 == 2)
	{button2.style.backgroundColor="red";  if(soundplay6 == 1){sound.volume = 0.5; sound.play();globalnumber6=2;}; setTimeout(function(){button2.style.backgroundColor="white";},1000);};

	if(randomnumber6 == 3)
	{button3.style.backgroundColor="red";  if(soundplay6 == 1){sound.volume = 0.5; sound.play();globalnumber6=3;}; setTimeout(function(){button3.style.backgroundColor="white";},1000);};

    if(randomnumber6 == 4)
	{button4.style.backgroundColor="red";  if(soundplay6 == 1){sound.volume = 0.5; sound.play();globalnumber6=4;}; setTimeout(function(){button4.style.backgroundColor="white";},1000);};

    if(randomnumber6 == 5)
	{button5.style.backgroundColor="red";  if(soundplay6 == 1){sound.volume = 0.5; sound.play();globalnumber6=5;}; setTimeout(function(){button5.style.backgroundColor="white";},1000);};

    if(randomnumber6 == 6)
	{button6.style.backgroundColor="red";  if(soundplay6 == 1){sound.volume = 0.5; sound.play();globalnumber6=6;}; setTimeout(function(){button6.style.backgroundColor="white";},1000);};

    if(randomnumber6 == 7)
	{button7.style.backgroundColor="red";  if(soundplay6 == 1){sound.volume = 0.5; sound.play();globalnumber6=7;}; setTimeout(function(){button7.style.backgroundColor="white";},1000);};

    if(randomnumber6 == 8)
	{button8.style.backgroundColor="red";  if(soundplay6 == 1){sound.volume = 0.5; sound.play();globalnumber6=8;}; setTimeout(function(){button8.style.backgroundColor="white";},1000);};

    if(randomnumber6 == 9)
	{button9.style.backgroundColor="red";  if(soundplay6 == 1){sound.volume = 0.5; sound.play();globalnumber6=9;}; setTimeout(function(){button9.style.backgroundColor="white";},1000);};

    if(randomnumber6 == 10)
	{button10.style.backgroundColor="red";  if(soundplay6 == 1){sound.volume = 0.5; sound.play();globalnumber6=10;}; setTimeout(function(){button10.style.backgroundColor="white";},1000);};

    if(randomnumber6 == 11)
	{button11.style.backgroundColor="red";  if(soundplay6 == 1){sound.volume = 0.5; sound.play();globalnumber6=11;}; setTimeout(function(){button11.style.backgroundColor="white";},1000);};

    if(randomnumber6 == 12)
	{button12.style.backgroundColor="red";  if(soundplay6 == 1){sound.volume = 0.5; sound.play();globalnumber6=12;}; setTimeout(function(){button12.style.backgroundColor="white";},1000);};

    if(randomnumber6 == 13)
	{button13.style.backgroundColor="red"; ; if(soundplay6 == 1){sound.volume = 0.5; sound.play();globalnumber6=13}; setTimeout(function(){button13.style.backgroundColor="white";},1000);};

    if(randomnumber6 == 14)
	{button14.style.backgroundColor="red";  if(soundplay6 == 1){sound.volume = 0.5; sound.play();globalnumber6=14;}; setTimeout(function(){button14.style.backgroundColor="white";},1000);};

    if(randomnumber6 == 15)
	{button15.style.backgroundColor="red";  if(soundplay6 == 1){sound.volume = 0.5; sound.play();globalnumber6=15;}; setTimeout(function(){button15.style.backgroundColor="white";},1000);};

    if(randomnumber6 == 16)
	{button16.style.backgroundColor="red";  if(soundplay6 == 1){sound.volume = 0.5; sound.play();globalnumber6=16;}; setTimeout(function(){button16.style.backgroundColor="white";},1000);};
	

	},6000);
	
	setTimeout(function(){restartin.style.display="block";	freezescreen = 2;
	clicknumberoftimes();},7200);
	
	
}//end of function

function lightupnowait4()
{
	var a = document.getElementById("a");
	var b = document.getElementById("b");
	var c = document.getElementById("c");
	var d = document.getElementById("d");
	var e = document.getElementById("e");
	var f = document.getElementById("f");
	var g = document.getElementById("g");
	var h = document.getElementById("h");
    var i = document.getElementById("i");
	var sound = document.getElementById("sound");

	var countdownbeforestart = 3;
	var button1 = document.getElementById("1"); //declare all the buttons
	var button2 = document.getElementById("2");
	var button3 = document.getElementById("3");
	var button4 = document.getElementById("4");
	var button5 = document.getElementById("5");
	var button6 = document.getElementById("6");
	var button7 = document.getElementById("7");
	var button8 = document.getElementById("8");
	var button9 = document.getElementById("9");
	var button10 = document.getElementById("10");
	var button11 = document.getElementById("11");
	var button12 = document.getElementById("12");
	var button13 = document.getElementById("13");
	var button14 = document.getElementById("14");
	var button15 = document.getElementById("15");
	var button16 = document.getElementById("16");
	var startin = document.getElementById("starting4"); 
	var restartin = document.getElementById("restarting4"); 
	var totalbuttons = 16; //total 16 mode but it rounds down
	var twochances = 2; //total 2 mode but it rounds down
	var fourchances = 4; //total 4 mode but it rounds down
	var fivechances = 5;
	freezescreen = 1;
	percent.innerHTML = 0;
    counter =0;
	counterhowmanyleft=0;
	howmanytimesiclick = 1; //reset everything
    globalnumber1 =0;
    globalnumber2 =0;
    globalnumber3 =0;
    globalnumber4 =0;
	globalnumber5 =0;
	globalnumber6 =0;
    currentscore.innerHTML = 0;
	
	soundplay1 = Math.floor(Math.random() * twochances);
	soundplay2 = Math.floor(Math.random() * twochances);  
	soundplay3 = Math.floor(Math.random() * twochances);
    soundplay4 = Math.floor(Math.random() * twochances);  	
	soundplay5 = Math.floor(Math.random() * twochances);  	
	soundplay6 = Math.floor(Math.random() * twochances);  	
	//soundplay1 = 0;  //force test
	//soundplay2 = 0;
	//soundplay3 = 1;
    //soundplay4 = 0; 
	//soundplay5 = 0; 
  	
	if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0) //this is to prevent all no beep sounds so force 1 to beep
	{
		var forcebeep = Math.floor(Math.random() * fivechances) +1;
		if(forcebeep == 1){soundplay1 = 1};
		if(forcebeep == 2){soundplay2 = 1};
		if(forcebeep == 3){soundplay3 = 1};
		if(forcebeep == 4){soundplay4 = 1};
		if(forcebeep == 5){soundplay5 = 1};
		if(forcebeep == 6){soundplay6 = 1};
	};
	
	a.innerHTML = soundplay1;
	b.innerHTML = soundplay2;
	c.innerHTML = soundplay3;
	d.innerHTML = soundplay4;
	
	
	 if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 1 ){howmanyleft.innerHTML = 1; counterhowmanyleft = 1; counterhowmanyleftcalc = 1; howmanytimesiclick = 6;};
	 if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 1 && soundplay6 == 0 ){howmanyleft.innerHTML = 1; counterhowmanyleft = 1; counterhowmanyleftcalc = 1; howmanytimesiclick = 5;};
	 if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 1 && soundplay6 == 1 ){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 5;};
	 if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 0 && soundplay6 == 0 ){howmanyleft.innerHTML = 1; counterhowmanyleft = 1; counterhowmanyleftcalc = 1; howmanytimesiclick = 4;};
	 if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 0 && soundplay6 == 1 ){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 4;};
	 if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 1 && soundplay6 == 0 ){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 4;};
	 if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 1 && soundplay6 == 1 ){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 4;};
	 if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0 ){howmanyleft.innerHTML = 1; counterhowmanyleft = 1; counterhowmanyleftcalc = 1; howmanytimesiclick = 3;};
	 if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 1 ){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 3;};
	 if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 1 && soundplay6 == 0 ){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 3;};
	 if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 1 && soundplay6 == 1 ){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 3;};
	 if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 0 && soundplay6 == 0 ){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 3;};
	 if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 0 && soundplay6 == 1 ){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 3;};
	 if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 0 && soundplay6 == 1 ){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 3;};
	 if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 1 && soundplay6 == 0 ){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 3;};
	 if(soundplay1 == 0 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 1 && soundplay6 == 1 ){howmanyleft.innerHTML = 4; counterhowmanyleft = 4; counterhowmanyleftcalc = 4; howmanytimesiclick = 3;};
	 if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0 ){howmanyleft.innerHTML = 1; counterhowmanyleft = 1; counterhowmanyleftcalc = 1; howmanytimesiclick = 2;};
	 if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 1 ){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 2;};
	 if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 1 && soundplay6 == 0 ){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 2;};
	 if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 1 && soundplay6 == 1 ){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 2;};
	 if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 0 && soundplay6 == 0 ){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 2;};
	 if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 0 && soundplay6 == 1 ){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 2;};
	 if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 1 && soundplay6 == 0 ){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 2;};
	 if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 1 && soundplay6 == 1 ){howmanyleft.innerHTML = 4; counterhowmanyleft = 4; counterhowmanyleftcalc = 4; howmanytimesiclick = 2;};
	 if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0 ){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 2;};
	 if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 1 ){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 2;};
	 if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 1 && soundplay6 == 0 ){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 2;};
	 if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 1 && soundplay6 == 1 ){howmanyleft.innerHTML = 4; counterhowmanyleft = 4; counterhowmanyleftcalc = 4; howmanytimesiclick = 2;};
	 if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 0 && soundplay6 == 0 ){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 2;};
	 if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 0 && soundplay6 == 1 ){howmanyleft.innerHTML = 4; counterhowmanyleft = 4; counterhowmanyleftcalc = 4; howmanytimesiclick = 2;};
	 if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 1 && soundplay6 == 0 ){howmanyleft.innerHTML = 4; counterhowmanyleft = 4; counterhowmanyleftcalc = 4; howmanytimesiclick = 2;};
	 if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 1 && soundplay6 == 0 ){howmanyleft.innerHTML = 4; counterhowmanyleft = 4; counterhowmanyleftcalc = 4; howmanytimesiclick = 2;};
	 if(soundplay1 == 0 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 1 && soundplay6 == 1 ){howmanyleft.innerHTML = 5; counterhowmanyleft = 5; counterhowmanyleftcalc = 5; howmanytimesiclick = 2;};
	 if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0 ){howmanyleft.innerHTML = 1; counterhowmanyleft = 1; counterhowmanyleftcalc = 1; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 1 ){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 1 && soundplay6 == 0 ){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 1 && soundplay6 == 1 ){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 0 && soundplay6 == 0 ){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 0 && soundplay6 == 1 ){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 1 && soundplay6 == 0 ){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 1 && soundplay6 == 1 ){howmanyleft.innerHTML = 4; counterhowmanyleft = 4; counterhowmanyleftcalc = 4; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0 ){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 1 ){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 1 && soundplay6 == 0 ){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 1 && soundplay6 == 1 ){howmanyleft.innerHTML = 4; counterhowmanyleft = 4; counterhowmanyleftcalc = 4; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 0 && soundplay6 == 0 ){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 0 && soundplay6 == 1 ){howmanyleft.innerHTML = 4; counterhowmanyleft = 4; counterhowmanyleftcalc = 4; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 0 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 1 && soundplay6 == 1 ){howmanyleft.innerHTML = 5; counterhowmanyleft = 5; counterhowmanyleftcalc = 5; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0 ){howmanyleft.innerHTML = 2; counterhowmanyleft = 2; counterhowmanyleftcalc = 2; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 1 ){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 1 && soundplay6 == 0 ){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 0 && soundplay5 == 1 && soundplay6 == 1 ){howmanyleft.innerHTML = 4; counterhowmanyleft = 4; counterhowmanyleftcalc = 4; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 0 && soundplay6 == 0 ){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 0 && soundplay6 == 1 ){howmanyleft.innerHTML = 4; counterhowmanyleft = 4; counterhowmanyleftcalc = 4; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 1 && soundplay6 == 0 ){howmanyleft.innerHTML = 4; counterhowmanyleft = 4; counterhowmanyleftcalc = 4; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 0 && soundplay4 == 1 && soundplay5 == 1 && soundplay6 == 1 ){howmanyleft.innerHTML = 5; counterhowmanyleft = 5; counterhowmanyleftcalc = 5; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 0 ){howmanyleft.innerHTML = 3; counterhowmanyleft = 3; counterhowmanyleftcalc = 3; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 0 && soundplay6 == 1 ){howmanyleft.innerHTML = 4; counterhowmanyleft = 4; counterhowmanyleftcalc = 4; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 1 && soundplay6 == 0 ){howmanyleft.innerHTML = 4; counterhowmanyleft = 4; counterhowmanyleftcalc = 4; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 0 && soundplay5 == 1 && soundplay6 == 1 ){howmanyleft.innerHTML = 5; counterhowmanyleft = 5; counterhowmanyleftcalc = 5; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 0 && soundplay6 == 0 ){howmanyleft.innerHTML = 4; counterhowmanyleft = 4; counterhowmanyleftcalc = 4; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 0 && soundplay6 == 1 ){howmanyleft.innerHTML = 5; counterhowmanyleft = 5; counterhowmanyleftcalc = 5; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 1 && soundplay6 == 0 ){howmanyleft.innerHTML = 5; counterhowmanyleft = 5; counterhowmanyleftcalc = 5; howmanytimesiclick = 1;};
	 if(soundplay1 == 1 && soundplay2 == 1 && soundplay3 == 1 && soundplay4 == 1 && soundplay5 == 1 && soundplay6 == 1 ){howmanyleft.innerHTML = 6; counterhowmanyleft = 6; counterhowmanyleftcalc = 6; howmanytimesiclick = 1;};

	
    var randomnumber1 = Math.floor(Math.random() * totalbuttons) +1;  //+1 so i will never get 0
    var answer1 = randomnumber1;
	var randomnumber2 = Math.floor(Math.random() * totalbuttons) +1;
    var answer2 = randomnumber2;
	var randomnumber3 = Math.floor(Math.random() * totalbuttons) +1; 
    var answer3 = randomnumber3; 
	var randomnumber4 = Math.floor(Math.random() * totalbuttons) +1; 
    var answer4 = randomnumber4; //this is for the future to check the answer
	var randomnumber5 = Math.floor(Math.random() * totalbuttons) +1; 
    var answer5 = randomnumber5; //this is for the future to check the answer
    var randomnumber6 = Math.floor(Math.random() * totalbuttons) +1; 
    var answer6 = randomnumber6; //this is for the future to check the answer
	
	e.innerHTML = randomnumber1;
	f.innerHTML = randomnumber2;
	g.innerHTML = randomnumber3;
	h.innerHTML = randomnumber4;
	
	
	
	//startin.value = countdownbeforestart; //countdown
	//startin.onclick = ''; //stop them from pressing the 3 2 1 countdown to restart and screw up everything
	//var clearme1 = setInterval(function (){countdownbeforestart--; startin.value = countdownbeforestart;},1000);//timer 
    //setTimeout(function(){clearInterval(clearme1); startin.style.display="none"; startin.value = 'START';},3000); //hide the button make starting value = start again
	restartin.style.display="none";
	

		
	if(randomnumber1 == 1)
	{button1.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=1;}; setTimeout(function(){button1.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 2)
	{button2.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=2;}; setTimeout(function(){button2.style.backgroundColor="white";},1000);};

	if(randomnumber1 == 3)
	{button3.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=3;}; setTimeout(function(){button3.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 4)
	{button4.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=4;}; setTimeout(function(){button4.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 5)
	{button5.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=5;}; setTimeout(function(){button5.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 6)
	{button6.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=6;}; setTimeout(function(){button6.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 7)
	{button7.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=7;}; setTimeout(function(){button7.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 8)
	{button8.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=8;}; setTimeout(function(){button8.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 9)
	{button9.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=9;}; setTimeout(function(){button9.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 10)
	{button10.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=10;}; setTimeout(function(){button10.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 11)
	{button11.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=11;}; setTimeout(function(){button11.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 12)
	{button12.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=12;}; setTimeout(function(){button12.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 13)
	{button13.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=13;}; setTimeout(function(){button13.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 14)
	{button14.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=14;}; setTimeout(function(){button14.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 15)
	{button15.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=15;}; setTimeout(function(){button15.style.backgroundColor="white";},1000);};

    if(randomnumber1 == 16)
	{button16.style.backgroundColor="red";  if(soundplay1 == 1){sound.volume = 0.5; sound.play();globalnumber1=16;}; setTimeout(function(){button16.style.backgroundColor="white";},1000);};


i.innerHTML = globalnumber1;



 //start it after 3 seconds which is after count down is over
	
	
	
//////////////////////////////////////////////////////////////////////





	setTimeout(function(){	
	
	if(randomnumber2 == 1)
	{button1.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=1;}; setTimeout(function(){button1.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 2)
	{button2.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=2;}; setTimeout(function(){button2.style.backgroundColor="white";},1000);};

	if(randomnumber2 == 3)
	{button3.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=3;}; setTimeout(function(){button3.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 4)
	{button4.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=4;}; setTimeout(function(){button4.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 5)
	{button5.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=5;}; setTimeout(function(){button5.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 6)
	{button6.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=6;}; setTimeout(function(){button6.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 7)
	{button7.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=7;}; setTimeout(function(){button7.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 8)
	{button8.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=8;}; setTimeout(function(){button8.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 9)
	{button9.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=9;}; setTimeout(function(){button9.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 10)
	{button10.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=10;}; setTimeout(function(){button10.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 11)
	{button11.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=11;}; setTimeout(function(){button11.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 12)
	{button12.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=12;}; setTimeout(function(){button12.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 13)
	{button13.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=13;}; setTimeout(function(){button13.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 14)
	{button14.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=14;}; setTimeout(function(){button14.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 15)
	{button15.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=15;}; setTimeout(function(){button15.style.backgroundColor="white";},1000);};

    if(randomnumber2 == 16)
	{button16.style.backgroundColor="red";  if(soundplay2 == 1){sound.volume = 0.5; sound.play();globalnumber2=16;}; setTimeout(function(){button16.style.backgroundColor="white";},1000);};
	

	
	},1200);




//////////////////////////////////////////////////////////////////////




	setTimeout(function(){	
	
	if(randomnumber3 == 1)
	{button1.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=1;}; setTimeout(function(){button1.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 2)
	{button2.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=2;}; setTimeout(function(){button2.style.backgroundColor="white";},1000);};

	if(randomnumber3 == 3)
	{button3.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=3;}; setTimeout(function(){button3.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 4)
	{button4.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=4;}; setTimeout(function(){button4.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 5)
	{button5.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=5;}; setTimeout(function(){button5.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 6)
	{button6.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=6;}; setTimeout(function(){button6.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 7)
	{button7.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=7;}; setTimeout(function(){button7.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 8)
	{button8.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=8;}; setTimeout(function(){button8.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 9)
	{button9.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=9;}; setTimeout(function(){button9.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 10)
	{button10.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=10;}; setTimeout(function(){button10.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 11)
	{button11.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=11;}; setTimeout(function(){button11.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 12)
	{button12.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=12;}; setTimeout(function(){button12.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 13)
	{button13.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=13;}; setTimeout(function(){button13.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 14)
	{button14.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=14;}; setTimeout(function(){button14.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 15)
	{button15.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=15;}; setTimeout(function(){button15.style.backgroundColor="white";},1000);};

    if(randomnumber3 == 16)
	{button16.style.backgroundColor="red";  if(soundplay3 == 1){sound.volume = 0.5; sound.play();globalnumber3=16;}; setTimeout(function(){button16.style.backgroundColor="white";},1000);};
	

	
	},2400);


//////////////////////////////////////////////////////////////////////




	setTimeout(function(){	
	
	if(randomnumber4 == 1)
	{button1.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=1;}; setTimeout(function(){button1.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 2)
	{button2.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=2;}; setTimeout(function(){button2.style.backgroundColor="white";},1000);};

	if(randomnumber4 == 3)
	{button3.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=3;}; setTimeout(function(){button3.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 4)
	{button4.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=4;}; setTimeout(function(){button4.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 5)
	{button5.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=5;}; setTimeout(function(){button5.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 6)
	{button6.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=6;}; setTimeout(function(){button6.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 7)
	{button7.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=7;}; setTimeout(function(){button7.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 8)
	{button8.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=8;}; setTimeout(function(){button8.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 9)
	{button9.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=9;}; setTimeout(function(){button9.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 10)
	{button10.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=10;}; setTimeout(function(){button10.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 11)
	{button11.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=11;}; setTimeout(function(){button11.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 12)
	{button12.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=12;}; setTimeout(function(){button12.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 13)
	{button13.style.backgroundColor="red"; ; if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=13}; setTimeout(function(){button13.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 14)
	{button14.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=14;}; setTimeout(function(){button14.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 15)
	{button15.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=15;}; setTimeout(function(){button15.style.backgroundColor="white";},1000);};

    if(randomnumber4 == 16)
	{button16.style.backgroundColor="red";  if(soundplay4 == 1){sound.volume = 0.5; sound.play();globalnumber4=16;}; setTimeout(function(){button16.style.backgroundColor="white";},1000);};
	
	},3600);
	
	
	setTimeout(function(){	
	
	if(randomnumber5 == 1)
	{button1.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=1;}; setTimeout(function(){button1.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 2)
	{button2.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=2;}; setTimeout(function(){button2.style.backgroundColor="white";},1000);};

	if(randomnumber5 == 3)
	{button3.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=3;}; setTimeout(function(){button3.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 4)
	{button4.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=4;}; setTimeout(function(){button4.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 5)
	{button5.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=5;}; setTimeout(function(){button5.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 6)
	{button6.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=6;}; setTimeout(function(){button6.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 7)
	{button7.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=7;}; setTimeout(function(){button7.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 8)
	{button8.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=8;}; setTimeout(function(){button8.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 9)
	{button9.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=9;}; setTimeout(function(){button9.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 10)
	{button10.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=10;}; setTimeout(function(){button10.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 11)
	{button11.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=11;}; setTimeout(function(){button11.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 12)
	{button12.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=12;}; setTimeout(function(){button12.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 13)
	{button13.style.backgroundColor="red"; ; if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=13}; setTimeout(function(){button13.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 14)
	{button14.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=14;}; setTimeout(function(){button14.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 15)
	{button15.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=15;}; setTimeout(function(){button15.style.backgroundColor="white";},1000);};

    if(randomnumber5 == 16)
	{button16.style.backgroundColor="red";  if(soundplay5 == 1){sound.volume = 0.5; sound.play();globalnumber5=16;}; setTimeout(function(){button16.style.backgroundColor="white";},1000);};
	
	//freezescreen = 2;
	//clicknumberoftimes();
	},4800);

	setTimeout(function(){	
	
	if(randomnumber6 == 1)
	{button1.style.backgroundColor="red";  if(soundplay6 == 1){sound.volume = 0.5; sound.play();globalnumber6=1;}; setTimeout(function(){button1.style.backgroundColor="white";},1000);};

    if(randomnumber6 == 2)
	{button2.style.backgroundColor="red";  if(soundplay6 == 1){sound.volume = 0.5; sound.play();globalnumber6=2;}; setTimeout(function(){button2.style.backgroundColor="white";},1000);};

	if(randomnumber6 == 3)
	{button3.style.backgroundColor="red";  if(soundplay6 == 1){sound.volume = 0.5; sound.play();globalnumber6=3;}; setTimeout(function(){button3.style.backgroundColor="white";},1000);};

    if(randomnumber6 == 4)
	{button4.style.backgroundColor="red";  if(soundplay6 == 1){sound.volume = 0.5; sound.play();globalnumber6=4;}; setTimeout(function(){button4.style.backgroundColor="white";},1000);};

    if(randomnumber6 == 5)
	{button5.style.backgroundColor="red";  if(soundplay6 == 1){sound.volume = 0.5; sound.play();globalnumber6=5;}; setTimeout(function(){button5.style.backgroundColor="white";},1000);};

    if(randomnumber6 == 6)
	{button6.style.backgroundColor="red";  if(soundplay6 == 1){sound.volume = 0.5; sound.play();globalnumber6=6;}; setTimeout(function(){button6.style.backgroundColor="white";},1000);};

    if(randomnumber6 == 7)
	{button7.style.backgroundColor="red";  if(soundplay6 == 1){sound.volume = 0.5; sound.play();globalnumber6=7;}; setTimeout(function(){button7.style.backgroundColor="white";},1000);};

    if(randomnumber6 == 8)
	{button8.style.backgroundColor="red";  if(soundplay6 == 1){sound.volume = 0.5; sound.play();globalnumber6=8;}; setTimeout(function(){button8.style.backgroundColor="white";},1000);};

    if(randomnumber6 == 9)
	{button9.style.backgroundColor="red";  if(soundplay6 == 1){sound.volume = 0.5; sound.play();globalnumber6=9;}; setTimeout(function(){button9.style.backgroundColor="white";},1000);};

    if(randomnumber6 == 10)
	{button10.style.backgroundColor="red";  if(soundplay6 == 1){sound.volume = 0.5; sound.play();globalnumber6=10;}; setTimeout(function(){button10.style.backgroundColor="white";},1000);};

    if(randomnumber6 == 11)
	{button11.style.backgroundColor="red";  if(soundplay6 == 1){sound.volume = 0.5; sound.play();globalnumber6=11;}; setTimeout(function(){button11.style.backgroundColor="white";},1000);};

    if(randomnumber6 == 12)
	{button12.style.backgroundColor="red";  if(soundplay6 == 1){sound.volume = 0.5; sound.play();globalnumber6=12;}; setTimeout(function(){button12.style.backgroundColor="white";},1000);};

    if(randomnumber6 == 13)
	{button13.style.backgroundColor="red"; ; if(soundplay6 == 1){sound.volume = 0.5; sound.play();globalnumber6=13}; setTimeout(function(){button13.style.backgroundColor="white";},1000);};

    if(randomnumber6 == 14)
	{button14.style.backgroundColor="red";  if(soundplay6 == 1){sound.volume = 0.5; sound.play();globalnumber6=14;}; setTimeout(function(){button14.style.backgroundColor="white";},1000);};

    if(randomnumber6 == 15)
	{button15.style.backgroundColor="red";  if(soundplay6 == 1){sound.volume = 0.5; sound.play();globalnumber6=15;}; setTimeout(function(){button15.style.backgroundColor="white";},1000);};

    if(randomnumber6 == 16)
	{button16.style.backgroundColor="red";  if(soundplay6 == 1){sound.volume = 0.5; sound.play();globalnumber6=16;}; setTimeout(function(){button16.style.backgroundColor="white";},1000);};
	

	},6000);
	
	setTimeout(function(){restartin.style.display="block";	freezescreen = 2;
	clicknumberoftimes();},7200);
	
	
}//end of function



document.addEventListener("click", clicknumberoftimes); //everytime u click u will call this function


</script>
</body>
</html>