<?php 
session_start();
// connect to database
$db = mysqli_connect("localhost", "root", "", "registration");
if(isset($_POST['register_btn']))
{
	$dname=mysql_real_escape_string($_POST['dname']);
	$email=mysql_real_escape_string($_POST['email']);
	$password=mysql_real_escape_string($_POST['password']);
	$password2=mysql_real_escape_string($_POST['password2']);
	$pno=mysql_real_escape_string($_POST['pno']);
	//$dob=mysql_real_escape_string($_POST['dob']);
	//$age=mysql_real_escape_string($_POST['age']);
	$category=mysql_real_escape_string($_POST['category']);
	$city=mysql_real_escape_string($_POST['city']);
	$locality=mysql_real_escape_string($_POST['locality']);
	$day=mysql_real_escape_string($_POST['day']);
	$time=mysql_real_escape_string($_POST['time']);	
	 
     $query="SELECT * FROM doctor WHERE dname='$dname'";
	 $query1=mysqli_query($db, $query);
	 $count=mysqli_num_rows($query1);
	 if($count>0)
	 {
		 $_SESSION ['message']= "Username already exist";
	 }
	 else
     {
	 if($password==$password2)
	 {
        $password=md5($password);
        $sql = "INSERT INTO doctor(dname,email,password,locality,city,dmobile,category,day,time)VALUES('$dname','$email','$password','$locality','$city','$pno','$category','$day','$time')";
        mysqli_query($db, $sql);
        $_SESSION['message']= "You are logged in";
        $_SESSION['dname']= $dname;
        header("location:dprofile.php"); //redirect to profile 
	 }
	 else
	 {
	 	$_SESSION['message']="The two password do not match";

	 }
}
}
   



?>

<!doctype html>
<html>

    <?php include 'head.php';
    echo "<title>Doctor Register | SMART HEALTH ADVISOR</title>
    <link rel='stylesheet' href='css/BasicStyle.css' type='text/css'>
    <link rel='stylesheet' href='css/register.css' type='text/css'>";?>
    <body>
<div id="container"><!--Container Starts-->
   
 <div id="header"> 
          <img src="img/icon.jpg" alt="SHA logo" id="logo5">
          <img src="img/SHA_Plate2.PNG" alt="SHA_Plate" id="SHA"> 
         
<div id="navigation">     
<ul id="" >
        <li><a href="Home.php">Home</a></li>
        <li><a href="link">Services</a>  <ul>
               <li><a href="map2.php">Search Emergency Services</a></li>
               <li><a href="medicine.php">Search Medicines</a></li>
          </ul>
       </li>
     
     <li><a href="http://www.healthycalculators.com/">Calculators</a> 
           <ul>
               <li><a href="Bmi.php">BMI Calculator</a></li>
               <li><a href="heart_rate.php" target=_blank>Target Heart Rate</a></li>
               <li><a href="fat.php" target=_blank>Body Fat Calculator</a></li>
               <li><a href="http://www.healthycalculators.com/blood-donation.php" target=_blank>Blood Donation Calculator</a></li>
               <li><a href="http://www.healthycalculators.com/">Others</a></li>
               
               
          </ul>
       </li>
        <li><a href="link">LogIn</a>
          <ul>
               <li><a href="login.php">Member LogIn</a></li>
               <li><a href="dlogin.php">Doctor Login</a></li>
          </ul>      
        
        <li><a href="link">SignUp</a>
               
            <ul>
                <li><a href="register.php">Member SignUp</a></li>
                <!--<li><a href="link">Doctor SignUp</a></li>-->
            </ul>
        </li>
     
       
 </ul>   
     </div> 
 </div> 
    
<!--====== header ends here====-->

 
  <div id="middle">
    <div id="leftColumn"></div>
    
    <div id="centre"><!-- login form stats here -->       
       

    <?php
    if(isset($_SESSION['message']))
    {
    	echo "<div id='error_msg'>".$_SESSION['message']."</div>";
    	unset($_SESSION['message']);
    }
   ?> 
        <form method="post" action="dregister.php" style="margin-top:-90px;">
        <div id="form_top">
  	         <h3>Register</h3>
        </div>
  		<div class="input-group">
  			<input type="text" name="dname" class="textInput" placeholder="Userame" required>
  		</div>
  		<div class="input-group">
  			<input type="email" name="email" class="textInput"  placeholder="Email"required>
  		</div>
  		<div class="input-group">
            <input type="password" name="password" class="textInput" placeholder="Password" required>
  		</div>
  		<div class="input-group">
  			<input type="password" name="password2" class="textInput"  placeholder="Confirm Password"required>
  		</div>
		<div class="input-group">
  			<input type="text" name="pno" class="textInput" placeholder="Phone No." >
  		</div>
		<!--<div class="input-group">
  			<input type="text" name="age" class="textInput"  placeholder="Age">
  		</div>
		<div class="input-group">
            <input type="date" name="dob" class="textInput" placeholder="Date of Birth" >
  		</div>-->
		<div class="input-group">
  			<input type="text" name="category" class="textInput" placeholder="Specalization" >
  		</div>
		<div class="input-group">
  			<input type="text" name="city" class="textInput" placeholder="City" >
  		</div>
		<div class="input-group">
  			<input type="text" name="locality" class="textInput" placeholder="Locality" >
  		</div>
		<div class="input-group">
  			<td><input type="text" name="day" class="textInput" placeholder="Working Days" >
  		</div>
		<div class="input-group">
  			<input type="text" name="time" class="textInput" placeholder="From --:-- AM/PM To --:-- AM/PM" >
  		</div>

  		<div class="input-group"> 
  			<button type="submit" name="register_btn" value="Register" class="btn">Regsiter</button>
  		</div>

	<p>Already a member?<a href="dlogin.php">Sign In</a></p>
    <p>First four field are necessary.</p>
 
</form> 
   
      </div>
	  <div id="rightColumn"></div>
  </div>
  
    
    
<?php include 'footer.php'; ?>
 </div><!--Container Ends-->
</body>
</html>