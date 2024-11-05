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

	<!-- Main Area -->
	<div class="container col-sm-4 mt-4">
		<div class="bg-white rounded p-3">
			<h1 class="text-center" style="font-size:18pt;">Admin Login</h1>
			<hr>
			<form action="acc.php">
				<label>Enter Admin Username</label>
				<input type="email" name="email" class="form-control mb-3" placeholder="name@gmail.com">
				<label>Enter Admin Password</label>
				<input type="password" name="pw" class="form-control mb-3" placeholder="******">
				<input type="submit" class="btn btn-success" value="Login">
			</form>
		</div>
	</div>
	<!-- Main Area End-->

	<div style="height:400px;"></div>

	<!-- Footer file -->
	<?php include '../library/footer.php'; ?>
</body>
</html>