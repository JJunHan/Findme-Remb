
<html>
<head>
  <style>

#image6
{
z-index: -1;
position:absolute;
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
 #textbox
{
	position: relative;
	text-align:center;
	left:-90px;
	top:-97px;

	
}
#text1
{
font-size:45pt;
font-family: segoe script;	
position: relative;
text-align: center;
}
input[type=text] 
{
width: 150px;
padding: 6px 15px 7px;
margin: 8px 0;
border: 4px solid #b35900;
box-sizing: border-box;
position: relative;	
left:81px;
}
#styling2
{
			position: relative;
text-align:center;
left:-50px;
		}
#styling
		{

			padding-top: 1px;
			padding-left:140px;
		}
		
		
	  
input[type=submit] {
    padding:5px 15px; 
    background:#ccc; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 

}
input[type=reset] {
    padding:5px 15px; 
    background:#ccc; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 

	
}

#movesign
{
	
	position: relative;
	text-align:center;
	top:-50px;
	left:-166px;

}
#movepics
{

position: relative;
text-align:center;
left:-227px;
top:-150px;
}
#grass
{
	position:absolute;
	z-index:-1;
}
#movegrass
{
		text:align:center;
		position:relative;
		text-align:center;
		left:-300px;
		top:20px;
		
}
#textinput
{
	z-index:2;
}
#words
{
	position:relative;
	text-align:center;
    top:234px;
	padding-left:10px;
}
    </style>
</head>

<body bgcolor="#E6E6FA">

<font color="black"><strong><p id="text1">FIND-ME</p></font></strong>
<div id="movepics">
<img src="stickman.png" width="53px" height="114px" id="image10">
<img src="stickman1.png" width="53px" height="114px" id="image11">
</div>
<div id="movesign">
<img src="sign1.jpg" width="327px" height="276px" id="image6">
</div>
<div id="styling2">
<form action="store_existing.php" id="form1" method="POST" name="form">
<input id="textinput" type="text" name="ID" value=""/><br><br>

<div id="styling">
<input type="submit" value="Play!" />
<input type="reset" value="Reset"/>
</form>
</div>
</div>

<p id="textbox"><font color="white" size="4"><strong>Username: </strong></font></p>

<?php
$checky = $_COOKIE["variable"];
//echo $checky;
?>

<div id="movegrass">
<img src="grass.png" id="grass">
</div>
<div id="words">
<a style=""><font size="4"><b><font color="red">WARNING:</font></b> Your username <u>has been used</u>. Using it again will <b>change</b> its previous results. <br> If you are not the user who entered this name, please enter another user name.</a></font>
</div>

<script>
var val123 = "<?php echo $checky ?>";
var x123 = document.getElementById("textinput");
x123.value = val123;
</script>
</body>

</html>