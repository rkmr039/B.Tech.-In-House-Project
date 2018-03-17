<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("registration",$con);
$sql="UPDATE doctor SET dname='$_POST[dname]',email='$_POST[email]',locality='$_POST[locality]',city='$_POST[city]',dmobile='$_POST[dno]',category='$_POST[category]',day='$_POST[day]',time='$_POST[time]' WHERE did='$_POST[id]'";
//echo "<a href='dprofile.php'>Go Back</a>";
if(mysql_query($sql,$con))
	
{
	echo "<script type='text/javascript'>
          alert('updated');
          </script>";
	
	header('location: dprofile.php');

}
else
{
	echo "Not updated Please Go Back" ;
}
//echo "<a href='profile.php'>Go Back</a>";



 
?>