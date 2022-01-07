<?php

if(!isset($_COOKIE["login"]))
	header("location:login.php");
?>
<style>
table, th, td 
{
    border: 3px solid black;
    border-collapse: collapse;
	text-align: center;
}
th
{
	border: 4px solid #1a1aff;
	padding-left:15px;
	padding-right:15px;
	font-size:20pt;
	font-family: cursive;
}
img{
	padding-top:10px;
}
td
{
font-size:14pt;	
font-family: cursive;
}
#back1
{
	position:absolute;
}
#image4
{
	position:absolute;
}
#move4
{
		padding-left:666px;
	position: relative;
	text-align:center;
	left:-400px;

}
#movedatabase
{
	padding-top:80px;
}
#trash
{
	padding-bottom:10px;
}

</style>
<html>
<head>
</head>
<body bgcolor="#e6e6fa">
<div id="move4">
	<a href="clevel4.php"><img src="level4.png" width="158px" height="68px" id="image4"></a>
	</div>
<a href="freq_level.php"><img src="back.png" id="back1"></a>
<div id="movedatabase">
<form action="cdelete4.php" method="POST">
            <?PHP
			
            $dbconnection = @mysqli_connect('localhost','root');
            if (!$dbconnection) 
            {
             echo '<p> Unable to connect to the database at this time.</P>';
             die;
            }
            if (!mysqli_select_db($dbconnection,'database'))
            {
	           exit('<P>failed loading database </P>');
	          }
            $result = @mysqli_query($dbconnection,'SELECT ID FROM clevel4db');
            if (!$result)
            {
             exit('<P> Error performing query:' .mysqli_error(). '</P>');
            }
            $x="<SCRIPT type =text/javascript> document.write(a)</SCRIPT> ";
            
              $result = mysqli_query($dbconnection,"SELECT * FROM clevel4db ORDER BY Score DESC LIMIT 10"); 

         
            
            echo "<center><TABLE border='5'>
                  <TR>
                  <TH>Name</TH>
				  <TH>Score</TH>
				   <TH>Badges</TH>
                  <TH>Delete</TH>
                  </TR></center>"; 
  
            while($row = mysqli_fetch_array($result))
            {
		
                echo "<TR>";
                echo "<TD>" . $row['ID'] ."</TD>";
            	echo "<TD>" . $row['Score'] ."</TD>";
				if($row['Image'] == 'badge10.png' && $row['Image1'] == 'badge20.png'  && $row['Image2'] == 'badge30.png' && $row['Image3'] == 'badge40.png'  && $row['Image4'] == 'badge50.png'  && $row['Image5'] == 'badge60.png' && $row['Great'] == 'great1.png' && $row['Perfect'] == 'perfect.png')
				{echo '<TD> <img id="badge10" src="' . $row['Image'] . '" width="40" height="52" />
			<img id="badge20" src="' . $row['Image1'] . '" width="40" height="52" /><img id="badge30" src="' . $row['Image2'] . '" width="40" height="52" />
				<img id="badge40" src="' . $row['Image3'] . '" width="40" height="52" /><img id="badge50" src="' . $row['Image4'] . '" width="40" height="52" /><img id="badge60" src="' . $row['Image5'] . '" width="40" height="52" />
				<img id="great" src="' . $row['Great'] . '" width="65" height="58" /><img id="perfect" src="' . $row['Perfect'] . '" width="65" height="58" /></TD>';} //for all cases here
                else if($row['Image'] == 'badge10.png' && $row['Image1'] == 'badge20.png'  && $row['Image2'] == 'badge30.png' && $row['Image3'] == 'badge40.png'  && $row['Image4'] == 'badge50.png'  && $row['Image5'] == 'badge60.png' && $row['Great'] == 'great1.png')
				{echo '<TD> <img id="badge10" src="' . $row['Image'] . '" width="40" height="52" />
			<img id="badge20" src="' . $row['Image1'] . '" width="40" height="52" /><img id="badge30" src="' . $row['Image2'] . '" width="40" height="52" />
				<img id="badge40" src="' . $row['Image3'] . '" width="40" height="52" /><img id="badge50" src="' . $row['Image4'] . '" width="40" height="52" /><img id="badge60" src="' . $row['Image5'] . '" width="40" height="52" />
				<img id="great" src="' . $row['Great'] . '" width="65" height="58" /></TD>';} //case without perfect means score of lower than 80
                else if($row['Image'] == 'badge10.png' && $row['Image1'] == 'badge20.png'  && $row['Image2'] == 'badge30.png' && $row['Image3'] == 'badge40.png'  && $row['Image4'] == 'badge50.png' && $row['Great'] == 'great1.png')
				{echo '<TD> <img id="badge10" src="' . $row['Image'] . '" width="40" height="52" />
			<img id="badge20" src="' . $row['Image1'] . '" width="40" height="52" /><img id="badge30" src="' . $row['Image2'] . '" width="40" height="52" />
		    <img id="badge40" src="' . $row['Image3'] . '" width="40" height="52" /><img id="badge50" src="' . $row['Image4'] . '" width="40" height="52" /><img id="great" src="' . $row['Great'] . '" width="65" height="58" /></TD>';} //case without badge 60 means score of lower than 60
                else if($row['Image'] == 'badge10.png' && $row['Image1'] == 'badge20.png'  && $row['Image2'] == 'badge30.png' && $row['Image3'] == 'badge40.png' && $row['Great'] == 'great1.png')
				{echo '<TD> <img id="badge10" src="' . $row['Image'] . '" width="40" height="52" />
			<img id="badge20" src="' . $row['Image1'] . '" width="40" height="52" /><img id="badge30" src="' . $row['Image2'] . '" width="40" height="52" />
				<img id="badge40" src="' . $row['Image3'] . '" width="40" height="52" /><img id="great" src="' . $row['Great'] . '" width="65" height="58" /></TD>';} //less than 50
                else if($row['Image'] == 'badge10.png' && $row['Image1'] == 'badge20.png'  && $row['Image2'] == 'badge30.png')
				{echo '<TD> <img id="badge10" src="' . $row['Image'] . '" width="40" height="52" />
			<img id="badge20" src="' . $row['Image1'] . '" width="40" height="52" /><img id="badge30" src="' . $row['Image2'] . '" width="40" height="52" />
				</TD>';} //less than 40
            else if($row['Image'] == 'badge10.png' && $row['Image1'] == 'badge20.png')
				{echo '<TD> <img id="badge10" src="' . $row['Image'] . '" width="40" height="52" />
			<img id="badge20" src="' . $row['Image1'] . '" width="40" height="52" /></TD>';} //less than 30
			else if($row['Image'] == 'badge10.png')
				{echo '<TD> <img id="badge10" src="' . $row['Image'] . '" width="40" height="52" /><img id="badge9" src="' . $row['Image99'] . '" width="65" height="58" /></TD>';} //less than 20
            else 
			{ echo '<TD> <img id="badge9" src="' . $row['Image99'] . '" width="65" height="58" /></TD>';}
  echo "<TD><a href=\"cdelete4.php?id=" . $row['ID'] ."\"><img src='trash.png' id='trash' width='25' height='30'/></TD>";

  
             echo "</TR>";
            }
            echo "</TABLE>";

            mysqli_close($dbconnection);
            ?> 
                </form>   
				</div>
</body>
</html>					