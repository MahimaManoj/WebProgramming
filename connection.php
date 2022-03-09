<?php
$mysql_host="localhost";
$mysql_user="root";
$mysql_password="";

$conn=mysqli_connect($mysql_host,$mysql_user,$mysql_password);

$result=mysqli_select_db($conn,'student');
if($result==TRUE)
{
echo "Connection Successfull";
}
else
{
echo "Connection Failed";
}
?>