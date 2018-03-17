<?php
session_start();
$username="";
$email="";
$errors=array();
$db=mysqli_connect('localhost','root','','registration');


//if the register button is clicked

if(isset($_POST['register'])){
	$username=mysql_real_escape_string($_POST['username']);
	$email=mysql_real_escape_string($_POST['email']);
	$password_1=mysql_real_escape_string($_POST['password_1']);
	$password_2=mysql_real_escape_string($_POST['password_2']);
	$pno=mysql_real_escape_string($_POST['pno']);
	$dob=mysql_real_escape_string($_POST['dob']);
	$age=mysql_real_escape_string($_POST['age']);
	$country=mysql_real_escape_string($_POST['country']);
	$city=mysql_real_escape_string($_POST['city']);
	//ensure that form fields are filled properly
	 /*
        if(empty($username)){
		array_push($errors,"username is required");//add error to errors array
	}
	if(empty($email)){
		array_push($errors,"email is required");//add error to errors array
	}
	if(empty($password_1)){
		array_push($errors,"password is required");//add error to errors array
	}
	
	if(empty($pno)){
		array_push($errors,"Phone no. is required");//add error to errors array
	}
	if(empty($dob)){
		array_push($errors,"date of Birth is required");//add error to errors array
	}
	if(empty($age)){
		array_push($errors,"Ageis required");//add error to errors array
	}
	if(empty($country)){
		array_push($errors,"Country is required");//add error to errors array
	}
	if(empty($city)){
		array_push($errors,"City is required");//add error to errors array
	}*/
	if($password_1!=$password_2){
		array_push($errors,"The two password do not match");
	}
	//if there are no errors,save user to database
	if(count($errors)==0){
		$password=md5($password_1);//encrypting password before storing the database(security)
		/*$c=0;
		$result=mysqli_query($db,"SELECT * FROM users WHERE username='$username'");
		$c=mysqli_num_rows($result);
		if($c>0)
		{
			echo "Username not available";
		}
		else{*/
	    $sql="INSERT INTO users(username,email,phone_no,age,dob,country,city,password)VALUES('$username','$email','$pno','$age','$dob','$country','$city','$password')";
		mysqli_query($db,$sql);

		//mysql_query("INSERT INTO users(username,email,phone_no,age,dob,country,city,password)VALUES('$username','$email','$pno','$age','$dob','$country','$city','$password')");
		//mysqli_query($db,$sql);
		$_SESSION['username']=$username;
		$_SESSION['success']="You are now logged in";
		header('location: profile.php');//redirect to profile page
		//}
	}
}
?>