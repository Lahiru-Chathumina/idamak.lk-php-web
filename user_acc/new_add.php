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
		<a href="index.php" class="btn btn-dark">Go Back</a>

		<h1 class="mt-4">Post New Add</h1>
		<form action="sql/insert.php" method="POST" enctype="multipart/form-data">
		<div class="row">
			<div class="col-sm-6 mb-3">
				<label>Title</label>
				<input type="text" name="title" class="form-control">
			</div>
			<div class="col-sm-6 mb-3">
				<label>City</label>
				<input type="text" name="city" class="form-control">
			</div>
			<div class="col-sm-4 mb-3">
				<label>Size</label>
				<input type="text" name="size" class="form-control">
			</div>
			<div class="col-sm-4 mb-3">
				<label>Bed</label>
				<input type="text" name="bed" class="form-control">
			</div>
			<div class="col-sm-4 mb-3">
				<label>Bath</label>
				<input type="text" name="bath" class="form-control">
			</div>
			<div class="col-sm-4 mb-3">
				<label>Price</label>
				<input type="text" name="price" class="form-control">
			</div>
			<div class="col-sm-4 mb-3">
				<label>Telephone</label>
				<input type="text" name="tel" class="form-control">
			</div>
			<div class="col-sm-12 mb-3">
				<label>Description</label>
				<textarea name="description" class="form-control" style="height:200px;"></textarea>
			</div>
			<div class="col-sm-4 mb-3">
				<label>Image 1</label>
				<input type="file" name="img1" class="form-control">
			</div>
			<div class="col-sm-4 mb-3">
				<label>Image 2</label>
				<input type="file" name="img2" class="form-control">
			</div>
			<div class="col-sm-4 mb-3">
				<label>Image 3</label>
				<input type="file" name="img3" class="form-control">
			</div>
			<div class="col-sm-4 mb-3">
				<label>Image 4</label>
				<input type="file" name="img4" class="form-control">
			</div>
			<div class="col-sm-4 mb-3">
				<label>Image 5</label>
				<input type="file" name="img5" class="form-control">
			</div>
			<div class="col-sm-12 mb-3 pt-5">
				<input type="submit" class="btn btn-primary w-100">
			</div>
		</div>
		</form>
	</div>
	<!-- Main Area End-->

	<div style="height:400px;"></div>

	<!-- Footer file -->
	<?php include '../library/footer.php'; ?>
</body>
</html>

