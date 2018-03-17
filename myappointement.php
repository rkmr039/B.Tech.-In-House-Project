 
<!doctype html>
<html>

<?php include 'head.php';
    echo "<title>My Appointments | SMART HEALTH ADVISOR</title>
    <link rel='stylesheet' href='css/myappointments.css' type='text/css'>";?>
<body>
<div id="container"><!--Container Starts-->
   
 <div id="header"> 
          <a href="home.php"><img src="img/icon.jpg" alt="SHA logo" id="logo5"></a>
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
        <li><a href="dprofile.php">Profile</a></li>
        <li><a href="dlogout.php">LogOut</a></li>     
 </ul>   
     </div> 
 </div> 
    
<!--====== header ends here====-->

 
  <div id="middle">
    <div id="centre"><?php
$con=mysql_connect("localhost","root","");
mysql_select_db("registration",$con);
$sql=mysql_query("SELECT * FROM bookinghistory WHERE did ='$_GET[did]'");
echo "<div id='head'>
		   
		   <div id='aid'>Appointe-<br>ment ID</div>
		   <div id='uname'>user<br> Name</div>
		   <div id='date'>Date</div>
		   <div id='time'>Time</div>
		   <div id='category'>Category</div>
           <div id='download'>Download<br>File</div>
		   <div id='delete'>Cancel<br>Appointment</div>
		  </div>";
while($row=mysql_fetch_assoc($sql))
{
	
	$name1=$row['aid'];
	$name2=$row['uname'];
	$name3=$row['date'];
	$name4=$row['time'];
	$name5=$row['category'];
	echo "<div id='head'> 
		   <div id='aid'>$name1</div>
		   <div id='uname'><textarea>$name2</textarea></div>
		   <div id='date'>$name3</div>
		   <div id='time'>$name4</div>
		   <div id='category'><textarea>$name5</textarea></div>
		   <div id='delete'><a href=deleteappointement.php?aid=".$row['aid'].">Delete</div>
       <div id='download'><a href=display.php?aid=".$row['aid'].">Download</div>
         </div>
			";
			
	
	
}

?></div>
          
      </div>
          
  
    
    
<?php include 'footer.php'; ?>
 
 </div><!--Container Ends-->
</body>
</html>
