<?php

if(!isset($_COOKIE["login"]))
	header("location:login.php");
?>

<html>
<head>
 <link rel="stylesheet" type="text/css" href="style/style.css" />
 </head>
 <style>
 body
 {
	 min-width:93%;
	 
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
top:-140px;

}
     #text1
{
font-size:45pt;
font-family: segoe script;		
position: relative;
text-align: center;

}
		#image1
		{
			position:absolute;
			z-index:2;
		
		}
		#move1
		{
            text-align:center;
			position: relative;
			top:-7px;
			left:-76px;
		
			
		}
		#image2
		{
			position:absolute;
			z-index:2;
				
		}
		#move2
		{
		 text-align:center;
			position: relative;
			left:-76px;
			top:63px;
		
		}
		
		#image3
		{
			position:absolute;
			z-index:2;
		}
		#move3
		{
			
			text-align:center;
			position: relative;
			left:-76px;
			top:133px;
		}
		
		#image4
		{
			position:absolute;
			z-index:2;
			
		}
		#move4
		{
				
			text-align:center;
			position: relative;
			left:-76px;
			top:203px;
		}
		#image5
		{
			position:absolute;
			z-index:2;
		}
		#move5
		{
			text-align:center;
			position: relative;
			left:-76px;
			top:273px;
			
		}
		#image6
		{
			position:absolute;
			z-index:2;
		}
		#move6
		{
			text-align:center;
			position: relative;
			left:-76px;
			top:343px;
			
		}
		#casual
		{
			position:absolute;
			z-index:2;
		}
		#move7
		{
			text-align:center;
			position: relative;
			left:-76px;
			top:413px;
		}
		
		#square
		{
			position:absolute;
			z-index:-2;
		}
		#move8
		{
			text-align:center;
			position: relative;
			left:-190px;
			top:-58px;		
		
		}
		
		#i1
		{
			position:absolute;
			cursor:pointer;
		}
		#i2
		{
			position:absolute;
			cursor:pointer;
		}
		#i3
		{
			position:absolute;
			cursor:pointer;
		}
		#i4
		{
			position:absolute;
			cursor:pointer;
		}
		
	    #i5
		{
			position:absolute;
			cursor:pointer;
		}
		#i6
		{
			position:absolute;
			cursor:pointer;
		}
		#i7
		{
			position:absolute;
			cursor:pointer;
		}
		#movei1
		{
			position: relative;
			z-index:1;
			text-align:center;
			left:-120px;
			top:10px;
	
			
		}
		#speech1
		{
			position:absolute;
			
		
		}
		#movebubble1
		{
			
			position:relative;
			text-align:center;
			display: none;
			left:-270px;
			top:-5px;
			
		}
		#movei2
		{
			position: relative;
			z-index:1;
			text-align:center;
			left:-120px;
			top:80px;
		}
		#speech2
		{
			position:absolute;
		
		}
		#movebubble2
		{
			position:relative;
			text-align:center;
			display: none;
			left:-270px;
			top:63px;
		}
		#movei3
		{
			position: relative;
			z-index:1;
			text-align:center;
			left:-120px;
			top:150px;
			
		}
		#speech3
		{
			position:absolute;
			
			
		}
		#movebubble3
		{
			position:relative;
			text-align:center;
			display: none;
			left:-270px;
			top:131px;
			
			
		}
		#movei4
		{
			position: relative;
			z-index:1;
			text-align:center;
			left:-120px;
			top:220px;
			
		}
		#speech4
		{
			position:absolute;
		
		}
		#movebubble4
		{
			position:relative;
			text-align:center;
			display: none;
			left:-270px;
			top:199px;
			z-index:5;
			
			
		}
		#movei5
		{
			position: relative;
			z-index:1;
			text-align:center;
		left:-120px;
			top:290px;
			
		}
		#speech5
		{
			position:absolute;
	
		}
		#movebubble5
		{
			position:relative;
			text-align:center;
			display: none;
			left:-270px;
			top:267px;
		}
		#movei6
		{
			position: relative;
			z-index:1;
			text-align:center;
		left:-120px;
			top:360px;
			
		}
		#speech6
		{
			position:absolute;

		}
		#movebubble6
		{
			position:relative;
			text-align:center;
			display: none;
			left:-270px;
			top:335px;
		}
		#movei7
		{
		position: relative;
			z-index:1;
			text-align:center;
		left:-120px;
			top:430px;
			
		}
		#speech7
		{
			position:absolute;
	
		}
		#movebubble7
		{
			position: relative;
			text-align:center;
		    display:none;
			font-size:13pt;
			
		}
		#decide
		{
			position:absolute;
		}
		#move9
		{
			position:relative;
			text-align:center;
			left:-405px;
			top:152px;
			cursor:pointer;
			/* z-index: -1; */
			
		}
		#bracket
		{
			position:absolute;
		}
	    #move10
		{
			position:relative;
			text-align:center;
			z-index:-1;
			left:-240px;
		}
		#signman
		{
			position:relative;
			text-align:center;
			right:470px;
			top:120px;
		}
 </style>
 <body bgcolor="#E6E6FA">
 
  <a href="selectmode.php" style="position:absolute; z-index:2;"><u>Back</u></a>
 
    <font color="black"><strong><p id="text1">Volume</p></font></strong>
	<div id="movepics">
    <img src="stickman.png" width="53px" height="114px" id="image10">
    <img src="stickman1.png" width="53px" height="114px" id="image11">
	</div>

	<div id="move1">
	<a href="level1.php"><img src="level1.png" width="158px" height="69px" id="image1"></a>
	</div>
	
	<div id="movei1">
	<img src="i.png" id="i1" onclick="popout1();">
    </div>
	<div id="movebubble1">
    <img src="speechbubble250.jpg" width="90px" height="92px" id="speech1">
    </div>
	
	<div id="move2">
	<a href="level2.php"><img src="level2.png" width="158px" height="68px" id="image2"></a>
	</div>
	
	<div id="movei2">
	<img src="i.png" id="i2" onclick="popout2();">
    </div>
	<div id="movebubble2">
    <img src="speechbubble500.jpg" id="speech2">
    </div>
	
	<div id="move3">
	<a href="level3.php"><img src="level3.png" width="158px" height="68px" id="image3"></a>
	</div>
	
	<div id="movei3">
	<img src="i.png" id="i3" onclick="popout3();">
    </div>
	<div id="movebubble3">
    <img src="speechbubble1000.jpg" id="speech3">
    </div>
	
	<div id="move4">
	<a href="level4.php"><img src="level4.png" width="158px" height="68px" id="image4"></a>
	</div>
	
	<div id="movei4">
	<img src="i.png" id="i4" onclick="popout4();">
    </div>
	<div id="movebubble4">
    <img src="speechbubble2000.jpg" id="speech4">
    </div>
	
	<div id="move5">
	<a href="level5.php"><img src="level5.png" width="158px" height="68px" id="image5"></a>
	</div>
	
	<div id="movei5">
	<img src="i.png" id="i5" onclick="popout5();">
    </div>
	<div id="movebubble5">
    <img src="speechbubble4000.jpg" id="speech5">
    </div>
	
	<div id="move6">
	<a href="level6.php"><img src="level6.png" width="158px" height="68px" id="image6"></a>
	</div>
	
	<div id="movei6">
	<img src="i.png" id="i6" onclick="popout6();">
    </div>
	<div id="movebubble6">
    <img src="speechbubble8000.jpg" id="speech6">
    </div>
	
	<div id="move7">
	<a href="casual.php"><img src="compete.png" width="158px" height="68px" id="casual"></a>
	</div>
	
	<div id="movei7">
	<img src="i.png" id="i7" onclick="popout7();">
    </div>
	<div id="movebubble7">
    <p id="speech7"><strong>Every wrong click -1 point!<br>Every correct click +10 points!<br>Time limit of only 120seconds!</p></strong>
    </div>
	
	<div id="move8">
	<img src="roundedsquare.png" width="383px" height="593px" id="square">
	</div>
	
	<div id="move9">
	<img src="decide.png" width="158px" onclick="chooselevel()" height="68px" id="decide">
	</div>
	
	<div id="move10">
	<img src="bracket.png" width="70px" height="400px" id="bracket">
	</div>
	
	<div id="signman">
	 <img src="stickman3.png" width="53px" height="114px" id="image10">
	</div>
	
	<script type="text/javascript">
	 function chooselevel()
 {

   //var xxx = document.getElementById("test");  //testing
   var whatintheworld = 7; //total 6 mode but it rounds down
   var multiple = Math.floor(Math.random() * whatintheworld);
   //xxx.innerHTML= multiple; //testing
   if(multiple == 1)
   {
	  window.location.href = "level1.php";
   }
    if(multiple == 2)
   {
	   window.location.href = "level2.php";
   }
    if(multiple == 3)
   {
	  window.location.href = "level3.php";
   }
    if(multiple == 4)
   {
	  window.location.href = "level4.php";
   }
    if(multiple == 5)
   {
	  window.location.href = "level5.php";
   }
    if(multiple == 6)
   {
	  window.location.href = "level6.php";
   }

 }

	function popout1()
{
	var hint_pop1= document.getElementById("movebubble1");
	
	if(hint_pop1.style.display=='block')	
	{hint_pop1.style.display= 'none';}
	else 
	{hint_pop1.style.display='block';}
}
function popout2()
{
	var hint_pop1= document.getElementById("movebubble2");
	if(hint_pop1.style.display=='block')	
	{hint_pop1.style.display= 'none';}
	else 
	{hint_pop1.style.display='block';}
}
function popout3()
{
	var hint_pop1= document.getElementById("movebubble3");
	if(hint_pop1.style.display=='block')	
	{hint_pop1.style.display= 'none';}
	else 
	{hint_pop1.style.display='block';}
}
function popout4()
{
	var hint_pop1= document.getElementById("movebubble4");
	if(hint_pop1.style.display=='block')	
	{hint_pop1.style.display= 'none';}
	else 
	{hint_pop1.style.display='block';}
}
function popout5()
{
	var hint_pop1= document.getElementById("movebubble5");
	if(hint_pop1.style.display=='block')	
	{hint_pop1.style.display= 'none';}
	else 
	{hint_pop1.style.display='block';}
}
function popout6()
{
	var hint_pop1= document.getElementById("movebubble6");
	if(hint_pop1.style.display=='block')	
	{hint_pop1.style.display= 'none';}
	else 
	{hint_pop1.style.display='block';}
}
function popout7()
{
	alert("Every wrong click -1 point! \nEvery correct click +10 points! \nTime limit of only 120seconds!")
}
	</script>

 </body>
 </html>