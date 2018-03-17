<?php 
session_start();
// connect to database
$db = mysqli_connect("localhost", "root", "", "registration");

if(isset($_POST['Login']))
{
	
	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);
	$password=md5($password);

	$sql = "SELECT *FROM users WHERE username ='$username' AND password='$password'";
	$result = mysqli_query ($db,$sql);
    
    if(mysqli_num_rows($result)==1)
    {
    	$_SESSION['message']=  "you are logged in";
    	$_SESSION['username'] = $username;
    	header("location:profile.php");
    }          
    else
    {
    	$_SESSION['message'] = "Username/Password combination incorrect";
    }

}
   

?>
<!doctype html>
<html>
<?php include 'head.php';
    
    echo "<title>Member Login | SMART HEALTH ADVISOR</title>
    <link rel='stylesheet' href='css/login.css' type='text/css'>";?>
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
                <li><a href="dregister.php">Doctor SignUp</a></li>
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
<form method="post" action="login.php">
      <div id="form_top">
  	   <h3>Login</h3>
      </div>
  	
<div class="input-group">
   <input type="text" name="username" placeholder="Username" required >
</div>

<div class="input-group">
   <input type="password" name="password" placeholder="Password" required>
</div>

<div class="input-group">
   <button type="submit" name="Login" class="btn">Login</button>
</div>
<!--<div class="input_group">
   <input type="checkbox" name="ch1" value="ch">Remember username and password
</div>-->

<p>Not yet a member?<a href='register.php'>Sign up</a></p>
 
</form> 
   
      </div>
	  <div id="rightColumn"></div>
  </div>
  <?php include 'footer.php'; ?>
    </div><!--Container Ends-->
</body>
</html>