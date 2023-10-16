<?php

$sql = "SELECT * FROM Category";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_all($result);

?>

<footer class="ftco-footer ftco-section img">
  <div class="overlay"></div>
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">About Us</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
        <div class="ftco-footer-widget mb-4 ml-md-4">
          <h2 class="ftco-heading-2">Category</h2>
          <ul class="list-unstyled">
            <?php for ($i = 0; $i < count($row); $i++) { ?>
              <li><a href="<?= urlOf('pages/menu.php') ?>" class="py-2 d-block"><?= $row[$i][1] ?></a></li>
            <?php } ?>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Have a Questions?</h2>
          <div class="block-23 mb-3">
            <ul>
              <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
              <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
              <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- jQuery (Necessary for All JavaScript Plugins) -->
<script src="<?= urlOf('assets/js/jquery/jquery-2.2.4.min.js') ?>"></script>
<script src="<?= urlOf('assets/js/jquery.min.js') ?>"></script>
<script src="<?= urlOf('assets/js/jquery-migrate-3.0.1.min.js') ?>"></script>
<script src="<?= urlOf('assets/js/popper.min.js') ?>"></script>
<script src="<?= urlOf('assets/js/bootstrap.min.js') ?>"></script>
<script src="<?= urlOf('assets/js/jquery.easing.1.3.js') ?>"></script>
<script src="<?= urlOf('assets/js/jquery.waypoints.min.js') ?>"></script>
<script src="<?= urlOf('assets/js/jquery.stellar.min.js') ?>"></script>
<script src="<?= urlOf('assets/js/owl.carousel.min.js') ?>"></script>
<script src="<?= urlOf('assets/js/jquery.magnific-popup.min.js') ?>"></script>
<script src="<?= urlOf('assets/js/aos.js') ?>"></script>
<script src="<?= urlOf('assets/js/jquery.animateNumber.min.js') ?>"></script>
<script src="<?= urlOf('assets/js/bootstrap-datepicker.js') ?>"></script>
<script src="<?= urlOf('assets/js/jquery.timepicker.min.js') ?>"></script>
<script src="<?= urlOf('assets/js/scrollax.min.js') ?>"></script>
<script src="<?= urlOf('assets/js/main.js') ?>"></script>