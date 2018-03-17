<?php
ini_set('display_errors',0);
 /*echo "find average resting heart rate:<br>";
	 echo "1.Find your pulse with your finger not with your thumb,while lying in bed before you get up in the morning<br>";
	 echo"2.Count your puls efor 15 sec and multiply by 4 or count for 30 sec and multiply by 2<br>";
	 echo"3.record for 5 days and get average<br>";
	 echo"Target heart rate minimum(just started to excercise regularly or who are recovering from an injury)<br>";
	 echo"Moderate target heart rate(Just starting an excercise program and increase your target upto .7 for the high end of moderate excrcise)<br>";
	 echo"Intense target heart rate(Extra intensity anaerobic excercise)<br>";*/
if(isset($_POST['calculate']))
{    $var2=$_POST['age'];
	 $var3=$_POST['rhr'];
	 
	if(is_numeric['$var2'] && is_numeric['$var3'] )
	{
	  $a=$var2*.7;
	  $b=207-$a;
	 /* echo '<div id="result"><h1> your maximum heart rate is $b bpm</h1></div>';*/
		$hrr=$b-$var3;
		
		$thrmin=$hrr*.5 + $var3;
		$ithr=$hrr*.85 + $var3;
		$mhr=$hrr*.7 + $var3;
	}
	/*else
	{
		echo "enter numeric value only";
	}*/
	
}



?>
 
<!doctype html>
<html>
<?php include 'head.php';
    echo "<title> Target Heart Rate Calculator| SMART HEALTH Advisor</title>
  <link rel='stylesheet' href='css/BasicStyle.css' type='text/css'>
  <link rel='stylesheet' href='css/hstyle.css' type='text/css'>";?>

<body>
<div id="container"><!--Container Starts-->
   
 <div id="header"> 
         <img src="img/icon.jpg" alt="SHA logo" id="logo5">
          <img src="img/SHA_Plate2.PNG" alt="SHA_Plate" id="SHA"> 
         <!--<img src="img/logo7.png" alt="logo7" id="logo7">-->
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
    
         <div id="leftColumn">
           <div id="top">
             <h2>Healthy Diet Managment</h2>
           </div>
           <div id="list"style="height:550px;overflow:auto;">
              <a href="https://www.eatforhealth.gov.au/eating-well/tips-eating-well" target="_blank">Tips Eating Well</a>
              <a href="https://www.eatforhealth.gov.au/food-essentials/how-much-do-we-need-each-day/sample-meal-plan-men" target="_blank">Healthy Meal Plan For Men</a>
              <a href="https://www.eatforhealth.gov.au/food-essentials/how-much-do-we-need-each-day/sample-meal-plan-women" target="_blank">Healthy Meal Plan For Women</a>
              <a href="https://www.eatforhealth.gov.au/eating-well/healthy-eating-throughout-all-life" target="_blank">Healthy Eating Throughtout all of Life</a>
              <a href="https://www.eatforhealth.gov.au/eating-well/how-understand-food-labels" target="_blank">How Understand Food Labels</a>
              <a href="http://foodsafety.asn.au/food-safety-basics/" target="_blank">Food Safety Basics</a>
              <a href="http://foodsafety.asn.au/food-safety-at-home/" target="_blank">Food Safety At Home</a>
              <a href="" target="_blank"></a>
              
           </div>
         </div>
         <div id="rightColumn"> 
             <video style="width:430px;
				height:220px;
                margin-top:0px;
                outline:1px black solid;" poster="img/thr.jpg"
                    
                    
                    controls>
             <source src="video/Hospital%20Basics%20_%20How%20to%20Check%20Your%20Heart%20Rate.mp4"  type="video/mp4">
             </video>
<!--              <video  style="width:430px;
				height:235px;
                margin-top:0px;
                outline:1px black solid;" controls>     
             <source src="video/Hospital%20Basics%20_%20How%20to%20Check%20Your%20Heart%20Rate.mp4" type="video/mp4">
            </video><hr>    
-->
		 <h3>Find average resting heart rate:</h3>
	  <p>1.Find your pulse with your finger not with your thumb,while lying in bed before you get up in the morning<br>
	  2.Count your puls for 15 sec and multiply by 4 or count for 30 sec and multiply by 2<br>
	  3.record for 5 days and get average<br>
	  Target heart rate minimum(just started to excercise regularly or who are recovering from an injury)<br>
	  Moderate target heart rate(Just starting an excercise program and increase your target upto 7 for the high end of moderate excrcise)<br>
	  Intense target heart rate(Extra intensity anaerobic excercise)<br></p>
	  
	  
	  </div>
		 
         <div id="centre">
            <form method="post" action="heart_rate.php">
			
<div id="hform">
  <div id="htop">
            <h2>Healthy Diet Plan Calculator</h2>
  </div>			
<div class="input-group">
 <label>Age(yrs):</label>
 <input type="text" name="age" value="<?php if(isset($var2)){echo $var2;} ?>" required>
</div>
<div class="input-group">
 <label>Reserve Heart Rate(bpm):</label>
<input type="text" name="rhr" value="<?php if(isset($var3)){echo $var3;} ?>" required>
</div>
<div class="input-group">
<button type="submit" name="calculate" class="btn">calculate</button>
</div>

<div id="result">Your maximum heart rate is:<?php echo $b;?> bpm</div>                       
<h2 style="color:blue">Target Heart Rate Min: <?php echo $thrmin; ?></h2> 		
<h2 style="color:blue"> Intense Target Heart Rate : <?php echo $ithr; ?></h2> 		
<h2 style="color:blue"> Moderate Target Heart Rate : <?php echo $mhr; ?></h2> 
                </div>
</form>
</div>
	
  </div><!--================ centre ends here===============-->
     
    <!--================ Middle ends here===============-->
    
    
  <?php include 'footer.php'; ?>
 </div><!--Container Ends-->
</body>
</html>
