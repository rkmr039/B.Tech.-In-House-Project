<!doctype html>
<html>
    <?php include 'head.php';
    echo "<title>Get Appointment | SMART HEALTH Advisor</title>
  <link rel='stylesheet' href='css/searchdoctor.css' type='text/css'>
"; ?><body>
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
               <li><a href="http://www.healthycalculators.com/childrens-height-predictor.php" target=_blank>Child Height Predictor </a></li>
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
         
        
<div id="form1">
  <p><b>First search for the doctor to know the Doctor's ID, then book for the appointement</b></p>
<h1>Search Doctor</h1><br>
<form method="post" action="bookappointement.php">
Category:
<select name="category" required>
<?php
$lin=mysqli_connect("localhost","root","");
mysqli_select_db($lin,"registration");
$res=mysqli_query($lin,"SELECT DISTINCT category FROM doctor");
while($row=mysqli_fetch_array($res))
{
?>
<option><?php echo $row['category'];?></option>
<?php
}
?>	
</select><br><br>
<button type='submit' name='check'>Check</button><br>
    </div>   
<div id="form2">    
<h1>BOOK APPOINTEMENT</h1>
<b>Select Doctor Id:</b><form action="" method="post">
<select name="id">
    
    <?php
$lin=mysqli_connect("localhost","root","");
mysqli_select_db($lin,"registration");
$res=mysqli_query($lin,"SELECT * FROM doctor");
while($row=mysqli_fetch_array($res))
{
?>
<option><?php echo $row['did'];?></option>
<?php
}
?>	
</select><br><br>
    <b>Date:</b><input type='date' name='date' placeholder="search" ><br><br>
    <b>Time:</b><input type='time' name='time' placeholder="search"><br><br>
<br><br><button type="submit" name="submit3">Book</button>
</form>

   
	     </div><!--================ centre ends here===============-->
  </div>
  
    <!--================ Middle ends here===============-->
    
    
<?php include 'footer.php'; ?> 
 </div><!--Container Ends-->
</body>
</html>


 








