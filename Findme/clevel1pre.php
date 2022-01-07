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
position:absolute;

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
position:absolute;

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
	background-color:#1a1a1a;
	color: white;
	padding: 7px 15px;
    text-decoration: none;
    font-size: 12px;
	border-radius: 12px;
	cursor:pointer;
	z-index:1;
	}
#250
{
	position:absolute;
}
#move250
{
	position:relative;
	text-align:center;
	right:330px;
}
#soundbar1
{
	position:relative;
	text-align:center;
	z-index:2;
	top:50px;
	right:40px;
}
#movebuttons
{
	position:relative;
	text-align:center;
	padding-left:250px;
    top:90px;
		z-index:1;
}
#movebuttons1
{
	position:relative;
	text-align:center;
    top:90px;
	padding-left:90px;
	z-index:1;
}
#soundbar2
{
	position:relative;
	text-align:center;
	z-index:2;
	top:-315px;
	right:40px;
}
#movebuttons3
{
	position:relative;
	text-align:center;
	padding-left:250px;
    top:-270px;

}
#movebuttons4
{
	position:relative;
	text-align:center;
    top:-270px;
	padding-left:90px;

}
#move8000w
{
position:relative;
text-align:center;
	padding-left:90px;
	top:-377px;
}

#soundbar3
{
	position:relative;
	text-align:center;
	z-index:2;
	top:-185px;
	right:40px;
}
#movebuttons5
{
	position:relative;
	text-align:center;
	padding-left:250px;
    top:-144px;

}
#movebuttons6
{
	position:relative;
	text-align:center;
    top:-144px;
	padding-left:90px;

}
#move4000w
{
position:relative;
text-align:center;
padding-left:90px;
top:-245px;
}


#soundbar4
{
	position:relative;
	text-align:center;
	z-index:2;
	top:-65px;
	right:40px;
}
#movebuttons7
{
	position:relative;
	text-align:center;
	padding-left:250px;
    top:-24px;

}
#movebuttons8
{
	position:relative;
	text-align:center;
    top:-24px;
	padding-left:90px;

}
#move2000w
{
position:relative;
text-align:center;
padding-left:90px;
top:-120px;
}
#buttonstart5
{
	position:absolute;
	background-color:orange;
	color: black;
	padding: 7px 15px;
    text-decoration: none;
    font-size: 12px;
	border-radius: 12px;
	cursor:pointer;
}
#continue
{
	padding-left:320px;
	position:relative;
	top:-50px;
	
}
#body12 
{
	padding-left:250px;
	padding-bottom:100px;
}

#soundbar5
{
	position:relative;
	text-align:center;
	z-index:2;
	top:45px;
	right:380px;
}
#movebuttons9
{
	position:relative;
	text-align:center;
	right:210px;
    top:94px;

}
#movebuttons10
{
	position:relative;
	text-align:center;
    top:94px;
	right:295px;

}
#move1000w
{
position:relative;
text-align:center;
right:300px;
top:-20px;
}

#soundbar6
{
	position:relative;
	text-align:center;
	z-index:2;
	top:45px;
	right:720px;
}
#movebuttons11
{
	position:relative;
	text-align:center;
	right:550px;
    top:94px;

}
#movebuttons12
{
	position:relative;
	text-align:center;
    top:94px;
	right:635px;

}
#move500w
{
position:relative;
text-align:center;
right:620px;
top:-20px;
}

#boxbox
{
	position:absolute;
}
#moveimg1
{
	position:relative;
	text-align:center;
	padding-left:155px;
	top:-598px;
	
}
</style>



<body bgcolor="#E6E6FA">
<div id="body12">
<font size="4"><center><h1 style="position:relative; top:60px; padding-left:200px;z-index:1;">&nbsp;&nbsp;&nbsp;&nbsp;~250HZ~</h1></center></font>

<div id="soundbar1">
<audio style="position:absolute; border:3px solid red;" id="myVid1" controls="controls" loop="loop" src="250_2s.mp3"></audio>
</div>
<div id="movebuttons">
<button id = "buttonstart" onclick="pausesound1();" type="button">Stop</button>
</div>
<div id="movebuttons1">
<button id = "buttonstart1" onclick="playsound1();" type="button">Play</button>
</div>

<div id="move250">
<img src="freqgame250.png" id="250">
</div>
<div id="move8000w">
<font size="4" style="position:absolute;"><center><h1 style="position:absolute;z-index:1;">~8000HZ~</h1></center></font>
</div>
<div id="soundbar2">
<center><audio style="position:absolute; border:3px solid blue;" id="myVid2" controls="controls" loop="loop" src="8000_2s.mp3"></audio></center>
</div>
 
 <div id="movebuttons3">
