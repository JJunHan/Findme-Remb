
<html>
<head>
  <style>

#textbox
{
	position: relative;
	text-align:center;
	left:-90px;
	top:-127px;
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
border: 4px solid black;
box-sizing: border-box;
position: relative;	
left:81px;
}
#styling2
{
position: relative;
text-align:center;
left:-50px;
top:-30px;
}
#styling
{
top:-15px;
padding-left:140px;
position:relative;
}
  
input[type=submit] {
    padding:5px 15px; 
    background:#bbb; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 

}
input[type=reset] {
    padding:5px 15px; 
    background:#bbb; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 

	
}

#textinput
{
	z-index:2;
}

#bg
{
position: absolute;
width: 99%;
height: 98%;
}
    </style>
</head>

<body bgcolor="#E6E6FA">
<img id="bg" src="tile4.jpg"/>

<font color="black"><strong><p id="text1">Remb</p></font></strong>

<div id="styling2">
<form action="storage.php" id="form1" method="POST" name="form">
<input id="textinput" type="text" name="IDname"/><br><br>


<div id="styling">
<input type="submit" value="Play!" />
<input type="reset" value="Reset"/>
</form>
</div>
</div>

<p id="textbox"><font color="black" size="4"><strong>Username: </strong></font></p>


</body>

</html>