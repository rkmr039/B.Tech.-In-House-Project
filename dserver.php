<?php
session_start();
$dname="";
$email="";
$errors=array();
$db=mysqli_connect('localhost','root','','registration');
//if the register button is clicked

if(isset($_POST['register'])){
	$dname=mysql_real_escape_string($_POST['dname']);
	$email=mysql_real_escape_string($_POST['email']);
	$password_1=mysql_real_escape_string($_POST['password_1']);
	$password_2=mysql_real_escape_string($_POST['password_2']);
	$pno=mysql_real_escape_string($_POST['pno']);
	$dob=mysql_real_escape_string($_POST['dob']);
	$age=mysql_real_escape_string($_POST['age']);
	$category=mysql_real_escape_string($_POST['category']);
	$city=mysql_real_escape_string($_POST['city']);
	$dadress=mysql_real_escape_string($_POST['dadress']);
	$day=mysql_real_escape_string($_POST['day']);
	$time=mysql_real_escape_string($_POST['time']);	
	if($password_1!=$password_2){
		array_push($errors,"the two password do not match");
	}
	if(count($errors)==0){
		$password=md5($password_1);//encrypting password before storing the database(security)
		$c=0;
		$result=mysqli_query($db,"SELECT * FROM doctor WHERE dname='$dname'");
		$c=mysqli_num_rows($result);
		if($c>0)
		{
			echo "username exist";
		}
		else{
	    $sql="INSERT INTO doctor(dname,email,age,dob,password,dadress,city,dmobile,category,day,time)VALUES('$dname','$email','$age','$dob','$password','$dadress','$city','$pno','$category','$day','$time')";
		mysqli_query($db,$sql);

		//mysql_query("INSERT INTO users(username,email,phone_no,age,dob,country,city,password)VALUES('$username','$email','$pno','$age','$dob','$country','$city','$password')");
		//mysqli_query($db,$sql);
		$_SESSION['dname']=$dname;
		$_SESSION['success']="you are now logged in";
		header('location: dindex.php');//redirect to home page
		}
	}
}
?>