<html>
<head>
<style>
h1
{
	font: normal 170% 'century gothic', arial;
	text-decoration: underline;
}
table, th, td 
{
    border: 3px solid black;
    border-collapse: collapse;

}

#table1
{
	position:relative;
	text-align:center;
}
th
{
	border: 4px solid #black;
	padding-left:25px;
	padding-right:25px;
	font-size:20pt;
	font-family: cursive;
}
#stylewelcome
{
	color:red;
	font-size:15pt;
	position:relative;
	right:240px;
}
#marginal1
{

	font-size:12pt;
	font-family:"Comic Sans MS", cursive, sans-serif;
	position:relative;
	right:240px;

}
td
{
	padding-top:10px;
	padding-bottom:10px;
	font-size:14pt;
}
#movename
{
	position:relative;
	text-align:center;
	padding-bottom:10px;
	padding-top:10px;
	border:1px solid black;
	background-color: lightblue;	

}
#styleattempts
{
	color:red;
	margin:0;
	font-size:17pt;
}
#moveaverage
{
}
#moverow1
{
	font-size:14pt;
}
#results
{
	font-size:18pt;
	font-weight: bold;
	position:relative;
	text-align:center;
	right:50px;
}

#hi
{
    position:relative;
	text-align:center;
	padding-bottom:10px;
	padding-top:5px;
}
#ffs
{
	position:relative;
	border:3px solid limegreen;
	top:10px;
}
#hi1
{
    position:relative;
	text-align:center;
	padding-bottom:10px;
	padding-top:5px;
}
#ffs1
{
	position:relative;
	border:3px solid darkblue;
	top:20px;
}
#table2
{
position:relative;
text-align:center;
}
#hi2
{
    position:relative;
	text-align:center;
	padding-bottom:10px;
	padding-top:5px;
}
#ffs2
{
	position:relative;
	border:3px solid orange;
	top:30px;
}
#table3
{
position:relative;
text-align:center;
}
#hi3
{
    position:relative;
	text-align:center;
	padding-bottom:10px;
	padding-top:5px;
}
#ffs3
{
	position:relative;
	border:3px solid maroon;
	top:40px;
}
#table4
{
position:relative;
text-align:center;
}
#hi4
{
    position:relative;
	text-align:center;
	padding-bottom:10px;
	padding-top:5px;
}
#ffs4
{
	position:relative;
	border:3px solid grey;
	top:50px;
}
#table5
{
position:relative;
text-align:center;
}
#hi5
{
    position:relative;
	text-align:center;
	padding-bottom:10px;
	padding-top:5px;
}
#ffs5
{
	position:relative;
	border:3px solid cyan;
	top:60px;
}
#table6
{
position:relative;
text-align:center;
}
#hi6
{
    position:relative;
	text-align:center;
	padding-bottom:10px;
	padding-top:5px;
}
#ffs6
{
	position:relative;
	border:3px solid magenta;
	top:70px;
}
#table7
{
position:relative;
text-align:center;
}
#hi7
{
    position:relative;
	text-align:center;
	padding-bottom:10px;
	padding-top:5px;
}
#ffs7
{
	position:relative;
	border:3px solid darkgreen;
	top:80px;
}
#table8
{
position:relative;
text-align:center;
}
#hi8
{
    position:relative;
	text-align:center;
	padding-bottom:10px;
	padding-top:5px;
}
#ffs8
{
	position:relative;
	border:3px solid darkblue;
	top:90px;
}
#table9
{
position:relative;
text-align:center;
}
#hi9
{
    position:relative;
	text-align:center;
	padding-bottom:10px;
	padding-top:5px;
}
#ffs9
{
	position:relative;
	border:3px solid orange;
	top:100px;
}
#table10
{
position:relative;
text-align:center;
}
#hi10
{
    position:relative;
	text-align:center;
	padding-bottom:10px;
	padding-top:5px;
}
#ffs10
{
	position:relative;
	border:3px solid maroon;
	top:110px;
}
#table11
{
position:relative;
text-align:center;
}
#hi11
{
    position:relative;
	text-align:center;
	padding-bottom:10px;
	padding-top:5px;
}
#ffs11
{
	position:relative;
	border:3px solid grey;
	top:120px;
}
#table12
{
position:relative;
text-align:center;
}
#hi12
{
    position:relative;
	text-align:center;
	padding-bottom:10px;
	padding-top:5px;
}
#ffs12
{
	position:relative;
	border:3px solid cyan;
	top:130px;
}
#table13
{
position:relative;
text-align:center;
}
.button {
    background-color: #5c5c8a;
    border: none;
    color: white;
    padding: 4px 5px;
    text-align: center;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
	border-radius: 5px;
}

