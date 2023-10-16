<!DOCTYPE html>
<html lang="en">

<head>
  <title>CoffeeNation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="shortcut icon" href="<?= urlOf('assets/images/favicon.png') ?>" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

  <link rel="stylesheet" href="<?= urlOf('assets/css/open-iconic-bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?= urlOf('assets/css/animate.css') ?>">

  <link rel="stylesheet" href="<?= urlOf('assets /css/owl.carousel.min.css') ?>">
  <link rel="stylesheet" href="<?= urlOf('assets/css/owl.theme.default.min.css') ?>">
  <link rel="stylesheet" href="<?= urlOf('assets/css/magnific-popup.css') ?>">

  <link rel="stylesheet" href="<?= urlOf('assets/css/aos.css') ?>">

  <link rel="stylesheet" href="<?= urlOf('assets/css/ionicons.min.css') ?>">

  <link rel="stylesheet" href="<?= urlOf('assets/css/bootstrap-datepicker.css') ?>">
  <link rel="stylesheet" href="<?= urlOf('assets/css/jquery.timepicker.css') ?>">


  <link rel="stylesheet" href="<?= urlOf('assets/css/flaticon.css') ?>">
  <link rel="stylesheet" href="<?= urlOf('assets/css/icomoon.css') ?>">
  <link rel="stylesheet" href="<?= urlOf('assets/css/style.css') ?>">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php">Coffee<small>Nation</small></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="<?= urlOf('index.php') ?> " class="nav-link">Home</a></li>
          <li class="nav-item"><a href="<?= urlOf('pages/menu.php') ?>" class="nav-link">Menu</a></li>
          <?php if (isset($_SESSION['name'])) { ?>
            <li class="nav-item"><a href="<?= urlOf('pages/bookatable.php') ?>" class="nav-link">Check-Your Table</a></li>
          <?php } ?>
          <li class="nav-item"><a href="<?= urlOf('pages/about.php') ?>" class="nav-link">About</a></li>
          <?php if (!isset($_SESSION['name'])) { ?>
            <li class="nav-item"><a href="<?= urlOf('pages/login.php') ?>" class="nav-link">Log In</a></li>
          <?php } else {  ?>
            <li class="nav-item"><a href="<?= urlOf('assets/api/logout.php') ?>" class="nav-link">Log Out</a></li>
          <?php }  ?>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->