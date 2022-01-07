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
#image
{
	display: none;
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


	
   <center> <font id="currentscore" size="6pt"><strong>Current Score:  <a id="Display_Score">0</a></center></font></strong> 
   
   

   <div id="movinghint">
  <center><button type="button" id="hint_test" onclick="hinthint();"><strong><i>Hint?</i></strong></button></center>
  <p id="hint">Hint: Move your mouse!</p>
</div>

<div id="styleform1">
<form action="clevel2db.php" id="form11" method="POST">
    <input type="submit" id="highscore" value="View Highscores!">

</form>
</div>
	
<div id="styleform2">	
<form action="cupdate2.php" id="form2" method="POST" name="form2">
	 <input hidden type="text" name="Score1" id="Score" value="" />
<input type="submit" value="Save Highscore!" />
</form>
</div>
 <div id="movepictures">
 <img src="highscore.png" width="20px" height="30px" id="pic1"> 
	<img src="save.jpg" width="25px" height="25px" id="pic2">
	</div>

    <h2 hidden id="findmex">0</h2><h2 hidden id="findmey">0</h2>
    <img hidden id="image" src="jj.png"/>
	<audio hidden style="position:absolute" id="250" controls="controls" loop="loop" src="250_2s.mp3"></audio>
	<audio hidden style="position:absolute" id="500" controls="controls" loop="loop" src="500_2s.mp3"></audio>
	<audio hidden style="position:absolute" id="1000" controls="controls" loop="loop" src="1000_2s.mp3"></audio>
	<audio hidden style="position:absolute" id="2000" controls="controls" loop="loop" src="2000_2s.mp3"></audio>
	<audio hidden style="position:absolute" id="4000" controls="controls" loop="loop" src="4000hz.mp3"></audio>
	<audio hidden style="position:absolute" id="8000" controls="controls" loop="loop" src="8000_2s.mp3"></audio>
	
	<audio hidden style="position:absolute" id="myVid1" controls="controls" src="correct.mp3"></audio>

    <script type="text/javascript">
	//b.currentTime=0; b.play(); b.loop = true;},0); //start playing next after 3 sec 44100
    //(function(){b.pause(); b.currentTime=0;},3000); //47400
    var posX, posY; // global variables
    var backgroundAudio250 = document.getElementById("250");// global variables
	var backgroundAudio500 = document.getElementById("500");// global variables
	var backgroundAudio1000 = document.getElementById("1000");// global variables
	var backgroundAudio2000 = document.getElementById("2000");// global variables
	var backgroundAudio4000 = document.getElementById("4000");// global variables
    var backgroundAudio8000 = document.getElementById("8000");// global variables
		 
	var counter=0;
	document.getElementById('Score').value = counter; //change the hidden value
	var display_image= document.getElementById("image");
	 var cccc = document.addEventListener("click", click_test);

function hinthint()
{
	var hint_1= document.getElementById("hint");
	
	if(hint_1.style.display=='block')	
	{hint_1.style.display= 'none';}

	else 
	{hint_1.style.display='block';}
}


function randomizeImage() {
    var maxX = document.body.clientWidth - 180;
    var maxY = document.body.clientHeight - 155;
    posX = Math.floor(Math.random() * maxX);
    posY = Math.floor(Math.random() * maxY);
    var img = document.getElementById("image");
    img.style.left = posX + "px";
    img.style.top = posY + "px";

}
function doStuff() {

        var hint= document.getElementById("hint");
		

   if (event.clientX < posX + 100 //where the pic is
          && event.clientX > posX
          && event.clientY < posY + 146
          && event.clientY > posY) {
			  
        backgroundAudio500.play();
		backgroundAudio500.volume=0.1; // or do other stuff here
		backgroundAudio500.playbackRate = 2;

backgroundAudio250.pause(); //just to ensure all is not playing
backgroundAudio1000.pause();
backgroundAudio2000.pause();
backgroundAudio4000.pause();
backgroundAudio8000.pause();
backgroundAudio250.currentTime=0;
backgroundAudio1000.currentTime=0;
backgroundAudio2000.currentTime=0;
backgroundAudio4000.currentTime=0;
backgroundAudio8000.currentTime=0;
		hint.innerHTML= "Hint:Click now!";
    }
	
	else if (event.clientX < posX + 200 
          && event.clientX > posX - 100
          && event.clientY < posY + 196
          && event.clientY > posY - 50) {
        
		backgroundAudio250.play();
		backgroundAudio250.volume=0.2; // or do other stuff here
		backgroundAudio250.playbackRate = 2;

backgroundAudio500.pause(); //just to ensure all is not playing
backgroundAudio1000.pause();
backgroundAudio2000.pause();
backgroundAudio4000.pause();
backgroundAudio8000.pause();
backgroundAudio500.currentTime=0;
backgroundAudio1000.currentTime=0;
backgroundAudio2000.currentTime=0;
backgroundAudio4000.currentTime=0;
backgroundAudio8000.currentTime=0;

		hint.innerHTML= "Hint: You're very close!";
    }

	else if (event.clientX < posX + 300
          && event.clientX > posX - 200
          && event.clientY < posY + 246
          && event.clientY > posY - 100) {

        backgroundAudio8000.play();
		backgroundAudio8000.volume=0.002; // or do other stuff here
		backgroundAudio8000.playbackRate = 2;

	
backgroundAudio250.pause();
backgroundAudio500.pause();
backgroundAudio1000.pause(); //just to ensure all is not playing
backgroundAudio2000.pause();
backgroundAudio4000.pause();

backgroundAudio250.currentTime=0;
backgroundAudio500.currentTime=0;
backgroundAudio1000.currentTime=0;
backgroundAudio2000.currentTime=0;
backgroundAudio4000.currentTime=0;
		  
		hint.innerHTML= "Hint: Almost...";
    }
	
	else if (event.clientX < posX + 400
          && event.clientX > posX - 300
          && event.clientY < posY + 296
          && event.clientY > posY - 150) {

        backgroundAudio4000.play();
		backgroundAudio4000.volume=0.005; // or do other stuff here
		backgroundAudio4000.playbackRate = 2;

	
backgroundAudio250.pause();
backgroundAudio500.pause();
backgroundAudio1000.pause(); //just to ensure all is not playing
backgroundAudio2000.pause();
backgroundAudio8000.pause();

backgroundAudio250.currentTime=0;
backgroundAudio500.currentTime=0;
backgroundAudio1000.currentTime=0;
backgroundAudio2000.currentTime=0;
backgroundAudio8000.currentTime=0;
		  

		hint.innerHTML= "Hint: Slightly more...";
    }

	else if (event.clientX < posX + 500
          && event.clientX > posX - 400
          && event.clientY < posY + 346
          && event.clientY > posY - 200) {
        
		backgroundAudio2000.play();
		backgroundAudio2000.volume=0.05; // or do other stuff here
		backgroundAudio2000.playbackRate = 2;

	
backgroundAudio250.pause();
backgroundAudio500.pause();
backgroundAudio1000.pause(); //just to ensure all is not playing
backgroundAudio4000.pause();
backgroundAudio8000.pause();

backgroundAudio250.currentTime=0;
backgroundAudio500.currentTime=0;
backgroundAudio1000.currentTime=0;
backgroundAudio4000.currentTime=0;
backgroundAudio8000.currentTime=0;
		

		hint.innerHTML= "Hint: Getting there...";
    }
		
	else if (event.clientX < posX + 680
          && event.clientX > posX - 580
          && event.clientY < posY + 396
          && event.clientY > posY - 250) {
        
		backgroundAudio1000.play();
		backgroundAudio1000.volume=0.05; // or do other stuff here
		backgroundAudio1000.playbackRate = 2;

	
backgroundAudio250.pause();
backgroundAudio500.pause();
backgroundAudio2000.pause(); //just to ensure all is not playing
backgroundAudio4000.pause();
backgroundAudio8000.pause();

backgroundAudio250.currentTime=0;
backgroundAudio500.currentTime=0;
backgroundAudio2000.currentTime=0;
backgroundAudio4000.currentTime=0;
backgroundAudio8000.currentTime=0;

		hint.innerHTML= "Hint: Dont give up!";
    }
	
	else if (event.clientX < posX + 880
          && event.clientX > posX - 780
          && event.clientY < posY + 446
          && event.clientY > posY - 300) {
        
	    backgroundAudio500.play();
		backgroundAudio500.volume=0.1; // or do other stuff here
		backgroundAudio500.playbackRate = 2;

backgroundAudio250.pause(); //just to ensure all is not playing
backgroundAudio1000.pause();
backgroundAudio2000.pause();
backgroundAudio4000.pause();
backgroundAudio8000.pause();
backgroundAudio250.currentTime=0;
backgroundAudio1000.currentTime=0;
backgroundAudio2000.currentTime=0;
backgroundAudio4000.currentTime=0;
backgroundAudio8000.currentTime=0;

		hint.innerHTML= "Hint: Continue to move your mouse!";
    }
	
	else 
	{
backgroundAudio250.volume=0.0;
backgroundAudio500.volume=0.0;
backgroundAudio1000.volume=0.0;
backgroundAudio2000.volume=0.0;
backgroundAudio4000.volume=0.0;
backgroundAudio8000.volume=0.0;

hint.innerHTML= "Hint: Move your mouse!";
}
	

}
function click_test()
{
	if(event.clientX < posX + 100
          && event.clientX > posX
          && event.clientY < posY + 146
          && event.clientY > posY)
		  {
			   var xyzxc = document.getElementById("myVid1");
			   xyzxc.volume = 0.39;
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
			},1200);
			
	}
	
	else
	{}
	
	document.getElementById('Score').value = counter;
	
}


window.onload = function onstarttt()  //initial no volume
{
var backgroundAudio=document.getElementById("myVid");
alert("Please be advised: \n\nTurn down the master volume of your computer as the sound might be quite disturbing\n\nAlso take note that the pitch is HIGH");
backgroundAudio250.volume=0.0; //set all to zero
backgroundAudio500.volume=0.0;
backgroundAudio1000.volume=0.0;
backgroundAudio2000.volume=0.0;
backgroundAudio4000.volume=0.0;
backgroundAudio8000.volume=0.0;
}
/*function mousemoving()
{
	var test3= document.getElementById('x');
	var test4= document.getElementById('y');
	test3.innerHTML= event.clientX;
	test4.innerHTML= event.clientY;
	var test6= document.getElementById('posx');
	var test7= document.getElementById('posy');
	test6.innerHTML= posX;
	test7.innerHTML= posY;
}
*/
randomizeImage(); // call first time initialize it

//document.addEventListener("mousemove", mousemoving) used this to check
document.addEventListener("mousemove", doStuff) //listen for mouse movement
document.addEventListener("click", click_test)
    </script>
	


</body>
</html>