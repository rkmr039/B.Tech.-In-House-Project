 
<!doctype html>
<html>
  <?php include 'head.php';
    echo "<title>Feedbacks | SMART HEALTH ADVISOR</title>
    <link rel='stylesheet' href='css/viewfeedback.css' type='text/css'>";
  ?>
<body>
<div id="container"><!--Container Starts-->
   
 <div id="header"> 
          <img src="img/icon.jpg" alt="SHA logo" id="logo5">
          <img src="img/SHA_Plate2.PNG" alt="SHA_Plate" id="SHA"> 
         
<div id="navigation">     
<ul id="" >
        <li><a href="Home.php">Home</a></li>
       <li><p>Services</p><ul>
               <li><a href="map2.php">Search Emergency Services</a></li>
               <li><a href="medicine.php">Search Medicines</a></li>
          </ul>
       </li>
     
     <li><p>Calculators</p> 
           <ul>
               <li><a href="Bmi.php">BMI Calculator</a></li>
               <li><a href="heart_rate.php">Target Heart Rate</a></li>
               <li><a href="fat.php">Body Fat Calculator</a></li>
               <li><a href="http://www.healthycalculators.com/blood-donation.php" target=_blank>Blood Donation Calculator</a></li>
               <li><a href="http://www.healthycalculators.com/">Others</a></li>   
          </ul>
       </li>
          <li><p>LogIn</p>
          <ul>
               <li><a href="login.php">Member LogIn</a></li>
               <li><a href="dlogin.php">Doctor Login</a></li>
          </ul> 
    </li>     
        <li><p>SignUp</p>
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
    <div id="centre"><?php
mysql_connect("localhost","root","");
mysql_select_db("registration");

$find=mysql_query("SELECT * FROM feedback");
echo "<div id='head'  >
		   
		   <div  id='uname'>Name</div>
		   <div  id='dname'>Doctor Name</div>
		   <div  id='did'>Doctor ID</div>
		   <div  id='comments' style='text-align: center;'>Comments</div>
           <div  id='rating'>Ratings</div>
            
		   
	 </div>";
        
        


while($row=mysql_fetch_assoc($find))
{

    /*if(isset($_GET['likes']))
    {
        $likes++;
    }
*/
	$name5=$row['Name'];
	$name7=$row['dname'];
	$name8=$row['did'];
	$name6=$row['comments'];
    $name9=$row['rating'];
    $likes=$row['likes'];

	echo "<div id='head'>
	 
		     <div id='uname'>$name5</div>
		     <div id='dname'>$name7</div>
		     <div id='did'>$name8</div>
		     <div id='comments'><textarea readonly>$name6</textarea></div>
             <div id='rating'>$name9/5</div>
             
             
		   </div>"; 
			
	
	
}
        ?></div>
          
      </div>
<?php include 'footer.php'; ?>
 </div><!--Container Ends-->
</body>
</html>
