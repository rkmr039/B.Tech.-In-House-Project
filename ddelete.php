<?php
	session_start();
	$dname=$_SESSION['dname'];
	$con=mysql_connect("localhost","root","");
	mysql_select_db("registration",$con);

	$sql="UPDATE doctor SET imagelocation=NULL WHERE dname='$dname'";
	if(mysql_query($sql,$con))
	{
		header('location:dprofile.php');
	}
	else
	{
		echo "Not deleted";
	}
?>