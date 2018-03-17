<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("registration",$con);
$sql="DELETE FROM bookinghistory WHERE aid ='$_GET[aid]'";
if(mysql_query($sql,$con))
{
	header("refresh:2;url=viewbooking.php");
}
else
{
	echo "
<script type='text/javascript'>
alert('cannot cancel');
</script>

";
} 

?>