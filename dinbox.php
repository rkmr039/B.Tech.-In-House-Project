<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("registration",$con);
$sql=mysql_query("SELECT * FROM chat WHERE did ='$_GET[did]'");
echo "<table cellspacing='50' cellpading='400' width='700'>
           
		   <tr>
		   
		   <td><u>Patient</u></td>
		   <td><u>Message</u></td>
		    <td><a href='Reply.php'>Reply</a></td> //new
		   
		   </tr>
		   </table>";
while($row=mysql_fetch_assoc($sql))
{
	

	$name5=$row['uname'];
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