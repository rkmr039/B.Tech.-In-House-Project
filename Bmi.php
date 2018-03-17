<?php include('server.php'); ?>

<?php
function calculate_bmi($height,$weight)
{
	$height = $height * $height;
	$BMI = $weight / $height;
	$BMI = round($BMI,2);
	return $BMI;
}
function bmi_result($BMI)
{
	$result = '';
	if($BMI < 18.5){$result = 'Underweight';}
	if(18.5 <= $BMI && $BMI < 25){$result = 'Normal';}
	if(25 <= $BMI){$result = 'Overweight';}
    return $result;
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>BMi Calculator| SMART HEALTH Advisor</title>
  <link rel="stylesheet" href="css/BasicStyle.css" type="text/css">
  <link rel="stylesheet" href="css/bmistyle.css" type="text/css">
  <meta name="viewport"              content="width=device-width, initial-scale=1.0">
  <meta name="keyword"               content="Calculate Your BMI,SMART HEALTH ADVISER,ASET MINOR PROJECT,CSE MINOR PROJECT">
  <meta name="description"           content="Body Max Index, BMI, Quetelet index,web Site Development Project for SMART HEALTH ADVISOR">
  <meta http-equiv="refresh"         content="60">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport"              content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/fevicon.jpg">
</head>

<body>
<div id="container"><!--Container Starts-->
   
 <div id="header"> 
         <a href="home.php"><img src="img/icon.jpg" alt="SHA logo" id="logo5"></a>
          <img src="img/SHA_Plate2.PNG" alt="SHA_Plate" id="SHA"> 
<div id="navigation">     
 <ul id="">
        <li><a href="home.php">Home</a></li>
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
<div id="middle" style="height:auto;">
    <!--    <div id="slider_box"> 
          
		  <figure>
		     <img src="img/slide13.png">
			 <img src="img/slide14.png">
			 <img src="img/slide15.png">
			 <img src="img/slide16.png">		 
          </figure>		 
		 
		</div>-->
         <div id="leftColumn" >
           <div id="top">
             <h3>Weight Managment</h3>
           </div>
           <div id="list">
              <a href="https://www.hsph.harvard.edu/obesity-prevention-source/obesity-definition/obesity-definition-full-story/" target="_blank">Why BMI Important </a>
              <a href="https://www.nhlbi.nih.gov/health/educational/lose_wt/risk.htm" target="_blank">Weight Risks </a>
              <a href="https://www.psychologytoday.com/blog/the-mindful-self-express/201107/the-5-best-ways-manage-your-weight-eating" target="_blank">Control Your Weight</a>
              <a href="https://www.bodybuilding.com/content/how-to-gain-weight.html" target="_blank">Gain Weight</a>
              <a href="https://authoritynutrition.com/how-to-lose-weight-as-fast-as-possible/" target="_blank">Loss Weight</a>
    
               <style>
               div.topic{
                   height:500px;
                   overflow-y:auto;
                }
               </style>
               <div class="topic">
<h3><a href="#">Diets</a></h3>
    <ul>
	<li><a href="https://authoritynutrition.com/the-5-2-diet-guide/">5:2 Diet</a></li>
        <li><a href="https://authoritynutrition.com/80-10-10-diet/">80/10/10 Diet</a></li>
	<li><a href="https://authoritynutrition.com/the-alkaline-diet-myth/">Alkaline Diet</a></li>
	<li><a href="https://authoritynutrition.com/atkins-diet-101/">Atkins Diet</a></li>
	<li><a href="https://authoritynutrition.com/the-blood-type-diet-review/">Blood Type Diet</a></li>
	<li><a href="https://authoritynutrition.com/the-brat-diet/">BRAT Diet</a></li>
	<li><a href="https://authoritynutrition.com/the-cabbage-soup-diet/">Cabbage Soup Diet</a></li>
	<li><a href="https://authoritynutrition.com/clean-9-detox-diet-review/">Clean 9 Diet</a></li>
	<li><a href="https://authoritynutrition.com/dash-diet/">DASH Diet</a></li>
	<li><a href="https://authoritynutrition.com/detox-diets-101/">Detox Diet</a></li>
	<li><a href="https://authoritynutrition.com/dukan-diet-101/">Dukan Diet</a></li>
	<li><a href="https://authoritynutrition.com/gluten-free-diet-101/">Gluten-Free Diet</a></li>
	<li><a href="https://authoritynutrition.com/hcg-diet-101/">HCG Diet</a></li>
	<li><a href="https://authoritynutrition.com/articles/healthy-eating/">Healthy Eating</a></li>
	<li><a href="https://authoritynutrition.com/high-protein-diet-plan/">High-Protein Diet</a></li>
	<li><a href="https://authoritynutrition.com/articles/ketogenic-diet/">Ketogenic Diet</a></li>
	<li><a href="https://authoritynutrition.com/articles/low-carb-diet/">Low-Carb Diet</a></li>
    <li><a href="https://authoritynutrition.com/low-fodmap-diet/">Low-FODMAP Diet</a></li>
	<li><a href="https://authoritynutrition.com/articles/mediterranean-diet/">Mediterranean Diet</a></li>
	<li><a href="https://authoritynutrition.com/the-military-diet-101/">Military Diet</a></li>
	<li><a href="https://authoritynutrition.com/the-nordic-diet-review/">Nordic Diet</a></li>
	<li><a href="https://authoritynutrition.com/articles/paleo-diet/">Paleo Diet</a></li>
    <li><a href="https://authoritynutrition.com/pescatarian-diet/">Pescatarian Diet</a></li>
    <li><a href="https://authoritynutrition.com/raw-food-diet/">Raw Food Diet</a></li>
    <li><a href="https://authoritynutrition.com/south-beach-diet/">South Beach Diet</a></li>
	<li><a href="https://authoritynutrition.com/articles/vegan-diet/">Vegan Diet</a></li>
    <li><a href="https://authoritynutrition.com/whole-30/">Whole 30</a></li>
    <li><a href="https://authoritynutrition.com/zone-diet/">Zone Diet</a></li>
    </ul>
     </div>
 </div>
         </div>
         <div id="rightColumn">
                 <h3>What is BMI Calculator..?</h3>
                 <p style="color:orange; font-size:20px;">BMI is "Body Mass Index". It tells you whether your body weight is appropriate for your height.</p><br>
             
             <p><strong>Understanding your Body Mass Index...</strong><br><br>

                 <b>If your BMI is below 18.5:</b> Your BMI is considered underweight. Keep in mind that an underweight BMI calculation may pose certain health risks. Please consult your healthcare provider for more information about BMI calculations.<br><br>

                 <b>If your BMI is between 18.5-24.9:</b> Your BMI is considered normal. This healthy weight helps reduce your risk of serious health conditions and means you’re close to your fitness goals.<br><br>

    <b>If your BMI is above 30:</b> Your BMI is considered overweight. Being overweight may increase your risk of cardiovascular disease. Consider making lifestyle changes through healthy eating and fitness to improve your health. Our Couch to 5K training plan is a great place to start.</p>
    
         </div>
         <div id="centre">
             <div id="bmi_form"> 
                <div id="bmi_top"> BMI Calculator </div>
	 
	             <form method="post" class="BMI" action="bmi.php">
		
                     <div class="input-group" >
                         <label>Weight(Kg.):</label>
                         <input style="margin-left:10px;" type="text" name="weight" placeholder="Weight" id="weight" value="" required>
                     </div>
		 <div class="input-group">
      <label>Height(Mtr.):</label>
      <input style="margin-left:10px;" type="text" name="height" id="height" placeholder="Height" value="" required>
   </div>
	
    <div class="input-group"><button type="submit" name="COMPUTE" class="btn" value="COMPUTE">COMPUTE</button></div>
    <div id="result">         
	<?php
		if (isset($_POST['height']))
        {
			$height = $_POST['height'];
			$weight = $_POST['weight'];
			$BMI = calculate_bmi($height,$weight);
			$status = bmi_result($BMI);
			echo "<div align='left' style='margin-left:35px;'>";
			echo "BMI: ".$BMI;
			echo "<br>";
			echo "Status: ".$status;
			echo "</div>";
		}
        ?>
    </div>
        <a id="diet_button" href="dietchart.html" style=""><strong>Get Diet Chart Plane</strong></a><br>
	</form>
	</div>
  </div><!--================ centre ends here===============-->
    </div>
    <!--================ Middle ends here===============-->
    
    
<?php include 'footer.php'; ?> </div><!--Container Ends-->
</body>
</html>
