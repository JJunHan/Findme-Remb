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
$dbconnection = mysqli_connect("localhost","root","");
            if (!$dbconnection) 
            {
             echo '<p> Unable to connect to the database at this time.</P>';
             die;
            }
            if (!mysqli_select_db($dbconnection, "database"))
            {
	           exit('<P>failed loading database </P>');
	          }
			  $users_Names = $_COOKIE["users_ID1"]; //there are 2 cookies around one for search one for new
			  //////////////////////////to find all nulls
			  $jack1 = mysqli_fetch_array(mysqli_query($dbconnection,"SELECT count(*) FROM z1 WHERE ID='$users_Names' AND Score =''")); //count number of null entries
			  //echo $jack1[0]; //test
			  $jack2 = mysqli_fetch_array(mysqli_query($dbconnection,"SELECT count(*) FROM z2 WHERE ID='$users_Names' AND Score =''"));
			  //echo $jack2[0];
			  $jack3 = mysqli_fetch_array(mysqli_query($dbconnection,"SELECT count(*) FROM z3 WHERE ID='$users_Names' AND Score =''"));
			  //echo $jack3[0];
			  $jack4 = mysqli_fetch_array(mysqli_query($dbconnection,"SELECT count(*) FROM z4 WHERE ID='$users_Names' AND Score =''"));
			  //echo $jack4[0];
			  $jack5 = mysqli_fetch_array(mysqli_query($dbconnection,"SELECT count(*) FROM z5 WHERE ID='$users_Names' AND Score =''"));
			  //echo $jack5[0];
			  $jack6 = mysqli_fetch_array(mysqli_query($dbconnection,"SELECT count(*) FROM z6 WHERE ID='$users_Names' AND Score =''"));
			  //echo $jack6[0];
			  $jill1 = mysqli_fetch_array(mysqli_query($dbconnection,"SELECT count(*) FROM x1 WHERE ID='$users_Names' AND Score =''"));
			  //echo $jill1[0];
			  $jill2 = mysqli_fetch_array(mysqli_query($dbconnection,"SELECT count(*) FROM x2 WHERE ID='$users_Names' AND Score =''"));
			  //echo $jill2[0];
			  $jill3 = mysqli_fetch_array(mysqli_query($dbconnection,"SELECT count(*) FROM x3 WHERE ID='$users_Names' AND Score =''"));
			  //echo $jill3[0];
			  $jill4 = mysqli_fetch_array(mysqli_query($dbconnection,"SELECT count(*) FROM x4 WHERE ID='$users_Names' AND Score =''"));
			  //echo $jill4[0];
			  $jill5 = mysqli_fetch_array(mysqli_query($dbconnection,"SELECT count(*) FROM x5 WHERE ID='$users_Names' AND Score =''"));
			  //echo $jill5[0];
			  $jill6 = mysqli_fetch_array(mysqli_query($dbconnection,"SELECT count(*) FROM x6 WHERE ID='$users_Names' AND Score =''"));
			  //echo $jill6[0];      
			  $jill7 = mysqli_fetch_array(mysqli_query($dbconnection,"SELECT count(*) FROM x7 WHERE ID='$users_Names' AND Score =''"));
			  //echo $jill7[0];
			  //////////////////////////
			  $numberofrows = mysqli_num_rows(mysqli_query($dbconnection,"SELECT Score FROM z1 WHERE ID='$users_Names'")) - $jack1[0]; //no of rows
			  $average = mysqli_query($dbconnection,"SELECT AVG(Score) FROM z1 WHERE ID='$users_Names'");
			  $average1 = round(mysqli_fetch_array($average)[0],1,PHP_ROUND_HALF_ODD);//round off to 1 decimal placing
			  $max = mysqli_query($dbconnection,"SELECT MAX(Score) FROM z1 WHERE ID='$users_Names'"); //max score
			  $max1 = mysqli_fetch_array($max)[0];
			  $min = mysqli_query($dbconnection,"SELECT MIN(Score) FROM z1 WHERE ID='$users_Names'"); //min score
			  $min1 = mysqli_fetch_array($min)[0];
			  $sum = mysqli_query($dbconnection,"SELECT SUM(Score) FROM z1 WHERE ID='$users_Names'"); //sum score
			  $sum1 = mysqli_fetch_array($sum)[0];
			  /////			  
			  $numberofrows1 = mysqli_num_rows(mysqli_query($dbconnection,"SELECT Score FROM z2 WHERE ID='$users_Names'")) - $jack2[0]; //no of rows
			  $average3 = mysqli_query($dbconnection,"SELECT AVG(Score) FROM z2 WHERE ID='$users_Names'");
			  $average4 = round(mysqli_fetch_array($average3)[0],1,PHP_ROUND_HALF_ODD);
			  $max3 = mysqli_query($dbconnection,"SELECT MAX(Score) FROM z2 WHERE ID='$users_Names'");
			  $max4 = mysqli_fetch_array($max3)[0];
			  $min3 = mysqli_query($dbconnection,"SELECT MIN(Score) FROM z2 WHERE ID='$users_Names'");
			  $min4 = mysqli_fetch_array($min3)[0];
			  $sum3 = mysqli_query($dbconnection,"SELECT SUM(Score) FROM z2 WHERE ID='$users_Names'");
			  $sum4 = mysqli_fetch_array($sum3)[0];
			  /////
			  $numberofrows2 = mysqli_num_rows(mysqli_query($dbconnection,"SELECT Score FROM z3 WHERE ID='$users_Names'")) - $jack3[0]; //no of rows
			  $average5 = mysqli_query($dbconnection,"SELECT AVG(Score) FROM z3 WHERE ID='$users_Names'");
			  $average6 = round(mysqli_fetch_array($average5)[0],1,PHP_ROUND_HALF_ODD);
			  $max5 = mysqli_query($dbconnection,"SELECT MAX(Score) FROM z3 WHERE ID='$users_Names'");
			  $max6 = mysqli_fetch_array($max5)[0];
			  $min5 = mysqli_query($dbconnection,"SELECT MIN(Score) FROM z3 WHERE ID='$users_Names'");
			  $min6 = mysqli_fetch_array($min5)[0];
			  $sum5 = mysqli_query($dbconnection,"SELECT SUM(Score) FROM z3 WHERE ID='$users_Names'");
			  $sum6 = mysqli_fetch_array($sum5)[0];
			  /////
			  $numberofrows3 = mysqli_num_rows(mysqli_query($dbconnection,"SELECT Score FROM z4 WHERE ID='$users_Names'")) - $jack4[0]; //no of rows
			  $average7 = mysqli_query($dbconnection,"SELECT AVG(Score) FROM z4 WHERE ID='$users_Names'");
			  $average8 = round(mysqli_fetch_array($average7)[0],1,PHP_ROUND_HALF_ODD);
			  $max7 = mysqli_query($dbconnection,"SELECT MAX(Score) FROM z4 WHERE ID='$users_Names'");
			  $max8 = mysqli_fetch_array($max7)[0];
			  $min7 = mysqli_query($dbconnection,"SELECT MIN(Score) FROM z4 WHERE ID='$users_Names'");
			  $min8 = mysqli_fetch_array($min7)[0];
			  $sum7 = mysqli_query($dbconnection,"SELECT SUM(Score) FROM z4 WHERE ID='$users_Names'");
			  $sum8 = mysqli_fetch_array($sum7)[0];
			  /////
			  $numberofrows4 = mysqli_num_rows(mysqli_query($dbconnection,"SELECT Score FROM z5 WHERE ID='$users_Names'")) - $jack5[0]; //no of rows
			  $average9 = mysqli_query($dbconnection,"SELECT AVG(Score) FROM z5 WHERE ID='$users_Names'");
			  $average10 = round(mysqli_fetch_array($average9)[0],1,PHP_ROUND_HALF_ODD);
			  $max9 = mysqli_query($dbconnection,"SELECT MAX(Score) FROM z5 WHERE ID='$users_Names'");
			  $max10 = mysqli_fetch_array($max9)[0];
			  $min9 = mysqli_query($dbconnection,"SELECT MIN(Score) FROM z5 WHERE ID='$users_Names'");
			  $min10 = mysqli_fetch_array($min9)[0];
			  $sum9 = mysqli_query($dbconnection,"SELECT SUM(Score) FROM z5 WHERE ID='$users_Names'");
			  $sum10 = mysqli_fetch_array($sum9)[0];			  
			  /////
			  $numberofrows5 = mysqli_num_rows(mysqli_query($dbconnection,"SELECT Score FROM z6 WHERE ID='$users_Names'")) - $jack6[0]; //no of rows
			  $average11 = mysqli_query($dbconnection,"SELECT AVG(Score) FROM z6 WHERE ID='$users_Names'");
			  $average12 = round(mysqli_fetch_array($average11)[0],1,PHP_ROUND_HALF_ODD);;
			  $max11 = mysqli_query($dbconnection,"SELECT MAX(Score) FROM z6 WHERE ID='$users_Names'");
			  $max12 = mysqli_fetch_array($max11)[0];
			  $min11 = mysqli_query($dbconnection,"SELECT MIN(Score) FROM z6 WHERE ID='$users_Names'");
			  $min12 = mysqli_fetch_array($min11)[0];
			  $sum11 = mysqli_query($dbconnection,"SELECT SUM(Score) FROM z6 WHERE ID='$users_Names'");
			  $sum12 = mysqli_fetch_array($sum11)[0];				  		
			  /////
			  $numberofrows6 = mysqli_num_rows(mysqli_query($dbconnection,"SELECT Score FROM x1 WHERE ID='$users_Names'")) - $jill1[0]; //no of rows
			  $average13 = mysqli_query($dbconnection,"SELECT AVG(Score) FROM x1 WHERE ID='$users_Names'");
			  $average14 = round(mysqli_fetch_array($average13)[0],1,PHP_ROUND_HALF_ODD);
			  $max13 = mysqli_query($dbconnection,"SELECT MAX(Score) FROM x1 WHERE ID='$users_Names'");
			  $max14 = mysqli_fetch_array($max13)[0];
			  $min13 = mysqli_query($dbconnection,"SELECT MIN(Score) FROM x1 WHERE ID='$users_Names'");
			  $min14 = mysqli_fetch_array($min13)[0];
			  $sum13 = mysqli_query($dbconnection,"SELECT SUM(Score) FROM x1 WHERE ID='$users_Names'");
			  $sum14 = mysqli_fetch_array($sum13)[0];	
			  /////
			  $numberofrows7 = mysqli_num_rows(mysqli_query($dbconnection,"SELECT Score FROM x2 WHERE ID='$users_Names'")) - $jill2[0]; //no of rows
			  $average15 = mysqli_query($dbconnection,"SELECT AVG(Score) FROM x2 WHERE ID='$users_Names'");
			  $average16 = round(mysqli_fetch_array($average15)[0],1,PHP_ROUND_HALF_ODD);
			  $max15 = mysqli_query($dbconnection,"SELECT MAX(Score) FROM x2 WHERE ID='$users_Names'");
			  $max16 = mysqli_fetch_array($max15)[0];
			  $min15 = mysqli_query($dbconnection,"SELECT MIN(Score) FROM x2 WHERE ID='$users_Names'");
			  $min16 = mysqli_fetch_array($min15)[0];
			  $sum15 = mysqli_query($dbconnection,"SELECT SUM(Score) FROM x2 WHERE ID='$users_Names'");
			  $sum16 = mysqli_fetch_array($sum15)[0];	
			  /////
			  $numberofrows8 = mysqli_num_rows(mysqli_query($dbconnection,"SELECT Score FROM x3 WHERE ID='$users_Names'")) - $jill3[0]; //no of rows
			  $average17 = mysqli_query($dbconnection,"SELECT AVG(Score) FROM x3 WHERE ID='$users_Names'");
			  $average18 = round(mysqli_fetch_array($average17)[0],1,PHP_ROUND_HALF_ODD);
			  $max17 = mysqli_query($dbconnection,"SELECT MAX(Score) FROM x3 WHERE ID='$users_Names'");
			  $max18 = mysqli_fetch_array($max17)[0];
			  $min17 = mysqli_query($dbconnection,"SELECT MIN(Score) FROM x3 WHERE ID='$users_Names'");
			  $min18 = mysqli_fetch_array($min17)[0];
			  $sum17 = mysqli_query($dbconnection,"SELECT SUM(Score) FROM x3 WHERE ID='$users_Names'");
			  $sum18 = mysqli_fetch_array($sum17)[0];	
			  /////
			  $numberofrows9 = mysqli_num_rows(mysqli_query($dbconnection,"SELECT Score FROM x4 WHERE ID='$users_Names'")) - $jill4[0]; //no of rows
			  $average19 = mysqli_query($dbconnection,"SELECT AVG(Score) FROM x4 WHERE ID='$users_Names'");
			  $average20 = round(mysqli_fetch_array($average19)[0],1,PHP_ROUND_HALF_ODD);
			  $max19 = mysqli_query($dbconnection,"SELECT MAX(Score) FROM x4 WHERE ID='$users_Names'");
			  $max20 = mysqli_fetch_array($max19)[0];
			  $min19 = mysqli_query($dbconnection,"SELECT MIN(Score) FROM x4 WHERE ID='$users_Names'");
			  $min20 = mysqli_fetch_array($min19)[0];
			  $sum19 = mysqli_query($dbconnection,"SELECT SUM(Score) FROM x4 WHERE ID='$users_Names'");
			  $sum20 = mysqli_fetch_array($sum19)[0];	
			  /////
			  $numberofrows10 = mysqli_num_rows(mysqli_query($dbconnection,"SELECT Score FROM x5 WHERE ID='$users_Names'")) - $jill5[0]; //no of rows
			  $average21 = mysqli_query($dbconnection,"SELECT AVG(Score) FROM x5 WHERE ID='$users_Names'");
			  $average22 = round(mysqli_fetch_array($average21)[0],1,PHP_ROUND_HALF_ODD);
			  $max21 = mysqli_query($dbconnection,"SELECT MAX(Score) FROM x5 WHERE ID='$users_Names'");
			  $max22 = mysqli_fetch_array($max21)[0];
			  $min21 = mysqli_query($dbconnection,"SELECT MIN(Score) FROM x5 WHERE ID='$users_Names'");
			  $min22 = mysqli_fetch_array($min21)[0];
			  $sum21 = mysqli_query($dbconnection,"SELECT SUM(Score) FROM x5 WHERE ID='$users_Names'");
			  $sum22 = mysqli_fetch_array($sum21)[0];	
			  /////
			  $numberofrows11 = mysqli_num_rows(mysqli_query($dbconnection,"SELECT Score FROM x6 WHERE ID='$users_Names'")) - $jill6[0]; //no of rows
			  $average23 = mysqli_query($dbconnection,"SELECT AVG(Score) FROM x6 WHERE ID='$users_Names'");
			  $average24 = round(mysqli_fetch_array($average23)[0],1,PHP_ROUND_HALF_ODD);
			  $max23 = mysqli_query($dbconnection,"SELECT MAX(Score) FROM x6 WHERE ID='$users_Names'");
			  $max24 = mysqli_fetch_array($max23)[0];
			  $min23 = mysqli_query($dbconnection,"SELECT MIN(Score) FROM x6 WHERE ID='$users_Names'");
			  $min24 = mysqli_fetch_array($min23)[0];
			  $sum23 = mysqli_query($dbconnection,"SELECT SUM(Score) FROM x6 WHERE ID='$users_Names'");
			  $sum24 = mysqli_fetch_array($sum23)[0];	
			  /////
			  $numberofrows12 = mysqli_num_rows(mysqli_query($dbconnection,"SELECT Score FROM x7 WHERE ID='$users_Names'")) - $jill7[0]; //no of rows
			  $average25 = mysqli_query($dbconnection,"SELECT AVG(Score) FROM x7 WHERE ID='$users_Names'");
			  $average26 = round(mysqli_fetch_array($average25)[0],1,PHP_ROUND_HALF_ODD);
			  $max25 = mysqli_query($dbconnection,"SELECT MAX(Score) FROM x7 WHERE ID='$users_Names'");
			  $max26 = mysqli_fetch_array($max25)[0];
			  $min25 = mysqli_query($dbconnection,"SELECT MIN(Score) FROM x7 WHERE ID='$users_Names'");
			  $min26 = mysqli_fetch_array($min25)[0];
			  $sum25 = mysqli_query($dbconnection,"SELECT SUM(Score) FROM x7 WHERE ID='$users_Names'");
			  $sum26 = mysqli_fetch_array($sum25)[0];	
			  /////
			 echo '<div id="movename">'.'<a id="marginal1">'.'Welcome:&nbsp;'.'<a id="stylewelcome">'.$users_Names.'!'.'</a>'.'</a>'.'<a id="results">'.'Results Summary'.'</a>'.'</div>'; //test
			 echo '<center>'.'<h1>'.'Shortcuts'.'</h1>';
			 
			 echo '<a href="#1">'.'<button class="button">'.'Frequency Mode Level 1'.'</button>'.'</a>';
			 echo '&nbsp;'; //break blank space
			 echo '<a href="#2">'.'<button class="button">'.'Frequency Mode Level 2'.'</button>'.'</a>';
			 echo '&nbsp;'; //break blank space
			 echo '<a href="#3">'.'<button class="button">'.'Frequency Mode Level 3'.'</button>'.'</a>';
			 echo '&nbsp;'; //break blank space
			 echo '<a href="#4">'.'<button class="button">'.'Frequency Mode Level 4'.'</button>'.'</a>';
			 echo '&nbsp;'; //break blank space
			 echo '<a href="#5">'.'<button class="button">'.'Frequency Mode Level 5'.'</button>'.'</a>';
			 echo '&nbsp;'; //break blank space
			 echo '<a href="#6">'.'<button class="button">'.'Frequency Mode Level 6'.'</button>'.'</a>';
			 echo '<br>'; //break blank space
			 echo '<br>'; //break blank space
			 echo '<a href="#7">'.'<button class="button1">'.'Volume Mode Level 1'.'</button>'.'</a>';
			 echo '&nbsp;'; //break blank space
			 echo '<a href="#8">'.'<button class="button1">'.'Volume Mode Level 2'.'</button>'.'</a>';
			 echo '&nbsp;'; //break blank space
			 echo '<a href="#9">'.'<button class="button1">'.'Volume Mode Level 3'.'</button>'.'</a>';
			 echo '&nbsp;'; //break blank space
			 echo '<a href="#10">'.'<button class="button1">'.'Volume Mode Level 4'.'</button>'.'</a>';
			 echo '&nbsp;'; //break blank space
			 echo '<a href="#11">'.'<button class="button1">'.'Volume Mode Level 5'.'</button>'.'</a>';
			 echo '&nbsp;'; //break blank space
			 echo '<a href="#12">'.'<button class="button1">'.'Volume Mode Level 6'.'</button>'.'</a>';
			 echo '&nbsp;'; //break blank space
			 echo '<a href="#13">'.'<button class="button1">'.'Volume Mode Competitive'.'</button>'.'</a>';
			 
			 echo '</center>';
			 
			 echo '<a id="1">'.'</a>';
			 echo '<div id="ffs">';
			 echo '<div id="hi">';
             echo '<div id="moveaverage">'.'<a id="moverow1">'.'Mode: &nbsp;'.'<a id="styleattempts">'.'Frequency'.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Level: &nbsp;'.'<a id="styleattempts">'.'1'.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Number of attempts: &nbsp;'.'<a id="styleattempts">'.$numberofrows.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Highest Score: &nbsp;'.'<a id="styleattempts">'.$max1.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Lowest Score: &nbsp;'.'<a id="styleattempts">'.$min1.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Average Score: &nbsp;'.'<a id="styleattempts">'.$average1.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Sum of Scores: &nbsp;'.'<a id="styleattempts">'.$sum1.'</a>'.'</a>'.'</div>';
			 echo '</div>';
			
			 /////////////////////////////////////////////
			
		
			 //////
            $result = @mysqli_query($dbconnection,'SELECT ID FROM z1');
            if (!$result)
            {
             exit('<P> Error performing query:' .mysqli_error(). '</P>');
            }
            $x="<SCRIPT type =text/javascript> document.write(a)</SCRIPT> ";
            
            $resultf1 = mysqli_query($dbconnection,"SELECT * FROM z1 WHERE ID='$users_Names' LIMIT 10"); 
			$resultf2 = mysqli_query($dbconnection,"SELECT * FROM z2 WHERE ID='$users_Names' LIMIT 10"); 
			$resultf3 = mysqli_query($dbconnection,"SELECT * FROM z3 WHERE ID='$users_Names' LIMIT 10"); 
			$resultf4 = mysqli_query($dbconnection,"SELECT * FROM z4 WHERE ID='$users_Names' LIMIT 10"); 
			$resultf5 = mysqli_query($dbconnection,"SELECT * FROM z5 WHERE ID='$users_Names' LIMIT 10"); 
			$resultf6 = mysqli_query($dbconnection,"SELECT * FROM z6 WHERE ID='$users_Names' LIMIT 10"); 
			$resultx1 = mysqli_query($dbconnection,"SELECT * FROM x1 WHERE ID='$users_Names' LIMIT 10");
			$resultx2 = mysqli_query($dbconnection,"SELECT * FROM x2 WHERE ID='$users_Names' LIMIT 10");
			$resultx3 = mysqli_query($dbconnection,"SELECT * FROM x3 WHERE ID='$users_Names' LIMIT 10"); 
			$resultx4 = mysqli_query($dbconnection,"SELECT * FROM x4 WHERE ID='$users_Names' LIMIT 10"); 
			$resultx5 = mysqli_query($dbconnection,"SELECT * FROM x5 WHERE ID='$users_Names' LIMIT 10"); 
			$resultx6 = mysqli_query($dbconnection,"SELECT * FROM x6 WHERE ID='$users_Names' LIMIT 10"); 
			$resultx7 = mysqli_query($dbconnection,"SELECT * FROM x7 WHERE ID='$users_Names' LIMIT 10"); 
 


