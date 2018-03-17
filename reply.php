<?php 
    session_start();
    $dname=$_SESSION['dname'];
    // connect to database
    $db = mysqli_connect("localhost", "root", "", "registration");
    if(isset($_POST['submit']))
    {
    	$username = mysql_real_escape_string($_POST['username']);
    	$comments = mysql_real_escape_string($_POST['comments']);
       $sql = "INSERT INTO reply1(username,dname,msg) VALUES('$username','$dname','$comments')";
       mysqli_query($db, $sql);
       header("refresh:2;url=dprofile.php");	 
    }
?>
<!doctype html>
<html>
    <?php include 'head.php';
    echo "<title>REPLY | SMART HEALTH ADVISOR</title>
    <link rel='stylesheet' href='css/viewfeedback.css' type='text/css'>";?>
<body>
  <div id="container"><!--Container Starts--> 
    <div id="header"> 
          <a href="home.php"><img src="img/icon.jpg" alt="SHA logo" id="logo5"></a>
          <img src="img/SHA_Plate2.PNG" alt="SHA_Plate" id="SHA">         
 <div id="navigation" >     
    <ul id="" style="margin-left:130px;">
        <li><a href="Home.php">Home</a></li>
    <li><p>Services</p></li>
    <ul>
        <li><a href="map2.php">Search Emergency Services</a></li>
        <li><a href="medicine.php">Search Medicines</a></li>
    </ul>     
     <li><p>Calculators</p> 
           <ul>
               <li><a href="Bmi.php">BMI Calculator</a></li>
               <li><a href="heart_rate.php">Target Heart Rate</a></li>
               <li><a href="fat.php">Body Fat Calculator</a></li>
               <li><a href="http://www.healthycalculators.com/blood-donation.php" target=_blank>Blood Donation Calculator</a></li>
               <li><a href="http://www.healthycalculators.com/">Others</a></li>    
          </ul>
       </li>
       <li><a href="dprofile.php">Profile</a></li> 
      <li><a href="logout.php">LogOut</a></li> 
 </ul>   
     </div> 
 </div> 
    
<!--====== header ends here====-->
  <div id="middle">
      <div id="form">
 <form method="post" action="reply.php">
 Pateint name:
<select name="username" required>
<?php
session_start();
$dname=$_SESSION['dname'];
$lin=mysqli_connect("localhost","root","");
mysqli_select_db($lin,"registration");
$res=mysqli_query($lin,"SELECT DISTINCT uname FROM chat WHERE did='$_GET[did]'");
//echo 'uname';
while($row=mysqli_fetch_array($res))
{ $row1=$row['uname'];

  ?>
<option>
  <?php echo $row1; ?>  
</option>
<?php
}
?>	
</select><br><br>
<!--<input type="text" name="username" class="textInput" placeholder="Username" required><br>-->
Message:<textarea name="comments" row="15" cols="40"></textarea><br>
<input type="submit" name="submit" value="Send">
  </form>
    </div>
    </div>        
<?php include 'footer.php'; ?> 
</div><!--Container Ends-->
</body>
</html>