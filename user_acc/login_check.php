<?php
	if(!isset($_SESSION["uid"]))
	{
		echo "<script>";
	  	echo "alert('Please login!');";
	  	echo "window.location.replace('../user/');";
	  	echo "</script>";
	}
?>