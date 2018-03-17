<?php 

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "registration";

  $db = new mysqli($servername,$username,$password,$db_name);

  
  function formateDate($date)
  {
	  return date('g:i a', strtotime($date));
  }

?>
