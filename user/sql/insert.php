<?php 
// DB CONN
include '../../library/db_conn.php';

//Data
$name=$_REQUEST["name"];
$nic=$_REQUEST["nic"];
$tel=$_REQUEST["tel"];
$email=$_REQUEST["email"];
$pw=$_REQUEST["pw"];
$date_time=date('Y-m-d H:i:s');

//INSERT TO DB
$sql="INSERT INTO user(name,nic,tel,email,pw,date_time) VALUES('$name','$nic','$tel','$email','$pw','$date_time')";
if ($conn->query($sql) === TRUE) {
  echo "<script>";
  echo "alert('Registration success. Please login!');";
  echo "window.location.replace('../');";
  echo "</script>";
} else {
  echo "<script>";
  echo "alert('Error!');";
  echo "window.location.replace('../register.php');";
  echo "</script>";
}




?>