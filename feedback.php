<!doctype html>
<html>

<?php include 'head.php';
    
    echo "<title>Give Feedback | SMART HEALTH ADVISOR</title>
    <link rel='stylesheet' href='css/viewfeedback.css' type='text/css'>";?><body>
<div id="container"><!--Container Starts-->
   
 <div id="header"> 
          <img src="img/icon.jpg" alt="SHA logo" id="logo5">
          <img src="img/SHA_Plate2.PNG" alt="SHA_Plate" id="SHA"> 
         
<div id="navigation">     
<ul id="" style="margin-left:150px;">
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
    <div id="form">
<form action="feedback1.php" method="post">
Doctor Name:<input id="name" type="text" name="dname" value="" ><br><br>
Doctor ID:<input id="id" type="text" name="did" value="" ><br><br>
Comments:<br><textarea id="review" name="comments" rows="15" cols="40"></textarea><br>
Rating:<select  id="rate" name="rating" required>
        <option value="1">1</option>
        <option value="1">1.5</option>
        <option value="2">2</option>
        <option value="2">2.5</option>
        <option value="3">3</option>
        <option value="3">3.5</option>
        <option value="4">4</option>
        <option value="4">4.5</option>
        <option value="5">5</option>
    </select>

<input type="submit" name="submit" value="Save">
</form></div>
        
      </div>        
<?php include 'footer.php'; ?> 
    </div><!--Container Ends-->
</body>
</html>

 

 