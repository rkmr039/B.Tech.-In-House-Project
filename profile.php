<!doctype html>
<html>

<?php include 'head.php';
    echo "<title>PROFILE | SMART HEALTH ADVISOR</title>
  <link rel='stylesheet' href='css/profile.css'    type='text/css'>
";?>
<body>
<div id="container"><!--Container Starts-->
   
 <div id="header"> 
        <img src="img/icon.jpg" alt="SHA logo" id="logo5">
        <img src="img/SHA_Plate2.PNG" alt="SHA_Plate" id="SHA"> 
<div id="navigation">     
 <ul id="" >
        <li><a href="home.php">Home</a></li>   
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
       <li><a href="logout.php">LogOut</a></li>     
 </ul>   
</div>
    </div>
<!--====== header ends here====-->
  <div id="middle" style="height:880px";>
         <div id="btn">    
        <form action="profile.php" method="POST" enctype="multipart/form-data">
			     <div id="brows_button">
			     <input type="file" name="file"></div>
			     <div id="upload_button">
                 <button type="submit" name="submit">UPLOAD</button></div>
              </form>
		</div>
<?php
session_start();
$var=$_SESSION['username'];
//$_SESSION['Id']=;
//$var=$_SESSION['username'];
mysql_connect("localhost","root","");
mysql_select_db("registration");
if(isset($_POST['submit']))
{
	$var=$_SESSION['username'];
	$fileNAME=$_FILES['file']['name'];
	$fileTmpNAME=$_FILES['file']['tmp_name'];
	if($fileNAME){
		$location="uploads/$fileNAME";
		move_uploaded_file($fileTmpNAME,$location);
		//$query=mysql_query("INSERT INTO users(imagelocation)VALUES('$location')WHERE username='$var'");
		$query=mysql_query("UPDATE users SET imagelocation='$location' WHERE username='$var'");
		//mysql_connect("localhost","root","");
//mysql_select_db("registration");
$query=mysql_query("SELECT * FROM users WHERE username='$var' ");
if(mysql_num_rows($query)==0)
{
	die("user not found");
}
else
{
	$row=mysql_fetch_assoc($query);
	$location=$row['imagelocation'];
}
		//die("uploaded<a href='view.php'>HOME</a>");
	}else{
		die("please select file");
	}
}
$var=$_SESSION['username'];
//mysql_connect("localhost","root","");
//mysql_select_db("registration");
$find=mysql_query("SELECT * FROM users WHERE username='$var' ");
$query=mysql_query("SELECT * FROM users WHERE username='$var' ");
$row=mysql_fetch_assoc($query);
$location=$row['imagelocation'];

    //echo "image uploaded !!!!click here to see";
	echo " <div id='avatar' style='border:1px dashed black;'><img src='$location' width='200' height='100'></div>";
while($row=mysql_fetch_assoc($find))
{
	$diseases=$row['username'];
	$name1=$row['email'];
	$name2=$row['phone_no'];
	$name3=$row['dob'];
	$name4=$row['country'];
	$name5=$row['age'];
	$name6=$row['city'];
	
	 
	echo "<div id='details'><table cellspacing='50' cellpading='400' width='700'>
           <tr>
		   <td colspan='3'   color:blue><strong>WELCOME $var<strong></td> 
		   </tr>
		     <td>Name:$diseases</td>
		   <tr>
		     <td>Email:$name1</td>
		   </tr>
		   <tr>
             <td>Phone No.:$name2</td>
		   </tr>
		   <tr>
		     <td>Date of Birth:$name3</td> 
		   </tr>
		   <tr>
             <td>Age:$name5</td>
		   </tr>
		   <tr>
		      <td>Country:$name4</td>
		   </tr>
		   <tr>
              <td>City:$name6</td>
		   </tr>
		   </table></div>"; 
			
	echo "<div id='options'>
	        <div id='opt'><a   href='edit.php'>Edit</a></div>
			<div id='opt'><a   href='delete.php'>Delete Profile Picture</a></div>
			<div id='opt'><a   href='password.php'>Change password</a></div>
			<div id='opt'><a   href='searchdoctor.php'>Book Appointement</a></div>
			<div id='opt'><a   href='viewbooking.php'>View Booking History</a></div>
			<div id='opt'><a   href='feedback.php'>Give Feedback</a></div>
			<div id='opt'><a   href='uviewfeedback.php'>View Feedback</a></div>
            <div id='opt'><a   href='sendmsg.php'>Send message</a></div>
			<div id='opt'><a   href='inbox.php'>Inbox</a></div>
			<div id='opt'><a   href='logout.php'>Logout</a></div>
	      </div>";	
}
?>
     </div>
    
<!-- middle ends here-->
<?php include 'footer.php'; ?> 
 
 </div><!--Container Ends-->
</body>
</html>
