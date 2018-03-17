<?php


$lin=mysqli_connect("localhost","root","");
mysqli_select_db($lin,"registration");
 $aid=$_GET['aid'];
 $query1=mysqli_query($lin,"SELECT * FROM bookinghistory WHERE aid='$aid'");
 while($row=mysqli_fetch_array($query1))
        {
            $path=$row['path'];
            header('content-Disposition:attachment;filename='.$path.'');
             header('content-type:appliction/octent-strem');
             header('content-length='.filesize($path));
             readfile($path);   
        }
?>
<!DOCTYPE html>
<html>
<head>
    <title>download file</title>
    
</head>
    <body>
        
    </body>
</html>