echo "<TABLE id='table1' align='center'>
                  <TR>
				  <TH>F1 Score</TH>
                  </TR>"; 
				 
while($row = mysqli_fetch_array($resultf1)){ 

                echo "<TR>";
            	if($row['Score'] == '') {}
				else
				{
            	echo "<TD>" . $row['Score'] ."</TD>";
				}
}

echo "</table>";
echo "<center>*only first 10 are shown*</center>";
echo '</div>';
////////////////////////////////////////////////////////////////
echo '<a id="2">'.'</a>';
echo '<div id="ffs1">';
echo '<div id="hi1">';
             echo '<div id="moveaverage">'.'<a id="moverow1">'.'Mode: &nbsp;'.'<a id="styleattempts">'.'Frequency'.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Level: &nbsp;'.'<a id="styleattempts">'.'2'.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Number of attempts: &nbsp;'.'<a id="styleattempts">'.$numberofrows1.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Highest Score: &nbsp;'.'<a id="styleattempts">'.$max4.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Lowest Score: &nbsp;'.'<a id="styleattempts">'.$min4.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Average Score: &nbsp;'.'<a id="styleattempts">'.$average4.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Sum of Scores: &nbsp;'.'<a id="styleattempts">'.$sum4.'</a>'.'</a>'.'</div>';
			 echo '</div>';
