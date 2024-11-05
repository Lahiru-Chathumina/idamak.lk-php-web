<!DOCTYPE html>
<html>
<head>
	<title></title>

	<!-- Head file -->
	<?php include '../library/head.php'; ?>
</head>
<body>
	<?php include 'filters.php'; ?>
	
	<!-- Navbar file -->
	<?php include '../library/nav.php'; ?>
	
	<!-- Main Area -->
	<div class="container mt-4 bg-white rounded">
		<div class="row">
			<!-- Filters (Left) -->
			<div class="col-sm-4 col-lg-3 py-3">
				<p class="text-1"><i class="fa fa-search"></i> Filter your result</p>
				<hr>
				<form action="">
					<div class="border-bottom pb-3">
						<label class="text-label">Sort results by</label>
						<select name="sort" class="form-select form-select-sm">
							<option value="1" <?php if($sort_x=="1"){echo "selected";} ?>>Date : Newest on top</option>
							<option value="2" <?php if($sort_x=="2"){echo "selected";} ?>>Date : Oldest on top</option>
							<option value="3" <?php if($sort_x=="3"){echo "selected";} ?>>Price : Highest on top</option>
							<option value="4" <?php if($sort_x=="4"){echo "selected";} ?>>Price : Lowest on top</option>
						</select>
					</div>
					<div class="border-bottom py-3">
						<label class="text-label">Area</label>
						<input type="text" name="city" class="form-control form-control-sm" placeholder="Enter area" value="<?php echo $city; ?>">
					</div>
					<div class="border-bottom py-3">
						<label class="text-label">Land Size</label>
						<input type="number" name="min_size" class="form-control form-control-sm" placeholder="Enter minimum size" value="<?php echo $min; ?>">
						<input type="number" name="max_size" class="form-control form-control-sm" placeholder="Enter maximum size" value="<?php echo $max; ?>">
					</div>
					<div class="border-bottom py-3">
						<input type="submit" name="" class="btn btn-warning w-100 btn-sm">
					</div>
				</form>
			</div>
			<!-- Filters (Left) End-->

			<!-- Adds (Right) -->
			<div class="col-sm-8 col-lg-9 py-3">
				<p class="text-1"><i class="fa fa-search"></i> Properties for Sale in Sri Lanka</p>
				<hr>
				<!-- Advertisement -->
				<?php
				$sql=" SELECT * FROM advertisement INNER JOIN images ON advertisement.aid=images.aid WHERE status='1' {$city_filter} {$min_size} {$max_size} {$search_fil} {$sort} ";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc()) { ?>
				<div class="mb-4 p-3 add-div">
					<div class="row">
						<div class="col-sm-4">
							<!-- Image -->
							<a href="../advert/?aid=<?php echo $row["aid"]; ?>"><img src="../images/uploads/<?php echo $row["img1"]; ?>" class="img-fluid add-img"></a>
						</div>
						<div class="col-sm-8">
							<!-- Details -->
							<div>
								<a href="../advert/?aid=<?php echo $row["aid"]; ?>"><h1 class="add-text1"><?php echo $row["title"]; ?></h1></a>
								<p class="add-text2">Bedrooms: <?php echo $row["bed"]; ?> | Bathrooms: <?php echo $row["bath"]; ?></p>
								<p class="add-text3"><?php echo $row["city"]; ?>, Sri Lanka</p>
								<p class="add-text4 f-cl1">Rs <?php echo number_format($row["price"]); ?>/-</p>
							</div>
							<div class="text-end">
								<a href="../advert/?aid=<?php echo $row["aid"]; ?>" class="btn btn-sm btn-warning text-white">View More</a>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
				<!-- Advertisement End-->
			</div>
			<!-- Adds (Right) End-->
		</div>
		
	</div>
	<!-- Main Area End-->


	<!-- Footer file -->
	<?php include '../library/footer.php'; ?>
</body>
</html>