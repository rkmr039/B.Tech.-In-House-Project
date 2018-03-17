 
<!doctype html>
<html>

    <?php include 'head.php';
    echo "<title>PROFILE | SMART HEALTH ADVISOR</title>
    <link rel='stylesheet' href='css/profile.css' type='text/css'>";?>
<body>
<div id="container"><!--Container Starts-->
   
 <div id="header"> 
         <img src="img/icon.jpg" alt="SHA logo" id="logo5">
          <img src="img/SHA_Plate2.PNG" alt="SHA_Plate" id="SHA"> 
         <!--<img src="img/logo7.png" alt="logo7" id="logo7">-->
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
        <li><a href="dlogout.php">LogOut</a></li> 
 </ul>   
</div>
    </div>
<!--====== header ends here====-->
  <div id="middle" style="height:900px;">
         
        <!--<div id="leftColumn"></div>-->
        <!--<div id="rightColumn"></div>-->
             
			 
             
	
         <div id="btn">    
         <form action="dprofile.php" method="POST" enctype="multipart/form-data">
           <div id="brows_button"><input type="file" name="file"></div>
           <div id="upload_button"><button type="submit" name="submit">UPLOAD</button></div>
         </form>
		</div>
<?php
session_start();
$dname=$_SESSION['dname'];
mysql_connect("localhost","root","");
mysql_select_db("registration");
if(isset($_POST['submit']))
{
	$dname=$_SESSION['dname'];
	$fileNAME=$_FILES['file']['name'];
	$fileTmpNAME=$_FILES['file']['tmp_name'];
	if($fileNAME){
		$location="uploads/$fileNAME";
		move_uploaded_file($fileTmpNAME,$location);
		//$query=mysql_query("INSERT INTO users(imagelocation)VALUES('$location')WHERE username='$var'");
		$query=mysql_query("UPDATE doctor SET imagelocation='$location' WHERE dname='$dname'");
		//mysql_connect("localhost","root","");
//mysql_select_db("registration");
$query=mysql_query("SELECT * FROM doctor WHERE dname='$dname' ");
if(mysql_num_rows($query)==0)
{
	die("user not found");
}
else
{
	$row=mysql_fetch_assoc($query);
	$location=$row['imagelocation'];
	//echo "image uploaded !!!!click here to see";
	//echo "<img src='$location' width='200' height='100'>";
}
		//die("uploaded<a href='view.php'>HOME</a>");
	}else{
		die("please select file");
	}
}
$dname=$_SESSION['dname'];
//mysql_connect("localhost","root","");
//mysql_select_db("registration");
$find=mysql_query("SELECT * FROM doctor WHERE dname='$dname' ");
$query=mysql_query("SELECT * FROM doctor WHERE dname='$dname' ");
$row=mysql_fetch_assoc($query);
$location=$row['imagelocation'];

    //echo "image uploaded !!!!click here to see";
	echo " <div id='avatar' style='border:1px dashed black;'><img src='$location' width='200' height='100'></div>";
while($row=mysql_fetch_assoc($find))
{
	$name=$row['did'];
	$name0=$row['dname'];
	$name1=$row['email'];
	$name2=$row['dmobile']; 
	$name4=$row['category'];
	$name6=$row['city'];
    $name7=$row['locality'];
	$name8=$row['day'];
	$name9=$row['time'];
	
	echo "<div id='details' style='height:760px;'>
	       <table cellspacing='47' cellpading='400' width='700'>
           <tr>
		   <td colspan='3'   color:blue><strong>WELCOME $name0<strong></td> 
		   </tr>
		   <tr>
		     <td>ID:$name</td>
		   </tr>
		   <tr>
		     <td>Name:$name0</td>
		   </tr> 
		   <tr>
		     <td>Email:$name1</td>
		   </tr>
		   <tr>
             <td>Phone No.:$name2</td>
		   </tr>
		   <tr>
		      <td>Specalization:$name4</td>
		   </tr>
		   <tr>
              <td>City:$name6</td>
		   </tr>
		   <tr>
              <td>locality:$name7</td>
		   </tr>
		   <tr>
              <td>Day:$name8</td>
		   </tr>
		   <tr>
              <td>Timings:$name9</td>
		   </tr>
		   </table>
		   </div>"; 
			
 
	echo "<div id='options'>
	        <div id='opt'><a href='dedit.php'>Edit</a></div>
			<div id='opt'><a href=myappointement.php?did=".$row['did'].">My Appointements</a></div>
			<div id='opt'><a href='ddelete.php'>Delete Profile Picture</a></div>
			<div id='opt'><a href='dpassword.php'>Change Password</a></div>
			<div id='opt'><a href=dinbox.php?did=".$row['did'].">Inbox</a></div>
            <div id='opt'><a href='dlogout.php'>Logout</a></div>
	      </div>";
			
	
	
}
?>

    </div>
    
<!-- middle ends here-->
<?php include 'footer.php'; ?>
 </div><!--Container Ends-->
</body>
</html>