/////////////////////////////////////			 
echo "<TABLE id='table2' align='center'>
                  <TR>
				  <TH>F2 Score</TH>
                  </TR>"; 
while($row = mysqli_fetch_array($resultf2)){ 

                echo "<TR>";
            	if($row['Score'] == '') {} //this is to not display the null scores or also known as the empty scores
				else
				{
            	echo "<TD>" . $row['Score'] ."</TD>";
				}

}			
echo "</table>";	
echo "<center>*only first 10 are shown*</center>";
echo '</div>';		 
/////////////////////////////////////////////////////////////
echo '<a id="3">'.'</a>';
echo '<div id="ffs2">';
echo '<div id="hi2">';
             echo '<div id="moveaverage">'.'<a id="moverow1">'.'Mode: &nbsp;'.'<a id="styleattempts">'.'Frequency'.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Level: &nbsp;'.'<a id="styleattempts">'.'3'.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Number of attempts: &nbsp;'.'<a id="styleattempts">'.$numberofrows2.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Highest Score: &nbsp;'.'<a id="styleattempts">'.$max6.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Lowest Score: &nbsp;'.'<a id="styleattempts">'.$min6.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Average Score: &nbsp;'.'<a id="styleattempts">'.$average6.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Sum of Scores: &nbsp;'.'<a id="styleattempts">'.$sum6.'</a>'.'</a>'.'</div>';
			 echo '</div>';
