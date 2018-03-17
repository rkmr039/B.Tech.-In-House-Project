<?php
	session_start();
	$username=$_SESSION['username'];
	$con=mysql_connect("localhost","root","");
	mysql_select_db("registration",$con);

	$sql="UPDATE users SET imagelocation=NULL WHERE username='$username'";
	if(mysql_query($sql,$con))
	{
		header("refresh:1;url=profile.php");
	}
	else
	{
		echo "Not deleted";
	}
?>