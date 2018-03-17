<?php
session_start();
$username=$_SESSION['username'];
$con=mysql_connect("localhost","root","");
mysql_select_db("registration",$con);
$sql=mysql_query("SELECT * FROM reply1 WHERE username='$username'");
echo "<table cellspacing='50' cellpading='400' width='700'>
           
		   <tr>
		   
		   <td><u>Doctor</u></td>
		   <td><u>Message</u></td>

		   
		   </tr>
		   </table>";
while($row=mysql_fetch_assoc($sql))
{
	

	$name5=$row['dname'];
	$name6=$row['msg'];
	echo "<table border='' cellspacing='50' cellpading='400' width='700'>
		   <tr>
		   
		   
		   <td>$name5</td>
		   <td>$name6</td>
		  
		   </tr>
		     </table>
			";
			
	
	
	
}


?>