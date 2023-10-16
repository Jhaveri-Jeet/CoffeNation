<?php

require '../includes/config.php';

require pathOf('includes/header.php');

$sql = "SELECT * FROM Products";
$result = mysqli_query($connection, $sql);
$data = mysqli_fetch_all($result);

$tablequery = "SELECT * FROM Tables WHERE Status = 'NotOccupied'";
$tableResult = mysqli_query($connection, $tablequery);
$table = mysqli_fetch_all($tableResult);
?>

<section class="home-slider owl-carousel">

	<div class="slider-item" style="background-image: url(<?= urlOf('assets/images/bg_3.jpg') ?>);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row slider-text justify-content-center align-items-center">

				<div class="col-md-7 col-sm-12 text-center ftco-animate">
					<h1 class="mb-3 mt-5 bread">Our Menu</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="<?= urlOf('index.php') ?>">Home</a></span> <span>Menu</span></p>
				</div>

			</div>
		</div>
	</div>
</section>

<section class="ftco-intro">
	<div class="container-wrap">
		<div class="wrap d-md-flex align-items-xl-end">
			<div class="info">
				<div class="row no-gutters">
					<div class="col-md-4 d-flex ftco-animate">
						<div class="icon"><span class="icon-phone"></span></div>
						<div class="text">
							<h3>000 (123) 456 7890</h3>
							<p>A small river named Duden flows by their place and supplies.</p>
						</div>
					</div>
					<div class="col-md-4 d-flex ftco-animate">
						<div class="icon"><span class="icon-my_location"></span></div>
						<div class="text">
							<h3>198 West 21th Street</h3>
							<p> 203 Fake St. Mountain View, San Francisco, California, USA</p>
						</div>
					</div>
					<div class="col-md-4 d-flex ftco-animate">
						<div class="icon"><span class="icon-clock-o"></span></div>
						<div class="text">
							<h3>Open Monday-Friday</h3>
							<p>8:00am - 9:00pm</p>
						</div>
					</div>
				</div>
			</div>
			<?php if (isset($_SESSION['name'])) {  ?>
				<div class="book p-4">
					<h3>Book a Table</h3>
					<form action="<?= urlOf('assets/api/bookTable.php') ?>" method="post" class="appointment-form">
						<div class="d-md-flex">
							<div class="form-group">
								<div class="input-wrap">
									<input type="date" class="form-control" name="date">
									<input type="hidden" value="<?= $_SESSION['id'] ?>" name="id">
								</div>
							</div>
							<div class="form-group ml-md-4">
								<select class="form-control" name="tableNumber">
									<?php for ($i = 0; $i < COUNT($table); $i++) { ?>
										<option value="<?= $table[$i][0] ?>" style="color: black;"><?= $table[$i][1] ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="d-md-flex">
							<div class="form-group ml-md-4">
								<input type="submit" value="Reserve" class="btn btn-white py-3 px-4">
							</div>
						</div>
					</form>
				</div>
			<?php } ?>
		</div>
	</div>
</section>

<section class="ftco-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mb-5 pb-3">
				<h3 class="mb-5 heading-pricing ftco-animate">Menu</h3>
				<?php for ($i = 0; $i < COUNT($data); $i++) { ?>
					<div class="pricing-entry d-flex ftco-animate">
						<div class="img" style="background-image: url(<?= urlOf('admin/assets/uploads/productImage/') . $data[$i][5] ?>"></div>
						<div class="desc pl-3">
							<div class="d-flex text align-items-center">
								<h3><span><?= $data[$i][1] ?></span></h3>
								<span class="price">₹ <?= $data[$i][3] ?></span>
							</div>
							<div class="d-block">
								<p><?= $data[$i][2] ?></p>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
</body>

</html>

<?php require "../includes/footer.php" ?>