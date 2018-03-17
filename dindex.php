<?php include('dserver.php'); 
if(empty($_SESSION['dname'])){
	header('location: dlogin.php');
} 
?>
<!DOCTYPE html>
<html>
<head>
<title>user registration system using php and my sql</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
<h2>Home Page</h2>
</div>
  <?php if(isset($_SESSION["dname"])): ?>
    <p>Welcome<strong><?php echo $_SESSION['dname']; ?></strong></p>
	<p><a href="dlogin.php?logout='1'" style="color:red;">Logout</a></p>
	<p><a href="dprofile.php" style="color:blue;">My Details</a></p>
  <?php endif ?>
</div>
</body>
</html>