<?php 
session_start();
// connect to database
$db = mysqli_connect("localhost", "root", "", "registration");

if(isset($_POST['Login']))
{
	$dname = mysql_real_escape_string($_POST['dname']);
	$password = mysql_real_escape_string($_POST['password']);
	$password=md5($password);

	$sql = "SELECT *FROM doctor WHERE dname ='$dname' AND password='$password'";
	$result = mysqli_query ($db,$sql);
    
    if(mysqli_num_rows($result)==1)
    {
    	$_SESSION['message']=  "you are logged in";
    	$_SESSION['dname'] = $dname;
    	header('location:dprofile.php');
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
    echo "<title> Login | SMART HEALTH ADVISOR</title>
    <link rel='stylesheet' href='css/login.css' type='text/css'>";?>

<body>
<div id="container"><!--Container Starts-->
   
 <div id="header"> 
          <a href="home.php"><img src="img/icon.jpg" alt="SHA logo" id="logo5"></a>
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
      <div id="centre">
	<form method="post" action="dlogin.php">
	    <div id ="form_top">
  	       <h3>Login</h3>
        </div> 

    
   
  <div class="input-group">
            <input type="text" name="dname" class="textInput" placeholder="Username" required>
 </div>
  		 
  <div class="input-group">			
  			<input type="password" name="password" class="textInput" placeholder="Password" required>
  </div>
  
  <div class="input-group">
  			<button type="submit" name="Login" class="btn" value="Login">Login</button>
  </div>
  		
  		<p>Not A Member?<a href="dregister.php">Sign Up</a></p> 
  </form> 
  </div>
      <div id="rightColumn"></div>
  </div>
    
    
  <?php include 'footer.php'; ?> 
 </div><!--Container Ends-->
</body>
</html>
