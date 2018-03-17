<!doctype html>
<html>

    <?php include 'head.php';
    
    echo "<title>Get Appointment | SMART HEALTH Advisor</title>
    <link rel='stylesheet' href='css/bookappointment.css' type='text/css'>";?>
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
       <li><a href="profile.php">Profile</a>
        <li><a href="logOut.php">LogOut</a>              
 </ul>   
 </div>  
 </div> 
    
<!--====== header ends here====-->
<div id="middle">
    <div id="centre">        
<?php
session_start();
$var=$_SESSION['username'];
mysql_connect("localhost","root","");
mysql_select_db("registration");
$search= mysql_real_escape_string($_POST['date']);
$time= mysql_real_escape_string($_POST['time']);
$category= mysql_real_escape_string($_POST['category']);
          echo "<div id='head'>
		   <div  id='did'>Doctor ID</div>
		   <div  id='dname'>Name</div>
		   <div  id='address'>Address</div>
		   <div  id='pno'>Phone no.</div>
		   <div  id='area'>Specalist</div>
		   <div  id='days'>Days</div>
		   <div  id='time'>Time</div>
		   </div>";
if(isset($_POST['check']))
{
	$time= mysql_real_escape_string($_POST['time']);
    $category= mysql_real_escape_string($_POST['category']);
    $fields = array( 'category',);

$error = false; //No errors yet
foreach($fields AS $fieldname)
{ //Loop trough each field
  if(!isset($_POST[$fieldname]) || empty($_POST[$fieldname])) {
	   echo 'Field '.$fieldname.' misses!<br />';
echo "
<script type='text/javascript'>
alert('cannot search');
</script>

";	   
    //echo "cannot booked"; //Display error with field
    $error = true; //Yup there are errors
  }
}
	
if(!$error)
{
		$searchterm=mysql_real_escape_string(trim($_POST['category']));
	
$find=mysql_query("SELECT * FROM doctor WHERE category LIKE'$searchterm' ");
while($row=mysql_fetch_assoc($find))
{
	$diseases=$row['did'];
	$name1=$row['dname'];
    $city =$row['city'];
	$name2=$row['locality'];
	$name3=$row['dmobile'];
	$name4=$row['category'];
	$name5=$row['day'];
	$name6=$row['time'];
	//$name7=$row['Rating'];
	
		echo "
		    
		   <div id='head'>
		   <div  id='did'>$diseases</div>
		   <div  id='dname'>$name1</div>
		   <div  id='address'>$city<br>$name2</div>
		   <div  id='pno'>$name3</div>
		   <div  id='area'>$name4</div>
		   <div  id='days'>$name5</div>
		   <div  id='time'>$name6</div>
		  </div>
		  
		    ";

}
}
}
if(isset($_POST['submit3']))
{$search= mysql_real_escape_string($_POST['date']);
$time= mysql_real_escape_string($_POST['time']);
$category= mysql_real_escape_string($_POST['category']);
$id= mysql_real_escape_string($_POST['id']);
$fields = array('date', 'category', 'time');

$error = false; //No errors yet
foreach($fields AS $fieldname) { //Loop trough each field
  if(!isset($_POST[$fieldname]) || empty($_POST[$fieldname])) {
	   echo 'Field '.$fieldname.' misses!<br />';
echo "
<script type='text/javascript'>
alert('cannot booked');
</script>

";	   
    //echo "cannot booked"; //Display error with field
    $error = true; //Yup there are errors
  }
}
  if(!$error)
  {$con=mysqli_connect("localhost","root","","registration");
//mysql_select_db("registration");
	 $query="INSERT INTO bookinghistory(did,uname,date,time,category)VALUES('$id','$var','$search','$time','$category')";
		$res=mysqli_query($con,$query);
if($res)
{
	header('location:profile.php');
}	
else{
	echo "<h1>Not able to book</h1>";
	echo "
<script type='text/javascript'>
alert(' can't Booked');
</script>

";
}

  }
}
?>
   
    </div>  <!--================ centre ends here===============-->
  </div>
  
    <!--================ Middle ends here===============-->
    
    
  <?php include 'footer.php'; ?> </div><!--Container Ends-->
</body>
</html>


 