<button id = "buttonstart" onclick="pausesound2();" type="button">Stop</button>
</div>
<div id="movebuttons4">
<button id = "buttonstart1" onclick="playsound2();" type="button">Play</button>
</div>

<div id="move4000w">
<font size="4" style="position:absolute;"><center><h1 style="position:absolute;z-index:1;">~4000HZ~</h1></center></font>
</div>
<div id="soundbar3">
<center><audio style="position:absolute; border:3px solid skyblue;" id="myVid3" controls="controls" loop="loop" src="4000hz.mp3"></audio></center>
</div>
 
 <div id="movebuttons5">
<button id = "buttonstart" onclick="pausesound3();" type="button">Stop</button>
</div>
<div id="movebuttons6">
<button id = "buttonstart1" onclick="playsound3();" type="button">Play</button>
</div>

 <div id="move2000w">
<font size="4" style="position:absolute;"><center><h1 style="position:absolute;z-index:1;">~2000HZ~</h1></center></font>
</div>
<div id="soundbar4">
<center><audio style="position:absolute; border:3px solid green;" id="myVid4" controls="controls" loop="loop" src="2000_2s.mp3"></audio></center>
</div>
 
 <div id="movebuttons7">
<button id = "buttonstart" onclick="pausesound4();" type="button">Stop</button>
</div>
<div id="movebuttons8">
<button id = "buttonstart1" onclick="playsound4();" type="button">Play</button>
</div>


 <div id="move1000w">
<font size="4" style="position:absolute;"><center><h1 style="position:absolute;z-index:1;">~1000HZ~</h1></center></font>
</div>
<div id="soundbar5">
<center><audio style="position:absolute; border:3px solid brown;" id="myVid5" controls="controls" loop="loop" src="1000_2s.mp3"></audio></center>
</div>
 
 <div id="movebuttons9">
<button id = "buttonstart" onclick="pausesound5();" type="button">Stop</button>
</div>
<div id="movebuttons10">
<button id = "buttonstart1" onclick="playsound5();" type="button">Play</button>
</div>

 <div id="move500w">
<font size="4" style="position:absolute;"><center><h1 style="position:absolute;z-index:1;">~500HZ~</h1></center></font>
</div>
<div id="soundbar6">
<center><audio style="position:absolute; border:3px solid black;" id="myVid6" controls="controls" loop="loop" src="500_2s.mp3"></audio></center>
</div>
 
 <div id="movebuttons11">
<button id = "buttonstart" onclick="pausesound6();" type="button">Stop</button>
</div>
<div id="movebuttons12">
<button id = "buttonstart1" onclick="playsound6();" type="button">Play</button>
</div>
</div>
<div id="moveimg1">
<img src="boxwidth.png" id="boxbox">
</div>

<div id="continue">
<center><a href="clevel1.php"><button id = "buttonstart5" type="button">Click here to continue :)</button></center></a>
</div>
 <script>
 function playsound1()
 {
 var m = document.getElementById("myVid1");
 m.volume = 0.5;
 m.play();
 }
 function pausesound1()
 {
 var m = document.getElementById("myVid1");
 m.pause(); m.currentTime=0;
 }
 function playsound2()
 {
 var m = document.getElementById("myVid2");
 m.volume = 0.01;
 m.play();
 }
 function pausesound2()
 {
 var m = document.getElementById("myVid2");
 m.pause(); m.currentTime=0;
 }
  function playsound3()
 {
 var m = document.getElementById("myVid3");
 m.volume = 0.1;
 m.play();
 }
 function pausesound3()
 {
 var m = document.getElementById("myVid3");
 m.pause(); m.currentTime=0;
 }
   function playsound4()
 {
 var m = document.getElementById("myVid4");
 m.volume = 0.2;
 m.play();
 }
 function pausesound4()
 {
 var m = document.getElementById("myVid4");
 m.pause(); m.currentTime=0;
 }
 function playsound5()
 {
 var m = document.getElementById("myVid5");
 m.volume = 0.4;
 m.play();
 }
 function pausesound5()
 {
 var m = document.getElementById("myVid5");
 m.pause(); m.currentTime=0;
 }
 function playsound6()
 {
 var m = document.getElementById("myVid6");
 m.volume = 0.2;
 m.play();
 }
 function pausesound6()
 {
 var m = document.getElementById("myVid6");
 m.pause(); m.currentTime=0;
 }
 </script>
 
 
 
 
 
</body>
</html>