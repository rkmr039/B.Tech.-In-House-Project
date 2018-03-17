 
<!doctype html>
<html>

<?php include 'head.php';
    
echo "<title>Suggested Medicines| SMART HEALTH Advisor</title>
  <link rel='stylesheet' href='css/m1style.css' type='text/css'>";    ?>
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
         
         <div id="leftColumn">
             <div id="top">
             <h3>Medication Tips& Tools</h3>
           </div>
           <div id="list"style="height:800px;overflow:auto;">
               <a href="http://www.kairali.com/ayurvedic-medicine.aspx" target="_blank">Ayurvedic Medicine</a>
               <a href="https://draxe.com/ayurvedic-medicine/" target="_blank">Benefits of Ayurvedic Medicine</a>
              <a href="https://www.urmc.rochester.edu/encyclopedia/content.aspx?ContentTypeID=85&ContentID=P00189" target="_blank">Type of Complementary and Alternative Medicines</a>
              <a href="http://www.webmd.com/vitamins-supplements/default.aspx" target="_blank">Vitamins & Supplements</a>
              <a href="http://www.safemedication.com/safemed/MedicationTipsTools/WhatYouShouldKnow/UsingMedicationsSafely.aspx" target="_blank">Using Medications Safely</a>
              <a href="http://www.safemedication.com/safemed/MedicationTipsTools/WhatYouShouldKnow/Using-Dietary-Supplements-Wisely" target="_blank">Using Dietary Supplements Wisely</a>
               <a href="http://www.safemedication.com/safemed/MedicationTipsTools/WhatYouShouldKnow/Personalizing-Your-Medicine" target="_blank">Personalizing Your Medicine</a>
               <a href="http://www.safemedication.com/safemed/MedicationTipsTools/WhatYouShouldKnow/Want-to-Avoid-the-Flu-This-Season-Be-Sure-to-Get-Vaccinated" target="_blank">Want to Avoid the Flu This Season? Be Sure to Get Vaccinated</a>
               <a href="http://www.safemedication.com/safemed/MedicationTipsTools/WhatYouShouldKnow/Tips-to-Reduce-Prescription-Drug-Costs" target="_blank">Sticker Shock at the Pharmacy Counter: Tips to Reduce Prescription Drug Costs</a>
               <a href="http://www.safemedication.com/safemed/MedicationTipsTools/WhatYouShouldKnow/Drug-Shortages" target="_blank">Drug-Shortages</a>
               <a href="http://www.safemedication.com/safemed/MedicationTipsTools/WhatYouShouldKnow/Children-Medication-Safety" target="_blank">Giving Your Children Medicine</a>
               <a href="http://www.safemedication.com/safemed/MedicationTipsTools/WhatYouShouldKnow/PreparingforEmergencies" target="_blank">Preparing for Emergencies</a>
               <a href="http://www.safemedication.com/safemed/MedicationTipsTools/WhatYouShouldKnow/PreventingAccidentalPoisoning" target="_blank">Preventing Accidental Poisoning</a>
               <a href="http://www.safemedication.com/safemed/MedicationTipsTools/WhatYouShouldKnow/Preventing-Blood-Clots" target="_blank">Preventing Blood Clots</a>
               <a href="http://www.safemedication.com/safemed/MedicationTipsTools/WhatYouShouldKnow/PreventingDiseaseswithVaccines" target="_blank">Preventing Diseases with Vaccines</a>
               <a href="http://www.safemedication.com/safemed/MedicationTipsTools/WhatYouShouldKnow/Taking-Heartburn-Medications-Safely" target="_blank">Taking Heartburn Medications Safely</a>
               <a href="http://www.safemedication.com/safemed/MedicationTipsTools/WhatYouShouldKnow/UsingAntibioticsWisely" target="_blank">Using Antibiotics Wisely</a>
               
               
              
           </div>
         </div>
         <div id="rightColumn">
                 <video style="width:430px;
				height:278px;
                outline:1px black solid;" poster="img/medicine1.jpg" controls>
             <source src="video/Tips%20for%20Taking%20Medicines%20Safely.mp4" type="video/mp4">
             </video><hr>
             <video  style="width:430px;
				height:285px;
                outline:1px black solid;" controls>     
             <source src="video/Tools%20and%20Tips%20on%20giving%20medication%20to%20Toddlers%20or%20Babies.mp4" type="video/mp4">
    </video><hr>
             <video  style="width:430px;
				height:285px;
               outline:1px black solid;" poster="img/medicine2.jpg" controls>
             <source src="video/Tips%20for%20Taking%20Blood%20Pressure%20Medicines%20As%20Directed.mp4" type="video/mp4">
             </video>

    </div>
         <div id="centre">
             <div id="mform"> 
                <div id="mtop">Suggested Medicines </div>
              
<?php
mysql_connect("localhost","root","");
mysql_select_db("registration");
$search=mysql_real_escape_string(trim($_POST['mid']));
$find=mysql_query("SELECT * FROM disease WHERE name LIKE'$search' ");
while($row=mysql_fetch_assoc($find))
{
	$diseases=$row['name'];
	$name1=$row['med1'];
	$name2=$row['med2'];
	$name3=$row['med3'];
	$name4=$row['med4'];
	$name5=$row['med5'];
	echo "<h2>$diseases:</h2><br />";
	echo "<h1>$name1</h1><br />";
	echo "<h1>$name2</h1><br />";
	echo "<h1>$name3</h1><br />";
	echo "<h1>$name4</h1><br />";
	echo "<h1>$name5</h1><br />";
	
	
}
echo 'Want to <a href="medicine.php">search</a> for another disease'
?>		
		
				
             </div>
	     </div><!--================ centre ends here===============-->
  </div>
  
    <!--================ Middle ends here===============-->
    
    
<?php include 'footer.php'; ?> 
 </div><!--Container Ends-->
</body>
</html>

 