 
<!doctype html>
<html>
    
    <?php include 'head.php';
    
    echo "<link rel='stylesheet' href='css/viewbooking.css' type='text/css'>
<title>My Bookings | SMART HEALTH ADVISOR</title>";?>
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
       <li><a href="profile.php">Profile</a></li> 
      <li><a href="logout.php">LogOut</a></li> 
    
     
       
 </ul>   
     </div> 
 </div> 
    
<!--====== header ends here====-->

 
  <div id="middle">
      <div id="centre"> <?php
session_start();
$var=$_SESSION['username'];
//$_SESSION['Id']=;
//$var=$_SESSION['username'];
mysql_connect("localhost","root","");
mysql_select_db("registration");
	$var=$_SESSION['username'];
//$query=mysql_query("SELECT * FROM users WHERE username='$var' ");
$var=$_SESSION['username'];
//mysql_connect("localhost","root","");
//mysql_select_db("registration");
$find=mysql_query("SELECT * FROM bookinghistory WHERE uname='$var' ");
//$query=mysql_query("SELECT * FROM doctor  ")
echo "<div id='head'>
		   
		   <div id='aid'>Appointement Id</div>
		   <div id='did'>Doctor Id</div>
		   <div id='dname'>Doctor<br> Name</div>
		  
		   <div id='date'>Date</div>
		   <div id='time'>Time</div>
		   <div id='category'>Category</div>
		   <div id='delete'>Delete</div>
		   <div id='files'>Upload<br>File</div>
           </div>";
while($row=mysql_fetch_assoc($find))
{
	
	$name1=$row['aid'];
    $name6=$row['did'];
	$name3=$row['date'];
	$name4=$row['time'];
	$name5=$row['category'];
	
	$query=mysql_query("SELECT * FROM doctor WHERE did='$name6'  ");
	while($row1=mysql_fetch_assoc($query))
	{
		$name8=$row1['dname'];
	}
	echo "<div id='head'>
		   <div id='aid'>$name1</div>
		    <div id='did'>$name6</div>
		    <div id='dname'><textarea>$name8</textarea></div>
		    <div id='date'>$name3</div>
		    <div id='time'>$name4</div>
		    <div id='category'><textarea>$name5</textarea></div>
		   <div id='delete'><a href=deletebooking.php?aid=".$row['aid'].">Delete</div>
            <div id='files'><a href=form1.php?aid=".$row['aid'].">Upload</div>
            </div>
			";	
}
?></div>
          
      </div>
<?php include 'footer.php'; ?> 
 </div><!--Container Ends-->
</body>
</html>


