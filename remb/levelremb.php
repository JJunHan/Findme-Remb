<?php

if(!isset($_COOKIE["login"]))
	header("location:loginre.php");
?>

<html>
<head>
 <link rel="stylesheet" type="text/css" href="style/style.css" />
 </head>
 <style>

       #image10
{
position: absolute;
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
			top:-55px;		
		
		}

		#decide
		{
			position:absolute;
		}
		#move9
		{
			position:relative;
			text-align:center;
			left:-435px;
			top:152px;
			cursor:pointer;
			
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
			right:500px;
			top:120px;
		}
 </style>
 <body bgcolor="#E6E6FA">
 
  <a href="loginre.php" style="position:absolute; z-index:2;"><u>Back</u></a>
 
    <font color="black"><strong><p id="text1">Levels</p></font></strong>

	<div id="move1">
	<a href="remb1.php"><img src="level1.png" width="158px" height="69px" id="image1"></a>
	</div>
	
	<div id="move2">
	<a href="remb2.php"><img src="level2.png" width="158px" height="68px" id="image2"></a>
	</div>
	
	<div id="move3">
	<a href="remb3.php"><img src="level3.png" width="158px" height="68px" id="image3"></a>
	</div>
	
	<div id="move4">
	<a href="remb4.php"><img src="level4.png" width="158px" height="68px" id="image4"></a>
	</div>
	
	<div id="move5">
	<a href="remb5.php"><img src="level5.png" width="158px" height="68px" id="image5"></a>
	</div>
	
	<div id="move6">
	<a href="remb6.php"><img src="level6.png" width="158px" height="68px" id="image6"></a>
	</div>
	
	<div id="move8">
	<img src="roundedsquare.png" width="383px" height="520px" id="square">
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
	  window.location.href = "remb1.php";
   }
    if(multiple == 2)
   {
	   window.location.href = "remb2.php";
   }
    if(multiple == 3)
   {
	  window.location.href = "remb3.php";
   }
    if(multiple == 4)
   {
	  window.location.href = "remb4.php";
   }
    if(multiple == 5)
   {
	  window.location.href = "remb5.php";
   }
    if(multiple == 6)
   {
	  window.location.href = "remb6.php";
   }

 }

	
	</script>
	
	
	


 
 
 
 </body>
 </html>