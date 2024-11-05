<?php 
// DB CONN
include '../../library/db_conn.php';

$aid=$_REQUEST["aid"];
$status=$_REQUEST["status"];

$sql="UPDATE advertisement SET status='$status' WHERE aid='$aid' ";
if ($conn->query($sql) === TRUE) {header("Location: ../acc.php");} 
else { echo "Error: " . $sql . "<br>" . $conn->error; }

?>