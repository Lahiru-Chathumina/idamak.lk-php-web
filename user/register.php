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
			<h1 class="text-center" style="font-size:18pt;">Welcome! Please Register</h1>
			<hr>
			<form action="sql/insert.php" method="POST">
				<label>Enter Your Name</label>
				<input type="text" name="name" class="form-control mb-3" placeholder="" required>
				<label>Enter Your NIC/Passport</label>
				<input type="text" name="nic" class="form-control mb-3" placeholder="" required>
				<label>Enter Your Telephone</label>
				<input type="text" name="tel" class="form-control mb-3" placeholder="" required>
				<label>Enter Your Email</label>
				<input type="email" name="email" class="form-control mb-3" placeholder="name@gmail.com" required>
				<label>Enter Your Password</label>
				<input type="password" name="pw" class="form-control mb-3" placeholder="******" required>
				<input type="submit" class="btn btn-dark" value="Register">
				<a href="../user/" class="ms-3 text-warning">Already registered? Login here</a>
			</form>
		</div>
	</div>
	<!-- Main Area End-->

	<div style="height:400px;"></div>

	<!-- Footer file -->
	<?php include '../library/footer.php'; ?>
</body>
</html>