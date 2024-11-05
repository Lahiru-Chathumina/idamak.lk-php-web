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
	$aid=$_REQUEST["aid"];
	$sql=" SELECT * FROM advertisement INNER JOIN images ON advertisement.aid=images.aid WHERE advertisement.aid='$aid' ";
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()) { ?>
	<!-- Main Area -->
	<div class="container mt-4 bg-white rounded advert">
		<div class="row">
			<!-- Left -->
			<div class="col-sm-7 py-3">
				<h1 class=""><?php echo $row["title"]; ?></h1>
				<p>Posted on <?php echo $row["date_time"]; ?> | <?php echo $row["city"]; ?>, Sri lanka</p>

				<!-- Image Carousel -->
				<div>
					<?php include 'carousel.php'; ?>
				</div>

				<p class="price f-cl1">Rs <?php echo number_format($row["price"]); ?>/-</p>
				<p>
					Area: <b><?php echo $row["city"]; ?>, Sri Lanka</b> <br>
					Bedroom: <?php echo $row["bed"]; ?> | Bathroom: <?php echo $row["bath"]; ?><br>
					Land size: <?php echo $row["size"]; ?> perches<br>
				</p>
				<p>
					<b>Description</b><br>
					<span class="desc"><?php echo $row["description"]; ?></span>
				</p>

			</div>
			<!-- Left End-->.

			<!-- Right -->
			<div class="col-sm-4 py-3 pt-5 ">
				<div class="border p-3 text-center sticky-top">
					<h2>Contact Advertiser</h2>
					<p class="tel"><i class="fa fa-phone"></i> <?php echo $row["tel"]; ?></p>
				</div>
			</div>
			<!-- Right End-->

		</div>
	</div>
	<!-- Main Area End-->
	<?php } ?>

	<!-- Footer file -->
	<?php include '../library/footer.php'; ?>
</body>
</html>