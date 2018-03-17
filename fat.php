<?php
ini_set('display_errors',0);
if(isset($_POST['calculate']))
{    $var1=$_POST['age'];
     $var2=$_POST['weight'];
	 $var3=$_POST['height'];
	 $result="";
	if(is_numeric['$var1'] && is_numeric['$var2'] && is_numeric['$var3'] )
	{$c=$var2/($var3*$var3);
	   if(isset($_POST['g']))
	   {
		 $op=$_POST['g'];
		 switch($op)
		 {
			 case 'male':
			 $result=(1.20*$c)+(.23*$var1)-10.8-5.4;
			 break;
			 case 'female':
			 $result=(1.20*$c)+(.23*$var1)-5.4;
			 break;
			 
		 }
            		 
	   }	
	   else
	   {
		   echo "please select gender";
	   }
   
	}
	else
	{
		echo "enter numeric value only";
	}
	
}



?>
<!doctype html>
<html>
<?php include 'head.php';
    
    echo "<title> Body Fat Calculator| SMART HEALTH Advisor</title>
    <link rel='stylesheet' href='css/BasicStyle.css' type='text/css'>
    <link rel='stylesheet' href='css/fatstyle.css' type='text/css'>";?>

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
               <li><a href="heart_rate.php" target=_blank>Target Heart Rate</a></li>
               <li><a href="fat.php" target=_blank>Body Fat Calculator</a></li>
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
             <h3>Body Fat</h3>
           </div>
           <div id="list" class="list1"style="height:530px; overflow:auto;">
               <a href="http://www.accumeasurefitness.com/body-fat-measurement-charts-for-men-and-women.html" target="_blank">Body Fat Percentage Measurement Charts</a>
               <a href="https://www.builtlean.com/2012/09/24/body-fat-percentage-men-women/" target="_blank">Body Fat Pictures</a>   
               <a href="https://www.bodybuilding.com/content/how-to-measure-your-body-fat.html" target="_blank">How To Measure Your Body Fat</a>
                <a href="https://tanita.eu/body-fat-scales" target="_blank">Body Fat Scales</a>
               <a href="https://www.bodybuilding.com/fun/drobson98.htm" target="_blank">Body-fat percentage with caliper testing</a>
               <a href="http://www.livestrong.com/article/415391-how-to-lose-body-fat-naturally/" target="_blank">Lose Body Fat Naturally</a>
               <a href="http://www.livestrong.com/slideshow/557599-the-burn-fat-faster-workout/#slide=1" target="_blank">Burn Fat Faster Workout</a>
               <a href="http://www.livestrong.com/article/72756-reduce-body-fat-losing-weight/" target="_blank">Reduce Body Fat Without Losing Weight</a>
              <a href="http://www.mensfitness.com/weight-loss/burn-fat-fast/how-much-body-fat-you-need-lose-uncover-your-abs" target="_blank">How much body fat you need to lose to uncover your abs</a>
           </div>
         </div>
         <div id="rightColumn">
       
             <video style="width:430px;
				height:200px;
                outline:1px black solid;" controls>
             <source src="video/videoplayback.mp4" type="video/mp4">
             </video><hr>
             <video  style="width:430px;
				height:200px;
                outline:1px black solid;" controls>     
             <source src="video/videoplayback%20(1).mp4" type="video/mp4">
    </video><hr>
             <video  style="width:430px;
				height:199px;
               outline:1px black solid;" controls>
             <source src="video/videoplayback%20(2).mp4" type="video/mp4">
             </video>
        
             
        </div>
		 
         <div id="centre">
                         <div id="bmi_top">Body Fat Calculator</div>
           <form method="post" action="fat.php">
<div class="input-group">
  <label>Age(yrs):</label>
 <input type="text" name="age" value="<?php if(isset($var1)){echo $var1;} ?>">
</div>
<div class="input-group">
 <label>weight(kg):</label>
 <input type="text" name="weight" value="<?php if(isset($var2)){echo $var2;} ?>">
</div>
<div class="input-group">
 <label>Height(m):</label>
<input type="text" name="height" value="<?php if(isset($var3)){echo $var3;} ?>">
</div>
<label>Gender:</label><br>
<input type="radio" name="g" value="male">Male<br>
<input type="radio" name="g" value="female">Female<br>
<div class="input-group">
<button type="submit" name="calculate" class="btn">calculate</button>
</div>	
<h2 style="color:blue">Output:<?php echo abs($result)."%"; ?></h2>
 <a id="diet_button" href="fatchart.html" style=""><strong>Body Fat Managment</strong></a><br>
	</form>
	</div>
</div><!--================ centre ends here===============-->
   
    <!--================ Middle ends here===============-->
    
    
  <?php include 'footer.php'; ?> 
 </div><!--Container Ends-->
</body>
</html>
