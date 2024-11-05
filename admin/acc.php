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
	<div class="container bg-white mt-4 p-3">
		<h1>Admin</h1>
		<table class="table">
			<tr>
				<th>Title</th>
				<th>City</th>
				<th>Date & Time</th>
				<th>Action</th>
			</tr>
			<?php 
			$sql=" SELECT * FROM advertisement ORDER BY aid DESC ";
			$result = $conn->query($sql);
			while($row = $result->fetch_assoc()) 
			{ ?>
			<tr>
				<td><?php echo $row["title"]; ?></td>
				<td><?php echo $row["city"]; ?></td>
				<td><?php echo $row["date_time"]; ?></td>
				<td>
					<?php if($row["status"]==0) {?>
					<a href="sql/update.php?status=1&aid=<?php echo $row["aid"]; ?>" class="btn btn-sm btn-info">Approve</a>
					<?php } ?>
					<?php if($row["status"]==1) {?>
					<a href="sql/update.php?status=0&aid=<?php echo $row["aid"]; ?>" class="btn btn-sm btn-dark">Disapprove</a>
					<?php } ?>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
	<!-- Main Area End-->

	<div style="height:400px;"></div>

	<!-- Footer file -->
	<?php include '../library/footer.php'; ?>
</body>
</html>