/////////////////////////////////////			 
echo "<TABLE id='table3' align='center'>
                  <TR>
				  <TH>F3 Score</TH>
                  </TR>"; 
while($row = mysqli_fetch_array($resultf3)){ 

                echo "<TR>";
				if($row['Score'] == '') {}
				else
				{
            	echo "<TD>" . $row['Score'] ."</TD>";
				}
}			
echo "</table>";	
echo "<center>*only first 10 are shown*</center>";
echo '</div>';		 
//////////////////////////////////////////////
echo '<a id="4">'.'</a>';
echo '<div id="ffs3">';
echo '<div id="hi3">';
             echo '<div id="moveaverage">'.'<a id="moverow1">'.'Mode: &nbsp;'.'<a id="styleattempts">'.'Frequency'.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Level: &nbsp;'.'<a id="styleattempts">'.'4'.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Number of attempts: &nbsp;'.'<a id="styleattempts">'.$numberofrows3.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Highest Score: &nbsp;'.'<a id="styleattempts">'.$max8.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Lowest Score: &nbsp;'.'<a id="styleattempts">'.$min8.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Average Score: &nbsp;'.'<a id="styleattempts">'.$average8.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Sum of Scores: &nbsp;'.'<a id="styleattempts">'.$sum8.'</a>'.'</a>'.'</div>';
			 echo '</div>';
