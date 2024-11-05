<?php 
// DB CONN
include '../../library/db_conn.php';

//Data
$email=$_REQUEST["email"];
$pw=$_REQUEST["pw"];

$check=0;
$sql=" SELECT * FROM user WHERE email='$email' AND pw='$pw' ";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) 
{
	$check=1;
	$uid=$row["uid"];
	$name=$row["name"];
}

if($check==1)
{
	session_start();
	$_SESSION["uid"]=$uid;
	$_SESSION["uname"]=$name;
	header("Location: ../../user_acc/");
}
else
{
	echo "<script>";
  	echo "alert('Please login again!');";
  	echo "window.location.replace('../');";
  	echo "</script>";
}

?>