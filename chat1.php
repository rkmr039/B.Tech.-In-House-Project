<!doctype html>
<?php include 'db.php'; ?>
<html>
<head>
<title>Chat Window</title>
<link rel="stylesheet" type="text/css" href="css/chat_style.css" media="all"/>
<script>
  function send_msg()
  {
	var req = new XMLHttpRequest();
    req.onreadystatechange = function ()
	{
		if(req.readyState == 4 && req.status == 200)
		{
			document.getElementById('chat').innerHTML = req.responseText;
		}
	}
  req.open('GET','chat2.php',true);
  req.send();
  }
  setInterval(function(){send_msg()},1000);
</script>


</head>



<body onload="send_msg();">
<div id="container">
<div id="chat_box">
     <div id="chat"></div>
    </div>
  <form action=" " method="post" style=" ">
      <!--<input type="text" name="name" placeholder="Name"> -->
      <textarea name="msg" placeholder="Message"></textarea>
      <input type="submit" name="submit" value="Send">
    </form>
    
  
	
	<?php 
//	include 'db.php';
	session_start();
   //$_SESSION['username'];
	if(isset($_POST['submit']) && isset($_GET['did']))
	{
		$_SESSION['id']=$_GET['did'];
        $var=$_SESSION['username'];
		$msg = $_POST['msg'];
		
		$con=mysql_connect("localhost","root","");
mysql_select_db("registration",$con);
$sql="INSERT INTO chat(uname,did,msg)VALUES('$var','$_GET[did]','$msg')";
		
mysql_query($sql,$con);
	}
	
   ?>
  </div>  
</body>
</html>