/////////////////////////////////////			 
echo "<TABLE id='table4' align='center'>
                  <TR>
				  <TH>F4 Score</TH>
                  </TR>"; 
while($row = mysqli_fetch_array($resultf4)){ 

                echo "<TR>"; //only removes the display 0 or null
            	if($row['Score'] == '') {} //remove all null or 0 cases because when i upload the name i set score as null.  
				else
				{
            	echo "<TD>" . $row['Score'] ."</TD>";
				}

}			
echo "</table>";	
echo "<center>*only first 10 are shown*</center>";
echo '</div>';		
////////////////////////////////////
echo '<a id="5">'.'</a>';
echo '<div id="ffs4">';
echo '<div id="hi4">';
             echo '<div id="moveaverage">'.'<a id="moverow1">'.'Mode: &nbsp;'.'<a id="styleattempts">'.'Frequency'.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Level: &nbsp;'.'<a id="styleattempts">'.'5'.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Number of attempts: &nbsp;'.'<a id="styleattempts">'.$numberofrows4.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Highest Score: &nbsp;'.'<a id="styleattempts">'.$max10.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Lowest Score: &nbsp;'.'<a id="styleattempts">'.$min10.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Average Score: &nbsp;'.'<a id="styleattempts">'.$average10.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Sum of Scores: &nbsp;'.'<a id="styleattempts">'.$sum10.'</a>'.'</a>'.'</div>';
			 echo '</div>';
