<!doctype html>
<html>

    <head>
<?php include 'head.php';
        
        echo "<title>Update Records | SMART HEALTH ADVISOR</title>
    <link rel='stylesheet' href='css/edit.css' type='text/css'>";?>
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
               <li><a href="medicine.php">Search Medicines </a></li>
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
        <li><a href="profile.php">Profile</a></li>
        <li><a href="logout.php">LogOut</a>       
 </ul>   
     </div> 
 </div> 
    
<!--====== header ends here====-->

 
  <div id="middle">
    <!--<div id="leftColumn"></div>
    
    <div id="centre"><!-- record page starts here -->  
        
	<?php
	session_start();
$username=$_SESSION['username'];
$con=mysql_connect("localhost","root","");
mysql_select_db("registration",$con);
$sql="SELECT * FROM users WHERE username='$username'";
$records=mysql_query($sql,$con);
 

while($row=mysql_fetch_array($records))
{
echo "
<form action='update.php' method='post'>
 <div id='form_top'>
     <h3>Records</h3>
</div>	 
<div class='input-group'>Name:<input type=text name=pname value='".$row['username']."'></div>
<div class='input-group'>Email:<input type=text name=email value='".$row['email']."'></div>
<div class='input-group'>Phone No:<input type=text name=pno value='".$row['phone_no']."'></div>
<div class='input-group'>Date of Birth:<input type=text name=dob value='".$row['dob']."'></div>
 
<div class='input-group'>Country:<input type=text name=country value='".$row['country']."'></div>
<div class='input-group'>City:<input type=text name=city value='".$row['city']."'></div>
<div class='input-group'>Age:<input type=text name=age value='".$row['age']."'></div>
 
<div class='input-group'><input type=hidden name=id value='".$row['Id']."'></div>
<div class='input-group' style='margin-top:-10px;'><input type=submit ></div>
</form>";
}




?>

     
   
      </div>
	  <!--<div id="rightColumn"></div>
  </div>-->
  
    
    
<?php include 'footer.php'; ?> 
 </div><!--Container Ends-->
</body>
</html>