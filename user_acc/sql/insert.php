<?php 
// DB CONN
include '../../library/db_conn.php';
session_start();

//Data
$uid=$_SESSION["uid"];
$title=$_REQUEST["title"];
$city=$_REQUEST["city"];
$size=$_REQUEST["size"];
$bed=$_REQUEST["bed"];
$bath=$_REQUEST["bath"];
$description=$_REQUEST["description"];
$price=$_REQUEST["price"];
$tel=$_REQUEST["tel"];
$date_time=date('Y-m-d H:i:s');

//INSERT TO DB
$sql="INSERT INTO advertisement(uid,title,city,size,bed,bath,description,price,tel,date_time) VALUES('$uid','$title','$city','$size','$bed','$bath','$description','$price','$tel','$date_time')";
if ($conn->query($sql) === TRUE) {} else { echo "Error: " . $sql . "<br>" . $conn->error; }

//Find aid
$sql=" SELECT * FROM advertisement WHERE uid='$uid' AND title='$title' AND date_time='$date_time' ";
$result = $conn->query($sql);
while($row = $result->fetch_assoc())
{
	$aid=$row["aid"];
}

//Insert Image table row
$sql="INSERT INTO images(aid) VALUES('$aid')";
if ($conn->query($sql) === TRUE) {} else { echo "Error: " . $sql . "<br>" . $conn->error; }

//Images
for($i=1;$i<=5;$i++)
{
	$img="img".$i;
	$temp=$_FILES["$img"]["tmp_name"];

	if($temp!="")
	{
		$name_x=$_FILES["$img"]["name"];
		$name="pic_".date('YmdHis')."_".rand(10,999999)."_".$name_x;
		$destination="../../images/uploads/".$name;
		move_uploaded_file($temp, $destination);
		$sql=" UPDATE images SET $img='$name' WHERE aid='$aid' ";
		if ($conn->query($sql) === TRUE) {} else { echo "Error: " . $sql . "<br>" . $conn->error; }
	}
}

header("Location: ../");

?>