/////////////////////////////////////			 
echo "<TABLE id='table5' align='center'>
                  <TR>
				  <TH>F5 Score</TH>
                  </TR>"; 
while($row = mysqli_fetch_array($resultf5)){ 

                echo "<TR>"; //only removes the display 0 or null
            	if($row['Score'] == '') {} //remove all null or 0 cases because when i upload the name i set score as null.  
				else
				{
            	echo "<TD>" . $row['Score'] ."</TD>";
				}

}			
echo "</table>";	
echo "<center>*only first 10 are shown*</center>";
echo '</div>';		
///////////////////////////////////////
echo '<a id="6">'.'</a>';
echo '<div id="ffs5">';
echo '<div id="hi5">';
             echo '<div id="moveaverage">'.'<a id="moverow1">'.'Mode: &nbsp;'.'<a id="styleattempts">'.'Frequency'.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Level: &nbsp;'.'<a id="styleattempts">'.'6'.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Number of attempts: &nbsp;'.'<a id="styleattempts">'.$numberofrows5.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Highest Score: &nbsp;'.'<a id="styleattempts">'.$max12.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Lowest Score: &nbsp;'.'<a id="styleattempts">'.$min12.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Average Score: &nbsp;'.'<a id="styleattempts">'.$average12.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Sum of Scores: &nbsp;'.'<a id="styleattempts">'.$sum12.'</a>'.'</a>'.'</div>';
			 echo '</div>';
/////////////////////////////////////			 
echo "<TABLE id='table6' align='center'>
                  <TR>
				  <TH>F6 Score</TH>
                  </TR>"; 
