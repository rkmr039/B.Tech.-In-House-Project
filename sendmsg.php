<!DOCTYPE html>
<html>
<head>
<title>New Booking</title>
</head>
<body>
<h1>Search Doctor</h1><br>
<form method="post" action="">
Category:
<select name="category" required>
<?php
$lin=mysqli_connect("localhost","root","");
mysqli_select_db($lin,"registration");
$res=mysqli_query($lin,"SELECT DISTINCT category FROM doctor");
while($row=mysqli_fetch_array($res))
{
?>
<option><?php echo $row['category'];?></option>
<?php
}
?>	
</select><br><br>
<button type='submit' name='check'>Check</button><br>
    </form>
    <?php 
	session_start();
$var=$_SESSION['username'];
mysql_connect("localhost","root","");
mysql_select_db("registration");


if(isset($_POST['check']))
{
	
$var=$_SESSION['username'];

		$searchterm=mysql_real_escape_string(trim($_POST['category']));
	
$find=mysql_query("SELECT * FROM doctor WHERE category LIKE'$searchterm' ");
while($row=mysql_fetch_assoc($find))
{
	$diseases=$row['did'];
	$name1=$row['dname'];
	$name2=$row['dadress'];
	$name3=$row['dmobile'];
	$name4=$row['category'];
	$name5=$row['day'];
	$name6=$row['time'];
	//$name7=$row['Rating'];
	
		echo "<table cellspacing='50' cellpading='400' width='700' display:block>
		   <tr>
		   <th><u>Doctor Id</u></th>
		   <th><u>Name</u></th>
		   <th><u>Adress</u></th>
		   <th><u>Phone no.</u></th>
		   <th><u>Specalist</u></th>
		   <th><u>Days</u></th>
		   <th><u>Time</u></th>
           <th><u>Send Message</u></th>
		   
		   </tr>
		   <tr>
		   <td>$diseases</td>
		   <td>$name1</td>
		   <td>$name2</td>
		   <td>$name3</td>
		   <td>$name4</td>
		   <td>$name5</td>
		   <td>$name6</td>
           <td><a href=chat1.php?did=".$row['did'].">Send Message</a></td>
		  
		   </tr>
		     </table>";

}
}

   ?>
    </body>
    </html>