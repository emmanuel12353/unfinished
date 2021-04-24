<?php
session_start();

$con = mysql_connect('localhost','olubobokun98','emmanuel12353');
mysql_select_db($con, 'admin_log');
$email = $_POST['email'];
$psw = $_POST['psw'];
$S = " SELECT * FROM admin_log1 where NAME = '$_email' && PASSWORD = '$psw'";
$result = mysql_query($con, $s);
$num  = msql_num_rows($result);
if($num == 1)
{
   herder('location:home.php')
}else{
    herder('location:login.php')
}




?>