while($row = mysqli_fetch_array($resultf6)){ 

                echo "<TR>"; //only removes the display 0 or null
            	if($row['Score'] == '') {} //remove all null or 0 cases because when i upload the name i set score as null.  
				else
				{
            	echo "<TD>" . $row['Score'] ."</TD>";
				}

}			
echo "</table>";	
echo "<center>*only first 10 are shown*</center>";
echo '</div>';		
/////////////////////////////////////
echo '<a id="7">'.'</a>';
echo '<div id="ffs6">';
echo '<div id="hi6">';
             echo '<div id="moveaverage">'.'<a id="moverow1">'.'Mode: &nbsp;'.'<a id="styleattempts">'.'Volume'.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Level: &nbsp;'.'<a id="styleattempts">'.'1'.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Number of attempts: &nbsp;'.'<a id="styleattempts">'.$numberofrows6.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Highest Score: &nbsp;'.'<a id="styleattempts">'.$max14.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Lowest Score: &nbsp;'.'<a id="styleattempts">'.$min14.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Average Score: &nbsp;'.'<a id="styleattempts">'.$average14.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Sum of Scores: &nbsp;'.'<a id="styleattempts">'.$sum14.'</a>'.'</a>'.'</div>';
			 echo '</div>';
/////////////////////////////////////			 
echo "<TABLE id='table7' align='center'>
                  <TR>
				  <TH>V1 Score</TH>
                  </TR>"; 
while($row = mysqli_fetch_array($resultx1)){ 

                echo "<TR>"; //only removes the display 0 or null
            	if($row['Score'] == '') {} //remove all null or 0 cases because when i upload the name i set score as null.  
				else
				{
            	echo "<TD>" . $row['Score'] ."</TD>";
				}

}			
echo "</table>";	
echo "<center>*only first 10 are shown*</center>";
echo '</div>';		
//////////////////////////////////////////
echo '<a id="8">'.'</a>';
echo '<div id="ffs7">';
echo '<div id="hi7">';
             echo '<div id="moveaverage">'.'<a id="moverow1">'.'Mode: &nbsp;'.'<a id="styleattempts">'.'Volume'.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Level: &nbsp;'.'<a id="styleattempts">'.'2'.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Number of attempts: &nbsp;'.'<a id="styleattempts">'.$numberofrows7.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Highest Score: &nbsp;'.'<a id="styleattempts">'.$max16.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Lowest Score: &nbsp;'.'<a id="styleattempts">'.$min16.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Average Score: &nbsp;'.'<a id="styleattempts">'.$average16.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Sum of Scores: &nbsp;'.'<a id="styleattempts">'.$sum16.'</a>'.'</a>'.'</div>';
			 echo '</div>';
/////////////////////////////////////			 
echo "<TABLE id='table8' align='center'>
                  <TR>
				  <TH>V2 Score</TH>
                  </TR>"; 
while($row = mysqli_fetch_array($resultx2)){ 

                echo "<TR>"; //only removes the display 0 or null
            	if($row['Score'] == '') {} //remove all null or 0 cases because when i upload the name i set score as null.  
				else
				{
            	echo "<TD>" . $row['Score'] ."</TD>";
				}

}			
echo "</table>";	
echo "<center>*only first 10 are shown*</center>";
echo '</div>';		
///////////////////////////////////////////
echo '<a id="9">'.'</a>';
echo '<div id="ffs8">';
echo '<div id="hi8">';
             echo '<div id="moveaverage">'.'<a id="moverow1">'.'Mode: &nbsp;'.'<a id="styleattempts">'.'Volume'.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Level: &nbsp;'.'<a id="styleattempts">'.'3'.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Number of attempts: &nbsp;'.'<a id="styleattempts">'.$numberofrows8.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Highest Score: &nbsp;'.'<a id="styleattempts">'.$max18.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Lowest Score: &nbsp;'.'<a id="styleattempts">'.$min18.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Average Score: &nbsp;'.'<a id="styleattempts">'.$average18.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Sum of Scores: &nbsp;'.'<a id="styleattempts">'.$sum18.'</a>'.'</a>'.'</div>';
			 echo '</div>';
/////////////////////////////////////			 
echo "<TABLE id='table9' align='center'>
                  <TR>
				  <TH>V3 Score</TH>
                  </TR>"; 
while($row = mysqli_fetch_array($resultx3)){ 

                echo "<TR>"; //only removes the display 0 or null
            	if($row['Score'] == '') {} //remove all null or 0 cases because when i upload the name i set score as null.  
				else
				{
            	echo "<TD>" . $row['Score'] ."</TD>";
				}

}			
echo "</table>";	
echo "<center>*only first 10 are shown*</center>";
echo '</div>';		
/////////////////////////////////////////////
echo '<a id="10">'.'</a>';
echo '<div id="ffs9">';
echo '<div id="hi9">';
             echo '<div id="moveaverage">'.'<a id="moverow1">'.'Mode: &nbsp;'.'<a id="styleattempts">'.'Volume'.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Level: &nbsp;'.'<a id="styleattempts">'.'4'.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Number of attempts: &nbsp;'.'<a id="styleattempts">'.$numberofrows9.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Highest Score: &nbsp;'.'<a id="styleattempts">'.$max20.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Lowest Score: &nbsp;'.'<a id="styleattempts">'.$min20.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Average Score: &nbsp;'.'<a id="styleattempts">'.$average20.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Sum of Scores: &nbsp;'.'<a id="styleattempts">'.$sum20.'</a>'.'</a>'.'</div>';
			 echo '</div>';
