<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("registration",$con);
$sql="UPDATE users SET username='$_POST[pname]',email='$_POST[email]',phone_no='$_POST[pno]',age='$_POST[age]',dob='$_POST[dob]',country='$_POST[country]',city='$_POST[city]'WHERE Id='$_POST[id]'";
//echo "<a href='profile.php'>Go Back</a>";
if(mysql_query($sql,$con))
{
	header('location:profile.php');

}
else
{
	echo "Not updated";
}
//echo "<a href='profile.php'>Go Back</a>";



 
?>