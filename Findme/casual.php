<?php

if(!isset($_COOKIE["login"]))
	header("location:login.php");
?>

<html>
<head>
    <style>
       
	   BODY {min-height: 218px; margin: 0; border: 2px solid #000;}
       IMG {position: absolute;}
	   
input[type=submit]
{
    padding:5px 15px; 
    background:#ffff00; 
    border:1px solid black;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
}
button[type=button]
{
	padding:5px 15px; 
    background:white; 
    border: 3px solid lightblue;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
	font-size:12pt;
font-family: Consolas;
}
#hint
{
	text-align: center;
	display: none;
	font-family: Consolas;
	
}
#movinghint
{
	padding-bottom:15px;
	padding-top:15px;
	
}
#currentscore
{
	font-family:  Papyrus;	
	position:relative;
	
}
#highscore
{
position:absolute;
}
#Score
{
position:absolute;
}
#form11
{
	position:relative;
	z-index:1;
	text-align:center;
	left:-200px;
	top:20px;
}
#form2
{
	position:relative;
	text-align:center;
	top:20px;
	padding-left:250px;
}

#pic1
{
	position:absolute;
	padding-top:22px;
	z-index:-2;
}
#pic2
{
	position:absolute;
	padding-left:255px;
	padding-top:26px;
	z-index:-2;
}
#time_out12
{
	position:absolute;
		font-family: "Lucida Bright";
		font-size:30pt;
padding-left:110px;
}
#time_out123
{
	position:absolute;
		font-family: "Lucida Bright";
		font-size:15pt;
padding-left:10px;
padding-top:31px;
}
#image
{
	display:none;
}
#image1212
{
	display:none;
}
#Medal1
{
	display: none;
	position: absolute;
	width: 64px;
	height:93px;
	z-index:-2;
}

#styletimer
{
	position:relative;
}
#movepictures
{
	position:relative;
	text-align:center;
	left:-140px;
	top:-74px;
}
    </style>
    </head>
<body bgcolor="#e6e6fa">

<div id="styletimer">
<p id="time_out123">Time left:</p><Strong><p id="time_out12">120</p></strong>
	</div>
   <center> <font id="currentscore" size="6pt"><strong>Current Score:  <a id="Display_Score">0</a></center></font></strong> 
   
  

<div id="styleform1" onclick="checkbuttons()">
<form action="casualdb.php" id="form11" method="POST">
    <input type="submit" id="highscore" value="View Highscores!">

</form>
</div>

<div id="styleform2" onclick="checkbuttons()">	
<form action="update.php" id="form2" method="POST" name="form2">
	 <input hidden type="text" name="Score1" id="Score" value="" />
<input type="submit" value="Save Highscore!" />
</form>
</div>


    <h2 hidden id="findmex">0</h2><h2 hidden id="findmey">0</h2>
    <img id="image" src="jj.png" />
	<img id="image1212" src="waving.png" width="120px" height="150px" />
	<audio hidden style="position:absolute" id="myVid" autoplay="autoplay" controls="controls" loop="loop" src="hello.mp3"></audio>
	<audio hidden style="position:absolute" id="myVid2" autoplay="autoplay" controls="controls" loop="loop" src=""></audio>
	<audio hidden style="position:absolute" id="myVid1" controls="controls" src="correct.mp3"></audio>
	
	 <div id="movepictures">
 <img src="highscore.png" width="20px" height="30px" id="pic1"> 
	<img src="save.jpg" width="25px" height="25px" id="pic2">
	</div>
	<p hidden id="x"></p>
	<p hidden id="y"></p>
	
	
	<script type="text/javascript">
	var time_out=120;
    var posX, posY; // global variables
    var backgroundAudio=document.getElementById("myVid");// global variables
	var counter=0;
	var display_image= document.getElementById("image");
	var display_image1212= document.getElementById("image1212");
	//var imgbadge1 = document.getElementById("Medal1");
    
	
	//document.getElementById('Score').value = counter; //change the hidden value
  var cccc = document.addEventListener("click", click_test);
	
	function myCounter()
	{
		if(time_out<=120 && time_out>0){
    document.getElementById("time_out12").innerHTML = --time_out;
    }
	}  

	function checkmyCounter()
	{
		if(time_out==15)
		{
			var f = document.getElementById("time_out12");
			//document.getElementById("time_out12").style.fontSize = "20pt";
			document.getElementById("time_out12").style.color = "red";
			setInterval(function(){f.style.display =  (f.style.display == 'none' ? '' : 'none');}, 500);
	
	    }
		
		
		if(time_out == 0)
		{ 
	document.getElementById("form2").submit();
	   }
	}


function randomizeImage() {
    var maxX = document.body.clientWidth - 180;
    var maxY = document.body.clientHeight - 155;
    posX = Math.floor(Math.random() * maxX);
    posY = Math.floor(Math.random() * maxY);
    var img = document.getElementById("image");
    img.style.left = posX + "px";
    img.style.top = posY + "px";
    display_image1212.style.left = posX + "px";
    display_image1212.style.top = posY + "px";	
}
function doStuff() {

       
		

   if (event.clientX < posX + 100
          && event.clientX > posX
          && event.clientY < posY + 146
          && event.clientY > posY) {
        
		backgroundAudio.volume=0.38; // or do other stuff here
		backgroundAudio.playbackRate = 1.03;
    }
	
	else if (event.clientX < posX + 160
          && event.clientX > posX - 60
          && event.clientY < posY + 186
          && event.clientY > posY - 40) {
        
		backgroundAudio.volume=0.15; // or do other stuff here
		backgroundAudio.playbackRate = 1;
    }

	else if (event.clientX < posX + 200
          && event.clientX > posX - 100
          && event.clientY < posY + 226
          && event.clientY > posY - 80) {
        
		backgroundAudio.volume=0.095; // or do other stuff here
	backgroundAudio.playbackRate = 1;
    }
	
	else if (event.clientX < posX + 240
          && event.clientX > posX - 140
          && event.clientY < posY + 266
          && event.clientY > posY - 120) {
        
		backgroundAudio.volume=0.075; // or do other stuff here
		backgroundAudio.playbackRate = 1;
		
    }

	else if (event.clientX < posX + 480
          && event.clientX > posX - 380
          && event.clientY < posY + 306
          && event.clientY > posY - 160) {
        
		backgroundAudio.volume=0.055; // or do other stuff here
		backgroundAudio.playbackRate = 1;
		
    }
		
	else if (event.clientX < posX + 680
          && event.clientX > posX - 580
          && event.clientY < posY + 346
          && event.clientY > posY - 200) {
        
		backgroundAudio.volume=0.035; // or do other stuff here
		backgroundAudio.playbackRate = 1;
		
    }
	
	else if (event.clientX < posX + 880
          && event.clientX > posX - 780
          && event.clientY < posY + 386
          && event.clientY > posY - 240) {
        
		backgroundAudio.volume=0.025; // or do other stuff here
		backgroundAudio.playbackRate = 1;
		
    }
	
	else 
	{backgroundAudio.volume=0.0;
backgroundAudio.playbackRate = 1;
    }
	
	
	
}
function click_test()
{
	if(event.clientX < posX + 100
          && event.clientX > posX
          && event.clientY < posY + 146
          && event.clientY > posY)
		  {
			  if (counter <= 49)
			  {
			  var xyzxc = document.getElementById("myVid1");
			  xyzxc.volume=0.29;
			  xyzxc.play();
			  cccc = document.removeEventListener("click", click_test); //off event listener
			  var Clearthis= setInterval(function(){display_image.style.display =  (display_image.style.display == 'block' ? '' : 'block');}, 300);
			  
			setTimeout(function()
			{
				clearInterval(Clearthis);
				 counter= counter+10;
	var test= document.getElementById('Score');
	var test1= document.getElementById('Display_Score');
	test.innerHTML= counter;
	test1.innerHTML= counter;
	display_image.style.display="none";  //fail safe to always reset to no image
	
	randomizeImage();
	cccc = document.addEventListener("click", click_test); //add back event listener
			},1200); //stop blinking after 1200mili seconds which is 1.2sx
			  }
			  else
			  {
				  var xyzxc = document.getElementById("myVid1");
			  xyzxc.play();
			  cccc = document.removeEventListener("click", click_test); //off event listener
			  var Clearthis= setInterval(function(){display_image1212.style.display =  (display_image1212.style.display == 'block' ? '' : 'block');}, 300);
			  
			setTimeout(function()
			{
				clearInterval(Clearthis);
				 counter= counter+10;
	var test= document.getElementById('Score');
	var test1= document.getElementById('Display_Score');
	test.innerHTML= counter;
	test1.innerHTML= counter;
	display_image1212.style.display="none";  //fail safe to always reset to no image
	
	randomizeImage();
	cccc = document.addEventListener("click", click_test); //add back event listener
			},1200); //stop blinking after 1200mili seconds which is 1.2s
			  }
	
	
	}
	

	else {
		counter--;
	var test= document.getElementById('Score');
	var test1= document.getElementById('Display_Score');
	test.innerHTML= counter;
	test1.innerHTML= counter;
	}
	
	
	document.getElementById('Score').value = counter;
	
}


window.onload = function onstarttt()  //initial no volume
{
var backgroundAudio=document.getElementById("myVid");
backgroundAudio.volume=0.0;
}
/*function mousemoving()
{
	var test3= document.getElementById('x');
	var test4= document.getElementById('y');
	test3.innerHTML= event.clientX;
	test4.innerHTML= event.clientY; //testing feature
}
*/
function checkbuttons()
{
	counter++;
}
randomizeImage(); // call first time initialize it

setInterval(myCounter,1000);
setInterval(checkmyCounter,3100);
//document.addEventListener("mousemove", mousemoving) //testing feature
document.addEventListener("mousemove", doStuff) //listen for mouse movement
//setInterval(function(){document.addEventListener("click", click_test);},1800);

    </script>
	


</body>
</html>