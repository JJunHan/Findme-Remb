<?php

if(!isset($_COOKIE["login"]))
	header("location:login.php");
?>
<a href="vol_level.php">Click here to return to play :)</a>
<form action="delete.php" method="POST">
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
            $result = @mysqli_query($dbconnection,'SELECT ID FROM User');
            if (!$result)
            {
             exit('<P> Error performing query:' .mysqli_error(). '</P>');
            }
            $x="<SCRIPT type =text/javascript> document.write(a)</SCRIPT> ";
            
              $result = mysqli_query($dbconnection,"SELECT * FROM User ORDER BY Score DESC"); 

         
            
            echo "<center><TABLE border='5'>
                  <TR>
                  <TH>Name</TH>
				  <TH>Score</TH>
                  <TH>Delete</TH>
                  </TR></center>"; 
  
            while($row = mysqli_fetch_array($result))
            {
		
                echo "<TR>";
                echo "<TD>" . $row['ID'] ."</TD>";
            	echo "<TD>" . $row['Score'] ."</TD>";
  echo "<TD><a href=\"delete.php?id=" . $row['ID'] ."\"><font color='red'></font><center><img src='trash.png' width='30' height='36'/></center></a> &nbsp;&nbsp;&nbsp;&nbsp;</TD>";

  
             echo "</TR>";
            }
            echo "</TABLE>";

            mysqli_close($dbconnection);
            ?> 
                </form>    