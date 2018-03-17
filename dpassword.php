<!doctype html>
<html>
    <?php include 'head.php';
    echo "<title>Reset Password | SMART HEALTH Advisor</title>
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
		session_start();
		$user=$_SESSION['dname'];
		echo"<form id='pform' action='dpassword.php' method='post'>
	    Old password:<input type ='text' name='oldpassword'></br>
	    New Password:<input type ='password' name='newpassword'><br>
	    Change New Password:<input type ='password' name='repeatnewpassword'>
	    <input type='submit' name='submit' value='Change password'></form>";
	if(isset($_POST['submit']))
	{
		$oldpassword=md5($_POST['oldpassword']);
		$newpassword=md5($_POST['newpassword']);
		$repeatnewpassword=md5($_POST['repeatnewpassword']);
		$con=mysql_connect("localhost","root","");
		mysql_select_db("registration");
		$sql="SELECT password FROM doctor WHERE dname='$user' ";
		$record=mysql_query($sql,$con);
		$res=mysql_fetch_assoc($record);
		if($oldpassword==$res['password'])
		{
			if($newpassword==$repeatnewpassword)
			{
			$query="UPDATE doctor SET password='$newpassword' WHERE dname='$user'";
			if(mysql_query($query,$con))
				{
					echo "updated";
					header("refresh:1;url=dprofile.php");
				}
			
				}else
				{
					echo '<span style= "color:#ABA">Password and Confirm Password do not match</span>';
				}
			}
			else
			{
				echo '<span style= "color:#ABA">Old password is incorrect</span>';
			}
	}
?>
</div><!--================ centre ends here===============-->
  </div>
    <!--================ Middle ends here===============-->
  <?php include 'footer.php'; ?>
 </div><!--Container Ends-->
</body>
</html>