.button1 {
    background-color: #6b6b47;
    border: none;
    color: white;
    padding: 4px 5px;
    text-align: center;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
	border-radius: 5px;
}
</style>
</head>
<body bgcolor="#e6e6fa">
<?php
error_reporting(0); //off error reporting
$dbconnection = @mysqli_connect('localhost','root');
            if (!$dbconnection) 
            {
             echo '<p> Unable to connect to the database at this time.</P>';
             die;
            }
            if (!mysqli_select_db($dbconnection,'remb'))
            {
	           exit('<P>failed loading database </P>');
	          }
			  
			  $users_Names = $_COOKIE["users_ID2"]; //there are 2 cookies around one for search one for new
			  //////////////////////////to find all nulls
			  $jack1 = mysqli_fetch_array(mysqli_query($dbconnection,"SELECT count(*) FROM r1 WHERE ID='$users_Names' AND Score ='' AND Level ='1'")); //count number of null entries only from that level
			  //echo $jack1[0]; //test
			  $jack2 = mysqli_fetch_array(mysqli_query($dbconnection,"SELECT count(*) FROM r1 WHERE ID='$users_Names' AND Score ='' AND Level ='2'"));
			  //echo $jack2[0];
			  $jack3 = mysqli_fetch_array(mysqli_query($dbconnection,"SELECT count(*) FROM r1 WHERE ID='$users_Names' AND Score ='' AND Level ='3'"));
			  //echo $jack3[0];
			  $jack4 = mysqli_fetch_array(mysqli_query($dbconnection,"SELECT count(*) FROM r1 WHERE ID='$users_Names' AND Score ='' AND Level ='4'"));
			  //echo $jack4[0];
			  //////////////////////////
			  $numberofrows = mysqli_num_rows(mysqli_query($dbconnection,"SELECT Score FROM r1 WHERE ID='$users_Names' AND Level ='1'")) - $jack1[0]; //no of rows
			  $average = mysqli_query($dbconnection,"SELECT AVG(Score) FROM r1 WHERE ID='$users_Names' AND Level ='1'");
			  $average1 = round(mysqli_fetch_array($average)[0],1,PHP_ROUND_HALF_ODD); //round off to 1 decimal placing
			  $sum = mysqli_query($dbconnection,"SELECT SUM(Score) FROM r1 WHERE ID='$users_Names' AND Level ='1'");
			  $sum1 = mysqli_fetch_array($sum)[0];
			  $sumv = mysqli_query($dbconnection,"SELECT SUM(Valid) FROM r1 WHERE ID='$users_Names' AND Level ='1'");
			  $sumv1 = mysqli_fetch_array($sumv)[0];
			//   $percent = $sum1/$sumv1 *100;
			//   $percent1 = round($percent,3,PHP_ROUND_HALF_ODD);

			  if (!$sumv1){
				//echo "pass";
			  }
			  else{
				$percent = $sum1/$sumv1 *100;
				$percent1 = round($percent,3,PHP_ROUND_HALF_ODD);
			  };

			  //echo $percent1;
			  /////			  
			  $numberofrows1 = mysqli_num_rows(mysqli_query($dbconnection,"SELECT Score FROM r1 WHERE ID='$users_Names' AND Level ='2'")) - $jack2[0]; //no of rows
			  $average3 = mysqli_query($dbconnection,"SELECT AVG(Score) FROM r1 WHERE ID='$users_Names' AND Level ='2'");
			  $average4 = round(mysqli_fetch_array($average3)[0],1,PHP_ROUND_HALF_ODD);
			  $sum3 = mysqli_query($dbconnection,"SELECT SUM(Score) FROM r1 WHERE ID='$users_Names' AND Level ='2'");
			  $sum4 = mysqli_fetch_array($sum3)[0];
			  $sumv3 = mysqli_query($dbconnection,"SELECT SUM(Valid) FROM r1 WHERE ID='$users_Names' AND Level ='2'");
			  $sumv4 = mysqli_fetch_array($sumv3)[0];
			  //echo $sumv4; //testing
			//   $percent2 = $sum4/$sumv4 *100;
			//   $percent3 = round($percent2,3,PHP_ROUND_HALF_ODD);

			  if (!$sumv4){
				//echo "pass";
			  }
			  else{
				$percent2 = $sum4/$sumv4 *100;
				$percent3 = round($percent2,3,PHP_ROUND_HALF_ODD);
			  };

			  /////
			  $numberofrows2 = mysqli_num_rows(mysqli_query($dbconnection,"SELECT Score FROM r1 WHERE ID='$users_Names' AND Level ='3'")) - $jack3[0]; //no of rows
			  $average5 = mysqli_query($dbconnection,"SELECT AVG(Score) FROM r1 WHERE ID='$users_Names' AND Level ='3'");
			  $average6 = round(mysqli_fetch_array($average5)[0],1,PHP_ROUND_HALF_ODD);
			  $sum5 = mysqli_query($dbconnection,"SELECT SUM(Score) FROM r1 WHERE ID='$users_Names' AND Level ='3'");
			  $sum6 = mysqli_fetch_array($sum5)[0];
			  $sumv5 = mysqli_query($dbconnection,"SELECT SUM(Valid) FROM r1 WHERE ID='$users_Names' AND Level ='3'");
			  $sumv6 = mysqli_fetch_array($sumv5)[0];
			  echo $sumv6; //testing
			  if (!$sumv6){
				//echo "pass";
			  }
			  else{
				$percent4 = $sum6/$sumv6 *100;
				$percent5 = round($percent4,3,PHP_ROUND_HALF_ODD);
			  };
			  //echo "test";
			  //$percent4 = $sum6/$sumv6 *100;
			  //$percent5 = round($percent4,3,PHP_ROUND_HALF_ODD);
			  /////
			  
			  $numberofrows3 = mysqli_num_rows(mysqli_query($dbconnection,"SELECT Score FROM r1 WHERE ID='$users_Names' AND Level ='4'")) - $jack4[0]; //no of rows
			  $average7 = mysqli_query($dbconnection,"SELECT AVG(Score) FROM r1 WHERE ID='$users_Names' AND Level ='4'");
			  $average8 = round(mysqli_fetch_array($average7)[0],1,PHP_ROUND_HALF_ODD);
			  $sum7 = mysqli_query($dbconnection,"SELECT SUM(Score) FROM r1 WHERE ID='$users_Names' AND Level ='4'");
			  $sum8 = mysqli_fetch_array($sum7)[0];
			  $sumv7 = mysqli_query($dbconnection,"SELECT SUM(Valid) FROM r1 WHERE ID='$users_Names' AND Level ='4'");
			  $sumv8 = mysqli_fetch_array($sumv7)[0];
			//   $percent6 = $sum8/$sumv8 *100;
			//   $percent7 = round($percent6,3,PHP_ROUND_HALF_ODD);
			if (!$sumv8){
				//echo "pass";
			  }
			  else{
				$percent6 = $sum8/$sumv8 *100;
				$percent7 = round($percent6,3,PHP_ROUND_HALF_ODD);
			  };
			  /////
			  /////
			 echo '<div id="movename">'.'<a id="marginal1">'.'Welcome:&nbsp;'.'<a id="stylewelcome">'.$users_Names.'!'.'</a>'.'</a>'.'<a id="results">'.'Results Summary'.'</a>'.'</div>'; //test
			 echo '<center>'.'<h1>'.'Shortcuts'.'</h1>';
			 
			 echo '<a href="#1">'.'<button class="button">'.'Level 1'.'</button>'.'</a>';
			 echo '&nbsp;'; //break blank space
			 echo '<a href="#2">'.'<button class="button">'.'Level 2'.'</button>'.'</a>';
			 echo '&nbsp;'; //break blank space
			 echo '<a href="#3">'.'<button class="button">'.'Level 3'.'</button>'.'</a>';
			 echo '&nbsp;'; //break blank space
			 echo '<a href="#4">'.'<button class="button">'.'Level 4'.'</button>'.'</a>';
			 echo '&nbsp;'; //break blank space
			
			 echo '</center>';
			 
			 echo '<a id="1">'.'</a>';
			 echo '<div id="ffs">';
			 echo '<div id="hi">';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Level: &nbsp;'.'<a id="styleattempts">'.'1'.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Number of attempts: &nbsp;'.'<a id="styleattempts">'.$numberofrows.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Total Sum of Scores: &nbsp;'.'<a id="styleattempts">'.$sum1.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Total Sum of Valid selections: &nbsp;'.'<a id="styleattempts">'.$sumv1.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Accuracy:&nbsp;'.'<a id="styleattempts">'.$percent1.'%'.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Average Score: &nbsp;'.'<a id="styleattempts">'.$average1.'</a>'.'</a>'.'</div>';
			 
			 echo '</div>';
			
			 /////////////////////////////////////////////
			
		
			 //////
            $result = @mysqli_query($dbconnection,'SELECT ID FROM r1');
            if (!$result)
            {
             exit('<P> Error performing query:' .mysqli_error(). '</P>');
            }
            $x="<SCRIPT type =text/javascript> document.write(a)</SCRIPT> ";
            
			 
 



