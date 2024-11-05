<!DOCTYPE html>
<html>
<head>
	<title></title>

	<!-- Head file -->
	<?php include '../library/head.php'; ?>
</head>
<body>
	<!-- Navbar file -->
	<?php include '../library/nav.php'; ?>

	<?php
		include 'login_check.php';
		$uid=$_SESSION["uid"];
		include '../library/db_conn.php';
	?>

	<!-- Main Area -->
	<div class="container bg-white mt-4 p-3">
		<p style="font-size:22pt;">Welcome! <?php echo $_SESSION["uname"]; ?></p>
		<a href="new_add.php" class="btn btn-dark">Post New Add</a>
	</div>
	<!-- Main Area End-->

	<div style="height:400px;"></div>

	<!-- Footer file -->
	<?php include '../library/footer.php'; ?>
</body>
</html>

