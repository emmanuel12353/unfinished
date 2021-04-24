<?php
session_start();
header('login.php');
//$host = "localhost";
//$dbusername = "olubobokun98@gmail.com";
//$password = "emmanuel12353";
//$dbname = "admin_login1";
//$conn = new mysqli($host , $dbusername, $password, $dbname);

//$con = mysql_connect('localhost','olubobokun98@gmail.com','emmanuel12353');
//mysql_select_db($con, 'admin_log');
$email = $_POST['email'];
$psw = $_POST['psw'];
if(!empty($email) || !empty($psw))
{
    $host = "localhost";
$dbusername = "olubobokun98@gmail.com";
$password = "emmanuel12353";
$dbname = "admin_login1";
$conn = new mysqli($host, $dbusername, $password, $dbname);
if(mysql_connect_error()){
die('connect_Error'('.mysqli_connect_errno().').mysqli_connect_error());
} else {
    
    $sql = "INSERT into admin_login1(NAME, PASSWORD) values($email, $psw)";
if($conn->query($sql)) {

        echo "New record inserted successfully";
} else {
    echo "error: " .sql ."</br>". $conn->err;
}
 $conn->close();
} 
}
 else {
    echo"ALL FIELD ARE REQUIRED";
}

?>