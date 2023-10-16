<?php

include('../../../includes/config.php');

$id = $_GET['id'];

$deleteReservation = "DELETE FROM `Reservations` WHERE `id` = $id";
mysqli_query($connection, $deleteReservation);

mysqli_close($connection);

Header("Location: ../../pages/allRequest.php");
