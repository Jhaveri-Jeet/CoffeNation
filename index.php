<?php
require './includes/config.php';
require './includes/header.php';

$query = "SELECT * FROM Products ORDER BY RAND() LIMIT 3";
$result = mysqli_query($connection, $query);
$product = mysqli_fetch_all($result);

$tablequery = "SELECT * FROM Tables WHERE Status = 'NotOccupied'";
$tableResult = mysqli_query($connection, $tablequery);
$table = mysqli_fetch_all($tableResult);

?>

<section class="home-slider owl-carousel">
	<div class="slider-item" style="background-image: url(<?= urlOf('assets/images/bg_1.jpg)') ?>;">
		<div class="overlay"></div>
		<div class="container">
			<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

				<div class="col-md-8 col-sm-12 text-center ftco-animate">
					<span class="subheading">Welcome </span>
					<h1 class="mb-4">The Best Coffee Testing Experience</h1>
					<p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
					<a href="<?= urlOf('pages/menu.php') ?>" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
				</div>
			</div>
		</div>
	</div>

	<div class="slider-item" style="background-image: url(<?= urlOf('assets/images/bg_2.jpg') ?>);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

				<div class="col-md-8 col-sm-12 text-center ftco-animate">
					<span class="subheading">Welcome</span>
					<h1 class="mb-4">Amazing Taste &amp; Beautiful Place</h1>
					<p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
					<a href="<?= urlOf('pages/menu.php') ?>" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
				</div>

			</div>
		</div>
	</div>

	<div class="slider-item" style="background-image: url(<?= urlOf('assets/images/bg_3.jpg') ?>);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

				<div class="col-md-8 col-sm-12 text-center ftco-animate">
					<span class="subheading">Welcome</span>
					<h1 class="mb-4">Creamy Hot and Ready to Serve</h1>
					<p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
					<a href="<?= urlOf('pages/menu.php') ?>" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
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
	</div>
	</div>
</section>

<section class="ftco-about d-md-flex">
	<div class="one-half img" style="background-image: url('<?= urlOf('assets/images/about.jpg') ?>');"></div>
	<div class="one-half ftco-animate">
		<div class="overlap">
			<div class="heading-section ftco-animate ">
				<span class="subheading">Discover</span>
				<h2 class="mb-4">Our Story</h2>
			</div>
			<div>
				<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-services">
	<div class="container">
		<div class="row">
			<div class="col-md-4 ftco-animate">
				<div class="media d-block text-center block-6 services">
					<div class="icon d-flex justify-content-center align-items-center mb-5">
						<span class="flaticon-choices"></span>
					</div>
					<div class="media-body">
						<h3 class="heading">Easy to Order</h3>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 ftco-animate">
				<div class="media d-block text-center block-6 services">
					<div class="icon d-flex justify-content-center align-items-center mb-5">
						<span class="flaticon-delivery-truck"></span>
					</div>
					<div class="media-body">
						<h3 class="heading">Fastest Delivery</h3>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 ftco-animate">
				<div class="media d-block text-center block-6 services">
					<div class="icon d-flex justify-content-center align-items-center mb-5">
						<span class="flaticon-coffee-bean"></span>
					</div>
					<div class="media-body">
						<h3 class="heading">Quality Coffee</h3>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 pr-md-5">
				<div class="heading-section text-md-right ftco-animate">
					<span class="subheading">Discover</span>
					<h2 class="mb-4">Our Menu</h2>
					<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
					<p><a href="<?= urlOf('pages/menu.php') ?>" class="btn btn-primary btn-outline-primary px-4 py-3">View Full Menu</a></p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6">
						<div class="menu-entry">
							<a href="#" class="img" style="background-image: url(<?= urlOf('assets/images/menu-1.jpg') ?>);"></a>
						</div>
					</div>
					<div class="col-md-6">
						<div class="menu-entry mt-lg-4">
							<a href="#" class="img" style="background-image: url(<?= urlOf('assets/images/menu-2.jpg') ?>);"></a>
						</div>
					</div>
					<div class="col-md-6">
						<div class="menu-entry">
							<a href="#" class="img" style="background-image: url(<?= urlOf('assets/images/menu-3.jpg') ?>);"></a>
						</div>
					</div>
					<div class="col-md-6">
						<div class="menu-entry mt-lg-4">
							<a href="#" class="img" style="background-image: url(<?= urlOf('assets/images/menu-4.jpg') ?>);"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(<?= urlOf('assets/images/bg_2.jpg') ?>);" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10">
				<div class="row">
					<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
							<div class="text">
								<div class="icon"><span class="flaticon-coffee-cup"></span></div>
								<strong class="number" data-number="100">0</strong>
								<span>Coffee Branches</span>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
							<div class="text">
								<div class="icon"><span class="flaticon-coffee-cup"></span></div>
								<strong class="number" data-number="85">0</strong>
								<span>Number of Awards</span>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
							<div class="text">
								<div class="icon"><span class="flaticon-coffee-cup"></span></div>
								<strong class="number" data-number="10567">0</strong>
								<span>Happy Customer</span>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
							<div class="text">
								<div class="icon"><span class="flaticon-coffee-cup"></span></div>
								<strong class="number" data-number="900">0</strong>
								<span>Staff</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 heading-section ftco-animate text-center">
				<span class="subheading">Discover</span>
				<h2 class="mb-4">Best Coffee Sellers</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
			</div>
		</div>
		<div class="row">
			<?php for ($i = 0; $i < COUNT($product); $i++) { ?>
				<div class="col-md-4">
					<div class="menu-entry">
						<a href="<?= urlOf('pages/menu.php') ?>" class="img" style="background-image: url(<?= urlOf('admin/assets/uploads/productImage/') . $product[$i][5] ?>);"></a>
						<div class="text text-center pt-4">
							<h3><a href="#"><?= $product[$i][1] ?></a></h3>
							<p><?= $product[$i][2] ?></p>
							<p class="price"><span>₹ <?= $product[$i][3] ?></span></p>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>


</body>

</html>

<?php require "./includes/footer.php" ?>