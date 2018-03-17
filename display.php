<!doctype html>
<html>
    <?php include 'head.php';
    echo "<title> Download File | SMART HEALTH Advisor</title>
    <link rel='stylesheet' href='css/password.css' type='text/css'>";?>
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
               <li><a href="http://www.healthycalculators.com/childrens-height-predictor.php" target=_blank>Child Height Predictor </a></li>
               <li><a href="http://www.healthycalculators.com/blood-donation.php" target=_blank>Blood Donation Calculator</a></li>
               <li><a href="http://www.healthycalculators.com/">Others</a></li>
          </ul>
       </li>
       <li><a href="dprofile.php">Profile</a>
        <li><a href="logOut.php">LogOut</a>              
 </ul>   
 </div>  
 </div> 
<!--====== header ends here====-->
<div id="middle">    
    <div id="centre">
       <?php
         $lin=mysqli_connect("localhost","root","");
mysqli_select_db($lin,"registration");
      $query1=mysqli_query($lin,"SELECT * FROM bookinghistory WHERE aid='$_GET[aid]'");   
        while($row=mysqli_fetch_array($query1))
        {
            $path=$row['path'];
            $aid=$row['aid'];
            echo "<span style = 'color:#ABF' $path></span>"; 
        }
        ?>
        <a href="download.php?aid=<?php echo $aid ?>">Download</a>
</div><!--================ centre ends here===============-->
  </div>
    <!--================ Middle ends here===============-->
  <?php include 'footer.php'; ?>
 </div><!--Container Ends-->
</body>
</html>