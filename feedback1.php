<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>feedback</title>
</head>
<body>
<?php
session_start();
$username=$_SESSION['username'];
mysql_connect("localhost","root","");
mysql_select_db("registration");
$doctorname=$_POST['dname'];
$did=$_POST['did'];
$search=$_POST['comments'];
$rating=$_POST['rating'];    
$find=mysql_query("INSERT INTO feedback (Name,dname,did,comments,rating)VALUES('$username','$doctorname','$did','$search','$rating')");
if($find)
{    
    echo "Success Fully Updated";
	header("refresh:2;url=profile.php");	  
}
//header("refresh:2;url=profile.php");
?>
</body>
</html>