echo '</div>';
////////////////////////////////////////////////////////////////
echo '<a id="2">'.'</a>';
echo '<div id="ffs1">';
echo '<div id="hi1">';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Level: &nbsp;'.'<a id="styleattempts">'.'2'.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Number of attempts: &nbsp;'.'<a id="styleattempts">'.$numberofrows1.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Total Sum of Scores: &nbsp;'.'<a id="styleattempts">'.$sum4.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Total Sum of Valid selections: &nbsp;'.'<a id="styleattempts">'.$sumv4.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Accuracy:&nbsp;'.'<a id="styleattempts">'.$percent3.'%'.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Average Score: &nbsp;'.'<a id="styleattempts">'.$average4.'</a>'.'</a>'.'</div>';
			 echo '</div>';
/////////////////////////////////////			 

echo '</div>';		 
/////////////////////////////////////////////////////////////
echo '<a id="3">'.'</a>';
echo '<div id="ffs2">';
echo '<div id="hi2">';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Level: &nbsp;'.'<a id="styleattempts">'.'3'.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Number of attempts: &nbsp;'.'<a id="styleattempts">'.$numberofrows2.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Total Sum of Scores: &nbsp;'.'<a id="styleattempts">'.$sum6.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Total Sum of Valid selections: &nbsp;'.'<a id="styleattempts">'.$sumv6.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Accuracy:&nbsp;'.'<a id="styleattempts">'.$percent5.'%'.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Average Score: &nbsp;'.'<a id="styleattempts">'.$average6.'</a>'.'</a>'.'</div>';
			 echo '</div>';
/////////////////////////////////////			 

echo '</div>';		 
//////////////////////////////////////////////

echo '<a id="4">'.'</a>';
echo '<div id="ffs3">';
echo '<div id="hi3">';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Level: &nbsp;'.'<a id="styleattempts">'.'4'.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Number of attempts: &nbsp;'.'<a id="styleattempts">'.$numberofrows3.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Total Sum of Scores: &nbsp;'.'<a id="styleattempts">'.$sum8.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Total Sum of Valid selections: &nbsp;'.'<a id="styleattempts">'.$sumv8.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Accuracy:&nbsp;'.'<a id="styleattempts">'.$percent7.'%'.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Average Score: &nbsp;'.'<a id="styleattempts">'.$average8.'</a>'.'</a>'.'</div>';
			 echo '</div>';		

////////////////////////////////////		 
echo '</div>';		 
?>
</body>
</html>