/////////////////////////////////////			 
echo "<TABLE id='table10' align='center'>
                  <TR>
				  <TH>V4 Score</TH>
                  </TR>"; 
while($row = mysqli_fetch_array($resultx4)){ 

                echo "<TR>"; //only removes the display 0 or null
            	if($row['Score'] == '') {} //remove all null or 0 cases because when i upload the name i set score as null.  
				else
				{
            	echo "<TD>" . $row['Score'] ."</TD>";
				}

}			
echo "</table>";	
echo "<center>*only first 10 are shown*</center>";
echo '</div>';		
///////////////////////////////////////////////
echo '<a id="11">'.'</a>';
echo '<div id="ffs10">';
echo '<div id="hi10">';
             echo '<div id="moveaverage">'.'<a id="moverow1">'.'Mode: &nbsp;'.'<a id="styleattempts">'.'Volume'.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Level: &nbsp;'.'<a id="styleattempts">'.'5'.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Number of attempts: &nbsp;'.'<a id="styleattempts">'.$numberofrows10.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Highest Score: &nbsp;'.'<a id="styleattempts">'.$max22.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Lowest Score: &nbsp;'.'<a id="styleattempts">'.$min22.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Average Score: &nbsp;'.'<a id="styleattempts">'.$average22.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Sum of Scores: &nbsp;'.'<a id="styleattempts">'.$sum22.'</a>'.'</a>'.'</div>';
			 echo '</div>';
/////////////////////////////////////			 
echo "<TABLE id='table11' align='center'>
                  <TR>
				  <TH>V5 Score</TH>
                  </TR>"; 
while($row = mysqli_fetch_array($resultx5)){ 

                echo "<TR>"; //only removes the display 0 or null
            	if($row['Score'] == '') {} //remove all null or 0 cases because when i upload the name i set score as null.  
				else
				{
            	echo "<TD>" . $row['Score'] ."</TD>";
				}

}			
echo "</table>";	
echo "<center>*only first 10 are shown*</center>";
echo '</div>';		
/////////////////////////////////////////
echo '<a id="12">'.'</a>';
echo '<div id="ffs11">';
echo '<div id="hi11">';
             echo '<div id="moveaverage">'.'<a id="moverow1">'.'Mode: &nbsp;'.'<a id="styleattempts">'.'Volume'.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Level: &nbsp;'.'<a id="styleattempts">'.'6'.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Number of attempts: &nbsp;'.'<a id="styleattempts">'.$numberofrows11.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Highest Score: &nbsp;'.'<a id="styleattempts">'.$max24.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Lowest Score: &nbsp;'.'<a id="styleattempts">'.$min24.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Average Score: &nbsp;'.'<a id="styleattempts">'.$average24.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Sum of Scores: &nbsp;'.'<a id="styleattempts">'.$sum24.'</a>'.'</a>'.'</div>';
			 echo '</div>';
/////////////////////////////////////			 
echo "<TABLE id='table12' align='center'>
                  <TR>
				  <TH>V6 Score</TH>
                  </TR>"; 
while($row = mysqli_fetch_array($resultx6)){ 

                echo "<TR>"; //only removes the display 0 or null
            	if($row['Score'] == '') {} //remove all null or 0 cases because when i upload the name i set score as null.  
				else
				{
            	echo "<TD>" . $row['Score'] ."</TD>";
				}

}			
echo "</table>";	
echo "<center>*only first 10 are shown*</center>";
echo '</div>';		
//////////////////////////////
echo '<a id="13">'.'</a>';
echo '<div id="ffs12">';
echo '<div id="hi12">';
             echo '<div id="moveaverage">'.'<a id="moverow1">'.'Mode: &nbsp;'.'<a id="styleattempts">'.'Volume'.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Level: &nbsp;'.'<a id="styleattempts">'.'Competitive'.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Number of attempts: &nbsp;'.'<a id="styleattempts">'.$numberofrows12.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Highest Score: &nbsp;'.'<a id="styleattempts">'.$max26.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Lowest Score: &nbsp;'.'<a id="styleattempts">'.$min26.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Average Score: &nbsp;'.'<a id="styleattempts">'.$average26.'</a>'.'</a>'.'</div>';
			 echo '<div id="moveaverage">'.'<a id="moverow1">'.'Sum of Scores: &nbsp;'.'<a id="styleattempts">'.$sum26.'</a>'.'</a>'.'</div>';
			 echo '</div>';
/////////////////////////////////////			 
echo "<TABLE id='table13' align='center'>
                  <TR>
				  <TH>Competitive Score</TH>
                  </TR>"; 
while($row = mysqli_fetch_array($resultx7)){ 

                echo "<TR>"; //only removes the display 0 or null
            	if($row['Score'] == '') {} //remove all null or 0 cases because when i upload the name i set score as null.  
				else
				{
            	echo "<TD>" . $row['Score'] ."</TD>";
				}

}			
echo "</table>";	
echo "<center>*only first 10 are shown*</center>";
echo '</div>';		

?>
</body>
</html>